<?php
namespace System\Diagnostics\Tracing;
final class EventPipeSessionInfo extends \System\ValueType
{

	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $StartTimeAsUTCFileTime;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $StartTimeStamp;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $TimeStampFrequency;

}