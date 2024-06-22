<?php
namespace System\Diagnostics\Tracing;
final class EventPipeEventInstanceData extends \System\ValueType
{

	/**
	 * @field
	 * @var \System\IntPtr
	 */
	protected $ProviderID;
	/**
	 * @field
	 * @var \System\UInt32
	 */
	protected $EventID;
	/**
	 * @field
	 * @var \System\UInt32
	 */
	protected $ThreadID;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $TimeStamp;
	/**
	 * @field
	 * @var \System\Guid
	 */
	protected $ActivityId;
	/**
	 * @field
	 * @var \System\Guid
	 */
	protected $ChildActivityId;
	/**
	 * @field
	 * @var \System\IntPtr
	 */
	protected $Payload;
	/**
	 * @field
	 * @var \System\UInt32
	 */
	protected $PayloadLength;

}