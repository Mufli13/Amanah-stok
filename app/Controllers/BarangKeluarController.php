<?php

namespace App\Controllers;

use App\Models\BarangKeluar ;

class BarangKeluar extends BaseController
{
    protected $barangKeluar;

    public function __construct()
    {
        $this->barangKeluar = new BarangKeluarModel();
        helper(['form', 'url']); // optional: untuk form & url helper
    }

    public function index()
    {
        $data = [
            'barang_keluar' => $this->barangKeluar->findAll()
        ];

        return view('barang_keluar_view', $data);
    }

    public function tambah()
    {
        if ($this->request->getMethod() === 'post') {
            $data = [
                'tanggal'    => $this->request->getPost('tanggal'),
                'barang'     => $this->request->getPost('barang'),
                'ukuran'     => $this->request->getPost('ukuran'),
                'jumlah'     => $this->request->getPost('jumlah'),
                'penerima'   => $this->request->getPost('penerima'),
                'keterangan' => $this->request->getPost('keterangan'),
            ];

            $this->barangKeluar->insert($data);

            session()->setFlashdata('success', 'Data barang keluar berhasil ditambahkan.');
            return redirect()->to('/barang-keluar');
        }

        return view('barang_keluar_tambah');
    }

    public function delete($id)
    {
        if ($this->barangKeluar->delete($id)) {
            session()->setFlashdata('success', 'Data barang keluar berhasil dihapus.');
        } else {
            session()->setFlashdata('error', 'Gagal menghapus data.');
        }

        return redirect()->to('/barang-keluar');
    }
}
