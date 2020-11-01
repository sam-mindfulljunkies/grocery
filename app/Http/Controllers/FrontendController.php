<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Product;
Use App\Category;

class FrontendController extends Controller
{
    public function getProducts(){
    	$products = Product::with('category')->with('subcategory')->paginate(1);
    	return view('frontend.products',compact('products'));
    }

    public function getCategory(){
    	$category = Category::with('subcategories')->get();
    	return $category;

    }
}
