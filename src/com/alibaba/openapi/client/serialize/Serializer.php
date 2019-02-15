<?php

namespace kongchengsjw\umengOpenApi\com\alibaba\openapi\client\serialize;

interface Serializer
{
	public function supportedContentType();
	public function serialize($serializer);
}
