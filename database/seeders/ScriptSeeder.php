<?php

namespace Database\Seeders;

use App\Models\Script;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScriptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Script::create([
            'name' => "Aksara Jawa",
            'from' => "Jawa",
            'description' => "Aksara Jawa atau Hanacaraka adalah salah satu aksara tradisional Indonesia yang berkembang di pulau Jawa. Aksara ini terutama digunakan untuk menulis bahasa Jawa, tetapi dalam perkembangannya juga digunakan untuk menulis beberapa bahasa daerah lainnya seperti bahasa Sunda, Madura, Sasak, dan Melayu, serta bahasa historis seperti Sanskerta dan Kawi. Aksara Jawa merupakan turunan dari aksara Brahmi India melalui perantara aksara Kawi dan berkerabat dekat dengan aksara Bali. Aksara Jawa aktif digunakan dalam sastra maupun tulisan sehari-hari masyarakat Jawa sejak pertengahan abad ke-15 hingga pertengahan abad ke-20 sebelum fungsinya berangsur-angsur tergantikan dengan huruf Latin. Aksara ini masih diajarkan di DI Yogyakarta, Jawa Tengah, Jawa Timur, dan Cirebon serta Indramayu sebagai bagian dari muatan lokal, tetapi dengan penerapan yang terbatas dalam kehidupan sehari-hari.",
            'status' => "verified",
            'image' => "only dummy data, no photos",
        ]);
    }
}
