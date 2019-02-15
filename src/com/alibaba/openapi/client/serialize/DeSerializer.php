<?php

namespace ltuoaHg\umengOpenApi\com\alibaba\openapi\client\serialize;

interface DeSerializer
{
	public function supportedContentType();
	public function deSerialize($deSerializer, $resultType, $charSet);
	public function buildException($deSerializer, $resultType, $charSet);
}
