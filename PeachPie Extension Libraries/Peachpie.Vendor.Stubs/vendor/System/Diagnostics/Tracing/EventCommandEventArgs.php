<?php
namespace System\Diagnostics\Tracing;
class EventCommandEventArgs extends \System\EventArgs
{
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventSource
	 */
	protected $eventSource;
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventDispatcher
	 */
	protected $dispatcher;
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventProviderType
	 */
	protected $eventProviderType;
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventListener
	 */
	protected $listener;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $perEventSourceSessionId;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $etwSessionId;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $enable;
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventLevel
	 */
	protected $level;
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 */
	protected $matchAnyKeyword;
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventCommandEventArgs
	 */
	protected $nextCommand;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventCommand
	 */
	public $Command;
	/**
	 * @property
	 * @var \System\Collections\Generic\IDictionary_2[System\String,System\String]
	 */
	public $Arguments;
	/**
	 * @param \System\Int32|int $eventId
	 * @return \System\Boolean|bool
	 */
	public function EnableEvent($eventId){}
	/**
	 * @param \System\Int32|int $eventId
	 * @return \System\Boolean|bool
	 */
	public function DisableEvent($eventId){}
}