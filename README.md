# ts3audiobot-api
During work


# Examples 

* Play youtube url on bot id 15

```
<?php

require_once('TS3AudioBot/Autoloader.php');


$ts3ab = new Lukieer\TS3AudioBot\Api\Instance('51.43.53.56', 'login', 'password');

$test = $ts3ab->bot(15)->play('https://www.youtube.com/watch?v=nZEbCkXJV1o');

print_r($test);

```
