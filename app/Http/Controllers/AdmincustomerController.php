<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class AdmincustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::All();
    
        return view('admincustomers.index',compact('customers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    public function create()
    {
        return view('admincustomers.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            
        ]);
    
       Customer::create($request->all());
     
        return redirect()->route('customers.index')
                        ->with('success','Customer created successfully.');
    }

   
    public function show(Customer $customer)
    {
        return view('admincustomers.show',compact('customer'));
    } 
     
   
    public function edit(Customer $customer)
    {
        return view('admincustomers.edit',compact('customer'));
    }
    
   
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            
        ]);
    
        $customer->update($request->all());
    
        return redirect()->route('customers.index')
                        ->with('success','Product updated successfully');
    }
    
  
    public function destroy(Customer $customer)
    {
        $customer->delete();
    
        return redirect()->route('customers.index')
                        ->with('success','Product deleted successfully');
    }
}
