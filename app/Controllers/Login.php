<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AdminModel;
use Firebase\JWT\JWT;

class Login extends Controller
{
    public function index()
    {
        // Tampilkan halaman login
        return view('login');
    }

    public function submit()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        if (!$email || !$password) {
            return redirect()->to('/login')->with('error', 'Email dan password wajib diisi.');
        }

        $adminModel = new AdminModel();
        $user = $adminModel->where('email', $email)->first();

        if (!$user) {
            return redirect()->to('/login')->with('error', 'Email tidak ditemukan.');
        }

        // Cek password, pastikan password sudah di-hash di database
        if (!password_verify($password, $user['password'])) {
            return redirect()->to('/login')->with('error', 'Password salah.');
        }

        // Generate JWT
        $key = getenv('JWT_SECRET');
        $payload = [
            'iat' => time(),
            'exp' => time() + 3600, // expired 1 jam
            'data' => [
                'id' => $user['id'],
                'email' => $user['email'],
                'nama' => $user['nama'],
            ],
        ];

        $jwt = JWT::encode($payload, $key, 'HS256');

        // Simpan JWT di session
        session()->set('token', $jwt);
        session()->set('isLoggedIn', true);
        session()->set('nama', $user['nama']);
        session()->set('email', $user['email']);

        return redirect()->to('/admin/dashboard');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'Berhasil logout.');
    }
}
