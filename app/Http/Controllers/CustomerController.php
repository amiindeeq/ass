<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function showCustomer()
    {
        $data["Customer"] = Customer::all();
        return view('displayedcustomer', $data);
    }

    public function addCustomer()
    {
        return view('createcustomer');
    }

    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->id = $request->input('id');
        $customer->fname = $request->input('fname');
        $customer->lname = $request->input('lname');
        $customer->custAddress = $request->input('custAddress');
        $customer->save();
        return redirect()->back()->with('status', 'Customer Added Successfully');
    }

    public function editCustomer($id)
    {
        $customer = Customer::find($id);
        return view('editcustomer', compact('customer'));
    }

    public function updateCustomer(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->fname = $request->input('fname');
        $customer->lname = $request->input('lname');
        $customer->custAddress = $request->input('custAddress');
        $customer->save();
        return redirect('/get-customer')->with('status', 'Customer Updated Successfully');
    }

    public function deleteCustomer($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('/get-customer')->with('status', 'Customer Deleted Successfully');
    }
}





