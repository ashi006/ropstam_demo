<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\ProductSize;
use App\Models\Feedback;

class DemoController extends Controller {
    /**
     * Custom functions for Demo APIs.
    */
    public function PopulateData() {
        // $cat = Category::all();
        // $cat = Category::find(1);
        // $prod = Product::create([
        //     'name' => 'Washing Machine Fully Automatic Front Load',
        //     'price' => 929,
        //     'description' => 'This 5L fully automatic machine will do your laundry in no time. Just sit back and watch your favorite movie and once you’re done, you’ll have fresh smelling clothes in no time.',
        //     'category_id' => 4
        // ]);
        // $array = ['Pro_8_1.png'];
        // for($i=0; $i<count($array); $i++) {
        //     ProductGallery::create([
        //         'name' => $array[$i],
        //         'path' => 'storage/Product_Gallery/'.$array[$i],
        //         'product_id' => 8
        //     ]);
        // }
        // $pro = Product::find(8);
        // dd($pro->sizes);
        // ProductSize::create([
        //     'name' => '6x5',
        //     'product_id' => 7,
        // ]);
    }

    public function GetPage1Data() {
        $categories = json_decode($this->GetAllCategories()->content());
        $products = json_decode($this->GetAllProducts()->content());
        return response()->json(['categories'=> $categories, 'products'=> $products]);
    }

    public function GetAllCategories() {
        $categories = Category::all();
        return response()->json($categories);
    }

    public function GetAllProducts() {
        $products = Product::select('id', 'name', 'price')->with('featuredImage')->orderBy('created_at', 'desc')->get();
        return response()->json($products);
    }

    public function ProductDetails($id) {
        $rating_count = Feedback::where('product_id', $id)->whereNotNull('rating')->count();
        $review_count = Feedback::where('product_id', $id)->whereNotNull('review')->count();
        $product = Product::with('gallery', 'sizes', 'feedbacks.user')->findOrFail($id);
        return response()->json(['product'=> $product, 'rating_count'=> $rating_count, 'review_count'=> $review_count]);
    }
}
