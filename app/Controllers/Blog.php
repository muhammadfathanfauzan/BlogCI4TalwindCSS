<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class Blog extends BaseController
{
    public function index()
    {
        $model = new ArtikelModel();
        $data['artikel'] = $model->findAll(); // ambil semua data artikel
        return view('berita', $data); // ganti ke view 'berita'
    }
}
