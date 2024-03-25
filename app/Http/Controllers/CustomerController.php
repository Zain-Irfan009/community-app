<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{

    public function customers(Request $request){
        $customers=Customer::where('shop_id',Auth::id())->newQuery();
        if($request->search){
            $customers=$customers->where('email', 'like', '%' . $request->search . '%');
        }
        $customers=$customers->paginate(20);

        $customers->appends($request->all);
        return view('customers',compact('customers'));
    }
    public function customer_profile($id){
        $customer=Customer::where('shop_id',Auth::id())
            ->where('id',$id)
            ->first();

        return view('customer_profile',compact('customer'));
    }
    public function customer_group($id){
        $customer=Customer::where('shop_id',Auth::id())
            ->where('id',$id)
            ->first();

        return view('customer_reviews',compact('customer'));
    }
    public function customer_group_details($id){
        $customer=Customer::where('shop_id',Auth::id())
            ->where('id',$id)//get customer id from group
            ->first();
        return view('customer_group_details',compact('customer'));
    }
    public function customer_join_group($id){
        $customer=Customer::where('shop_id',Auth::id())
            ->where('id',$id)
            ->first();

        return view('customer_post',compact('customer'));
    }
    public function customer_join_group_details($id){
        $customer=Customer::where('shop_id',Auth::id())
            ->where('id',$id)//get customer id from group
            ->first();
        return view('customer_group_details',compact('customer'));
    }
    public function people_follow($id){
        $customer=Customer::where('shop_id',Auth::id())
            ->where('id',$id)
            ->first();
        return view('customer_people_follow',compact('customer'));
    }
    public function chat($id){
        $customer=Customer::where('shop_id',Auth::id())
            ->where('id',$id)
            ->first();
        return view('customer_chat',compact('customer'));
    }
    public function SyncCustomers($next=null,$shop=null)
    {
        if($shop==null){
            $shop = Auth::user();
        }else{
            Auth::login($shop);
        }
//        dd($shop);
//        $customers = $customers['body']['products'];
//        dd($customers);

        try{
            $customers = $shop->api()->rest('GET', '/admin/customers.json', [
                'limit' => 250,
                'page_info' => $next
            ]);
//            dd($customers);
            foreach ($customers['body']['customers'] as $customer) {
                $this->CreateUpdateCustomer($customer, $shop->id);
            }
            if (isset($customers['link']['next'])) {

                $this->SyncCustomers($customers['link']['next'],$shop);
            }
        }catch (\Exception $exception){
//            dd($exception->getMessage());
        }


        return redirect(route('home'))->with('success','Customers Sync Successfully!');
//        return back()->with('success','Product Sync Successfully!');
    }
    public function CreateUpdateCustomer($customer,$shop_id){

        $customer=json_decode(json_encode($customer),FALSE);
        $c=Customer::where([
            'shop_id'=> $shop_id,
            'shopify_id'=>$customer->id
        ])->first();

        if ($c === null) {
            $c = new Customer();
            $c->shop_id = $shop_id;
            $c->shopify_id = $customer->id;
        }
        $c->first_name = $customer->first_name;
        $c->last_name = $customer->last_name;
        $c->email = $customer->email;
        $c->phone_no = $customer->phone;
        if (isset($customer->addresses[0])) {
            $c->address = json_encode($customer->addresses[0]);
        }
        $c->orders_count = $customer->orders_count;
        $c->total_spent = $customer->total_spent;
        $c->tags = $customer->tags;
        $c->currency = $customer->currency;
        $c->note = $customer->note;
        $c->save();

    }
}
