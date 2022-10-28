<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Sales;


class SellerController extends Controller
{

    public function index()
    {
        return view('sales.index');
    }

    public function dashboard()
    {
        if(Auth::check()===true){
            $sales = new Sales;
            $listSales = $sales->with('user')->get();
            
        return view('sales.dashboard',['sales' => $listSales]);
        }else{
            return redirect('/seller/login');
        }
    }
    public function createproductPost(Request $request)
    {

        $sales = new Sales;
        $sales->user_id = auth()->user()->id;
        $sales->costumer_name = $request->costumer_name;
        $sales->form_payment =  $request->form_payment;
        $sales->product_name = $request->product_name;
        $sales->installments = $request->installments;
        $sales->price = $request->price;

        $sales->save();
    }


    public function createProduct()
    {
        if(Auth::check()===true){
        return view('sales.createproduct');
        }else{
            return redirect('/seller/login');
        }
    }


    public function login(Request $request)
        {
    
            $credentials = ['email' => $request->email, 'password' => $request->password];
            if(Auth::attempt($credentials)){
                return redirect('/seller/dashboard');
            }else{
                return redirect('/seller/login');
            }

    }

    public function create()
    {

        return view('sales.create');
  
        return redirect('/seller/login');
    }
    public function store(Request $request)
    {
      
        $seller = new User;
        $seller->name = $request->name;
        $seller->email = $request->email;
        $seller->password = bcrypt($request->password);
        $seller->save();



    }        
}
