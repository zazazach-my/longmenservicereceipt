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

    
}
