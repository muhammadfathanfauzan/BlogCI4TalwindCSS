<?php

use \Firebase\JWT\JWT;
use \Firebase\JWT\Key;

function generate_jwt($data)
{
    $key = getenv('JWT_SECRET');
    $issuedAt = time();
    $expire = $issuedAt + 3600; // 1 jam

    $payload = array(
        "iat" => $issuedAt,
        "exp" => $expire,
        "data" => $data
    );

    return JWT::encode($payload, $key, 'HS256');
}

function decode_jwt($jwt)
{
    $key = getenv('JWT_SECRET');
    return JWT::decode($jwt, new Key($key, 'HS256'));
}
