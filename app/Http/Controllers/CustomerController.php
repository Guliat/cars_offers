<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::paginate(10);
        return view('general.customers.index')->withCustomers($customers);
    }

    public function search(Request $request)
    {
        $customers = Customer::where('names', 'like', '%' . $request->word . '%')
                              ->orWhere('nick', 'like', '%' . $request->word . '%')
                              ->orWhere('phone', 'like', '%' . $request->word . '%')
                              ->orWhere('second_phone', 'like', '%' . $request->word . '%')
                              ->get();

        return view('general.customers.search')->withCustomers($customers)->withWord($request->word);
    }

    public function create()
    {
        return view('general.customers.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'names' => 'required|max:255',
            'phone' => 'required|digits:10',
            ));

        $customer = new Customer;
        $customer->user_id = Auth::id();
        $customer->names = $request->names;
        $customer->nick = $request->nick;
        $customer->phone = $request->phone;
        $customer->second_phone = $request->second_phone;
        $customer->note = $request->note;
        $customer->save();

        Session::flash('success', 'ЗАПИСАНО !');
        return redirect()->route('customers.index');
    }

    public function show(Customer $customer)
    {
        return view('general.customers.show')->withCustomer($customer);
    }

    public function edit(Customer $customer)
    {
        return view('general.customers.edit')->withCustomer($customer);
    }

    public function update(Request $request, Customer $customer)
    {
        $this->validate($request, array(
            'names' => 'required|max:255',
            'phone' => 'required|digits:10',
            ));

        $customer->names = $request->names;
        $customer->nick = $request->nick;
        $customer->phone = $request->phone;
        $customer->second_phone = $request->second_phone;
        $customer->note = $request->note;
        $customer->update();

        Session::flash('success', 'ЗАПИСАНО !');
        return redirect()->route('customers.show', $customer->id);
    }

    public function destroy(Customer $customer)
    {
        //
    }
}
