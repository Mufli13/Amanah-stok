<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangKeluarModel extends Model
{
    protected $table = 'barang_keluar';
    protected $primaryKey = 'id';
    protected $allowedFields = ['tanggal', 'barang_id', 'ukuran', 'jumlah', 'penerima', 'keterangan'];
    protected $useTimestamps = false;
}
