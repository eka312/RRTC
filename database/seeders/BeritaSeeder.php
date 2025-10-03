<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('berita')->insert([
            [
                'gambar' => 'uploads/berita/MPB10 (14).jpg',
                'judul' => 'Tips Pajak UMKM 2025',
                'slug' => 'tips-pajak-umkm-2025',
                'penulis' => 'Admin RRTC',
                'tanggal_terbit' => '2025-09-30',
                'status' => 'published',
                'isi' => 'Artikel ini membahas tips-tips pajak terbaru untuk UMKM di tahun 2025 agar lebih mudah dalam pelaporan dan pengelolaan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
           
        ]);
    }
}
