<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EventProviderOverride {
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Dispose_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $disposing
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function Dispose_2 ($disposing){}
	/**
	 * @deprecated
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsEnabled_1 (){}
	/**
	 * @deprecated
	 * @param \System\Byte $level
	 * @param \System\Int64|int $keywords
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsEnabled_2 ($level, $keywords){}
	/**
	 * @deprecated
	 * @param \System\Diagnostics\Tracing\EventDescriptor& $eventDescriptor
	 * @param \System\IntPtr $eventHandle
	 * @param \System\Guid* $activityID
	 * @param \System\Guid* $childActivityID
	 * @param \System\Object $eventPayload
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected function WriteEvent_1 ($eventDescriptor, $eventHandle, $activityID, $childActivityID, $eventPayload){}
	/**
	 * @deprecated
	 * @param \System\Diagnostics\Tracing\EventDescriptor& $eventDescriptor
	 * @param \System\IntPtr $eventHandle
	 * @param \System\Guid* $activityID
	 * @param \System\Guid* $childActivityID
	 * @param \System\Int32|int $dataCount
	 * @param \System\IntPtr $data
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected function WriteEvent_2 ($eventDescriptor, $eventHandle, $activityID, $childActivityID, $dataCount, $data){}
}
class EventProvider extends \System\Object implements
	\System\IDisposable
{
	use EventProviderOverride;

	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\IEventProvider
	 */
	protected $m_eventProvider;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $m_disposed;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventLevel
	 */
	protected $Level;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 */
	protected $MatchAnyKeyword;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 */
	protected $MatchAllKeyword;
	/**
	 * @param \System\Diagnostics\Tracing\EventSource $eventSource
	 * @return \System\Void|void
	 */
	protected function Register($eventSource){}
	/**
	 * @uses EventProviderOverride::Dispose_1 <br>public , args: ()<br>
	 * @uses EventProviderOverride::Dispose_2 <br>protected , args: ($disposing)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Dispose (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public function Close(){}
	private function EtwEnableCallBack($sourceId, $controlCode, $setLevel, $anyKeyword, $allKeyword, $filterData, $callbackContext){}
	/**
	 * @param \System\Diagnostics\Tracing\ControllerCommand $command
	 * @param \System\Collections\Generic\IDictionary_2 $arguments [generic: System\String,System\String]
	 * @param \System\Int32|int $sessionId
	 * @param \System\Int32|int $etwSessionId
	 * @return \System\Void|void
	 */
	protected function OnControllerCommand($command, $arguments, $sessionId, $etwSessionId){}
	private static function FindNull($buffer, $idx){}
	private function GetSessions(){}
	private static function GetSessionInfoCallback($etwSessionId, $matchAllKeywords, $sessionList){}
	private static function GetSessionInfo($action, $sessionList){}
	private static function IndexOfSessionInList($sessions, $etwSessionId){}
	private static function GetDataFromController($etwSessionId, $filterData, &$command, &$data, &$dataStart){}
	/**
	 * @uses EventProviderOverride::IsEnabled_1 <br>public , args: ()<br>
	 * @uses EventProviderOverride::IsEnabled_2 <br>public , args: ($level, $keywords)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsEnabled (\override ...$args){}
	/**
	 * @return \System\Diagnostics\Tracing\EventProvider+WriteEventErrorCode
	 */
	public static function GetLastWriteEventError(){}
	private static function SetLastError($error){}
	private static function EncodeObject($data, $dataDescriptor, $dataBuffer, $totalEventSize){}
	/**
	 * @uses EventProviderOverride::WriteEvent_1 <br>protected , args: ($eventDescriptor, $eventHandle, $activityID, $childActivityID, $eventPayload)<br>
	 * @uses EventProviderOverride::WriteEvent_2 <br>protected , args: ($eventDescriptor, $eventHandle, $activityID, $childActivityID, $dataCount, $data)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function WriteEvent (\override ...$args){}
	/**
	 * @param \System\Diagnostics\Tracing\EventDescriptor& $eventDescriptor
	 * @param \System\IntPtr $eventHandle
	 * @param \System\Guid* $activityID
	 * @param \System\Guid* $relatedActivityID
	 * @param \System\Int32|int $dataCount
	 * @param \System\IntPtr $data
	 * @return \System\Boolean|bool
	 */
	protected function WriteEventRaw($eventDescriptor, $eventHandle, $activityID, $relatedActivityID, $dataCount, $data){}
	private function EventRegister($eventSource, $enableCallback){}
	private function EventUnregister($registrationHandle){}
}