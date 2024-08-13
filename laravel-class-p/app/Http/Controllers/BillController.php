<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use Illuminate\Http\Request;
use Illuminate\Support\Composer;

class BillController extends Controller
{
    public function bill ()
    {
        $amounts = Bill::all();
        // return  $amounts;
        return view('bill',compact('amounts'));
    }
}
