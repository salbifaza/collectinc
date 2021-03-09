<?php

namespace App\Controllers;

class Barang extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function order()
    {
        helper('form');
        // $barangModel = new \App\Models\BarangModel();
        // $barang = new \App\Entities\Barang();

        // $barang->tipe = $this->request->getPost('tipe');
        // $barang->penerima = $this->request->getPost('penerima');
        // $barang->alamat_jalan = $this->request->getPost('alamat_jalan');
        // $barang->alamat_kota = $this->request->getPost('alamat_kota');
        // $barang->alamat_kecamatan = $this->request->getPost('alamat_kecamatan');
        // $barang->alamat_kelurahan = $this->request->getPost('alamat_kelurahan');
        // $barang->alamat_kode_pos = $this->request->getPost('alamat_kode_pos');

        // $barang->created_by = 0;

        // $barangModel->save($barang);

        return view('hello/order');
    }
}
