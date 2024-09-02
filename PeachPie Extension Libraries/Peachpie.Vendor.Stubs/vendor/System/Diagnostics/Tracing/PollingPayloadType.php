<?php
namespace System\Diagnostics\Tracing;
final class PollingPayloadType extends \System\Object
{
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\CounterPayload
	 */
	public $Payload;
	/**
	 * @param \System\Diagnostics\Tracing\CounterPayload $payload
	 */
	public function __construct($payload){}
}