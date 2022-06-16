<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Finance;

/**
 */
class OrderClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Finance\OrderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Generate(\Finance\OrderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Order/Generate',
        $argument,
        ['\Finance\OrderResponse', 'decode'],
        $metadata, $options);
    }

}
