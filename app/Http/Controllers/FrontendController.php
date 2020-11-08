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
use App\User;
use Auth, Hash, Validator, Redirect;
use App\Country;
use App\Order;
use App\OrderDetail;
use Session;
class FrontendController extends Controller
{
    public function index()
    {
        $product = Product::with('category')->with('subcategory')
            ->get();
        $banner = Banner::all();
        $addons = Addons::all();
        $brand = Brand::all();
        return view('frontend.index', compact('product', 'banner', 'addons', 'brand'));
    }
    public function getProducts()
    {
        $products = Product::with('category')->with('subcategory')
            ->paginate(9);
        return view('frontend.products', compact('products'));
    }
    public function filterSubcat($id)
    {
        $products = Product::where('products.subcategory_id', $id)->paginate(9);
        return view('frontend.products', compact('products'));
    }
    public function filterCat($id)
    {
        $products = Product::where('products.category_id', $id)->paginate(9);
        return view('frontend.products', compact('products'));
    }
    public function getCategory()
    {
        $category = Category::with('subcategories')->get();
        return $category;
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function cart()
    {
        $carts = Cart::with('product')->where('carts.user_id', Auth::user()
            ->id)
            ->get();
        return view('frontend.cart', compact('carts'));
    }
    public function product_details($id)
    {
        $product = Product::with('stocks')->where('products.id', $id)->first();
        // echo "<pre>";
        // print_r($product->first());
        // exit;
        return view('frontend.product_details', compact('product'));
    }
    public function add_to_cart()
    {
        return view('frontend.add_to_cart');
    }
    public function login_signup()
    {
        return view('frontend.login_signup');
    }
    public function add_to_wishlist(Request $request)
    {
        $product_id = $request->id;
        $product = Wishlist::where('user_id', Auth::user()->id)
            ->where('product_id', $request->id)
            ->first();
        // echo "<pre>";
        // print_r($product);
        // exit;
        if (!empty($product))
        {
            return Response()->json(['status' => 412, 'msg' => 'Already Exist in Wishlist']);
        }
        else
        {
            $wishlist = new Wishlist();
            $wishlist->user_id = Auth::user()->id;
            $wishlist->product_id = $request->id;
            $wishlist->save();
            return Response()
                ->json(['status' => 200, 'msg' => 'Successfully added']);
        }
    }
    public function add_cart(Request $request)
    {
        $product = Cart::where('user_id', Auth::user()->id)
            ->where('product_id', $request->id)
            ->first();
        if (!empty($product))
        {
            return Response()->json(['status' => 412, 'msg' => 'Already Exist in Cart']);
        }
        else
        {
            $cart = new Cart();
            $cart->user_id = Auth::user()->id;
            $cart->product_id = $request->product_id;
            $cart->variation = $request->variation;
            $cart->price = $request->price;
            $cart->tax = $request->tax;
            $cart->shipping_cost = $request->shipping_cost;
            $cart->quantity = 1;
            $cart->save();
            return Response()
                ->json(['status' => 200, 'msg' => 'Successfully added']);
        }
    }
    public function update_cart(Request $request)
    {
        $data = $request->all();
        if ($request->quantity == 0)
        {
            $cart = Cart::find($request->id);
            $cart->delete();
        }
        else
        {
            $cart = Cart::find($request->id);
            $cart->quantity = $request->quantity;
            // $cart->price = ($cart->price * $request->quantity);
            $cart->save();
            $data['quantity'] = $request->quantity;
            $data['total'] = ($cart->price * $request->quantity);
        }
        return Response()
            ->json(['status' => 200, 'data' => $data]);
    }
    public function checkout_product()
    {
        $cart = Cart::with('product')->where('carts.user_id', Auth::user()
            ->id)
            ->get();
            if(count($cart)<1){
                return redirect()->route('userhome.products')->with('error','Sorry No data in cart to checkout');
            }
        return view('frontend.checkout', compact('cart'));
    }
    public function login()
    {
        return view('frontend.user_login');
    }
    public function login_check(Request $request)
    {
        $data = $request->all();
        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'user_type' => 'customer']))
        {
            return redirect()->route('userhome');
        }
        else
        {
            return redirect()
                ->route('userhome.login')
                ->with('error', 'Invalid Login Email or Password');
        }
    }
    function remove_cart(Request $request)
    {
        $cart = Cart::find($request->id);
        $cart->delete();
        return Response()
            ->json(['status' => 200, 'id' => $request->id]);
    }
    function logout()
    {
        Auth::logout();
        return redirect()
            ->route('userhome');
    }

    function register(Request $request)
    {
        $validator = Validator::make($request->all() , ['email' => 'unique:users|required', 'password' => 'required']);

        if ($validator->fails())
        {
            return Redirect::route('userhome.login')
                ->withErrors($validator)->withInput();
        }
        else
        {
            $user = new User();
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->user_type = $request->user_type;
            $user->save();

            if (Auth::attempt(['email' => $request->email, 'password' => $request
                ->password]))
            {
                return redirect()
                    ->route('userhome');
            }
            else
            {
                return redirect()
                    ->back()
                    ->with('error', 'Something went wrong');
            }
        }
    }

    function wishlist_get()
    {
        $wishlist = Wishlist::with('product')->paginate(1);
        return view('frontend.wishlist', compact('wishlist'));
    }
    function wishlist_remove(Request $request)
    {
        $wishlist = Wishlist::find($request->id);
        $wishlist->delete();
        $wishlist_item_count = count(Wishlist::where('user_id', Auth::user()->id)
            ->get());
        return Response()
            ->json(['status' => 200, 'count' => $wishlist_item_count]);
    }

    function wishlist_to_cart(Request $request)
    {
        $wishlist = Wishlist::find($request->wishlist_id);
        // dd($request->all());
        $wishlist->delete();
        $cart_Exist = Cart::where('user_id', Auth::user()->id)
            ->where('product_id', $request->id)
            ->first();
        $wishlist_item_count = count(Wishlist::where('user_id', Auth::user()->id)
            ->get());
        if (!$cart_Exist)
        {
            $cart = new Cart();
            $cart->user_id = Auth::user()->id;
            $cart->product_id = $request->id;
            $cart->variation = $request->variation;
            $cart->price = $request->price;
            $cart->tax = $request->tax;
            $cart->shipping_cost = $request->shipping_cost;
            $cart->quantity = 1;
            $cart->save();
        }
        return Response()
            ->json(['status' => 200, 'count' => $wishlist_item_count]);
    }
    public function profile()
    {
        $user_id = Auth::user()->id;
        $user =  User::with('orders')->whereHas('orders', function($query){
            $query->where('user_id',Auth::user()->id);
        })->get();

        foreach ($user as $key => $value) {
            foreach($value['orders'] as $key1=>$value1){
            }
        }
        return view('frontend.userprofile', compact('user'));
    }
    function place_order(Request $request)
    {
        $request = (object)$request->all();

        $cart = Session::get('product_id');

        $order = new Order();
        $order->user_id = Auth::user()->id;
        if (isset($request->diff_address))
        {

            $order->shipping_address = $request->diff_address;
        }
        else
        {
            $order->shipping_address = $request->address;
        }
        $order->payment_type = '';
        $order->payment_status = '';
        $order->payment_details = '';
        $order->grand_total = $request->total;
        $order->date = Date(now());
        $order->viewed = '';
        $order->delivery_viewed = '';
        $order->coupon_discount = '';
        $order->Save();
        $order_id = $order->id;

        foreach($cart as $key=> $val){
            $products[$key] = Product::find($val->product_id)->first();
            $products[$key]['quantity'] = $val['quantity'];
        }
        foreach ($products as $value) {
            $order_details =  new OrderDetail();
            $order_details->price = $value->purchase_price;
            $order_details->variation = $value->variation;
            $order_details->product_id = $value->id;
            $order_details->seller_id = '';
            $order_details->order_id = $order_id;
            $order_details->tax = ($value->tax) ? ($value->tax):0 ;
            $order_details->shipping_cost = $value->shipping_cost;
            $order_details->quantity = $value->quantity;
            $order_details->payment_status = 'paid';
            $order_details->delivery_status = '';
            $order_details->shipping_type = '';
            $order_details->save();
        }
    
        $remove_Cart = Cart::where('user_id', Auth::user()->id)
            ->delete();
            Session::forget('product_id');
        if ($remove_Cart)
        {
            return redirect()->route('userhome.profile')
                ->with('success', 'success full ordered');
        }
        else
        {
            return redirect()
                ->route('userhome.profile')
                ->with('error', 'Something went wrong');
        }

    }
    function getCountry()
    {
        $data = Country::all();
        return $data;
    }
}

