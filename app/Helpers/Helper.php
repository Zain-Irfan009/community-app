<?php

namespace App\Helpers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Osiset\BasicShopifyAPI\BasicShopifyAPI;
use Osiset\BasicShopifyAPI\Options;
use Osiset\BasicShopifyAPI\Session;

class Helper
{
    public static function apiClient($shop=null)
    {
        if ($shop == null) {
            $shop = auth()->user()->name;
        }
        $request = User::where('name', $shop)->first();
//        dd($request,$shop);
        // Create options for the API
        $options = new Options();
        $options->setVersion(env('SHOPIFY_API_VERSION'));

// Create the client and session
        $api = new BasicShopifyAPI($options);
        $api->setSession(new Session($shop, $request->password));
//        return $api->rest('GET','/admin/cart/1996242f8f5e91f3f1fa1f8d73f0a90a.json');
        return $api;

    }
}