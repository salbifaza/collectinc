<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'tipe', 'penerima', 'alamat_jalan', 'alamat_kota', 'alamat_kecamatan', 'alamat_kelurahan', 'alamat_kode_pos', 'created_date', 'created_by',  'updated_by', 'updated_date',
    ];
    protected $returnType = 'App\Entities\Barang';
    protected $useTimestamps = false;
}
