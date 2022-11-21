<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function create(Request $request)
    {
        $request->validate([
            'order_type' => 'required',
            'order_photo'        => 'required',
//            'fstp_payment_image' => 'required',
            'address'            => 'required',
            'postcode'           => 'required',
            'city'               => 'required',
            'state_id'           => 'required',
            'country_id'         => 'required',
            'send_to'            => 'required',

        ]);
    }
}
