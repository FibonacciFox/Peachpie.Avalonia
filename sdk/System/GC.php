<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GCMethodsOverride
{
	/**
	 * @return \System\GCMemoryInfo
	 */
	#[MethodOverride] public static function GetGCMemoryInfo_1(){}
	/**
	 * @return \System\GCMemoryInfo
	 */
	#[MethodOverride] public static function GetGCMemoryInfo_2($kind){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] private static function GetTotalMemory_1(){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function GetTotalMemory_2($forceFullCollection){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function GetGeneration_1($obj){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function GetGeneration_2($wo){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Collect_1($generation){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Collect_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Collect_3($generation, $mode){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Collect_4($generation, $mode, $blocking){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Collect_5($generation, $mode, $blocking, $compacting){}
	/**
	 * @return \System\GCNotificationStatus
	 */
	#[MethodOverride] public static function WaitForFullGCApproach_1(){}
	/**
	 * @return \System\GCNotificationStatus
	 */
	#[MethodOverride] public static function WaitForFullGCApproach_2($millisecondsTimeout){}
	/**
	 * @return \System\GCNotificationStatus
	 */
	#[MethodOverride] public static function WaitForFullGCApproach_3($timeout){}
	/**
	 * @return \System\GCNotificationStatus
	 */
	#[MethodOverride] public static function WaitForFullGCComplete_1(){}
	/**
	 * @return \System\GCNotificationStatus
	 */
	#[MethodOverride] public static function WaitForFullGCComplete_2($millisecondsTimeout){}
	/**
	 * @return \System\GCNotificationStatus
	 */
	#[MethodOverride] public static function WaitForFullGCComplete_3($timeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryStartNoGCRegion_1($totalSize){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryStartNoGCRegion_2($totalSize, $lohSize){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryStartNoGCRegion_3($totalSize, $disallowFullBlockingGC){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryStartNoGCRegion_4($totalSize, $lohSize, $disallowFullBlockingGC){}
}
/**
 */
class GC extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MaxGeneration;
	/**
	 * @param \System\GCMemoryInfoData $data
	 * @param \System\Int32|int $kind
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetMemoryInfo($data, $kind){}
	/**
	 * @uses GCMethodsOverride::GetGCMemoryInfo_1 ()
	 * @uses GCMethodsOverride::GetGCMemoryInfo_2 ($kind)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetGCMemoryInfo(mixed ...$args){}
	/**
	 * @param \System\Int64|int $totalSize
	 * @param \System\Boolean $lohSizeKnown
	 * @param \System\Int64|int $lohSize
	 * @param \System\Boolean $disallowFullBlockingGC
	 * @return \System\Int32|int
	 */
	protected static function _StartNoGCRegion($totalSize, $lohSizeKnown, $lohSize, $disallowFullBlockingGC){}
	/**
	 * @return \System\Int32|int
	 */
	protected static function _EndNoGCRegion(){}
	/**
	 * @param \System\IntPtr $typeHandle
	 * @param \System\Int32|int $length
	 * @param \System\GC_ALLOC_FLAGS $flags
	 * @return \System\Array|array
	 */
	protected static function AllocateNewArray($typeHandle, $length, $flags){}
	/**
	 * @param \System\IntPtr $handle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetGenerationWR($handle){}
	/**
	 * @uses GCMethodsOverride::GetTotalMemory_1 ()
	 * @uses GCMethodsOverride::GetTotalMemory_2 ($forceFullCollection)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetTotalMemory(mixed ...$args){}
	/**
	 * @param \System\Int32|int $generation
	 * @param \System\Int32|int $mode
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _Collect($generation, $mode){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetMaxGeneration(){}
	/**
	 * @param \System\Int32|int $generation
	 * @param \System\Int32|int $getSpecialGCCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _CollectionCount($generation, $getSpecialGCCount){}
	/**
	 * @return \System\UInt64
	 */
	protected static function GetSegmentSize(){}
	/**
	 * @return \System\Int32|int
	 */
	protected static function GetLastGCPercentTimeInGC(){}
	/**
	 * @param \System\Int32|int $gen
	 * @return \System\UInt64
	 */
	protected static function GetGenerationSize($gen){}
	/**
	 * @param \System\UInt64 $bytesAllocated
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _AddMemoryPressure($bytesAllocated){}
	/**
	 * @param \System\UInt64 $bytesAllocated
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _RemoveMemoryPressure($bytesAllocated){}
	/**
	 * @param \System\Int64|int $bytesAllocated
	 * @return \System\Void|void
	 */
	public static function AddMemoryPressure($bytesAllocated){}
	/**
	 * @param \System\Int64|int $bytesAllocated
	 * @return \System\Void|void
	 */
	public static function RemoveMemoryPressure($bytesAllocated){}
	/**
	 * @uses GCMethodsOverride::GetGeneration_1 ($obj)
	 * @uses GCMethodsOverride::GetGeneration_2 ($wo)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetGeneration(mixed ...$args){}
	/**
	 * @uses GCMethodsOverride::Collect_1 ($generation)
	 * @uses GCMethodsOverride::Collect_2 ()
	 * @uses GCMethodsOverride::Collect_3 ($generation, $mode)
	 * @uses GCMethodsOverride::Collect_4 ($generation, $mode, $blocking)
	 * @uses GCMethodsOverride::Collect_5 ($generation, $mode, $blocking, $compacting)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Collect(mixed ...$args){}
	/**
	 * @param \System\Int32|int $generation
	 * @return \System\Int32|int
	 */
	public static function CollectionCount($generation){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Void|void
	 */
	public static function KeepAlive($obj){}
	/**
	 * @return \System\Int32|int
	 */
	public static function get_MaxGeneration(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _WaitForPendingFinalizers(){}
	/**
	 * @return \System\Void|void
	 */
	public static function WaitForPendingFinalizers(){}
	/**
	 * @param \System\Object|object $o
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _SuppressFinalize($o){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Void|void
	 */
	public static function SuppressFinalize($obj){}
	/**
	 * @param \System\Object|object $o
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _ReRegisterForFinalize($o){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Void|void
	 */
	public static function ReRegisterForFinalize($obj){}
	/**
	 * @param \System\IntPtr $sectionAddress
	 * @param \System\IntPtr $sectionSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _RegisterFrozenSegment($sectionAddress, $sectionSize){}
	/**
	 * @param \System\IntPtr $segmentHandle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _UnregisterFrozenSegment($segmentHandle){}
	/**
	 * @return \System\Int64|int
	 */
	public static function GetAllocatedBytesForCurrentThread(){}
	/**
	 * @param \System\Boolean $precise
	 * @return \System\Int64|int
	 */
	public static function GetTotalAllocatedBytes($precise){}
	/**
	 * @param \System\Int32|int $maxGenerationPercentage
	 * @param \System\Int32|int $largeObjectHeapPercentage
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _RegisterForFullGCNotification($maxGenerationPercentage, $largeObjectHeapPercentage){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _CancelFullGCNotification(){}
	/**
	 * @param \System\Int32|int $millisecondsTimeout
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _WaitForFullGCApproach($millisecondsTimeout){}
	/**
	 * @param \System\Int32|int $millisecondsTimeout
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _WaitForFullGCComplete($millisecondsTimeout){}
	/**
	 * @param \System\Int32|int $maxGenerationThreshold
	 * @param \System\Int32|int $largeObjectHeapThreshold
	 * @return \System\Void|void
	 */
	public static function RegisterForFullGCNotification($maxGenerationThreshold, $largeObjectHeapThreshold){}
	/**
	 * @return \System\Void|void
	 */
	public static function CancelFullGCNotification(){}
	/**
	 * @uses GCMethodsOverride::WaitForFullGCApproach_1 ()
	 * @uses GCMethodsOverride::WaitForFullGCApproach_2 ($millisecondsTimeout)
	 * @uses GCMethodsOverride::WaitForFullGCApproach_3 ($timeout)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WaitForFullGCApproach(mixed ...$args){}
	/**
	 * @uses GCMethodsOverride::WaitForFullGCComplete_1 ()
	 * @uses GCMethodsOverride::WaitForFullGCComplete_2 ($millisecondsTimeout)
	 * @uses GCMethodsOverride::WaitForFullGCComplete_3 ($timeout)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WaitForFullGCComplete(mixed ...$args){}
	/**
	 * @param \System\Int64|int $totalSize
	 * @param \System\Boolean $hasLohSize
	 * @param \System\Int64|int $lohSize
	 * @param \System\Boolean $disallowFullBlockingGC
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function StartNoGCRegionWorker($totalSize, $hasLohSize, $lohSize, $disallowFullBlockingGC){}
	/**
	 * @uses GCMethodsOverride::TryStartNoGCRegion_1 ($totalSize)
	 * @uses GCMethodsOverride::TryStartNoGCRegion_2 ($totalSize, $lohSize)
	 * @uses GCMethodsOverride::TryStartNoGCRegion_3 ($totalSize, $disallowFullBlockingGC)
	 * @uses GCMethodsOverride::TryStartNoGCRegion_4 ($totalSize, $lohSize, $disallowFullBlockingGC)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryStartNoGCRegion(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public static function EndNoGCRegion(){}
	/**
	 * @param \System\Int32|int $length
	 * @param \System\Boolean $pinned
	 * @return \System\T[]
	 */
	public static function AllocateUninitializedArray($length, $pinned){}
	/**
	 * @param \System\Int32|int $length
	 * @param \System\Boolean $pinned
	 * @return \System\T[]
	 */
	public static function AllocateArray($length, $pinned){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _GetTotalPauseDuration(){}
	/**
	 * @return \System\TimeSpan
	 */
	public static function GetTotalPauseDuration(){}
	/**
	 * @param \System\Void* $configurationContext
	 * @param \System\Void* $name
	 * @param \System\Void* $publicKey
	 * @param \System\GCConfigurationType $type
	 * @param \System\Int64|int $data
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Callback($configurationContext, $name, $publicKey, $type, $data){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyDictionary_2
	 */
	public static function GetConfigurationVariables(){}
	/**
	 * @param \System\Void* $configurationDictionary
	 * @param \System\IntPtr $callback
	 * @return \System\Void|void
	 */
	protected static function _EnumerateConfigurationValues($configurationDictionary, $callback){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
