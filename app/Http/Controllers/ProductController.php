<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Osiset\BasicShopifyAPI\BasicShopifyAPI;
use Osiset\BasicShopifyAPI\Options;
use Osiset\BasicShopifyAPI\Session;

class ProductController extends Controller
{
    public function SyncProducts($next=null,$shop=null)
    {
        if($shop==null){
            $shop = Auth::user();
        }else{
            Auth::login($shop);
        }
//        dd($shop);
//        $products = $products['body']['products'];
//        dd($products);

        try{
            $products = $shop->api()->rest('GET', '/admin/products.json', [
                'limit' => 250,
                'page_info' => $next
            ]);
//            dd($products);
            foreach ($products['body']['products'] as $product) {
                $this->CreateUpdateProduct($product, $shop->id);
            }
            if (isset($products['link']['next'])) {

                $this->SyncProducts($products['link']['next'],$shop);
            }
        }catch (\Exception $exception){
//            dd($exception->getMessage());
        }


        return redirect(route('home'))->with('success','Product Sync Successfully!');
//        return back()->with('success','Product Sync Successfully!');
    }
    public function CreateUpdateProduct($product,$shop_id){

        $product=json_decode(json_encode($product),FALSE);
       /* $log=new Log();
        $log->message="Product - ".json_encode($product);
        $log->save();*/

        $p=Product::where([
            'shop_id'=> $shop_id,
            'shopify_id'=>$product->id
        ])->first();
        if ($p === null) {
            $p = new Product();
        }
        if ($product->images) {
            $image = $product->images[0]->src;
        } else {
            $image = '';
        }
        $p->shopify_id = $product->id;
        $p->shop_id = $shop_id;
        $p->title = $product->title;
        $p->description = $product->body_html;
        $p->handle = $product->handle;
        $p->vendor = $product->vendor;
        $p->type = $product->product_type;
        $p->featured_image = $image;
        $p->tags = $product->tags;
        $p->options = json_encode($product->options);
        $p->status = $product->status;
        $p->published_at = $product->published_at;

        $p->save();
        if (count($product->variants) >= 1) {
            $del_v = ProductVariant::where('shopify_product_id', $product->id)->delete();

            foreach ($product->variants as $variant) {
                $v = ProductVariant::where('shopify_id', $variant->id)->first();

                if ($v === null) {
                    $v = new ProductVariant();
                }
                $v->shop_id = $shop_id;
                $v->shopify_id = $variant->id;
                $v->shopify_product_id = $variant->product_id;
                $v->title = $variant->title;
                $v->option1 = $variant->option1;
                $v->option2 = $variant->option2;
                $v->option3 = $variant->option3;
                $v->sku = $variant->sku;
                $v->requires_shipping = $variant->requires_shipping;
                $v->fulfillment_service = $variant->fulfillment_service;
                $v->taxable = $variant->taxable;
                if (isset($product->images)){
                    foreach ($product->images as $image){
                        if (isset($variant->image_id)){
                            if ($image->id == $variant->image_id){
                                $v->image = $image->src;
                            }
                        }else{
                            $v->image = "";
                        }
                    }
                }
                $v->price = $variant->price;
                $v->compare_at_price = $variant->compare_at_price;
                $v->weight = $variant->weight;
                $v->grams = $variant->grams;
                $v->weight_unit = $variant->weight_unit;
                $v->inventory_item_id = $variant->inventory_item_id;
                $v->quantity = $variant->inventory_quantity;
                $v->save();
            }
        }


    }

}
