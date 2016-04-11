<?php

// https://bitbucket.org/ariya/phantomjs/downloads/

require __DIR__ . '/vendor/autoload.php';

use JonnyW\PhantomJs\Client;

$client = Client::getInstance();
$client->getEngine()->setPath(__DIR__ . '/bin/phantomjs');

$request  = $client->getMessageFactory()->createRequest();
$response = $client->getMessageFactory()->createResponse();

    $request->setMethod('GET');
    $request->setUrl('http://www.phonogram.co.jp');
    
    $client->send($request, $response);
    
    if($response->getStatus() === 200) {
        echo $response->getContent();
    }