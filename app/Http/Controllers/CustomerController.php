<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function create()
    {
        return view('customers.register-customer');
    }

    function store(Request $request)
    {
    }
}
