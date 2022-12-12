<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use PDF;
use App\Models\Receipt;
use Auth;

  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generateInvoicePDF()
    {

        $data_receipt = Receipt::where('user_name', Auth::user()->name)
            ->orderBy('created_at', 'DESC')
            ->firstorfail();

        $invoicenumber = date('Ym', strtotime($data_receipt['created_at'])).'-'.$data_receipt->id;
        $invoicedate = date('d M Y', strtotime($data_receipt['created_at']));
        $customer_name = $data_receipt['customer_name'];
        $customer_number = $data_receipt['contact_number'];
        $brand = $data_receipt['brand'];
        $remark = $data_receipt['remark'];
        $warranty_card = $data_receipt['warranty_card'];

        if ($data_receipt['free_of_charge'] == 1 && $data_receipt['to_be_confirmed'] == 0){
            $cost = "FOC";
            $prepayment = "-";
            $balance = "-";
        }

        if ($data_receipt['free_of_charge'] == 0 && $data_receipt['to_be_confirmed'] == 1){
            $cost = "TBC";
            $prepayment = $data_receipt['prepayment'];
            $balance = "TBC";
        }

        if ($data_receipt['free_of_charge'] == 0 && $data_receipt['to_be_confirmed'] == 0){
            $cost = $data_receipt['cost'];
            $prepayment = $data_receipt['prepayment'];
            $balance = $cost - $prepayment;
        }

        
        $user_name = $data_receipt['user_name'];

        // $pdf = PDF::loadView('myPDF');
        // return $pdf->download('nicesnippets.pdf');

        return view('myPDF',compact('invoicenumber','invoicedate','customer_name','customer_number','brand','remark','warranty_card','warranty_card','cost','prepayment','user_name','balance'));
    }
}