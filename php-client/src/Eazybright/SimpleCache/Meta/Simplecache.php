<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: simplecache.proto

namespace Eazybright\SimpleCache\Meta;

class Simplecache
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
?
simplecache.protosimplecache"(

SetRequest
Key (	
Value (	"
SetResponse

OK ("

DelRequest
Key (	"
DelResponse

OK ("

GetRequest
Key (	")
GetResponse
Key (	
Value (	2?
SimpleCacheL
Set.simplecache.SetRequest.simplecache.SetResponse"????"/v1/set:*L
Del.simplecache.DelRequest.simplecache.DelResponse"????"/v1/del:*L
Get.simplecache.GetRequest.simplecache.GetResponse"????"/v1/get:*BiZ0github.com/eazybright/simplecache/gateway/protos?Eazybright\\SimpleCache?Eazybright\\SimpleCache\\Metabproto3'
        , true);

        static::$is_initialized = true;
    }
}

