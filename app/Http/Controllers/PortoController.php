<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PortoController extends Controller
{
    public function index()
    {
        // ================== PROFIL (ala LinkedIn) ==================
        $nama = 'Aisyah Nurul Hidayah';
        $title = 'Data Analyst';
        $headline = 'About me';
        $tagline = 'Saya olah data jadi cerita yang bisa dipahami dan dipakai buat ambil keputusan.';
        $about = 'I am an informatics engineering student at Pamulang University who is passionate about technology and software development. With a background in organization and leadership, I am used to working in groups, leading projects, and thinking creatively to solve challenges. Currently, I am learning programming, data processing, and system development. I believe that combining organizational expertise and technological knowledge will enable me to develop creative solutions. I am always excited to learn, collaborate, and advance myself in the IT business.';
        $lokasi = 'Bandung, Indonesia';
        $status = 'Terbuka untuk kerja lepas';
        $email = 'aisyahnurulhidayah37@gmail.com';

        $stats = [
            ['angka' => '3+', 'label' => 'Tahun Pengalaman'],
            ['angka' => '25+', 'label' => 'Project Selesai'],
            ['angka' => '15+', 'label' => 'Klien Puas'],
        ];

        $skills = ['Python', 'SQL', 'Excel', 'Leadership', 'Statistik', 'Machine Learning', 'Data Visualization', 'Data Cleaning', 'Data Analysis', 'Problem Solving'];

        // ================== RIWAYAT AKADEMIK / IPK ==================
        // Ini dipakai buat bikin grafik. Ganti sesuai IPK kamu per semester.
        $ipk = [
            ['semester' => 'Smt 1', 'nilai' => 3.53],
            ['semester' => 'Smt 2', 'nilai' => 3.64],
            ['semester' => 'Smt 3', 'nilai' => 3.68],
            ['semester' => 'Smt 4', 'nilai' => 3.73],
            ['semester' => 'Smt 5', 'nilai' => 0.00],
            ['semester' => 'Smt 6', 'nilai' => 0.00], 
            ['semester' => 'Smt 6', 'nilai' => 0.00], 
            ['semester' => 'Smt 6', 'nilai' => 0.00], 
        ];
        // ================== SOCIAL MEDIA ==================
        $socials = [
            ['nama' => 'GitHub', 'link' => "https://github.com/cha-stack"],
            ['nama' => 'LinkedIn', 'link' => 'https://www.linkedin.com/in/aisyah-nurul-hidayah-22195430b'],
            ['nama' => 'Instagram', 'link' => 'https://www.instagram.com/nuuhaaanh_/'],
            ['nama' => 'Email', 'link' => "mailto:{$email}"],
            ['nama' => 'Whatsapp', 'link' => "https://wa.me/6285780451803"],
        ];

        return view('home', compact(
            'nama', 'title', 'headline', 'tagline', 'about', 'lokasi', 'status', 'email',
            'stats', 'skills', 'ipk', 'socials'
        ));
    }
}