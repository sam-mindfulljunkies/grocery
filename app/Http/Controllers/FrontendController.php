<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Product;
Use App\Category;
use App\Banner;
use App\Addons;
use App\Brand;
use App\Wishlist;
use App\Models\Cart;


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
        $carts  = Cart::with('product')->where('carts.user_id',1)->get();
     return view('frontend.cart',compact('carts'));

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

    public function add_to_wishlist(Request $request){
        $product_id = $request->id;
        $product = Wishlist::where('user_id',1)->where('product_id',$request->id)->first();
        // echo "<pre>";
        // print_r($product);
        // exit;
        if(!empty($product)){
            return Response()->json(['status'=> 412, 'msg'=>'Already Exist in Wishlist']);
        }else{
            $wishlist = new Wishlist();
            $wishlist->user_id = 1;
            $wishlist->product_id = $request->id;
            $wishlist->save();
            return Response()->json(['status'=> 200, 'msg'=>'Successfully added']);   
        }
    }

    public function add_cart(Request $request){
        $product = Cart::where('user_id',1)->where('product_id',$request->id)->first();
        if(!empty($product)){
            return Response()->json(['status'=> 412, 'msg'=>'Already Exist in Cart']);
        }else{
            $wishlist = new Cart();
            $wishlist->user_id = 1;
            $wishlist->product_id = $request->id;
            $wishlist->variation = $request->variation;
            $wishlist->price = $request->price;
            $wishlist->tax = $request->tax;
            $wishlist->shipping_cost = $request->shipping_cost;
            $wishlist->quantity = 1;
            $wishlist->save();
            return Response()->json(['status'=> 200, 'msg'=>'Successfully added']);   
        }
    }

    public function checkout_product(){
        return view('frontend.checkout');
    }   
}
