<?php

namespace App\Http\Controllers;

use App\Models\Buah;
use App\Models\Kategori;
use App\Models\Supplier;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    // ===================== BUAH ===========================
    public function buah() {
        $buah = Buah::with('kategori','supplier')->get();
        $kategori = Kategori::all();
        $supplier = Supplier::all();
        return view('buah', compact('buah','kategori','supplier'));
    }

    public function buah_store(Request $req) {
        Buah::create($req->all());
        return back();
    }

    public function buah_update(Request $req, $id) {
        Buah::find($id)->update($req->all());
        return back();
    }

    public function buah_delete($id) {
        Buah::find($id)->delete();
        return back();
    }

    // ===================== KATEGORI ===========================
    public function kategori() {
        $kategori = Kategori::all();
        return view('kategori', compact('kategori'));
    }

    public function kategori_store(Request $req) {
        Kategori::create($req->all());
        return back();
    }

    public function kategori_update(Request $req, $id) {
        Kategori::find($id)->update($req->all());
        return back();
    }

    public function kategori_delete($id) {
        Kategori::find($id)->delete();
        return back();
    }

    // ===================== SUPPLIER ===========================
    public function supplier() {
        $supplier = Supplier::all();
        return view('supplier', compact('supplier'));
    }

    public function supplier_store(Request $req) {
        Supplier::create($req->all());
        return back();
    }

    public function supplier_update(Request $req, $id) {
        Supplier::find($id)->update($req->all());
        return back();
    }

    public function supplier_delete($id) {
        Supplier::find($id)->delete();
        return back();
    }
}
