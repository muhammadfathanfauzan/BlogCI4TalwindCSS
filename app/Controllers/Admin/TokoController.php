<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TokoModel;

class TokoController extends BaseController
{
    protected $tokoModel;

    public function __construct()
    {
        $this->tokoModel = new TokoModel();
    }

    public function index()
    {
        $data['toko'] = $this->tokoModel->findAll();
        return view('admin/toko/index', $data);
    }

    public function tambah()
    {
        return view('admin/toko/tambah');
    }

    public function simpan()
    {
        $this->tokoModel->save([
            'nama_toko' => $this->request->getPost('nama_toko'),
            'alamat'    => $this->request->getPost('alamat'),
            'kontak'    => $this->request->getPost('kontak'),
            'status'    => $this->request->getPost('status') ?? 'aktif'
        ]);
        return redirect()->to('/admin/toko');
    }

    public function edit($id)
    {
        $data['toko'] = $this->tokoModel->find($id);
        return view('admin/toko/edit', $data);
    }

    public function update($id)
    {
        $this->tokoModel->update($id, [
            'nama_toko' => $this->request->getPost('nama_toko'),
            'alamat'    => $this->request->getPost('alamat'),
            'kontak'    => $this->request->getPost('kontak'),
            'status'    => $this->request->getPost('status')
        ]);
        return redirect()->to('/admin/toko');
    }

    public function hapus($id)
    {
        $this->tokoModel->delete($id);
        return redirect()->to('/admin/toko');
    }
}
