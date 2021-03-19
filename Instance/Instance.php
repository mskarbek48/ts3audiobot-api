<?php

namespace Lukieer\TS3AudioBot\Api;


class Instance {

    private $auth;

    public function __construct(string $url, string $login, string $password)
    {
        $this->auth = ['url' => $url, 'login' => $login, 'password' => $password];
    }
    public function bot(int $id)
    {
        return new bot($this->auth, $id);
    }
}
