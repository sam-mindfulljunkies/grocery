<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Product;
Use App\Category;
use App\Banner;
use App\Addons;
use App\Brand;

class FrontendController extends Controller
{

	public function index(){
		$product = Product::with('category')->with('subcategory')->get();
		$banner = Banner::all();
		$addons = Addons::all();
		$brand = Brand::all();
    	return view('frontend.index',compact('product','banner','addons','brand'));
	}
    public function getProducts(){
    	$products = Product::with('category')->with('subcategory')->paginate(1);
    	return view('frontend.products',compact('products'));
    }

    public function getCategory(){
    	$category = Category::with('subcategories')->get();
    	return $category;

    }
}
