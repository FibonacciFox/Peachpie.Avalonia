<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EventListenerMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnableEvents_1($eventSource, $level){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnableEvents_2($eventSource, $level, $matchAnyKeyword){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnableEvents_3($eventSource, $level, $matchAnyKeyword, $arguments){}
}
/**
 */
class EventListener extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @var \System\Diagnostics\Tracing\EventListener
	 * @field
	 */
	protected $m_Next;
	/**
	 * @var \System\Diagnostics\Tracing\EventListener
	 * @field
	 */
	protected $s_Listeners;
	/**
	 * @var \System\Collections\Generic\List_1[System\WeakReference_1[System\Diagnostics\Tracing\EventSource]]
	 * @field
	 */
	protected $s_EventSources;
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_EventSourceCreated($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_EventSourceCreated($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_EventWritten($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_EventWritten($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @uses EventListenerMethodsOverride::EnableEvents_1 ($eventSource, $level)
	 * @uses EventListenerMethodsOverride::EnableEvents_2 ($eventSource, $level, $matchAnyKeyword)
	 * @uses EventListenerMethodsOverride::EnableEvents_3 ($eventSource, $level, $matchAnyKeyword, $arguments)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function EnableEvents(mixed ...$args){}
	/**
	 * @param \System\Diagnostics\Tracing\EventSource $eventSource
	 * @return \System\Void|void
	 */
	public  function DisableEvents($eventSource){}
	/**
	 * @param \System\Diagnostics\Tracing\EventSource $eventSource
	 * @return \System\Int32|int
	 */
	public static function EventSourceIndex($eventSource){}
	/**
	 * @param \System\Diagnostics\Tracing\EventSource $eventSource
	 * @return \System\Void|void
	 */
	protected  function OnEventSourceCreated($eventSource){}
	/**
	 * @param \System\Diagnostics\Tracing\EventWrittenEventArgs $eventData
	 * @return \System\Void|void
	 */
	protected  function OnEventWritten($eventData){}
	/**
	 * @param \System\Diagnostics\Tracing\EventSource $newEventSource
	 * @return \System\Void|void
	 */
	protected static function AddEventSource($newEventSource){}
	/**
	 * @return \System\Void|void
	 */
	protected static function DisposeOnShutdown(){}
	/**
	 * @param \System\Diagnostics\Tracing\EventListener $listenerToRemove
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RemoveReferencesToListenerInEventSources($listenerToRemove){}
	/**
	 * @return \System\Object|object
	 */
	protected static function get_EventListenersLock(){}
	/**
	 * @param \System\Boolean $addToListenersList
	 * @param \System\EventHandler_1 $callback
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CallBackForExistingEventSources($addToListenersList, $callback){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
