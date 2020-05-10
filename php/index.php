<?php

require __DIR__.'/vendor/autoload.php';

use Grpc\ChannelCredentials;
use Proto\StatRequest;
use Proto\StatServiceClient;

$cl = new StatServiceClient(':4040', [
    'credentials'=> ChannelCredentials::createInsecure(),
]);

$req = new StatRequest();
$req->setId(rand(1, 1000));
$req->setPid(getmypid());
$req->setRaw("example proto message");
$resp = $cl->add($req)->wait();

list($resp, $status) = $resp;
if (null === $resp) {
    throw new \RuntimeException('The response could not be retrieved.');
}

var_dump($resp->getPid());
var_dump($resp->getStatus());
var_dump($resp->getMessage());
