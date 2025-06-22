<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
{
    $token = session()->get('token');
    if (!$token) {
        return redirect()->to('/login')->with('error', 'Token tidak ditemukan, silakan login!');
    }

    $key = getenv('JWT_SECRET');
    try {
        $decoded = \Firebase\JWT\JWT::decode($token, new \Firebase\JWT\Key($key, 'HS256'));
        // Bisa simpan data user dari token ke session jika mau
    } catch (\Exception $e) {
        // Token invalid, expired, dll
        session()->remove('token');
        session()->remove('isLoggedIn');
        return redirect()->to('/login')->with('error', 'Token tidak valid, silakan login ulang!');
    }
}

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // No after filter needed
    }
}
