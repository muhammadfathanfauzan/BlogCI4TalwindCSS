<?php

namespace App\Controllers;

use App\Models\GaleriModel;

class Gallery extends BaseController
{
    public function index()
    {
        $galeriModel = new GaleriModel();
        $data['galeri'] = $galeriModel->findAll();

        return view('galeri', $data);
    }
}
