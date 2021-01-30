<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    //
    function index()
    {
        // echo "database created";
        return DB::select ("select * from customer");
    }
}
