<?php
namespace System\Diagnostics\Tracing;
final class NoOpEventProvider extends \System\Object implements
	\System\Diagnostics\Tracing\IEventProvider
{

	private function EventRegister($eventSource, $enableCallback, $callbackContext, $registrationHandle){}
	private function EventUnregister($registrationHandle){}
	private function EventWriteTransfer($registrationHandle, &$eventDescriptor, $eventHandle, $activityId, $relatedActivityId, $userDataCount, $userData){}
	private function EventActivityIdControl($ControlCode, $ActivityId){}
	private function DefineEventHandle($eventID, $eventName, $keywords, $eventVersion, $level, $pMetadata, $metadataLength){}
	/**
	 */
	public function __construct(){}
}