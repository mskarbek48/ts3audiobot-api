<?php

namespace Lukieer\TS3AudioBot\Api;

abstract class request {

    public function request(array $auth, int $id, string $api)
    {
        $login = $auth['login'];
		$password = $auth['password'];
		$url = $auth['url'];
		$url = $url.'/api/bot/use/'.$id.'/'.$api;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($ch, CURLOPT_USERPWD, "$login:$password");
		$result = curl_exec($ch);
		curl_close($ch);  
		return json_decode($result, true);
    }
}
