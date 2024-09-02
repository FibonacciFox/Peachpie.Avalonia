<?php
namespace System\Diagnostics\Tracing;
interface IEventProvider
{

	/**
	 * @param \System\Diagnostics\Tracing\EventSource $eventSource
	 * @param \Interop+Advapi32+EtwEnableCallback $enableCallback
	 * @param \System\Void* $callbackContext
	 * @param \System\Int64& $registrationHandle
	 * @return \System\UInt32
	 */
	public function EventRegister($eventSource, $enableCallback, $callbackContext, $registrationHandle);
	/**
	 * @param \System\Int64|int $registrationHandle
	 * @return \System\UInt32
	 */
	public function EventUnregister($registrationHandle);
	/**
	 * @param \System\Int64|int $registrationHandle
	 * @param \System\Diagnostics\Tracing\EventDescriptor& &$eventDescriptor
	 * @param \System\IntPtr $eventHandle
	 * @param \System\Guid* $activityId
	 * @param \System\Guid* $relatedActivityId
	 * @param \System\Int32|int $userDataCount
	 * @param \System\Diagnostics\Tracing\EventProvider+EventData* $userData
	 * @return \System\Diagnostics\Tracing\EventProvider+WriteEventErrorCode
	 */
	public function EventWriteTransfer($registrationHandle, &$eventDescriptor, $eventHandle, $activityId, $relatedActivityId, $userDataCount, $userData);
	/**
	 * @param \Interop+Advapi32+ActivityControl $controlCode
	 * @param \System\Guid& $activityId
	 * @return \System\Int32|int
	 */
	public function EventActivityIdControl($controlCode, $activityId);
	/**
	 * @param \System\UInt32 $eventID
	 * @param \System\String|string $eventName
	 * @param \System\Int64|int $keywords
	 * @param \System\UInt32 $eventVersion
	 * @param \System\UInt32 $level
	 * @param \System\Byte* $pMetadata
	 * @param \System\UInt32 $metadataLength
	 * @return \System\IntPtr
	 */
	public function DefineEventHandle($eventID, $eventName, $keywords, $eventVersion, $level, $pMetadata, $metadataLength);
}