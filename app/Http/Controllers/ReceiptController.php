<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Receipt;

class ReceiptController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function create(Request $request)
    {

        if ($request->file('image')) {
            $image_path = $request->file('image')->store('public/itemImages');
        }
        else {
            $image_path = "";
        }

        $receipt = new Receipt();

        $receipt->service_type = $request->post('service_type');
        $receipt->name = $request->post('name');
        $receipt->contact_number = $request->post('contact_number');
        $receipt->brand = $request->post('brand');
        $receipt->warranty_card = $request->post('warranty_card');
        $receipt->name = $request->post('name');
        $receipt->image = $request->post('image');
        $receipt->remark = $request->post('remark');
        $receipt->cost = $request->post('cost');
        $receipt->prepayment = $request->post('prepayment');
        $receipt->status_id = $request->post('status_id');

        $receipt->save();

        return redirect("welcome");
    }
}
