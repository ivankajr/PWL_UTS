<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\db;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        db::table('barangs')->insert([[
            'id_barang' => '1',
            'kode_barang' => 'B001',
            'nama_barang' => 'Pensil',
            'kategori_barang' => 'Alat Tulis',
            'harga' => '5000',
            'qty' => '25'
        ],[
            'id_barang' => '2',
            'kode_barang' => 'B002',
            'nama_barang' => 'Penghapus',
            'kategori_barang' => 'Alat Tulis',
            'harga' => '7000',
            'qty' => '30'
        ],[
            'id_barang' => '3',
            'kode_barang' => 'B003',
            'nama_barang' => 'Silverqueen',
            'kategori_barang' => 'snack',
            'harga' => '12500',
            'qty' => '199'
        ],[
            'id_barang' => '4',
            'kode_barang' => 'B004',
            'nama_barang' => 'Indomie',
            'kategori_barang' => 'Makanan',
            'harga' => '3500',
            'qty' => '199'
        ],[
            'id_barang' => '5',
            'kode_barang' => 'B005',
            'nama_barang' => 'Pocari Sweat',
            'kategori_barang' => 'Minuman',
            'harga' => '6000',
            'qty' => '250'
        ],[
            'id_barang' => '6',
            'kode_barang' => 'B006',
            'nama_barang' => 'Kopi Golda',
            'kategori_barang' => 'Minuman',
            'harga' => '3500',
            'qty' => '250'
        ],[
            'id_barang' => '7',
            'kode_barang' => 'B007',
            'nama_barang' => 'Milku',
            'kategori_barang' => 'Minuman',
            'harga' => '4000',
            'qty' => '100'
        ],[
            'id_barang' => '8',
            'kode_barang' => 'B008',
            'nama_barang' => 'Malkist Abon',
            'kategori_barang' => 'Makanan',
            'harga' => '8000',
            'qty' => '100'
        ],[
            'id_barang' => '9',
            'kode_barang' => 'B009',
            'nama_barang' => 'Oreo',
            'kategori_barang' => 'Makanan',
            'harga' => '1500',
            'qty' => '100'
        ],[
            'id_barang' => '10',
            'kode_barang' => 'B010',
            'nama_barang' => 'NU MILK SUSU',
            'kategori_barang' => 'Minuman',
            'harga' => '6000',
            'qty' => '250'
        ],[
            'id_barang' => '11',
            'kode_barang' => 'B011',
            'nama_barang' => 'Ultra Milk',
            'kategori_barang' => 'Minuman',
            'harga' => '6000',
            'qty' => '190'
        ],[
            'id_barang' => '12',
            'kode_barang' => 'B012',
            'nama_barang' => 'Kopi Boba',
            'kategori_barang' => 'Minuman',
            'harga' => '12000',
            'qty' => '250'
        ],[
            'id_barang' => '13',
            'kode_barang' => 'B013',
            'nama_barang' => 'Sampoerna Mild',
            'kategori_barang' => 'Rokok',
            'harga' => '17500',
            'qty' => '12'
        ],[
            'id_barang' => '14',
            'kode_barang' => 'B014',
            'nama_barang' => 'Surya Gudang Garam',
            'kategori_barang' => 'Rokok',
            'harga' => '19000',
            'qty' => '12'
        ],[
            'id_barang' => '15',
            'kode_barang' => 'B015',
            'nama_barang' => 'Camel Filter Grape',
            'kategori_barang' => 'Rokok',
            'harga' => '15000',
            'qty' => '50'
        ],[
            'id_barang' => '16',
            'kode_barang' => 'B016',
            'nama_barang' => 'Chococip',
            'kategori_barang' => 'Makanan',
            'harga' => '3000',
            'qty' => '12'
        ],[
            'id_barang' => '17',
            'kode_barang' => 'B017',
            'nama_barang' => 'Piattos',
            'kategori_barang' => 'Makanan',
            'harga' => '3500',
            'qty' => '30'
        ],[
            'id_barang' => '18',
            'kode_barang' => 'B018',
            'nama_barang' => 'Beng Beng',
            'kategori_barang' => 'Makanan',
            'harga' => '2800',
            'qty' => '45'
        ],[
            'id_barang' => '19',
            'kode_barang' => 'B019',
            'nama_barang' => 'Marlboro Red',
            'kategori_barang' => 'Rokok',
            'harga' => '35000',
            'qty' => '25'
        ],[
            'id_barang' => '20',
            'kode_barang' => 'B020',
            'nama_barang' => 'La Ice Kretek',
            'kategori_barang' => 'Rokok',
            'harga' => '24500',
            'qty' => '35'
        ]]);
    }
    }
