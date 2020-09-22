#!/bin/sh
protoc --php_out=plugins=grpc:./ ./*.proto
#protoc --php_out=../ --grpc_out=../ ./*.proto
