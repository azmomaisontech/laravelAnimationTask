<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Validator;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string',
            'surname' => 'required|string',
            'dob' => 'required|date ',
            'email' => 'required|email',
            'gender' => 'required|string',
            'number' => 'required|string',
            'comments' => 'nullable| string'
        ]);



        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors(), 'status' => 400], 400);
        }

        $customer            = new Customer();
        $customer->firstname     = $request->firstname;
        $customer->surname     = $request->surname;
        $customer->dob     = $request->dob;
        $customer->email     = $request->email;
        $customer->gender     = $request->gender;
        $customer->number     = $request->number;
        $customer->comments     = $request->comments;

        if ($customer->save()) {
            return response()->json(['status' => 201, 'customer'   => $customer], 201);
        } else {
            return response()->json(['message' => 'Could not save customer info'], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
