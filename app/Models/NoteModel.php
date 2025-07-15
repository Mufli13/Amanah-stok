<?php

namespace App\Models;

use CodeIgniter\Model;

class NoteModel extends Model
{
    protected $table      = 'notes'; // pastikan nama tabel ini sesuai
    protected $primaryKey = 'id';

    protected $allowedFields = ['isi', 'judul', 'created_at'];
    protected $useTimestamps = false; // karena kamu kelola created_at manual
}
