# demo-grpc-php

## quickstart base from grpc.io
[grpc php client quickstart](https://grpc.io/docs/languages/php/quickstart/)


## generate .proto file

```shell
protoc --proto_path=. \
  --php_out=. \
  --grpc_out=. \
  --plugin=protoc-gen-grpc=/data/grpc-project/cmake/build/grpc_php_plugin \
  ./examples/protos/helloworld.proto
  
```