<?php

namespace App\Controllers;

class BarangKeluarController extends BaseController
{
    public function index()
    {
        $data['title'] = 'Barang Keluar';
        return view('barang_keluar_view', $data);
    }
}
