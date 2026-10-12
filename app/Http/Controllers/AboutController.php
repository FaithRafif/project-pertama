<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
   public function index() {
    return view('Admin.about', [
        'title' => 'About',
        'content' => 'Informasi tentang saya.',
        'nama' => 'Mohammad Faith El Rafif Atalla',
        'detail' => 'Saya adalah seorang siswa yang sedang mempelajari pemrograman dan teknologi.',
        'github' => 'https://github.com/FaithRafif'
    ]);
}
}
