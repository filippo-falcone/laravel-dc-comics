<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    public function index(){
        $lastComics = Comic::take(6)->orderBy('id', 'desc')->get();
        $purchase = config('purchases');
        $data = [
            'comics' => $lastComics,
            'purchases' => $purchase
        ];
        
        return view('home', $data);
    }
}
