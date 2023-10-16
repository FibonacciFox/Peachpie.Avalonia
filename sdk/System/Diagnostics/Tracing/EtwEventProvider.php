<?php
namespace System\Diagnostics\Tracing;
/**
 */
class EtwEventProvider extends \System\Object implements 
	\System\Diagnostics\Tracing\IEventProvider
{
	/**
	 * @param \System\Diagnostics\Tracing\EventSource $eventSource
	 * @param \\EtwEnableCallback $enableCallback
	 * @param \System\Void* $callbackContext
	 * @param \System\Int64& $registrationHandle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EventRegister($eventSource, $enableCallback, $callbackContext, $registrationHandle){}
	/**
	 * @param \System\Int64|int $registrationHandle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EventUnregister($registrationHandle){}
	/**
	 * @param \System\Int64|int $registrationHandle
	 * @param \System\Diagnostics\Tracing\EventDescriptor& $eventDescriptor
	 * @param \System\IntPtr $eventHandle
	 * @param \System\Guid* $activityId
	 * @param \System\Guid* $relatedActivityId
	 * @param \System\Int32|int $userDataCount
	 * @param \System\Diagnostics\Tracing\EventData* $userData
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EventWriteTransfer($registrationHandle, $eventDescriptor, $eventHandle, $activityId, $relatedActivityId, $userDataCount, $userData){}
	/**
	 * @param \\ActivityControl $ControlCode
	 * @param \System\Guid& $ActivityId
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EventActivityIdControl($ControlCode, $ActivityId){}
	/**
	 * @param \System\UInt32 $eventID
	 * @param \System\String|string $eventName
	 * @param \System\Int64|int $keywords
	 * @param \System\UInt32 $eventVersion
	 * @param \System\UInt32 $level
	 * @param \System\Byte* $pMetadata
	 * @param \System\UInt32 $metadataLength
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DefineEventHandle($eventID, $eventName, $keywords, $eventVersion, $level, $pMetadata, $metadataLength){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
