<?php

use Eazybright\SimpleCache\SimpleCacheClient;

require "vendor/autoload.php";

use Grpc\ChannelCredentials;
use Eazybright\SimpleCache\DelRequest;
use Eazybright\SimpleCache\GetRequest;
use Eazybright\SimpleCache\SetRequest;
use Spiral\GRPC\StatusCode;

$client = new SimpleCacheClient(
    'localhost:9090',
    [
        'credentials' => ChannelCredentials::createInsecure(),
    ]
);

[$response, $status] = $client->Set(new SetRequest(['Key' => 'hello', 'Value' => 'world']))->wait();
echo "================== SET ==================\n";
echo $response->getOK() === true, "\n";

[$response, $status] = $client->Get(new GetRequest(['Key' => 'hello']))->wait();
echo "================== GET ==================\n";
echo $response->getKey(), " : ", $response->getValue(), "\n";

[$response, $status] = $client->Del(new DelRequest(['Key' => 'hello']))->wait();
echo "================== DEL ==================\n";
echo $response->getOK() === true, "\n";

[$response, $status] = $client->Get(new GetRequest(['Key' => 'hello']))->wait();
echo "================== GET ==================\n";
echo $status->code === StatusCode::NOT_FOUND, "\n";
