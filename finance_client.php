<?php
/*
 *
 * Copyright 2015 gRPC authors.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

// To generate the necessary proto classes:
// $ protoc --proto_path=../protos --php_out=. --grpc_out=.
//   --plugin=protoc-gen-grpc=../../bins/opt/grpc_php_plugin
//   ../protos/helloworld.proto

use Finance\OrderRequest;

require dirname(__FILE__).'/vendor/autoload.php';

function generate($hostname, $name)
{
    $client = new Finance\OrderClient($hostname, [
        'credentials' => Grpc\ChannelCredentials::createInsecure(),
    ]);
    $request = new OrderRequest();
    $request->setAmount(123);
    $request->setMethod('alipay');
    $request->setPayer($name);
    $request->setType('crm');
    $request->setUrl('crm.com');
    list($response, $status) = $client->Generate($request)->wait();
    if ($status->code !== Grpc\STATUS_OK) {
        echo "[$hostname]ERROR: " . $status->code . ", " . $status->details . PHP_EOL;
        exit(1);
    }
    echo print_r($response->getAlipay()->url, true) . PHP_EOL;
    echo print_r($response->getWechat()->config->app_id, true) . PHP_EOL;
}

$name = !empty($argv[1]) ? $argv[1] : 'world';
$hostname = !empty($argv[2]) ? $argv[2] : '192.168.2.54:6010';
generate($hostname, $name);
