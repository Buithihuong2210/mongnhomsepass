<?php

namespace App\Http\Controllers;

use App\Repository\CustomerRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function customers()
    {
        $customers = CustomerRepos:: getAllCustomer();
        return view('watch.customers.customers',
            [
                'customers' => $customers,
            ]);
    }

    public function show($id)
    {

        $customers = CustomerRepos::getCustomerById($id); //this is always an array of objects
        return view('watch.customers.show',
            [
                'customers' => $customers[0] //get the first element
            ]
        );
    }

    public function create()
    {
        return view(
            'watch.customers.signup',
            ["customers" => (object)[
                'id' => '',
                'fullname' => '',
                'dob' => '',
                'address' => '',
                'phone' => '',
                'email'=> '',
                'gender' => '',
            ]]);
    }

    public function store(Request $request)
    {
//        dd($request->all());
        $this->formValidate1($request)->validate();  //shortcut
        $customers = (object)[
            'fullname' => $request->input('fullname'),
            'dob' => $request->input('dob'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'gender' => $request->input('gender'),
        ];
        $newId = CustomerRepos::insert($customers);

        return redirect()->route('client.index');
//            ->action('CustomerController@customers')
//            ->with('msg', 'New customer with id: '.$newId.' has been inserted');
    }

    public function edit($id)
    {
        $customers = CustomerRepos::getCustomerById($id); //this is always an array
        return view(
            'watch.customers.update',
            ["customers" => $customers[0]]);
    }
    public function update(Request $request, $id)
    {
        if ($id != $request->input('id')) {
            //id in query string must match id in hidden input
            return redirect()->action('CustomerController@customers');
        }

        $this->formValidate1($request)->validate();

        $customers = (object)[
            'id' => $request->input('id'),
            'fullname' => $request->input('fullname'),
            'dob' =>$request->input('dob'),
            'address' =>$request->input('address'),
            'phone' => $request ->input('phone'),
            'email' => $request->input('email'),
            'gender' =>$request->input('gender'),
        ];
        CustomerRepos::update($customers);

        return redirect()->action('CustomerController@customers')
            ->with('msg', 'Update Successfully');
    }
    private function formValidate1($request)
    {
        return Validator::make(
            $request->all(),
            [
                'fullname' =>['required'],
                'email' =>['required', 'e-mail'],
                'dob'=>['required', 'after: 1902/01/01'],
                'phone'=>['required', 'starts_with:0'],
//                'gender'=>['required', 'starts_with:"M", "F", "T"']
            ]
        );
    }
}
