<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }

    public function about(){
        return "Nama : Siti Nikmatus Sholihah <br> NIM : 244107020014 <br>";
    }

    public function articles($id){
        return "Halaman artikel dengan ID ".$id;
    }
}
