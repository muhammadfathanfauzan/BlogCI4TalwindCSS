<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\GaleriModel;
use App\Models\SliderModel;

class Index extends BaseController
{
    public function index()
    {
        helper('text'); // biar word_limiter aktif

        $artikelModel = new ArtikelModel();
        $galeriModel = new GaleriModel();
        $sliderModel = new SliderModel();

        // Ambil data artikel
        $data['artikel'] = $artikelModel->orderBy('created_at', 'DESC')->findAll();

        // Ambil data galeri
        $data['galeri'] = $galeriModel->findAll();

        // Ambil data slider
        $data['sliders'] = $sliderModel->findAll();

        // Load view dan kirim semua data
        return view('index', $data);
    }
}
