<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = DB::table('customers')->get();
        return view('modules.customer.index', ['customers' => $customers]);
    }

    public function showFormAddCustomer()
    {
        return view('modules.customer.create');
    }

    public function store(Request $request)
    {
        $name = $request->fullname;
        $phone = $request->phone;
        $email = $request->email;
        DB::insert('insert into customers (fullname,phone,email) values (?, ?,?)', [$name, $phone, $email]);
        return redirect()->route('list.customer');
    }

    public function showInfoById($id)
    {
        $customer = DB::table('customers')->find($id);
        return view('modules.customer.edit', compact(['customer']));
    }

    public function update($id, Request $request)
    {
        $name = $request->fullname;
        $phone = $request->phone;
        $email = $request->email;

        DB::update('update customers set fullname = ?, phone = ?, email = ? where id = ?', [$name, $phone, $email, $id]);
        return redirect()->route('list.customer');
    }

    public function delete($id)
    {
        DB::table('customers')->delete($id);
        return redirect()->route('list.customer');
    }
}
