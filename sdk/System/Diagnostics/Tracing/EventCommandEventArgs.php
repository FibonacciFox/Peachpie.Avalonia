<?php
namespace System\Diagnostics\Tracing;
/**
 */
class EventCommandEventArgs extends \System\EventArgs
{
	/**
	 * @var \System\Diagnostics\Tracing\EventSource
	 * @field
	 */
	protected $eventSource;
	/**
	 * @var \System\Diagnostics\Tracing\EventDispatcher
	 * @field
	 */
	protected $dispatcher;
	/**
	 * @var \System\Diagnostics\Tracing\EventProviderType
	 * @field
	 */
	protected $eventProviderType;
	/**
	 * @var \System\Diagnostics\Tracing\EventListener
	 * @field
	 */
	protected $listener;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $perEventSourceSessionId;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $etwSessionId;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $enable;
	/**
	 * @var \System\Diagnostics\Tracing\EventLevel
	 * @field
	 */
	protected $level;
	/**
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 * @field
	 */
	protected $matchAnyKeyword;
	/**
	 * @var \System\Diagnostics\Tracing\EventCommandEventArgs
	 * @field
	 */
	protected $nextCommand;
	/**
	 * @var \System\Diagnostics\Tracing\EventCommand
	 * @property
	 */
	public $Command;
	/**
	 * @var \System\Collections\Generic\IDictionary_2[System\String,System\String]
	 * @property
	 */
	public $Arguments;
	/**
	 * @return \System\Diagnostics\Tracing\EventCommand
	 */
	public  function get_Command(){}
	/**
	 * @param \System\Diagnostics\Tracing\EventCommand $value
	 * @return \System\Void|void
	 */
	protected  function set_Command($value){}
	/**
	 * @return \System\Collections\Generic\IDictionary_2
	 */
	public  function get_Arguments(){}
	/**
	 * @param \System\Collections\Generic\IDictionary_2 $value
	 * @return \System\Void|void
	 */
	protected  function set_Arguments($value){}
	/**
	 * @param \System\Int32|int $eventId
	 * @return \System\Boolean
	 */
	public  function EnableEvent($eventId){}
	/**
	 * @param \System\Int32|int $eventId
	 * @return \System\Boolean
	 */
	public  function DisableEvent($eventId){}
}
