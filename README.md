# eggrpc
The repository of experimental gRPC server and client for background processes. 

Protoc build command is:

    protoc -I proto --go_out=plugins=grpc:proto --php_out=php --grpc_out=php --plugin=protoc-gen-grpc=`which grpc_php_plugin` stat.proto
