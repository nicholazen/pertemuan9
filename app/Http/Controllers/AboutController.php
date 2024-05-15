<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            'nama' => 'jenal abidin',
            'nim' => '0110123152',
            'programStudi' => 'Sistem Informasi',
            'tahunAngkatan' => '2023'
        ]);
    }
} 