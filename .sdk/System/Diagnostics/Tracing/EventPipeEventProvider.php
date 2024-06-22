<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EventPipeEventProviderOverride {
	/**
	 * @deprecated
	 * @param \Interop+Advapi32+ActivityControl $controlCode
	 * @param \System\Guid& $activityId
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function EventActivityIdControl_1 ($controlCode, $activityId){}
	/**
	 * @deprecated
	 * @param \Interop+Advapi32+ActivityControl $controlCode
	 * @param \System\Guid& $activityId
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function EventActivityIdControl_2 ($controlCode, $activityId){}
}
final class EventPipeEventProvider extends \System\Object implements
	\System\Diagnostics\Tracing\IEventProvider
{
	use EventPipeEventProviderOverride;


	private function EventRegister($eventSource, $enableCallback, $callbackContext, $registrationHandle){}
	private function EventUnregister($registrationHandle){}
	private function EventWriteTransfer($registrationHandle, &$eventDescriptor, $eventHandle, $activityId, $relatedActivityId, $userDataCount, $userData){}
	/**
	 * @uses EventPipeEventProviderOverride::EventActivityIdControl_1 <br>private , args: ($controlCode, $activityId)<br>
	 * @uses EventPipeEventProviderOverride::EventActivityIdControl_2 <br>protected , args: ($controlCode, $activityId)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function EventActivityIdControl (\override ...$args){}
	private function DefineEventHandle($eventID, $eventName, $keywords, $eventVersion, $level, $pMetadata, $metadataLength){}
	/**
	 */
	public function __construct(){}
}