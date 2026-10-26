<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{

    public function index()
    {
        $customers = Customer::orderBy("id", "DESC")->paginate(10);
        return response()->json($customers, 200);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $customer = Customer::create($input);
        return response()->json($customer, 201);
    }

    public function show($id)
    {
        $customer = Customer::find($id);
        if (!$customer) {
            abort(404);
        }
        return response()->json($customer, 200);
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $customer = Customer::find($id);

        if (!$customer) {
            abort(404);
        }

        $customer->fill($input);
        $customer->save();

        return response()->json($customer, 200);
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);

        if (!$customer) {
            abort(404);
        }

        $customer->delete();
        $message = ['message' => 'Customer deleted successfully', 'customer_id' => $id];

        return response()->json($message, 200);
    }
}