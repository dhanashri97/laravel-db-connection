<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use\App\models\Customer;

class CustomerController extends Controller
{
    //
    function index()
    {
        // echo "database created";
        // return DB::select ("select * from customers");

        $data=Customer::all();
        return view("customerlist",['customers'=>$data]);
    }
    
    function getCustomer($id){        
        $customer = Customer::find($id);
        return view("showcustomer",['customer'=>$customer]);
    }
    // function getCustomerByName(){        
    //     $data = Customer::where('FIRST_NAME','=','kalyan')->first();
    //     return view("showcustomer",['customer'=>$data]);        
    // }
}
