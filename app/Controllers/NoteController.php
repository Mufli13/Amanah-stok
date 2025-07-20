<?php

namespace App\Controllers;

use App\Models\NoteModel;

class NoteController extends BaseController
{
    public function index()
    {
        // 🔒 Cek apakah sudah login
        $cek = $this->cekLogin();
        if ($cek) return $cek; // redirect kalau belum login
        $model = new NoteModel();
        $data = [
            'title' => 'Notes',
            'notes' => $model->findAll()
        ];
        return view('notes_view', $data);
    }

    public function add()
    {  // 🔒 Cek apakah sudah login
        $cek = $this->cekLogin();
        if ($cek) return $cek; // redirect kalau belum login
        $model = new NoteModel();
        $catatan = $this->request->getPost('isi_catatan');

        $model->save([
            'isi'   => $catatan,
            'ditulis_oleh'  => 'Saya, Stock 📝',
            'created_at'    => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/notes');
    }
}
