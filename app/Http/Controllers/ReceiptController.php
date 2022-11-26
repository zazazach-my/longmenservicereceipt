<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receipt;
use Auth;

class ReceiptController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        return view('receipts.create');
    }

    public function store(Request $request)
    {   
        $request -> validate([
            'service_type' => 'required',
            'customer_name' => 'required',
            'contact_number' => 'required',
            'brand' => 'required',
            'warranty_card' => 'required',
            'item_photo' => '',
            'remark' => 'required',
            'cost' => 'required',
            'prepayment' => 'required',

        ]);

    
        if ($request->file('item_photo')) {
            $image_path = $request->file('item_photo')->store('uploads','public');
        }
        else {
            $image_path = "";
        }

        $receipt = new Receipt();

        $receipt->service_type = $request->post('service_type');
        $receipt->name = $request->post('customer_name');
        $receipt->contact_number = $request->post('contact_number');
        $receipt->brand = $request->post('brand');
        $receipt->warranty_card = $request->post('warranty_card');
        $receipt->user_id = Auth::id();
        $receipt->image = $image_path;
        $receipt->remark = $request->post('remark');
        $receipt->cost = $request->post('cost');
        $receipt->prepayment = $request->post('prepayment');

        $receipt->save();

        return redirect('/r/create');
    }

}
