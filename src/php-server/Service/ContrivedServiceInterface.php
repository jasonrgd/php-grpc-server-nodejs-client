<?php
# Generated by the protocol buffer compiler (spiral/php-grpc). DO NOT EDIT!
# source: contrived.proto

namespace Service;

use Spiral\GRPC;

interface ContrivedServiceInterface extends GRPC\ServiceInterface
{
    // GRPC specific service name.
    public const NAME = "service.ContrivedService";

    /**
    * @param GRPC\ContextInterface $ctx
    * @param ContrivedMessageRequest $in
    * @return ContrivedMessageResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function ContrivedMethod(GRPC\ContextInterface $ctx, ContrivedMessageRequest $in): ContrivedMessageResponse;
}
