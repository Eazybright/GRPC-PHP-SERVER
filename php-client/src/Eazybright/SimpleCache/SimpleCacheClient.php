<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Eazybright\SimpleCache;

/**
 */
class SimpleCacheClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Eazybright\SimpleCache\SetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Set(\Eazybright\SimpleCache\SetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/simplecache.SimpleCache/Set',
        $argument,
        ['\Eazybright\SimpleCache\SetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Eazybright\SimpleCache\DelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Del(\Eazybright\SimpleCache\DelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/simplecache.SimpleCache/Del',
        $argument,
        ['\Eazybright\SimpleCache\DelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Eazybright\SimpleCache\GetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Get(\Eazybright\SimpleCache\GetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/simplecache.SimpleCache/Get',
        $argument,
        ['\Eazybright\SimpleCache\GetResponse', 'decode'],
        $metadata, $options);
    }

}
