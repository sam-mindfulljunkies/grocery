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
use Session, DB;
use App\Models\Subscriber;
use App\Models\ProductStock;
use App\Models\Review;
use App\Models\Coupon,App\Models\CouponUsage;

class FrontendController extends Controller
{
    public function index()
    {
        $product = Product::with('category')->with('subcategory')
            ->get();
        $banner1 = Banner::where('published',1)->where('position',1)->get();
        $banner2 = Banner::where('published',1)->where('position',2)->get();
        $banner3 = Category::where('featured',1)->limit(2)->get();
        $addons = Addons::all();
        $brand = Brand::all();
        return view('frontend.index', compact('product', 'banner1', 'banner2','banner3' ,'brand'));
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
    public function filterbrand($id)
    {
        $products = Product::where('products.brand_id', $id)->paginate(9);
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
        $product_review = Review::where('product_id',$id)->get();
        // echo "<pre>";
        // print_r($product->first());
        // exit;
        $product_review = DB::table('reviews')->leftjoin('users','users.id','reviews.user_id')->select('*','reviews.id as id,','users.id as user_id')->get();
        return view('frontend.product_details', compact('product','product_review'));
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
            if(isset($request->qunatity)){
                $cart->quantity = $request->qunatity;
            }else{
                $cart->quantity = 1;
            }
            $cart->save();
            return Response()
                ->json(['status' => 200, 'msg' => 'Successfully added']);
        }
    }
    public function update_cart(Request $request)
    {
        if ($request->quantity == 0)
        {
            $carts = Cart::find($request->id);
            $carts->delete();
        }
        else
        {
            $carts = Cart::find($request->id);
            $carts->quantity = $request->quantity;
            $carts->save();
        }
        $carts = Cart::with('product')->get();
        return view('frontend.cartbox', compact('carts'))->render();
    }
    public function checkout_product()
    {
        $grand_total = Session::get('Grand_total');
        $cart = Cart::with('product')->where('carts.user_id', Auth::user()
            ->id)
            ->get();
        if (count($cart) < 1)
        {
            return redirect()->route('userhome.products')
                ->with('error', 'Sorry No data in cart to checkout');
        }
        return view('frontend.checkout', compact('cart','grand_total'));
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
        $carts = Cart::with('product')->get();
        return view('frontend.cartbox', compact('carts'))
            ->render();
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
        $user = DB::table('users')
        ->leftjoin('orders', 'users.id','=','orders.user_id')->select('*','orders.id as order_id','users.id as id')
        ->where('orders.user_id',Auth::user()->id)
          ->get();
         
            if(count($user) == 0){
                $user = User::find(Auth::user()->id)->get();
            }
            // dd($user);
        return view('frontend.userprofile', compact('user'));
    }
    function place_order(Request $request)
    {
        $request = (object)$request->all();
        $cart = Session::get('product_id');
        $grandtotal = 0;
    
        foreach ($cart as $key => $val)
        {
            $products[] = Product::find($val->product_id);
            $products[$key]['quantity'] = $val['quantity'];
            $products[$key]['purchase_price'] = $val->price;
        }
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->shipping_address = $request->address;
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

        foreach ($products as $key => $value)
        {
            $order_details = new OrderDetail();
            $order_details->price = $value->purchase_price;
            $order_details->variation = $value->variation;
            $order_details->product_id = $value->id;
            $order_details->seller_id = '';
            $order_details->order_id = $order_id;
            $order_details->tax = ($value->tax) ? ($value->tax) : 0;
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
    public function invoice($order_id)
    {
        $user = DB::table('users')->leftjoin('orders', 'orders.user_id', '=', 'users.id')
            ->leftjoin('order_details', 'order_details.order_id', '=', 'orders.id')
            ->leftjoin('products', 'products.id', '=', 'order_details.product_id')
            ->select('*', 'products.name as product_name', 'users.name as name','order_details.price as purchase_price')
            ->where('orders.user_id', Auth::user()
            ->id)
            ->where('orders.id', $order_id)->get();
        return view('frontend.invoice', compact('user'));
    }
    public function getbrands()
    {
        $brand = Brand::all();
        return $brand;
    }
    public function subscribe(Request $request){
        
        $subscribes =  Subscriber::where('email',$request->email)->first();
        if(!$subscribes){
            $subscribe = new Subscriber();
            $subscribe->email = $request->email;
            $subscribe->save();
        }
        return redirect()->back();
    }
    public function Search_product(Request $request){
        if(!empty($request->get('term'))){
            $search = $request->get('term');
         }
        if(!empty($search)){
         $products = Product::where('name','like','%'.$search.'%')->get();
        }
        if(!isset($products)){
            $products = array();
        }
        return Response()->json($products);
    }

    function size_change(Request $request){
        $id = $request->id;
        $size = $request->size;
        $products = ProductStock::where('product_id',$id)->where('variant','like','%'.$size.'%')->first();
        $product = Product::with('stocks')->where('id',$id)->first();
        $product->purchase_price = $products->price; 
        $product_review = DB::table('reviews')->leftjoin('users','users.id','reviews.user_id')->select('*','reviews.id as id,','users.id as user_id')->get();
        return view('frontend.productbox', compact('product','product_review'))->render();
    }
    function review_form(Request $request){
        $review =  new Review();
        $review->product_id = $request->product_id;
        $review->user_id = Auth::user()->id;
        $review->rating = 5;
        $review->comment = $request->messasge; 
        $review->save();
        return redirect()->back();
    }

    function apply_coupon(Request $request){
        if(Session::has('Grand_total')){
            $grand_total = Session::get('Grand_total');
        }
        $coupon = Coupon::where('code',$request->code)->first();
        $start_Date =  date('Y-m-d',strtotime($coupon->start_date));
        $end_Date =  date('Y-m-d',strtotime($coupon->end_date));
        $today =  date('Y-m-d') ;
        // $start_Date = '2020-10-25';
        // $end_Date = '2020-10-30';
        // $today = '2020-10-26';
        if(isset($coupon->id) &&($start_Date <= $today) && ($end_Date >= $today) ){
            $grand_total = $grand_total - $coupon->discount;
            $coupon_usages = CouponUsage::where('user_id',Auth::user()->id)->where('coupon_id',$coupon->id)->first();
            if(!$coupon_usages){
                $coupon_usage =  new CouponUsage();
            $coupon_usage->user_id  = Auth::user()->id;
            $coupon_usage->coupon_id  = $coupon->id;
            $coupon_usage->save();
            Session::put('Grand_total',$grand_total);
            }
        }
        $carts = Cart::with('product')->get();
        return view('frontend.cartbox', compact('carts'))->render();        
    }
}

