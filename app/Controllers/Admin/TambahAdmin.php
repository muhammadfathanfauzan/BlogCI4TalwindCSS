<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminBlogModel;

class TambahAdmin extends BaseController
{
    protected $adminModel;

    public function __construct()
    {
        $this->adminModel = new AdminBlogModel();
    }

    public function index()
    {
        $data['admins'] = $this->adminModel->findAll();
        return view('admin/tambahadmin', $data);
    }

    public function simpan()
    {
        $this->adminModel->save([
            'nama'     => $this->request->getPost('nama'),
            'email'    => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ]);
        return redirect()->to('/admin/tambahadmin');
    }

    public function edit($id)
    {
    $data['edit'] = $this->adminModel->find($id);
    $data['admins'] = $this->adminModel->findAll();
    return view('admin/tambahadmin', $data);
    }

    public function update($id)
    {
        $this->adminModel->update($id, [
            'nama'     => $this->request->getPost('nama'),
            'email'    => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ]);
        return redirect()->to('/admin/tambahadmin');
    }

    public function hapus($id)
    {
        $this->adminModel->delete($id);
        return redirect()->to('/admin/tambahadmin');
    }
}
