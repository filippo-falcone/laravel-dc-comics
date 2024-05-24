<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $purchase = config('purchases');
        $data = [
            'purchases' => $purchase
        ];
        
        return view('home', $data);
    }
}
