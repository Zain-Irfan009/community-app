<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


Auth::routes();
Route::get('/login', [App\Http\Controllers\AdminController::class, 'shop_login'])->name('shop.login');
Route::get('/logout', [App\Http\Controllers\AdminController::class, 'shop_logout'])->name('shop.logout');


Route::middleware(['auth.shopify'])->group(function() {


    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('home');
    Route::get('/products', [App\Http\Controllers\AdminController::class, 'products'])->name('products');
    Route::get('/product/{id}/view', [App\Http\Controllers\AdminController::class, 'product_view'])->name('product.view');
    Route::post('/product/update/{id}', [App\Http\Controllers\AdminController::class, 'product_update'])->name('product.update');
    Route::post('/product/update_all', [App\Http\Controllers\AdminController::class, 'product_update_all'])->name('product.update_all');
    Route::get('/sync/product', [App\Http\Controllers\ProductController::class, 'SyncProducts'])->name('sync_product');

    Route::get('/customers', [App\Http\Controllers\CustomerController::class, 'customers'])->name('customers');
    Route::get('/customer/{id}/view', [App\Http\Controllers\CustomerController::class, 'customer_profile'])->name('customer.view');
    Route::get('/customer/{id}/groups', [App\Http\Controllers\CustomerController::class, 'customer_group'])->name('customer.group');
    Route::get('/customer/group/{id}/details', [App\Http\Controllers\CustomerController::class, 'customer_group_details'])->name('customer.group.details');
    Route::get('/customer/{id}/join-groups', [App\Http\Controllers\CustomerController::class, 'customer_join_group'])->name('customer.join_group');
    Route::get('/customer/{id}/join-group/id/details', [App\Http\Controllers\CustomerController::class, 'customer_join_group_details'])->name('customer.join_group.details');
    Route::get('/customer/{id}/people-follow', [App\Http\Controllers\CustomerController::class, 'people_follow'])->name('customer.people_follow');
    Route::get('/customer/{id}/chat', [App\Http\Controllers\CustomerController::class, 'chat'])->name('customer.chat');

    Route::get('/groups', [App\Http\Controllers\AdminController::class, 'groups'])->name('groups');
    Route::get('/group/{id}/details', [App\Http\Controllers\AdminController::class, 'group_details'])->name('group.details');

    Route::post('group/img-store', [App\Http\Controllers\AdminController::class, 'store'])->name('dropzone.store');
    Route::post('save-group', [App\Http\Controllers\AdminController::class, 'SaveGroup'])->name('save.group');
    Route::get('delete-banner-img',[\App\Http\Controllers\AdminController::class,'deleteBannerImage'])->name('delete.banner-img');
    Route::get('delete-group/{id}',[\App\Http\Controllers\AdminController::class,'deleteGroup'])->name('delete.group');
    Route::post('update-group', [App\Http\Controllers\AdminController::class, 'UpdateGroup'])->name('update.group');



    Route::get('/posts', [App\Http\Controllers\AdminController::class, 'posts'])->name('posts');
    Route::post('post/img-store', [App\Http\Controllers\AdminController::class, 'PostImageStore'])->name('img.store.post');
    Route::get('/setting', [App\Http\Controllers\AdminController::class, 'setting'])->name('setting');

    Route::get('/sync/customer', [App\Http\Controllers\CustomerController::class, 'SyncCustomers'])->name('sync_customer');
    Route::get('/sync/orders', [App\Http\Controllers\AdminController::class, 'SyncOrders'])->name('sync_products');


    Route::get('test', function() {
//        $product=\App\Models\Product::with('has_variant')->where('shopify_id',7593957327048)->first();
//       $inventory_item_id= $product->has_variant[0]->inventory_item_id;
       $inventory_item_id=44955442774216;
        $inventory_item_id="gid://shopify/InventoryItem/".$inventory_item_id;
        $query = 'query {
  inventoryItem(id: "'.$inventory_item_id.'") {
    id
    tracked
    sku
    inventoryLevels(first: 1) {
      nodes {
        location {
          id
          name
        }
        quantities(names:["incoming"]){name quantity updatedAt}
        updatedAt
      }
    }
  }
}';

        $responce = \App\Helpers\Helper::apiClient()->graph($query);
        $responce=json_decode(json_encode($responce),false);
        if(!$responce->errors){
            $incomingInventory=$responce->body->data->inventoryItem->inventoryLevels->nodes[0]->quantities[0];
            $new_quantity=$incomingInventory->quantity;
        }
        dd($responce);
    });
});
