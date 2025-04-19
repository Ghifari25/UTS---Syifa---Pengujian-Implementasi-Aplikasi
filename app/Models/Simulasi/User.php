<?php

namespace App\Models\Simulasi;

class User
{
    public $email;
    public $password;

    public function __construct(string $email, string $password)
    {
        $this->email    = $email;
        $this->password = $password;
    }

    public function login(): bool
    {
        return $this->email === "user@example.com"
            && $this->password === "1234";
    }
}
