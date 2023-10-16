<?php
namespace System\Diagnostics\Tracing;
/**
 */
class EventPipeEventDispatcher extends \System\Object
{
	/**
	 * @var \System\Diagnostics\Tracing\EventPipeEventDispatcher
	 * @field
	 */
	protected readonly $Instance;
	/**
	 * @param \System\Diagnostics\Tracing\EventListener $eventListener
	 * @param \System\Diagnostics\Tracing\EventCommand $command
	 * @param \System\Boolean $enable
	 * @param \System\Diagnostics\Tracing\EventLevel $level
	 * @param \System\Diagnostics\Tracing\EventKeywords $matchAnyKeywords
	 * @return \System\Void|void
	 */
	protected  function SendCommand($eventListener, $command, $enable, $level, $matchAnyKeywords){}
	/**
	 * @param \System\Diagnostics\Tracing\EventListener $listener
	 * @return \System\Void|void
	 */
	protected  function RemoveEventListener($listener){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CommitDispatchConfiguration(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function StartDispatchTask(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function StopDispatchTask(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DispatchEventsToEventListeners(){}
	/**
	 * @param \System\Int64|int $timeStamp
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TimeStampToDateTime($timeStamp){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
