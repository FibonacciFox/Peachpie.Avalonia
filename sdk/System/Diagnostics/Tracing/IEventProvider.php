<?php
namespace System\Diagnostics\Tracing;
/**
 */
interface IEventProvider
{
	/**
	 * @param \System\Diagnostics\Tracing\EventSource $eventSource
	 * @param \\EtwEnableCallback $enableCallback
	 * @param \System\Void* $callbackContext
	 * @param \System\Int64& $registrationHandle
	 */
	public function EventRegister($eventSource, $enableCallback, $callbackContext, $registrationHandle);
	/**
	 * @param \System\Int64|int $registrationHandle
	 */
	public function EventUnregister($registrationHandle);
	/**
	 * @param \System\Int64|int $registrationHandle
	 * @param \System\Diagnostics\Tracing\EventDescriptor& $eventDescriptor
	 * @param \System\IntPtr $eventHandle
	 * @param \System\Guid* $activityId
	 * @param \System\Guid* $relatedActivityId
	 * @param \System\Int32|int $userDataCount
	 * @param \System\Diagnostics\Tracing\EventData* $userData
	 */
	public function EventWriteTransfer($registrationHandle, $eventDescriptor, $eventHandle, $activityId, $relatedActivityId, $userDataCount, $userData);
	/**
	 * @param \\ActivityControl $controlCode
	 * @param \System\Guid& $activityId
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
	 */
	public function DefineEventHandle($eventID, $eventName, $keywords, $eventVersion, $level, $pMetadata, $metadataLength);
}
