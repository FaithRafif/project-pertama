<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index() {
    return view('Admin.classroom', [
        'title' => 'Classroom',
        'content' => 'Daftar kelas yang tersedia di sekolah.',
        'classroom' => \App\Models\Classroom::all(),
    ]);
}
}
