<?php

// PARAMETRI DA MODIFICARE
$WEBHOOK_URL = 'https://Ulquiorra-Schiffer.heroku.com/execute.php';
$BOT_TOKEN = '1245166485:AAFrYttGfp0hyrFr9padDgHppExk21ZkW8M';

// NON APPORTARE MODIFICHE NEL CODICE SEGUENTE
$parameters = array('url' => $WEBHOOK_URL);
$url = \sprintf('https://api.telegram.org/bot%s/setWebhook?%s', $BOT_TOKEN, \http_build_query($parameters));
$handle = \curl_init($url);
\curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
\curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
\curl_setopt($handle, CURLOPT_TIMEOUT, 60);
$result = \curl_exec($handle);
\curl_close($handle);
\print_r($result);
