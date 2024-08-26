<?php

namespace App\Http\Controllers;

use App\Models\Klass;
use Illuminate\Http\Request;

class KlassController extends Controller
{
    public function index(){
        $klass = Klass::with('student')->get();

        return view('klass', compact('klass'));
    }
}
