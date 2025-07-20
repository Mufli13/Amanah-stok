<?php

namespace App\Models;

use CodeIgniter\Model;

class barangMasukModel extends Model
{
    protected $table = 'barang_masuk';
    protected $primaryKey = 'id';
    protected $allowedFields = ['tanggal', 'barang', 'barang_id', 'ukuran', 'jumlah', 'penerima', 'keterangan'];
    protected $useTimestamps = false;
}
