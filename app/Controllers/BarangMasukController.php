<?php

namespace App\Controllers;

class BarangMasukController extends BaseController
{
    public function index()
    {
        $data['title'] = 'Barang Masuk';
        return view('barang_masuk_view', $data);
    }
}
