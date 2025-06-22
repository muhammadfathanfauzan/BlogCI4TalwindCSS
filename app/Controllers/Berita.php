<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class Berita extends BaseController
{
    public function index()
    {
        helper('text'); // <- load helper duluan
        $model = new \App\Models\ArtikelModel();
        $data['artikel'] = $model->findAll();

        return view('berita', $data);
        
    }
    
}
