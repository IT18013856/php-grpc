<?php
# Generated by the protocol buffer compiler (spiral/grpc). DO NOT EDIT!
# source: test.proto

namespace Service;

use Spiral\GRPC\ContextInterface;

interface EchoInterface
{
    // GRPC specific service name.
    public const NAME = "service.Echo";

    /**
     * @param ContextInterface $ctx
     * @param Message $in
     * @return Message
     *
     * @throws \Spiral\GRPC\Exception\InvokeException
     */
    public function Ping(ContextInterface $ctx, Message $in): Message;
}