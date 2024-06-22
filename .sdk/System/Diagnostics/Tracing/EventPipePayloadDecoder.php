<?php
namespace System\Diagnostics\Tracing;
class EventPipePayloadDecoder extends \System\Object
{


	/**
	 * @param \System\Diagnostics\Tracing\EventSource+EventMetadata& $metadata
	 * @param \System\ReadOnlySpan_1 $payload [generic: System\Byte]
	 * @return \System\Object[]|array
	 */
	protected static function DecodePayload($metadata, $payload){}
}