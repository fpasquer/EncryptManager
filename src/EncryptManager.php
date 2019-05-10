<?php

namespace Fpasquer\EncryptManagerBundle\src;

class EncryptManager
{
    /**
     * @var string
    */
    private $key;

    /**
     * @var string
    */
    private $iv;

    /**
     * @var string
    */
    private $method;

    public function __construct($method = "AES-256-CBC")
    {
        $key = getenv('APP_SECRET');
        $this->iv = substr($key, 0, 16);
        $this->key = hash('sha256', $key);
        $this->method = $method;
    }

    public function encrypt(string $str)
    {
        return openssl_encrypt($str, $this->method, $this->key, 0, $this->iv);
    }

    public function decrypt(string $str) : string
    {
        return openssl_decrypt($str, $this->method, $this->key, 0, $this->iv);
    }
}