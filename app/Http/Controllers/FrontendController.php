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
    	$products = Product::with('category')->with('subcategory')->paginate(9);
    	return view('frontend.products',compact('products'));
    }
    public function filterSubcat($id){
        $products = Product::where('products.subcategory_id',$id)->paginate(9);
        return view('frontend.products',compact('products'));
    }
    public function filterCat($id){
        $products = Product::where('products.category_id',$id)->paginate(9);
        return view('frontend.products',compact('products'));
    }

    public function getCategory(){
    	$category = Category::with('subcategories')->get();
    	return $category;

    }
    public function about(){
     return view('frontend.about');       
    }
    public function contact(){
     return view('frontend.contact');

    }

    public function cart(){
     return view('frontend.cart');

    }
    public function product_details($id){
        $product = Product::with('stocks')->where('products.id',$id)->first();
        // echo "<pre>";
        // print_r($product->first());
        // exit;
     return view('frontend.product_details',compact('product'));

    }
    public function add_to_cart(){
     return view('frontend.add_to_cart');

    }
    public function login_signup(){
     return view('frontend.login_signup');

    }
}
