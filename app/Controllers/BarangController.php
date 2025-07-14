<?php

namespace App\Controllers;

class BarangController extends BaseController
{
    public function index()
    {
        $data['title'] = 'Daftar Barang';
        return view('barang_view', $data);
    }
}
