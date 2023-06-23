<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\CustomerService;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CustomerController extends Controller
{
    function create()
    {
        $services = Service::all(['*'])->toArray();
        return view('customers.register-customer', ['services' => $services]);
    }

    function store(Request $request)
    {
        $formData = $request->validate([
            'fname' => 'required|max:255',
            'lname' => 'max:255',
            'email' => ['required', 'email', Rule::unique('customers', 'email')],
            'password' => 'max:255',
            'service' => 'required',
            'phone_number' => 'required',
            'description' => 'required_if:service,==,3'
        ]);

        $customer = Customer::create([
            'first_name' => $formData['fname'],
            'last_name' => $formData['lname'],
            'email' => $formData['email'],
            'phone_number' => $formData['phone_number'],
        ]);

        CustomerService::create([
            'customer_id' => $customer->id,
            'service_id' => $formData['service'],
            'description' => $formData['description'],
            'status' => '1',
        ]);

        if ($customer) {
            redirect(route('customers'))->with('message', 'Customer information saved successfully');
        }
    }

    /**
     * Display customers
     */
    function display_customers_fe()
    {
        $customers = Customer::all();
        return view('customers.display_all', ['customers' => $customers]);
    }
}
