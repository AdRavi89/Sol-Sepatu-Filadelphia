<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            // 1. Layanan Pengecatan & Restorasi Warna (Repaint)
            [
                'name' => 'Pengecatan Jaket Kulit', 
                'category' => 'Layanan Pengecatan & Restorasi Warna', 
                'price' => 350000, 
                'description' => 'Restorasi atau perubahan warna pada jaket berbahan kulit asli maupun sintetis agar warna kembali merata, segar, dan tampak seperti baru.'
            ],
            [
                'name' => 'Pengecatan Tas Kulit', 
                'category' => 'Layanan Pengecatan & Restorasi Warna', 
                'price' => 300000, 
                'description' => 'Layanan pewarnaan ulang (repaint) untuk menutupi bagian tas yang pudar, kusam, atau lecet akibat pemakaian, sekaligus melindungi material kulit.'
            ],
            [
                'name' => 'Pengecatan Sepatu Kulit', 
                'category' => 'Layanan Pengecatan & Restorasi Warna', 
                'price' => 250000, 
                'description' => 'Proses pewarnaan ulang sepatu kulit (formal maupun kasual) untuk mengembalikan warna asli atau mengubah warna sesuai keinginan pelanggan.'
            ],

            // 2. Layanan Perbaikan Tas
            [
                'name' => 'Ganti Material Muka/Cover Tas Branded', 
                'category' => 'Layanan Perbaikan Tas', 
                'price' => 600000, 
                'description' => 'Restorasi material atau penggantian bagian luar utama tas branded (seperti Pierre Cardin, dll) yang sudah mengelupas atau rusak parah.'
            ],
            [
                'name' => 'Ganti Resleting Ransel / Carrier', 
                'category' => 'Layanan Perbaikan Tas', 
                'price' => 120000, 
                'description' => 'Penggantian jalur dan kepala resleting utama pada tas ransel berkapasitas besar atau tas gunung dengan material yang kuat dan tahan tarikan.'
            ],
            [
                'name' => 'Ganti Resleting Tas Selempang', 
                'category' => 'Layanan Perbaikan Tas', 
                'price' => 80000, 
                'description' => 'Pemasangan set resleting baru berkualitas untuk tas selempang yang macet, dol, atau giginya patah.'
            ],

            // 3. Layanan Perbaikan Koper
            [
                'name' => 'Tambal Bodi Fiberglass Koper Pecah', 
                'category' => 'Layanan Perbaikan Koper', 
                'price' => 150000, 
                'description' => 'Perbaikan bodi koper jenis hardcase atau fiberglass yang retak/bolong menggunakan plat penambal khusus agar koper kembali kokoh.'
            ],
            [
                'name' => 'Ganti Roda Koper (Set 4 Roda)', 
                'category' => 'Layanan Perbaikan Koper', 
                'price' => 300000, 
                'description' => 'Penggantian seluruh roda koper yang aus, seret, atau pecah dengan roda baru (termasuk tipe spinner 360 derajat) agar manuver kembali mulus.'
            ],
            [
                'name' => 'Ganti Tiang Troli Koper', 
                'category' => 'Layanan Perbaikan Koper', 
                'price' => 250000, 
                'description' => 'Penggantian sistem tiang tarikan (troli) koper secara menyeluruh akibat bengkok, patah, atau macet total.'
            ],
            [
                'name' => 'Ganti Handle Koper Branded', 
                'category' => 'Layanan Perbaikan Koper', 
                'price' => 150000, 
                'description' => 'Penggantian gagang pegangan atas atau samping pada koper merek premium (seperti Lojel) dengan material pengganti yang kokoh dan presisi.'
            ],
            [
                'name' => 'Servis Ringan Troli Koper', 
                'category' => 'Layanan Perbaikan Koper', 
                'price' => 80000, 
                'description' => 'Layanan perbaikan ringan, penyetelan ulang, dan pelumasan pada tiang troli koper yang seret tanpa harus mengganti keseluruhan part.'
            ],

            // 4. Layanan Perbaikan & Perawatan Sepatu
            [
                'name' => 'Ganti Outsole Sepatu Safety (Khusus)', 
                'category' => 'Layanan Perbaikan & Perawatan Sepatu', 
                'price' => 160000, 
                'description' => 'Penggantian sol bawah sepatu keamanan kerja dengan material khusus yang ekstra tebal, tahan minyak (oil-resistant), atau material spesifik lainnya.'
            ],
            [
                'name' => 'Ganti Outsole Sepatu Safety (Karet)', 
                'category' => 'Layanan Perbaikan & Perawatan Sepatu', 
                'price' => 150000, 
                'description' => 'Penggantian sol sepatu safety dengan material karet tebal standar yang tahan aus dan anti-licin.'
            ],
            [
                'name' => 'Ganti Outsole Sepatu Kantor / Pantofel', 
                'category' => 'Layanan Perbaikan & Perawatan Sepatu', 
                'price' => 160000, 
                'description' => 'Pemasangan tapak sol baru berdesain formal untuk sepatu pantofel pria agar pijakan kembali kokoh dan rapi.'
            ],
            [
                'name' => 'Ganti Outsole Fiber', 
                'category' => 'Layanan Perbaikan & Perawatan Sepatu', 
                'price' => 150000, 
                'description' => 'Penggantian seluruh bagian sol bawah dengan material fiber premium yang elegan, kaku, dan memberikan bunyi khas saat berjalan.'
            ],
            [
                'name' => 'Ganti Outsole Sepatu Wanita', 
                'category' => 'Layanan Perbaikan & Perawatan Sepatu', 
                'price' => 130000, 
                'description' => 'Penggantian sol bawah khusus sepatu wanita (seperti flat shoes atau wedges) menggunakan material yang ringan dan nyaman.'
            ],
            [
                'name' => 'Lapis Karet Sol Sepatu Olahraga/Voli', 
                'category' => 'Layanan Perbaikan & Perawatan Sepatu', 
                'price' => 120000, 
                'description' => 'Penambahan lapisan tapak karet gum atau karet anti-slip pada sol sepatu olahraga (indoor/outdoor) agar gigitan ke lantai kembali pakem.'
            ],
            [
                'name' => 'Lapis Karet Ban Pesawat (Tenis)', 
                'category' => 'Layanan Perbaikan & Perawatan Sepatu', 
                'price' => 130000, 
                'description' => 'Pelapisan sol menggunakan material karet limbah ban pesawat yang sangat tangguh untuk menahan abrasi ekstrem pada olahraga tenis.'
            ],
            [
                'name' => 'Lem Press Mesin (Sepatu Basket/Boots)', 
                'category' => 'Layanan Perbaikan & Perawatan Sepatu', 
                'price' => 80000, 
                'description' => 'Pengeleman ulang menggunakan perekat khusus dan mesin press bertekanan tinggi untuk sepatu bervolume besar yang membutuhkan kekuatan ekstra.'
            ],
            [
                'name' => 'Lem Press Mesin (Sepatu Kasual)', 
                'category' => 'Layanan Perbaikan & Perawatan Sepatu', 
                'price' => 50000, 
                'description' => 'Perbaikan sol yang menganga atau lepas menggunakan pengeleman dan press agar sepatu kasual merekat sempurna seperti buatan pabrik.'
            ],
            [
                'name' => 'Jahit Sol Sepatu Safety', 
                'category' => 'Layanan Perbaikan & Perawatan Sepatu', 
                'price' => 70000, 
                'description' => 'Penjahitan ekstra kuat mengelilingi sol dan upper sepatu safety menggunakan benang tebal agar tahan menghadapi lingkungan kerja berat.'
            ],
            [
                'name' => 'Jahit Sol Sepatu Tentara / Boots PDL', 
                'category' => 'Layanan Perbaikan & Perawatan Sepatu', 
                'price' => 50000, 
                'description' => 'Penjahitan konstruksi sepatu lars, boots, atau PDL untuk memperkuat rekatan sol agar tidak mudah jebol saat digunakan di medan ekstrem.'
            ],
            [
                'name' => 'Jahit Sol Sepatu Kantor / Kasual', 
                'category' => 'Layanan Perbaikan & Perawatan Sepatu', 
                'price' => 35000, 
                'description' => 'Penjahitan keliling tapak sepatu formal maupun kasual agar usia pakai sepatu lebih panjang dan terhindar dari sol lepas (mangap).'
            ],
            [
                'name' => 'Ganti Tutup Hak Original', 
                'category' => 'Layanan Perbaikan & Perawatan Sepatu', 
                'price' => 50000, 
                'description' => 'Penggantian bantalan ujung hak sepatu wanita (heel tips) menggunakan material berkualitas tinggi (setara orisinal) yang tidak berisik dan awet.'
            ],
            [
                'name' => 'Ganti Tutup Hak Karet/Fiber Standar', 
                'category' => 'Layanan Perbaikan & Perawatan Sepatu', 
                'price' => 40000, 
                'description' => 'Penggantian ujung hak sepatu yang aus menggunakan material standar (karet atau fiber) agar langkah kembali seimbang.'
            ],
            [
                'name' => 'Pembuatan Insole Baru (Bantalan)', 
                'category' => 'Layanan Perbaikan & Perawatan Sepatu', 
                'price' => 35000, 
                'description' => 'Pembuatan dan pemasangan bantalan alas pijak bagian dalam (insole) baru untuk semua jenis sepatu agar kaki terasa lebih empuk dan nyaman.'
            ],
            [
                'name' => 'Ganti Velcro / Perekat', 
                'category' => 'Layanan Perbaikan & Perawatan Sepatu', 
                'price' => 35000, 
                'description' => 'Penggantian kain pengait perekat (velcro) pada sepatu atau tas yang sudah berserabut dan tidak mau menempel lagi.'
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}