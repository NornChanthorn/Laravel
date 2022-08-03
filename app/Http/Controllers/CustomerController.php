<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller

{
    
    function login(Request $req){
        $customer = Customer::where(['email'=>$req->email])->first();
        if(!$customer || !Hash::check($req->password,$customer->password)){
            return view('login',['error'=>"Login Failed Try Again"]);
        }
        else if ($customer['role']=='admin'){
            $req->session()->put('admin',$customer);
            return redirect('admin/main');
        }
        else{
            $req->session()->put('customer',$customer);
            return redirect('/');
        }
    
    }
    function register(request $req){
        //return $req->input();
    
        // $user ='user';
        $customer = new Customer;
        $customer->name = $req->name;
        $customer->email = $req->email;
        $customer->role=$req->role;
        $validator = Validator::make($req->all(), [
            'password' => 'required|confirmed',
        ]); 
        if($validator->fails()){
            return "Incorrect Confirm password";
        }
        

        else{
            $customer->password=Hash::make($req->password);
        }
        
        $customer->save();
        return redirect('/login');












    }











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

