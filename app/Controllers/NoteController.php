<?php

namespace App\Controllers;

use App\Models\NoteModel;

class NoteController extends BaseController
{
    public function index()
    {
        $model = new NoteModel();
        $data = [
            'title' => 'Notes',
            'notes' => $model->findAll()
        ];
        return view('notes_view', $data);
    }

    public function add()
    {
        $model = new NoteModel();
        $catatan = $this->request->getPost('isi_catatan');

        $model->save([
            'isi_catatan'   => $catatan,
            'ditulis_oleh'  => 'Saya, Stock 📝',
            'created_at'    => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/notes');
    }
}
