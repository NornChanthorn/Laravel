<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    //
    function login(Request $req){
        $customer = Customer::where(['email'=>$req->email])->first();
        if(!$customer || !Hash::check($req->password,$customer->password)){
            return "Incorrect";
        }
        else{
            $req->session()->put('customer',$customer);
            return redirect('/');
        }
    
    }
    function register(request $req){
        //return $req->input();
        
        $customer = new Customer;
        $customer->name = $req->name;
        $customer->email = $req->email;
        $customer->password=Hash::make($req->password);
        $customer->save();
        
        return redirect('/login');
    }
    
}

