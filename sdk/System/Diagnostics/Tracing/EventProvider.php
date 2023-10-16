<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EventProviderMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_2($disposing){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsEnabled_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsEnabled_2($level, $keywords){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function WriteEvent_1($eventDescriptor, $eventHandle, $activityID, $childActivityID, $eventPayload){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function WriteEvent_2($eventDescriptor, $eventHandle, $activityID, $childActivityID, $dataCount, $data){}
}
/**
 */
class EventProvider extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @var \System\Diagnostics\Tracing\IEventProvider
	 * @field
	 */
	protected $m_eventProvider;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $m_disposed;
	/**
	 * @var \System\Diagnostics\Tracing\EventLevel
	 * @property
	 */
	protected $Level;
	/**
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 * @property
	 */
	protected $MatchAnyKeyword;
	/**
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 * @property
	 */
	protected $MatchAllKeyword;
	/**
	 * @param \System\Diagnostics\Tracing\EventSource $eventSource
	 * @return \System\Void|void
	 */
	protected  function Register($eventSource){}
	/**
	 * @uses EventProviderMethodsOverride::Dispose_1 ()
	 * @uses EventProviderMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function Close(){}
	/**
	 * @param \System\Guid* $sourceId
	 * @param \System\Int32|int $controlCode
	 * @param \System\Byte $setLevel
	 * @param \System\Int64|int $anyKeyword
	 * @param \System\Int64|int $allKeyword
	 * @param \\EVENT_FILTER_DESCRIPTOR* $filterData
	 * @param \System\Void* $callbackContext
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EtwEnableCallBack($sourceId, $controlCode, $setLevel, $anyKeyword, $allKeyword, $filterData, $callbackContext){}
	/**
	 * @param \System\Diagnostics\Tracing\ControllerCommand $command
	 * @param \System\Collections\Generic\IDictionary_2 $arguments
	 * @param \System\Int32|int $sessionId
	 * @param \System\Int32|int $etwSessionId
	 * @return \System\Void|void
	 */
	protected  function OnControllerCommand($command, $arguments, $sessionId, $etwSessionId){}
	/**
	 * @return \System\Diagnostics\Tracing\EventLevel
	 */
	protected  function get_Level(){}
	/**
	 * @param \System\Diagnostics\Tracing\EventLevel $value
	 * @return \System\Void|void
	 */
	protected  function set_Level($value){}
	/**
	 * @return \System\Diagnostics\Tracing\EventKeywords
	 */
	protected  function get_MatchAnyKeyword(){}
	/**
	 * @param \System\Diagnostics\Tracing\EventKeywords $value
	 * @return \System\Void|void
	 */
	protected  function set_MatchAnyKeyword($value){}
	/**
	 * @return \System\Diagnostics\Tracing\EventKeywords
	 */
	protected  function get_MatchAllKeyword(){}
	/**
	 * @param \System\Diagnostics\Tracing\EventKeywords $value
	 * @return \System\Void|void
	 */
	protected  function set_MatchAllKeyword($value){}
	/**
	 * @param \System\Byte[] $buffer
	 * @param \System\Int32|int $idx
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FindNull($buffer, $idx){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetSessions(){}
	/**
	 * @param \System\Int32|int $etwSessionId
	 * @param \System\Int64|int $matchAllKeywords
	 * @param \System\Collections\Generic\List_1& $sessionList
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetSessionInfoCallback($etwSessionId, $matchAllKeywords, $sessionList){}
	/**
	 * @param \System\Diagnostics\Tracing\SessionInfoCallback $action
	 * @param \System\Collections\Generic\List_1& $sessionList
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetSessionInfo($action, $sessionList){}
	/**
	 * @param \System\Collections\Generic\List_1 $sessions
	 * @param \System\Int32|int $etwSessionId
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IndexOfSessionInList($sessions, $etwSessionId){}
	/**
	 * @param \System\Int32|int $etwSessionId
	 * @param \\EVENT_FILTER_DESCRIPTOR* $filterData
	 * @param \System\Diagnostics\Tracing\ControllerCommand& $command
	 * @param \System\Byte[]& $data
	 * @param \System\Int32& $dataStart
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetDataFromController($etwSessionId, $filterData, $command, $data, $dataStart){}
	/**
	 * @uses EventProviderMethodsOverride::IsEnabled_1 ()
	 * @uses EventProviderMethodsOverride::IsEnabled_2 ($level, $keywords)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsEnabled(mixed ...$args){}
	/**
	 * @return \System\Diagnostics\Tracing\WriteEventErrorCode
	 */
	public static function GetLastWriteEventError(){}
	/**
	 * @param \System\Diagnostics\Tracing\WriteEventErrorCode $error
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetLastError($error){}
	/**
	 * @param \System\Object& $data
	 * @param \System\Diagnostics\Tracing\EventData*& $dataDescriptor
	 * @param \System\Byte*& $dataBuffer
	 * @param \System\UInt32& $totalEventSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EncodeObject($data, $dataDescriptor, $dataBuffer, $totalEventSize){}
	/**
	 * @uses EventProviderMethodsOverride::WriteEvent_1 ($eventDescriptor, $eventHandle, $activityID, $childActivityID, $eventPayload)
	 * @uses EventProviderMethodsOverride::WriteEvent_2 ($eventDescriptor, $eventHandle, $activityID, $childActivityID, $dataCount, $data)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteEvent(mixed ...$args){}
	/**
	 * @param \System\Diagnostics\Tracing\EventDescriptor& $eventDescriptor
	 * @param \System\IntPtr $eventHandle
	 * @param \System\Guid* $activityID
	 * @param \System\Guid* $relatedActivityID
	 * @param \System\Int32|int $dataCount
	 * @param \System\IntPtr $data
	 * @return \System\Boolean
	 */
	protected  function WriteEventRaw($eventDescriptor, $eventHandle, $activityID, $relatedActivityID, $dataCount, $data){}
	/**
	 * @param \System\Diagnostics\Tracing\EventSource $eventSource
	 * @param \\EtwEnableCallback $enableCallback
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EventRegister($eventSource, $enableCallback){}
	/**
	 * @param \System\Int64|int $registrationHandle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EventUnregister($registrationHandle){}
	/**
	 * @param \\EVENT_INFO_CLASS $eventInfoClass
	 * @param \System\Void* $data
	 * @param \System\UInt32 $dataSize
	 * @return \System\Int32|int
	 */
	protected  function SetInformation($eventInfoClass, $data, $dataSize){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
