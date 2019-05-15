#!/usr/bin/env bash

current=$(pwd)

../vendor/bin/generator \
--proto_path=$current/../app/grpc/protos \
--php_out=$current/../app/grpc \
--grpc_out=$current/../app/grpc \
--grpc_php_out=$current/../app/services \
--plugin=protoc-gen-grpc=$current/$1 \
--custom_plugin=protoc-gen-grpc-php=$current/../vendor/bin/protoc-gen-grpc-php-plugin.php \
$current/../app/grpc/protos

cd $current/../ && composer dump-autoload
cd $current
