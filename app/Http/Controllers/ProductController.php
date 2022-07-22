<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
class ProductController extends Controller
{
    //
    function index(){
        $data=Product::all();
        return view('product',['product'=>$data]);
    }
    function detail($id){
        $data = Product::find($id);
        return view('detail',['product'=>$data]);
    }
    function search(Request $req){
        $data = Product::where('name','like','%'.$req->input('query').'%')->get();
        return view('search',['product'=>$data]);
    }
    function addToCart(Request $req){
        if($req->session()->has('customer')){
            $cart = new Cart;
            $cart->customer_id = $req->session()->get('customer')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
       
    }
    static function cartItem(){
        $customerId=Session::get('customer')['id'];
        return Cart::where('customer_id',$customerId)->count();
    }
    function cartlist(){
        $customerId=Session::get('customer')['id'];
        $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.customer_id',$customerId)
        ->select('products.*','cart.id as cart_id')
        ->get();
        return view('cartlist',['product'=>$products]);
    }
    function removeCart($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }
    function orderNow(){
        $customerId=Session::get('customer')['id'];
        $total = $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.customer_id',$customerId)
        ->sum('products.price');
        return view('ordernow',['total'=>$total]);
    }
    function orderPlace(Request $req){
         $customerId=Session::get('customer')['id'];
         $allCart = Cart::where('customer_id',$customerId)->get();
         foreach($allCart as $cart)
         {
            $order = new Order;
            $order->product_id=$cart['product_id'];
            $order->customer_id=$cart['customer_id'];
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->address=$req->address;
            $order->save();
            Cart::where('customer_id',$customerId)->delete();
         }
        $req->input();
        return redirect('/');
    }
    function myOrders(){
        $customerId=Session::get('customer')['id'];
        $orders = DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.customer_id',$customerId)
        ->get();
        return view('myorders',['orders'=>$orders]);
    }
}
