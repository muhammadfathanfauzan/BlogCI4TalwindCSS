<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DaftarArtikelModel;

class DaftarArtikel extends BaseController
{
    protected $daftarArtikelModel;

    public function __construct()
    {
        $this->daftarArtikelModel = new DaftarArtikelModel();
    }

    public function index()
    {
        $data['artikel'] = $this->daftarArtikelModel->findAll();
        return view('admin/daftarartikel', $data);
    }

    public function uploadSampul()
{
    $artikelId = $this->request->getPost('artikel_id');
    $file = $this->request->getFile('sampul');

    if (!$file->isValid()) {
        return redirect()->back()->with('error', 'File tidak valid');
    }

    // Validasi ukuran dan ekstensi (opsional tapi aman)
    if (!in_array($file->getExtension(), ['jpg', 'jpeg', 'png']) || $file->getSize() > 2 * 1024 * 1024) {
        return redirect()->back()->with('error', 'Hanya file JPG/PNG max 2MB yang diizinkan.');
    }

    if (!$artikelId) {
    return redirect()->back()->with('error', 'Artikel tidak dipilih');
    }

    if (!$file->hasMoved()) {
        $newName = $file->getRandomName();
        $file->move(ROOTPATH . 'public/uploads', $newName); // ✅ Pastiin ini

        $this->daftarArtikelModel->update($artikelId, ['filename' => $newName]);

        return redirect()->back()->with('success', 'Sampul berhasil diupload');
    }

    

    return redirect()->back()->with('error', 'Gagal upload file');
    }


    public function delete($id)
    {
        $artikel = $this->daftarArtikelModel->find($id);

        if ($artikel) {
            if (!empty($artikel['filename']) && file_exists(WRITEPATH . '../public/uploads/' . $artikel['filename'])) {
                unlink(WRITEPATH . '../public/uploads/' . $artikel['filename']);
            }

            $this->daftarArtikelModel->delete($id);

            return redirect()->back()->with('success', 'Artikel berhasil dihapus');
        }

        return redirect()->back()->with('error', 'Artikel tidak ditemukan');
    }
}
