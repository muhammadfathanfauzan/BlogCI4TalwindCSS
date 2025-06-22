<?php

namespace App\Controllers\Admin;

use CodeIgniter\RESTful\ResourceController;
use Firebase\JWT\JWT;

class Auth extends ResourceController
{
    protected $modelName = 'App\Models\AdminModel'; // Ganti sesuai model admin kamu
    protected $format    = 'json';

    public function login()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        if (!$username || !$password) {
            return $this->fail('Username dan password harus diisi', 400);
        }

        $admin = $this->model->where('username', $username)->first();

        if (!$admin) {
            return $this->failNotFound('Admin tidak ditemukan');
        }

        // Asumsi password disimpan dalam hash, pakai password_verify
        if (!password_verify($password, $admin['password'])) {
            return $this->fail('Password salah', 401);
        }

        $key = getenv('JWT_SECRET');

        $payload = [
            'iat' => time(),
            'exp' => time() + 3600, // Token berlaku 1 jam
            'data' => [
                'id' => $admin['id'],
                'username' => $admin['username'],
            ],
        ];

        $jwt = JWT::encode($payload, $key, 'HS256');

        return $this->respond([
            'status' => 'success',
            'message' => 'Login berhasil',
            'token' => $jwt,
        ]);
    }
}
