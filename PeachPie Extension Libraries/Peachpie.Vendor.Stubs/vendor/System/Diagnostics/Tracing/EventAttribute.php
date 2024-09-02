<?php
namespace System\Diagnostics\Tracing;
final class EventAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $EventId;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventLevel
	 */
	public $Level;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 */
	public $Keywords;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 */
	public $Opcode;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventTask
	 */
	public $Task;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventChannel
	 */
	public $Channel;
	/**
	 * @property
	 * @var \System\Byte
	 */
	public $Version;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Message;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventTags
	 */
	public $Tags;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventActivityOptions
	 */
	public $ActivityOptions;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Int32|int $eventId
	 */
	public function __construct($eventId){}
}