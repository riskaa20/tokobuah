<?php

namespace App\Http\Controllers;

use App\Models\Buah;
use App\Models\KategoriBuah;
use App\Models\Supplier;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $databuah = Buah::latest()->get();
        return view('home', compact('databuah'));
    }

     public function Kategori()
    {
        $databuah = Buah::latest()->get();
        return view('Kategori', compact('databuah'));
    }

    public function Supplier()
    {
        $datasupplier = Supplier::latest()->get();
        return view('supplier', compact('datasupplier'));
    }
}

 
