<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ArtikelModel;

class Artikel extends BaseController
{
    public function index()
    {
        return view('admin/tulisartikel');
    }

    public function simpan()
    {
        $model = new ArtikelModel();

        $judul = $this->request->getPost('judul');
        $kategori = $this->request->getPost('kategori');
        $isi = $this->request->getPost('isi');

        $file = $this->request->getFile('gambar');
        $filename = null;

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $folderPath = FCPATH . 'uploads/artikel';

            // Cek dan buat folder kalau belum ada
            if (!is_dir($folderPath)) {
                mkdir($folderPath, 0755, true);
            }

            $filename = $file->getRandomName();
            $file->move('uploads', $filename);
        }

        $data = [
            'judul' => $judul,
            'kategori' => $kategori,
            'isi' => $isi,
            'filename' => $filename,
        ];

        $model->insert($data);

        return redirect()->to('/admin/artikel')->with('success', 'Artikel berhasil disimpan!');
    }
}
