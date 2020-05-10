<?php

require __DIR__.'/vendor/autoload.php';

use Proto\StatRequest;
use Proto\StatServiceClient;

$cl = new StatServiceClient(':4040', [
    'credentials'=> \Grpc\ChannelCredentials::createInsecure(),
]);

$req = new StatRequest();
$resp = $cl->add($req)->wait();

list($resp, $status) = $resp;
if (null === $resp) {
    throw new \RuntimeException('The response could not be retrieved.');
}
var_dump($resp->getPid());
var_dump($resp->getStatus());
var_dump($resp->getMessage());
