<?php

namespace Lukieer\TS3AudioBot\Api\Bot;


use Lukieer\TS3AudioBot\Api\Request;

class bot extends request {

    public $auth;
    public $id;

    public function __construct($auth, $id)
    {
        $this->auth = $auth;
        $this->id = $id;
    }

    public function play($string)
    {
        parent::request($this->auth, $this->id, '(/play/'.urlencode($string));
    }

}
