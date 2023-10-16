<?php
namespace System\Diagnostics\Tracing;
/**
 */
class CounterGroup extends \System\Object
{
	/**
	 * @param \System\Diagnostics\Tracing\DiagnosticCounter $eventCounter
	 * @return \System\Void|void
	 */
	protected  function Add($eventCounter){}
	/**
	 * @param \System\Diagnostics\Tracing\DiagnosticCounter $eventCounter
	 * @return \System\Void|void
	 */
	protected  function Remove($eventCounter){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RegisterCommandCallback(){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\Diagnostics\Tracing\EventCommandEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnEventSourceCommand($sender, $e){}
	/**
	 * @param \System\Int32|int $eventSourceIndex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EnsureEventSourceIndexAvailable($eventSourceIndex){}
	/**
	 * @param \System\Diagnostics\Tracing\EventSource $eventSource
	 * @return \System\Diagnostics\Tracing\CounterGroup
	 */
	protected static function GetCounterGroup($eventSource){}
	/**
	 * @param \System\Single $pollingIntervalInSeconds
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnableTimer($pollingIntervalInSeconds){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DisableTimer(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ResetCounters(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnTimer(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PollForValues(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
