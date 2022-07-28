<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{



    public function index_product()
    {
        $products = Product::all();
    
        return view('admin.product',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create_product()
    {
        return view('admin.create');

    }

    public function store_product(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category' => 'required',
            'description' => 'required',
            'gallery' => 'required',

        ]);
    
        Product::create($request->all());
     
        return redirect("/admin/product")
                        ->with('success','Product created successfully.');
    }

    public function show_product(Product $product)
    {
        return view('admin.show',compact('product'));
    } 
    
    public function edit_product(Product $product)
    {
        return view('admin.edit',compact('product'));
    }

    public function update_product(Request $request, Product $product)
    {
        $request->validate([
          'name' => 'required',
          'price' => 'required',
          'category' => 'required',
          'description' => 'required',
          'gallery' => 'required',
        ]);
    
        $product->update($request->all());
    
        return redirect("/admin/product")
                        ->with('success','Product updated successfully');
    }
    



    function login(Request $req){
      $admin = Admin::where(['email'=>$req->email])->first();
      if(!$admin || !Hash::check($req->password ,$admin->password)){
        // return "Username or password is not matched"; 
        return view('admin/login',['error'=>"Something Wrong Try Again"]);
      }else {
        $req->session()->put('admin',$admin);
        return redirect('/admin/main');
       
      }

    }
}
