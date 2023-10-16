<?php
namespace System\Diagnostics\Tracing;
/**
 */
class EventPipePayloadDecoder extends \System\Object
{
	/**
	 * @param \System\Diagnostics\Tracing\EventMetadata& $metadata
	 * @param \System\ReadOnlySpan_1 $payload
	 * @return \System\Object[]
	 */
	protected static function DecodePayload($metadata, $payload){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
