<?php
namespace System\Diagnostics\Tracing;
final class IncrementingPollingCounterPayloadType extends \System\Object
{
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\IncrementingCounterPayload
	 */
	public $Payload;
	/**
	 * @param \System\Diagnostics\Tracing\IncrementingCounterPayload $payload
	 */
	public function __construct($payload){}
}