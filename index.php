<?php

// https://bitbucket.org/ariya/phantomjs/downloads/

require __DIR__ . '/vendor/autoload.php';

use JonnyW\PhantomJs\Client;

$client = Client::getInstance();
$client->getEngine()->setPath(__DIR__ . '/bin/phantomjs');

$request  = $client->getMessageFactory()->createRequest();
$response = $client->getMessageFactory()->createResponse();

var_dump($request);
