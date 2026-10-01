<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        $data = [
            'name' => 'Andreas Tumpal Daniel Sianturi',
            'courses' => [
                'Pemrograman Web',
                'Struktur Data',
                'Sistem Operasi',
                'Organisasi dan Arsitektur Komputer',
            ],
        ];

        return view('welcome', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'Tentang Project',
            'description' => 'Project ini dibuat untuk memenuhi Tugas Rutin 9 mata kuliah Pemrograman Web dengan fokus pada setup dasar Laravel, routing, Blade, dan MVC.',
            'stack' => ['Laravel', 'PHP', 'MySQL', 'Blade'],
        ];

        return view('about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Kontak',
            'email' => 'andreassianturiaja1122@gmail.com',
            'phone' => '082171985487',
            'socials' => ['GitHub', 'Instagram', 'LinkedIn'],
        ];

        return view('contact', $data);
    }
}
