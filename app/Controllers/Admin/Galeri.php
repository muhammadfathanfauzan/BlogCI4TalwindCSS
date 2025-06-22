<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\GaleriModel;

class Galeri extends BaseController
{
    protected $galeriModel;

    public function __construct()
    {
        $this->galeriModel = new GaleriModel();
    }

    public function index()
    {
        // Ambil semua data galeri buat ditampilin di tabel
        $data['galeri'] = $this->galeriModel->findAll();

        // Cek apakah ada parameter 'edit' untuk load form edit
        $id_edit = $this->request->getGet('edit');
        if ($id_edit) {
            $data['edit_item'] = $this->galeriModel->find($id_edit);
        } else {
            $data['edit_item'] = null;
        }

        // Tampilkan view dan kirim data
        return view('admin/galeri', $data);
    }

    public function simpan()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'title' => 'required',
            'desc' => 'required',
            'img' => [
                'uploaded[img]',
                'mime_in[img,image/jpg,image/jpeg,image/png]',
                'max_size[img,2048]',
            ],
        ];

        if (!$this->validate($rules)) {
            // Kalau gagal validasi, balik ke halaman dengan error dan old input
            return redirect()->to('/admin/galeri')->withInput()->with('errors', $validation->getErrors());
        }

        $file = $this->request->getFile('img');
        $fileName = $file->getRandomName();
        $file->move(ROOTPATH . 'public/uploads', $fileName);

        $this->galeriModel->insert([
            'title' => $this->request->getPost('title'),
            'desc' => $this->request->getPost('desc'),
            'img' => $fileName,
        ]);

        return redirect()->to('/admin/galeri')->with('success', 'Data berhasil ditambahkan');
    }

    public function update($id)
{
    $validation = \Config\Services::validation();

    $rules = [
        'title' => 'required',
        'desc' => 'required',
        'img' => [
            'mime_in[img,image/jpg,image/jpeg,image/png]',
            'max_size[img,2048]',
        ],
    ];

    if (!$this->validate($rules)) {
        return redirect()->to('/admin/galeri?edit=' . $id)->withInput()->with('errors', $validation->getErrors());
    }

    $dataUpdate = [
        'title' => $this->request->getPost('title'),
        'desc' => $this->request->getPost('desc'),
    ];

    $file = $this->request->getFile('img');
    if ($file && $file->isValid() && !$file->hasMoved()) {
        // Hapus gambar lama
        $oldData = $this->galeriModel->find($id);
        if ($oldData && !empty($oldData['img'])) {
            $oldPath = ROOTPATH . 'public/uploads/' . $oldData['img'];
            if (file_exists($oldPath)) {
                unlink($oldPath);
            }
        }

        $fileName = $file->getRandomName();
        $file->move(ROOTPATH . 'public/uploads', $fileName);
        $dataUpdate['img'] = $fileName;
    }

    $this->galeriModel->update($id, $dataUpdate);

    return redirect()->to('/admin/galeri')->with('success', 'Data berhasil diupdate');
}


    public function hapus($id)
    {
        // Bisa tambahin hapus file gambarnya juga kalau mau
        $galeri = $this->galeriModel->find($id);
        if ($galeri && !empty($galeri['img'])) {
            $filePath = WRITEPATH . 'uploads/' . $galeri['img'];
            if (file_exists($filePath)) {
                unlink($filePath); // hapus file gambar dari server
            }
        }

        $this->galeriModel->delete($id);
        return redirect()->to('/admin/galeri')->with('success', 'Data berhasil dihapus');
    }
}
