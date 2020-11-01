<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\ProductSize;

class DemoController extends Controller {
    /**
     * Custom functions for Demo APIs.
    */
    public function GetPage1Data() {
        // $cat = Category::all();
        // $cat = Category::find(1);
        // $prod = Product::create([
        //     'name' => 'Beige Double Fabric Wing Bed 6X5',
        //     'price' => 559,
        //     'description' => 'Heaven can wait, this Wing Bed makes for a divine sleep retreat. Plushly padded, the tall headboard is all the more striking tufted detailing and wings. Place the bed flush against the wall or float it in the middle of the room. Rent the luxury bed, it’s designed for elegance.',
        //     'category_id' => 1
        // ]);
        // $array = ['Pro_7_1.png', 'Pro_7_2.png', 'Pro_7_3.png'];
        // for($i=0; $i<count($array); $i++) {
        //     ProductGallery::create([
        //         'name' => $array[$i],
        //         'path' => 'storage/Product_Gallery/'.$array[$i],
        //         'product_id' => 7
        //     ]);
        // }
        // $pro = Product::find(6);
        // dd($pro->sizes);
        // ProductSize::create([
        //     'product_id' => 7,
        //     'size_id' => 9
        // ]);
    }

    public function GetAllCategories() {
        $categories = Category::all();
        return response()->json(['categories'=> $categories]);
    }

    public function GetAllProducts() {
        $products = [];
        $prods = Product::select('id', 'name', 'price')->get();
        /* foreach($prods as $pro) {
            $prods['image'] = $pro->images->first();
        } */
        return response()->json(['products'=> $prods]);
    }

    public function ProductDetails($id) {
        $product = Product::find($id);
        return response()->json(['product'=> $product]);
    }
}
