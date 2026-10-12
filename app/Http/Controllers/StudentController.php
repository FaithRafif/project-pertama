<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        return view('Admin.student', [
            'title' => 'Student',
            'content' => 'Daftar siswa yang terdaftar di sekolah.',
            'students' => \App\Models\Student::all(),
        ]);
    }
}
