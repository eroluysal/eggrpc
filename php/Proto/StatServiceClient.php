<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto;

/**
 */
class StatServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Proto\StatRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Add(\Proto\StatRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/StatService/Add',
        $argument,
        ['\Proto\StatResponse', 'decode'],
        $metadata, $options);
    }

}
