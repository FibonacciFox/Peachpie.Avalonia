<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EventListenerOverride {
	/**
	 * @deprecated
	 * @param \System\Diagnostics\Tracing\EventSource $eventSource
	 * @param \System\Diagnostics\Tracing\EventLevel $level
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function EnableEvents_1 ($eventSource, $level){}
	/**
	 * @deprecated
	 * @param \System\Diagnostics\Tracing\EventSource $eventSource
	 * @param \System\Diagnostics\Tracing\EventLevel $level
	 * @param \System\Diagnostics\Tracing\EventKeywords $matchAnyKeyword
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function EnableEvents_2 ($eventSource, $level, $matchAnyKeyword){}
	/**
	 * @deprecated
	 * @param \System\Diagnostics\Tracing\EventSource $eventSource
	 * @param \System\Diagnostics\Tracing\EventLevel $level
	 * @param \System\Diagnostics\Tracing\EventKeywords $matchAnyKeyword
	 * @param \System\Collections\Generic\IDictionary_2 $arguments [generic: System\String,System\String]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function EnableEvents_3 ($eventSource, $level, $matchAnyKeyword, $arguments){}
}
class EventListener extends \System\Object implements
	\System\IDisposable
{
	use EventListenerOverride;

	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventListener
	 */
	protected $m_Next;
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventListener
	 */
	protected static $s_Listeners;
	/**
	 * @field
	 * @var \System\Collections\Generic\List_1[System\WeakReference_1[System\Diagnostics\Tracing\EventSource]]
	 */
	protected static $s_EventSources;
	/**
	 * @param \System\EventHandler_1 $value [generic: System\Diagnostics\Tracing\EventSourceCreatedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_EventSourceCreated($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\Diagnostics\Tracing\EventSourceCreatedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_EventSourceCreated($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\Diagnostics\Tracing\EventWrittenEventArgs]
	 * @return \System\Void|void
	 */
	public function add_EventWritten($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\Diagnostics\Tracing\EventWrittenEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_EventWritten($value){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @uses EventListenerOverride::EnableEvents_1 <br>public , args: ($eventSource, $level)<br>
	 * @uses EventListenerOverride::EnableEvents_2 <br>public , args: ($eventSource, $level, $matchAnyKeyword)<br>
	 * @uses EventListenerOverride::EnableEvents_3 <br>public , args: ($eventSource, $level, $matchAnyKeyword, $arguments)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function EnableEvents (\override ...$args){}
	/**
	 * @param \System\Diagnostics\Tracing\EventSource $eventSource
	 * @return \System\Void|void
	 */
	public function DisableEvents($eventSource){}
	/**
	 * @param \System\Diagnostics\Tracing\EventSource $eventSource
	 * @return \System\Int32|int
	 */
	public static function EventSourceIndex($eventSource){}
	/**
	 * @param \System\Diagnostics\Tracing\EventSource $eventSource
	 * @return \System\Void|void
	 */
	protected function OnEventSourceCreated($eventSource){}
	/**
	 * @param \System\Diagnostics\Tracing\EventWrittenEventArgs $eventData
	 * @return \System\Void|void
	 */
	protected function OnEventWritten($eventData){}
	/**
	 * @param \System\Diagnostics\Tracing\EventSource $newEventSource
	 * @return \System\Void|void
	 */
	protected static function AddEventSource($newEventSource){}
	/**
	 * @return \System\Void|void
	 */
	protected static function DisposeOnShutdown(){}
	private static function RemoveReferencesToListenerInEventSources($listenerToRemove){}
	private function CallBackForExistingEventSources($addToListenersList, $callback){}
	/**
	 */
	public function __construct(){}
}