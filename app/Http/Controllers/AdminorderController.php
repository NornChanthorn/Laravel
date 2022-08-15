<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AdminorderController extends Controller
{
    public function index()
    {
        $orders = Order::All();
    
        return view('adminorders.index',compact('orders'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    public function create()
    {
        return view('adminorders.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'customer_id' => 'required',
            'status' => 'required',
            'payment_method' => 'required',
            'payment_status' => 'required',
            'address'=> 'required'

        ]);
    
        Order::create($request->all());
     
        return redirect()->route('orders.index')
                        ->with('success','Order created successfully.');
    }

   
    public function show(Order $order)
    {
        return view('adminorders.show',compact('order'));
    } 
     
   
    public function edit(Order $order)
    {
        return view('adminorders.edit',compact('order'));
    }
    
   
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'product_id' => 'required',
            'customer_id' => 'required',
            'status' => 'required',
            'payment_method' => 'required',
            'payment_status' => 'required',
            'address'=> 'required',
            'qty' => 'required',
            'total'=> 'required'


        ]);
    
        $order->update($request->all());
    
        return redirect()->route('orders.index')
                        ->with('success','Order updated successfully');
    }
    
  
    public function destroy(Order $order)
    {
        $order->delete();
    
        return redirect()->route('orders.index')
                        ->with('success','Product deleted successfully');
    }
}
