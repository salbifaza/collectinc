<?php

namespace App\Database\Migrations;

class Barang extends \CodeIgniter\Database\Migration
{

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'tipe' => [
                'type' => 'TEXT',
            ],
            'penerima' => [
                'type' => 'TEXT',
            ],
            'alamat_jalan' => [
                'type' => 'TEXT',
            ],
            'alamat_kota' => [
                'type' => 'TEXT',
            ],
            'alamat_kecamatan' => [
                'type' => 'TEXT',
            ],
            'alamat_kelurahan' => [
                'type' => 'TEXT',
            ],
            'alamat_jalan' => [
                'type' => 'TEXT',
            ],
            'alamat_kode_pos' => [
                'type' => 'TEXT',
            ],
            'created_date' => [
                'type' => 'TEXT'
            ],
            'created_by' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'updated_by' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => TRUE,
            ],
            'updated_date' => [
                'type' => 'DATETIME',
                'null' => TRUE,
            ]
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('barang');
    }
    public function down()
    {
        $this->forge->dropTable('barang');
    }
}
