<?php 

namespace App\Controllers;

use App\Models\ArtikelModel;  // ganti dari ArticleModel ke ArtikelModel
use App\Models\CommentModel;
use App\Models\CategoryModel;

class Admin extends BaseController
{
    public function dashboard()
    {
        $artikelModel = new ArtikelModel();

        // Total artikel
        $totalArtikel = $artikelModel->countAllResults();

        // Total kategori unik
        $totalKategori = $artikelModel->distinct()->select('kategori')->countAllResults();

        // Ambil artikel terbaru 5
        $artikelTerbaru = $artikelModel->orderBy('id', 'DESC')->findAll(5);

        $data = [
            'totalArtikel' => $totalArtikel,
            'totalKategori' => $totalKategori,
            'artikelTerbaru' => $artikelTerbaru,
        ];

        return view('admin/dashboard', $data);
    }
}
