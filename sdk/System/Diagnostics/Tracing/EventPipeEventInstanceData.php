<?php
namespace System\Diagnostics\Tracing;
/**
 */
class EventPipeEventInstanceData extends \System\ValueType
{
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $ProviderID;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	protected $EventID;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	protected $ThreadID;
	/**
	 * @var \System\Int64
	 * @field
	 */
	protected $TimeStamp;
	/**
	 * @var \System\Guid
	 * @field
	 */
	protected $ActivityId;
	/**
	 * @var \System\Guid
	 * @field
	 */
	protected $ChildActivityId;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $Payload;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	protected $PayloadLength;
}
