<?php

namespace App\Http\Controllers;

use App\Models\CustomerService;
use Illuminate\Http\Request;

class CustomerServiceController extends Controller
{
    function display_cases_fe()
    {
        $customer_cases = CustomerService::all();
        return view('cases.display_cases', ['customer_cases' => $customer_cases]);
    }
}
