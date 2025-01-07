<?php

namespace Database\Seeders;

use App\Models\Artikel;
use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin'
        ]);

        User::factory()->create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user123'),
            'role' => 'user'
        ]);

        Category::factory()->create([
            'name' => 'Politik'
        ]);
        Category::factory()->create([
            'name' => 'Olahraga'
        ]);
        Category::factory()->create([
            'name' => 'Teknologi'
        ]);
        Category::factory()->create([
            'name' => 'Hiburan'
        ]);

        Artikel::factory()->create([
            'published_at' => now(),
            'category_id' => 4,
            'title' => '7 Shio Paling Beruntung di 2025, Tahun Ular Kayu',
            'image' => '7 shio.jpg',
            'views' => 3,
            'content' => 'Tahun 2025 merupakan Tahun Ular Kayu, dimulai pada 29 Januari 2025.

Tahun ini dipercaya membawa keberuntungan berbeda untuk setiap shio, tetapi beberapa di antaranya diprediksi akan menjadi yang paling beruntung.

Berikut daftar shio yang diprediksi mendapatkan keberuntungan besar pada Tahun Ular Kayu, lengkap dengan penjelasan singkat.

Shio paling beruntung di tahun 2025
1. Ular
Sebagai shio yang menjadi pusat perhatian tahun ini, ular diprediksi mengalami pertumbuhan besar dalam karier dan keuangan

Tahun 2025 adalah waktu yang tepat bagi pemilik zodiak ular untuk memperkuat posisi profesional dan meningkatkan kekayaan.

2. Tikus
Tikus akan menikmati hasil kerja kerasnya. Tahun ini membawa perubahan positif, terutama dalam aspek sosial, karier, dan finansial.

Dengan usaha yang konsisten, para pemilik zodiak tikus dapat mencapai pencapaian besar di berbagai bidang.

3. Kuda
Shio Kuda akan merasakan kemajuan signifikan di tempat kerja.

Promosi, pengembangan diri, atau pendidikan lanjutan menjadi peluang besar di tahun ini.

Keberuntungan karier dan kehidupan pribadi akan berjalan beriringan.

4. Naga
Tahun Ular Kayu membawa stabilitas finansial dan kesuksesan bagi Naga.

Kehidupan profesional dan tanggung jawab keluarga akan seimbang, menciptakan peluang untuk mencapai tujuan jangka panjang.

5. Kambing
Kambing diprediksi memiliki tahun yang penuh kemakmuran. Keuangan yang stabil, karier yang berkembang, serta pengakuan dari lingkungan sekitar menjadi sorotan untuk shio ini di 2025.

6. Monyet
Shio Monyet akan menghadapi tahun yang stabil, meskipun ada beberapa tantangan.

Berkat kecerdasan dan ambisi, mereka dapat melewati rintangan dan menarik peluang baru, terutama dalam aspek keuangan dan hubungan.

7. Ayam
Ayam akan mendapatkan peluang besar dalam karier dan keuangan.

Dengan kerja keras dan ketekunan, tahun ini akan membawa keuntungan finansial, kejutan menyenangkan, serta hubungan yang bermakna.'
        ]);

        Artikel::factory()->create([
            'published_at' => now(),
            'category_id' => 4,
            'title' => '8 Cara Mudah Membuat Hidup Lebih Bahagia di 2025',
            'image' => 'hidup bahagia.jpg',
            'views' => 2,
            'content' => 'Tahun 2025 merupakan Tahun Ular Kayu, dimulai pada 29 Januari 2025.

Tahun ini dipercaya membawa keberuntungan berbeda untuk setiap shio, tetapi beberapa di antaranya diprediksi akan menjadi yang paling beruntung.

Berikut daftar shio yang diprediksi mendapatkan keberuntungan besar pada Tahun Ular Kayu, lengkap dengan penjelasan singkat.

Shio paling beruntung di tahun 2025
1. Ular
Sebagai shio yang menjadi pusat perhatian tahun ini, ular diprediksi mengalami pertumbuhan besar dalam karier dan keuangan

Tahun 2025 adalah waktu yang tepat bagi pemilik zodiak ular untuk memperkuat posisi profesional dan meningkatkan kekayaan.

2. Tikus
Tikus akan menikmati hasil kerja kerasnya. Tahun ini membawa perubahan positif, terutama dalam aspek sosial, karier, dan finansial.

Dengan usaha yang konsisten, para pemilik zodiak tikus dapat mencapai pencapaian besar di berbagai bidang.

3. Kuda
Shio Kuda akan merasakan kemajuan signifikan di tempat kerja.

Promosi, pengembangan diri, atau pendidikan lanjutan menjadi peluang besar di tahun ini.

Keberuntungan karier dan kehidupan pribadi akan berjalan beriringan.

4. Naga
Tahun Ular Kayu membawa stabilitas finansial dan kesuksesan bagi Naga.

Kehidupan profesional dan tanggung jawab keluarga akan seimbang, menciptakan peluang untuk mencapai tujuan jangka panjang.

5. Kambing
Kambing diprediksi memiliki tahun yang penuh kemakmuran. Keuangan yang stabil, karier yang berkembang, serta pengakuan dari lingkungan sekitar menjadi sorotan untuk shio ini di 2025.

6. Monyet
Shio Monyet akan menghadapi tahun yang stabil, meskipun ada beberapa tantangan.

Berkat kecerdasan dan ambisi, mereka dapat melewati rintangan dan menarik peluang baru, terutama dalam aspek keuangan dan hubungan.

7. Ayam
Ayam akan mendapatkan peluang besar dalam karier dan keuangan.

Dengan kerja keras dan ketekunan, tahun ini akan membawa keuntungan finansial, kejutan menyenangkan, serta hubungan yang bermakna.'
        ]);

        Artikel::factory()->create([
            'published_at' => now(),
            'category_id' => 2,
            'title' => 'Hasil Thailand Vs Vietnam 2-3 (Agg. 3-5)',
            'image' => 'vietnam juara.jpg',
            'views' => 4,
            'content' => 'Tahun 2025 merupakan Tahun Ular Kayu, dimulai pada 29 Januari 2025.

Tahun ini dipercaya membawa keberuntungan berbeda untuk setiap shio, tetapi beberapa di antaranya diprediksi akan menjadi yang paling beruntung.

Berikut daftar shio yang diprediksi mendapatkan keberuntungan besar pada Tahun Ular Kayu, lengkap dengan penjelasan singkat.

Shio paling beruntung di tahun 2025
1. Ular
Sebagai shio yang menjadi pusat perhatian tahun ini, ular diprediksi mengalami pertumbuhan besar dalam karier dan keuangan

Tahun 2025 adalah waktu yang tepat bagi pemilik zodiak ular untuk memperkuat posisi profesional dan meningkatkan kekayaan.

2. Tikus
Tikus akan menikmati hasil kerja kerasnya. Tahun ini membawa perubahan positif, terutama dalam aspek sosial, karier, dan finansial.

Dengan usaha yang konsisten, para pemilik zodiak tikus dapat mencapai pencapaian besar di berbagai bidang.

3. Kuda
Shio Kuda akan merasakan kemajuan signifikan di tempat kerja.

Promosi, pengembangan diri, atau pendidikan lanjutan menjadi peluang besar di tahun ini.

Keberuntungan karier dan kehidupan pribadi akan berjalan beriringan.

4. Naga
Tahun Ular Kayu membawa stabilitas finansial dan kesuksesan bagi Naga.

Kehidupan profesional dan tanggung jawab keluarga akan seimbang, menciptakan peluang untuk mencapai tujuan jangka panjang.

5. Kambing
Kambing diprediksi memiliki tahun yang penuh kemakmuran. Keuangan yang stabil, karier yang berkembang, serta pengakuan dari lingkungan sekitar menjadi sorotan untuk shio ini di 2025.

6. Monyet
Shio Monyet akan menghadapi tahun yang stabil, meskipun ada beberapa tantangan.

Berkat kecerdasan dan ambisi, mereka dapat melewati rintangan dan menarik peluang baru, terutama dalam aspek keuangan dan hubungan.

7. Ayam
Ayam akan mendapatkan peluang besar dalam karier dan keuangan.

Dengan kerja keras dan ketekunan, tahun ini akan membawa keuntungan finansial, kejutan menyenangkan, serta hubungan yang bermakna.'
        ]);

        Artikel::factory()->create([
            'published_at' => now(),
            'category_id' => 2,
            'title' => 'Janji Tijjani Reijnders di Final Piala Super Italia 2024',
            'image' => 'Tijjani.jpg',
            'views' => 5,
            'content' => 'Tahun 2025 merupakan Tahun Ular Kayu, dimulai pada 29 Januari 2025.

Tahun ini dipercaya membawa keberuntungan berbeda untuk setiap shio, tetapi beberapa di antaranya diprediksi akan menjadi yang paling beruntung.

Berikut daftar shio yang diprediksi mendapatkan keberuntungan besar pada Tahun Ular Kayu, lengkap dengan penjelasan singkat.

Shio paling beruntung di tahun 2025
1. Ular
Sebagai shio yang menjadi pusat perhatian tahun ini, ular diprediksi mengalami pertumbuhan besar dalam karier dan keuangan

Tahun 2025 adalah waktu yang tepat bagi pemilik zodiak ular untuk memperkuat posisi profesional dan meningkatkan kekayaan.

2. Tikus
Tikus akan menikmati hasil kerja kerasnya. Tahun ini membawa perubahan positif, terutama dalam aspek sosial, karier, dan finansial.

Dengan usaha yang konsisten, para pemilik zodiak tikus dapat mencapai pencapaian besar di berbagai bidang.

3. Kuda
Shio Kuda akan merasakan kemajuan signifikan di tempat kerja.

Promosi, pengembangan diri, atau pendidikan lanjutan menjadi peluang besar di tahun ini.

Keberuntungan karier dan kehidupan pribadi akan berjalan beriringan.

4. Naga
Tahun Ular Kayu membawa stabilitas finansial dan kesuksesan bagi Naga.

Kehidupan profesional dan tanggung jawab keluarga akan seimbang, menciptakan peluang untuk mencapai tujuan jangka panjang.

5. Kambing
Kambing diprediksi memiliki tahun yang penuh kemakmuran. Keuangan yang stabil, karier yang berkembang, serta pengakuan dari lingkungan sekitar menjadi sorotan untuk shio ini di 2025.

6. Monyet
Shio Monyet akan menghadapi tahun yang stabil, meskipun ada beberapa tantangan.

Berkat kecerdasan dan ambisi, mereka dapat melewati rintangan dan menarik peluang baru, terutama dalam aspek keuangan dan hubungan.

7. Ayam
Ayam akan mendapatkan peluang besar dalam karier dan keuangan.

Dengan kerja keras dan ketekunan, tahun ini akan membawa keuntungan finansial, kejutan menyenangkan, serta hubungan yang bermakna.'
        ]);

        Artikel::factory()->create([
            'published_at' => now(),
            'category_id' => 1,
            'title' => 'Penetapan Wali Kota Yogyakarta Terpilih, KPU Tunggu Surat MK',
            'image' => 'politik1.jpg',
            'content' => 'Tahun 2025 merupakan Tahun Ular Kayu, dimulai pada 29 Januari 2025.

Tahun ini dipercaya membawa keberuntungan berbeda untuk setiap shio, tetapi beberapa di antaranya diprediksi akan menjadi yang paling beruntung.

Berikut daftar shio yang diprediksi mendapatkan keberuntungan besar pada Tahun Ular Kayu, lengkap dengan penjelasan singkat.

Shio paling beruntung di tahun 2025
1. Ular
Sebagai shio yang menjadi pusat perhatian tahun ini, ular diprediksi mengalami pertumbuhan besar dalam karier dan keuangan

Tahun 2025 adalah waktu yang tepat bagi pemilik zodiak ular untuk memperkuat posisi profesional dan meningkatkan kekayaan.

2. Tikus
Tikus akan menikmati hasil kerja kerasnya. Tahun ini membawa perubahan positif, terutama dalam aspek sosial, karier, dan finansial.

Dengan usaha yang konsisten, para pemilik zodiak tikus dapat mencapai pencapaian besar di berbagai bidang.

3. Kuda
Shio Kuda akan merasakan kemajuan signifikan di tempat kerja.

Promosi, pengembangan diri, atau pendidikan lanjutan menjadi peluang besar di tahun ini.

Keberuntungan karier dan kehidupan pribadi akan berjalan beriringan.

4. Naga
Tahun Ular Kayu membawa stabilitas finansial dan kesuksesan bagi Naga.

Kehidupan profesional dan tanggung jawab keluarga akan seimbang, menciptakan peluang untuk mencapai tujuan jangka panjang.

5. Kambing
Kambing diprediksi memiliki tahun yang penuh kemakmuran. Keuangan yang stabil, karier yang berkembang, serta pengakuan dari lingkungan sekitar menjadi sorotan untuk shio ini di 2025.

6. Monyet
Shio Monyet akan menghadapi tahun yang stabil, meskipun ada beberapa tantangan.

Berkat kecerdasan dan ambisi, mereka dapat melewati rintangan dan menarik peluang baru, terutama dalam aspek keuangan dan hubungan.

7. Ayam
Ayam akan mendapatkan peluang besar dalam karier dan keuangan.

Dengan kerja keras dan ketekunan, tahun ini akan membawa keuntungan finansial, kejutan menyenangkan, serta hubungan yang bermakna.'
        ]);

        Artikel::factory()->create([
            'published_at' => now(),
            'category_id' => 1,
            'title' => 'Wacana Kepala Daerah Dipilih DPRD Disebut Langkah Mundur Demokrasi',
            'image' => 'politik2.jpg',
            'content' => 'Tahun 2025 merupakan Tahun Ular Kayu, dimulai pada 29 Januari 2025.

Tahun ini dipercaya membawa keberuntungan berbeda untuk setiap shio, tetapi beberapa di antaranya diprediksi akan menjadi yang paling beruntung.

Berikut daftar shio yang diprediksi mendapatkan keberuntungan besar pada Tahun Ular Kayu, lengkap dengan penjelasan singkat.

Shio paling beruntung di tahun 2025
1. Ular
Sebagai shio yang menjadi pusat perhatian tahun ini, ular diprediksi mengalami pertumbuhan besar dalam karier dan keuangan

Tahun 2025 adalah waktu yang tepat bagi pemilik zodiak ular untuk memperkuat posisi profesional dan meningkatkan kekayaan.

2. Tikus
Tikus akan menikmati hasil kerja kerasnya. Tahun ini membawa perubahan positif, terutama dalam aspek sosial, karier, dan finansial.

Dengan usaha yang konsisten, para pemilik zodiak tikus dapat mencapai pencapaian besar di berbagai bidang.

3. Kuda
Shio Kuda akan merasakan kemajuan signifikan di tempat kerja.

Promosi, pengembangan diri, atau pendidikan lanjutan menjadi peluang besar di tahun ini.

Keberuntungan karier dan kehidupan pribadi akan berjalan beriringan.

4. Naga
Tahun Ular Kayu membawa stabilitas finansial dan kesuksesan bagi Naga.

Kehidupan profesional dan tanggung jawab keluarga akan seimbang, menciptakan peluang untuk mencapai tujuan jangka panjang.

5. Kambing
Kambing diprediksi memiliki tahun yang penuh kemakmuran. Keuangan yang stabil, karier yang berkembang, serta pengakuan dari lingkungan sekitar menjadi sorotan untuk shio ini di 2025.

6. Monyet
Shio Monyet akan menghadapi tahun yang stabil, meskipun ada beberapa tantangan.

Berkat kecerdasan dan ambisi, mereka dapat melewati rintangan dan menarik peluang baru, terutama dalam aspek keuangan dan hubungan.

7. Ayam
Ayam akan mendapatkan peluang besar dalam karier dan keuangan.

Dengan kerja keras dan ketekunan, tahun ini akan membawa keuntungan finansial, kejutan menyenangkan, serta hubungan yang bermakna.'
        ]);

        Artikel::factory()->create([
            'published_at' => now(),
            'category_id' => 3,
            'title' => 'Microsoft Gelontorkan Rp 1.295 Triliun demi Bangun Data Center AI
',
            'image' => 'teknologi1.jpg',
            'content' => 'Tahun 2025 merupakan Tahun Ular Kayu, dimulai pada 29 Januari 2025.

Tahun ini dipercaya membawa keberuntungan berbeda untuk setiap shio, tetapi beberapa di antaranya diprediksi akan menjadi yang paling beruntung.

Berikut daftar shio yang diprediksi mendapatkan keberuntungan besar pada Tahun Ular Kayu, lengkap dengan penjelasan singkat.

Shio paling beruntung di tahun 2025
1. Ular
Sebagai shio yang menjadi pusat perhatian tahun ini, ular diprediksi mengalami pertumbuhan besar dalam karier dan keuangan

Tahun 2025 adalah waktu yang tepat bagi pemilik zodiak ular untuk memperkuat posisi profesional dan meningkatkan kekayaan.

2. Tikus
Tikus akan menikmati hasil kerja kerasnya. Tahun ini membawa perubahan positif, terutama dalam aspek sosial, karier, dan finansial.

Dengan usaha yang konsisten, para pemilik zodiak tikus dapat mencapai pencapaian besar di berbagai bidang.

3. Kuda
Shio Kuda akan merasakan kemajuan signifikan di tempat kerja.

Promosi, pengembangan diri, atau pendidikan lanjutan menjadi peluang besar di tahun ini.

Keberuntungan karier dan kehidupan pribadi akan berjalan beriringan.

4. Naga
Tahun Ular Kayu membawa stabilitas finansial dan kesuksesan bagi Naga.

Kehidupan profesional dan tanggung jawab keluarga akan seimbang, menciptakan peluang untuk mencapai tujuan jangka panjang.

5. Kambing
Kambing diprediksi memiliki tahun yang penuh kemakmuran. Keuangan yang stabil, karier yang berkembang, serta pengakuan dari lingkungan sekitar menjadi sorotan untuk shio ini di 2025.

6. Monyet
Shio Monyet akan menghadapi tahun yang stabil, meskipun ada beberapa tantangan.

Berkat kecerdasan dan ambisi, mereka dapat melewati rintangan dan menarik peluang baru, terutama dalam aspek keuangan dan hubungan.

7. Ayam
Ayam akan mendapatkan peluang besar dalam karier dan keuangan.

Dengan kerja keras dan ketekunan, tahun ini akan membawa keuntungan finansial, kejutan menyenangkan, serta hubungan yang bermakna.'
        ]);

        Artikel::factory()->create([
            'published_at' => now(),
            'category_id' => 3,
            'title' => 'Tiga Bulan Menggunakan Asus Zenfone 11 Ultra, Performa Gahar
',
            'image' => 'teknologi2.jpg',
            'content' => 'Tahun 2025 merupakan Tahun Ular Kayu, dimulai pada 29 Januari 2025.

Tahun ini dipercaya membawa keberuntungan berbeda untuk setiap shio, tetapi beberapa di antaranya diprediksi akan menjadi yang paling beruntung.

Berikut daftar shio yang diprediksi mendapatkan keberuntungan besar pada Tahun Ular Kayu, lengkap dengan penjelasan singkat.

Shio paling beruntung di tahun 2025
1. Ular
Sebagai shio yang menjadi pusat perhatian tahun ini, ular diprediksi mengalami pertumbuhan besar dalam karier dan keuangan

Tahun 2025 adalah waktu yang tepat bagi pemilik zodiak ular untuk memperkuat posisi profesional dan meningkatkan kekayaan.

2. Tikus
Tikus akan menikmati hasil kerja kerasnya. Tahun ini membawa perubahan positif, terutama dalam aspek sosial, karier, dan finansial.

Dengan usaha yang konsisten, para pemilik zodiak tikus dapat mencapai pencapaian besar di berbagai bidang.

3. Kuda
Shio Kuda akan merasakan kemajuan signifikan di tempat kerja.

Promosi, pengembangan diri, atau pendidikan lanjutan menjadi peluang besar di tahun ini.

Keberuntungan karier dan kehidupan pribadi akan berjalan beriringan.

4. Naga
Tahun Ular Kayu membawa stabilitas finansial dan kesuksesan bagi Naga.

Kehidupan profesional dan tanggung jawab keluarga akan seimbang, menciptakan peluang untuk mencapai tujuan jangka panjang.

5. Kambing
Kambing diprediksi memiliki tahun yang penuh kemakmuran. Keuangan yang stabil, karier yang berkembang, serta pengakuan dari lingkungan sekitar menjadi sorotan untuk shio ini di 2025.

6. Monyet
Shio Monyet akan menghadapi tahun yang stabil, meskipun ada beberapa tantangan.

Berkat kecerdasan dan ambisi, mereka dapat melewati rintangan dan menarik peluang baru, terutama dalam aspek keuangan dan hubungan.

7. Ayam
Ayam akan mendapatkan peluang besar dalam karier dan keuangan.

Dengan kerja keras dan ketekunan, tahun ini akan membawa keuntungan finansial, kejutan menyenangkan, serta hubungan yang bermakna.'
        ]);
    }
}
