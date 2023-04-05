<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[[
            'kode_buku' => 'BKN01',
            'judul' => ' Belajar Laravel',
            'pengarang' => 'Hakan Alif Pramudya',
            'jenis_buku' => 'Buku Umum',
            'harga' => '100.000',
            'qty' => '100'
        ],
        [
            'kode_buku' => 'BKN02',
            'judul' => ' Belajar Database',
            'pengarang' => 'Sofia Mulia',
            'jenis_buku' => 'Buku Umum',
            'harga' => '102.000',
            'qty' => '60'
        ],
        [
            'kode_buku' => 'BKN03',
            'judul' => ' Belajar Membaca',
            'pengarang' => 'Yunus Abadi',
            'jenis_buku' => 'Novel',
            'harga' => '110.000',
            'qty' => '40'
        ],
        [
            'kode_buku' => 'BKN04',
            'judul' => ' Dari Langit Ke Bumi',
            'pengarang' => 'Ferdina Malika',
            'jenis_buku' => 'Novel',
            'harga' => '75.000',
            'qty' => '40'
        ],
        [
            'kode_buku' => 'BKN05',
            'judul' => ' Belajar Makan',
            'pengarang' => 'Hakan Alif Pramudya',
            'jenis_buku' => 'Buku Umum',
            'harga' => '50.000',
            'qty' => '100'
        ],
        [
            'kode_buku' => 'BKN06',
            'judul' => ' Belajar Tidur',
            'pengarang' => 'Hakan Alif Pramudya',
            'jenis_buku' => 'Buku Umum',
            'harga' => '100.000',
            'qty' => '100'
        ],
        [
            'kode_buku' => 'BKN07',
            'judul' => ' Belajar Nge drift',
            'pengarang' => 'Hakan',
            'jenis_buku' => 'Buku Umum',
            'harga' => '100.000',
            'qty' => '20'
        ],
        [
            'kode_buku' => 'BKN08',
            'judul' => ' Belajar Woosh',
            'pengarang' => 'Hakan Alif Pramudya',
            'jenis_buku' => 'Buku Umum',
            'harga' => '100.000',
            'qty' => '100'
        ],
        [
            'kode_buku' => 'BKN09',
            'judul' => ' Belajar Satu',
            'pengarang' => 'Hakan Alif Pramudya',
            'jenis_buku' => 'Buku Umum',
            'harga' => '100.000',
            'qty' => '100'
        ],
        [
            'kode_buku' => 'BKN10',
            'judul' => ' Belajar 2',
            'pengarang' => 'Hakan Alif Pramudya',
            'jenis_buku' => 'Buku Umum',
            'harga' => '100.000',
            'qty' => '100'
        ],
        [
            'kode_buku' => 'BKN11',
            'judul' => ' Belajar 3',
            'pengarang' => 'Hakan Alif Pramudya',
            'jenis_buku' => 'Buku Umum',
            'harga' => '100.000',
            'qty' => '100'
        ],
        [
            'kode_buku' => 'BKN12',
            'judul' => ' Belajar 4',
            'pengarang' => 'Hakan Alif Pramudya',
            'jenis_buku' => 'Buku Umum',
            'harga' => '100.000',
            'qty' => '100'
        ],
        [
            'kode_buku' => 'BKN13',
            'judul' => ' Belajar 5',
            'pengarang' => 'Hakan Alif Pramudya',
            'jenis_buku' => 'Buku Umum',
            'harga' => '100.000',
            'qty' => '100'
        ],
        [
            'kode_buku' => 'BKN14',
            'judul' => ' Belajar 6',
            'pengarang' => 'Hakan Alif Pramudya',
            'jenis_buku' => 'Buku Umum',
            'harga' => '100.000',
            'qty' => '100'
        ],
        [
            'kode_buku' => 'BKN15',
            'judul' => ' Belajar 7',
            'pengarang' => 'Hakan Alif Pramudya',
            'jenis_buku' => 'Buku Umum',
            'harga' => '100.000',
            'qty' => '100'
        ],
        [
            'kode_buku' => 'BKN16',
            'judul' => ' Belajar 8',
            'pengarang' => 'Hakan Alif Pramudya',
            'jenis_buku' => 'Buku Umum',
            'harga' => '100.000',
            'qty' => '100'
        ],
        [
            'kode_buku' => 'BKN17',
            'judul' => ' Belajar 9',
            'pengarang' => 'Hakan Alif Pramudya',
            'jenis_buku' => 'Buku Umum',
            'harga' => '100.000',
            'qty' => '100'
        ],
        [
            'kode_buku' => 'BKN18',
            'judul' => ' Belajar 10',
            'pengarang' => 'Hakan Alif Pramudya',
            'jenis_buku' => 'Buku Umum',
            'harga' => '100.000',
            'qty' => '100'
        ],
        [
            'kode_buku' => 'BKN19',
            'judul' => ' Belajar 11',
            'pengarang' => 'Hakan Alif Pramudya',
            'jenis_buku' => 'Buku Umum',
            'harga' => '100.000',
            'qty' => '100'
        ],
        [
            'kode_buku' => 'BKN20',
            'judul' => ' Belajar 12',
            'pengarang' => 'Hakan Alif Pramudya',
            'jenis_buku' => 'Buku Umum',
            'harga' => '100.000',
            'qty' => '100'
        ]];
        DB::table('data_buku')->insert($data);
    }
}
