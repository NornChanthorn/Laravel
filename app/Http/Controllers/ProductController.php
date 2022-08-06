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
    function userindex(){
        $hello ="Panha";
        $data=Product::all();
        return view('product',['product'=>$data ,'hi'=>$hello]);
    }
    function detail($id){
        $data = Product::find($id);
        return view('detail',['product'=>$data]);
    }
    function search(Request $req){
        if($req->input('query')=="") {

            return view('search',['product'=>"No Result"]);
        }else {
          
            $data = Product::where('name','like','%'.$req->input('query').'%')->get();
            if($data->count()==0){
                return view('search',['product'=>"No Result"]);
            }
            return view('search',['product'=>$data]);
        }
       
        
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
        if($products->count()==0) {
            return view('cartlist',['product'=>"No order"]);
        }else {
          
            return view('cartlist',['product'=>$products]);
        }
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


    function allproduct(){
        $data= Product::all();
        return view('allProduct', ['product'=>$data]);
    }



    function showBracelet ()
    {
        $data = Product::where('category','like','%bracelet%')->get();

        return view('bracelet',['product'=>$data]);
        
    }

    function showNecklace ()
    {
        $data = Product::where('category','like','%necklace%')->get();
        return view("necklace",['product'=>$data]);
    }

    function showRing ()
    {
        $data = Product::where('category','like','%ring%')->get();
        return view("ring",['product'=>$data]);
    }

    function showOther ()
    {
        $data = Product::where('category','like','%other%')->get();
        return view("other",['product'=>$data]);
    }





    public function index()
    {
        $products = Product::All();
    
        return view('adminproducts.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    public function create()
    {
        return view('adminproducts.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category' => 'required',
            'description' => 'required',
            'gallery' => 'required',

        ]);
    
        Product::create($request->all());
     
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }

   
    public function show(Product $product)
    {
        return view('adminproducts.show',compact('product'));
    } 
     
   
    public function edit(Product $product)
    {
        return view('adminproducts.edit',compact('product'));
    }
    
   
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category' => 'required',
            'description' => 'required',
            'gallery' => 'required',

        ]);
    
        $product->update($request->all());
    
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }
    
  
    public function destroy(Product $product)
    {
        $product->delete();
    
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }








    
}
