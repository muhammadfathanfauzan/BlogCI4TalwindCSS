<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SliderModel;

class SliderController extends BaseController
{
    protected $sliderModel;

    public function __construct()
    {
        $this->sliderModel = new SliderModel();
    }

    public function index()
    {
        $data['sliders'] = $this->sliderModel->findAll();
        return view('admin/slider', $data);
    }

    public function simpan()
    {
        $judul = $this->request->getPost('judul');
        $gambar = $this->request->getFile('gambar');

        if ($gambar->isValid() && !$gambar->hasMoved()) {
            $namaBaru = $gambar->getRandomName();
            $gambar->move('uploads', $namaBaru);

            $this->sliderModel->insert([
                'judul' => $judul,
                'gambar' => $namaBaru
            ]);
        }

        return redirect()->to('/admin/slider');
    }

    public function edit($id)
    {
        $slider = $this->sliderModel->find($id);
        if (!$slider) {
            return redirect()->to('/admin/slider')->with('error', 'Slider tidak ditemukan');
        }
        return view('admin/slider_edit', ['slider' => $slider]);
    }

    public function update($id)
    {
        $judul = $this->request->getPost('judul');
        $gambar = $this->request->getFile('gambar');

        $dataUpdate = ['judul' => $judul];

        if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
            // Hapus gambar lama kalau ada
            $slider = $this->sliderModel->find($id);
            if ($slider && file_exists('uploads/' . $slider['gambar'])) {
                unlink('uploads/' . $slider['gambar']);
            }

            // Upload gambar baru
            $namaBaru = $gambar->getRandomName();
            $gambar->move('uploads', $namaBaru);

            $dataUpdate['gambar'] = $namaBaru;
        }

        $this->sliderModel->update($id, $dataUpdate);

        return redirect()->to('/admin/slider')->with('success', 'Slider berhasil diperbarui');
    }

    public function delete($id)
    {
        $slider = $this->sliderModel->find($id);

        if (!$slider) {
            return redirect()->to('/admin/slider')->with('error', 'Slider tidak ditemukan');
        }

        // Hapus file gambarnya dulu
        if (file_exists('uploads/' . $slider['gambar'])) {
            unlink('uploads/' . $slider['gambar']);
        }

        // Baru hapus data di DB
        $this->sliderModel->delete($id);

        return redirect()->to('/admin/slider')->with('success', 'Slider berhasil dihapus');
    }
}
