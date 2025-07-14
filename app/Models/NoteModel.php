<?php

namespace App\Models;

use CodeIgniter\Model;

class NoteModel extends Model
{
    protected $table      = 'notes'; // pastikan nama tabel ini sesuai
    protected $primaryKey = 'id_note';

    protected $allowedFields = ['isi_catatan', 'ditulis_oleh', 'created_at'];
    protected $useTimestamps = false; // karena kamu kelola created_at manual
}
