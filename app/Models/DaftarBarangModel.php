<?php

namespace App\Models;

use CodeIgniter\Model;

class daftarBarangModel extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'id';
    protected $allowedFields = ['tanggal', 'nama_barang', 'barang_id', 'jenis', 'ukuran', 'merk', 'stock', 'satuan', 'lokasi'];
    protected $useTimestamps = false;
}
