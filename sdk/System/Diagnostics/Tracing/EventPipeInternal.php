<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EventPipeInternalMethodsOverride
{
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] private static function Enable_1($outputFile, $format, $circularBufferSizeInMB, $providers, $numProviders){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] protected static function Enable_2($outputFile, $format, $circularBufferSizeInMB, $providers){}
}
/**
 */
class EventPipeInternal extends \System\Object
{
	/**
	 * @uses EventPipeInternalMethodsOverride::Enable_1 ($outputFile, $format, $circularBufferSizeInMB, $providers, $numProviders)
	 * @uses EventPipeInternalMethodsOverride::Enable_2 ($outputFile, $format, $circularBufferSizeInMB, $providers)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Enable(mixed ...$args){}
	/**
	 * @param \System\UInt64 $sessionID
	 * @return \System\Void|void
	 */
	protected static function Disable($sessionID){}
	/**
	 * @param \System\String|string $providerName
	 * @param \\EtwEnableCallback $callbackFunc
	 * @return \System\IntPtr
	 */
	protected static function CreateProvider($providerName, $callbackFunc){}
	/**
	 * @param \System\IntPtr $provHandle
	 * @param \System\UInt32 $eventID
	 * @param \System\Int64|int $keywords
	 * @param \System\UInt32 $eventVersion
	 * @param \System\UInt32 $level
	 * @param \System\Void* $pMetadata
	 * @param \System\UInt32 $metadataLength
	 * @return \System\IntPtr
	 */
	protected static function DefineEvent($provHandle, $eventID, $keywords, $eventVersion, $level, $pMetadata, $metadataLength){}
	/**
	 * @param \System\String|string $providerName
	 * @return \System\IntPtr
	 */
	protected static function GetProvider($providerName){}
	/**
	 * @param \System\IntPtr $provHandle
	 * @return \System\Void|void
	 */
	protected static function DeleteProvider($provHandle){}
	/**
	 * @param \System\UInt32 $controlCode
	 * @param \System\Guid& $activityId
	 * @return \System\Int32|int
	 */
	protected static function EventActivityIdControl($controlCode, $activityId){}
	/**
	 * @param \System\IntPtr $eventHandle
	 * @param \System\Diagnostics\Tracing\EventData* $pEventData
	 * @param \System\UInt32 $dataCount
	 * @param \System\Guid* $activityId
	 * @param \System\Guid* $relatedActivityId
	 * @return \System\Void|void
	 */
	protected static function WriteEventData($eventHandle, $pEventData, $dataCount, $activityId, $relatedActivityId){}
	/**
	 * @param \System\UInt64 $sessionID
	 * @param \System\Diagnostics\Tracing\EventPipeSessionInfo* $pSessionInfo
	 * @return \System\Boolean
	 */
	protected static function GetSessionInfo($sessionID, $pSessionInfo){}
	/**
	 * @param \System\UInt64 $sessionID
	 * @param \System\Diagnostics\Tracing\EventPipeEventInstanceData* $pInstance
	 * @return \System\Boolean
	 */
	protected static function GetNextEvent($sessionID, $pInstance){}
	/**
	 * @param \System\UInt64 $sessionID
	 * @return \System\Boolean
	 */
	protected static function SignalSession($sessionID){}
	/**
	 * @param \System\UInt64 $sessionID
	 * @param \System\Int32|int $timeoutMs
	 * @return \System\Boolean
	 */
	protected static function WaitForSessionSignal($sessionID, $timeoutMs){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
