<?php


namespace Blockchain;


class Encryption
{
    const CIPHER = 'AES-128-CFB';
    public static $secret_iv  = 'FFF000XXX';

    public function encrypt(string $data, string $key = null): string
    {
        return openssl_encrypt(
            ($data),
            self::CIPHER,
            $key,
            0,
            hash('fnv164', self::$secret_iv)
        );
    }


    public function decrypt(string $data, string $key = null)
    {
        return openssl_decrypt(
            ($data),
            self::CIPHER,
            $key,
            0,
            hash('fnv164', self::$secret_iv)
        );
    }

}