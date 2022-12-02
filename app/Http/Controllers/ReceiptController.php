<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receipt;
use Auth;
use Image;

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
        // dd($request->all());
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
        $receipt = new Receipt();

        $receipt->service_type = $request->post('service_type');
        $receipt->customer_name = $request->post('customer_name');
        $receipt->contact_number = $request->post('contact_number');
        $receipt->brand = $request->post('brand');
        $receipt->warranty_card = $request->post('warranty_card');
        $receipt->user_name = Auth::user()->name;
        $receipt->remark = $request->post('remark');
        $receipt->cost = $request->post('cost');
        $receipt->prepayment = $request->post('prepayment');

        if ($request->file('item_photo')) {

            foreach($request->file('item_photo') as $image) 
            {   
                $destinationPath = storage_path('app\\public\\uploads\\');
                $filename = Auth::user()->name.'-'.date('Ymd-his'). '.' . $image->getClientOriginalExtension();
                $image_path[]=Image::make($image)->resize(1000, 1000)->save($destinationPath.$filename,90);
                // $image_path[] = $image->store('uploads','public');
            }

            $receipt->remark = $receipt->remark."\r\n images of the item are saved in the system";

        }
        else {
            $image_path = "";
        }

        $receipt->image = json_encode($image_path);

        
        $receipt->save();

        return redirect()->route('receipt.pdf');
    }

}
