<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait GCOverride {
	/**
	 * @deprecated
	 * @return \System\GCMemoryInfo
	 */
	#[MethodOverride]public static function GetGCMemoryInfo_1 (){}
	/**
	 * @deprecated
	 * @param \System\GCKind $kind
	 * @return \System\GCMemoryInfo
	 */
	#[MethodOverride]public static function GetGCMemoryInfo_2 ($kind){}
	/**
	 * @deprecated
	 * @return \System\Int64|int
	 */
	#[MethodOverride]private static function GetTotalMemory_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $forceFullCollection
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function GetTotalMemory_2 ($forceFullCollection){}
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function GetGeneration_1 ($obj){}
	/**
	 * @deprecated
	 * @param \System\WeakReference $wo
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function GetGeneration_2 ($wo){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $generation
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Collect_1 ($generation){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Collect_2 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $generation
	 * @param \System\GCCollectionMode $mode
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Collect_3 ($generation, $mode){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $generation
	 * @param \System\GCCollectionMode $mode
	 * @param \System\Boolean|bool $blocking
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Collect_4 ($generation, $mode, $blocking){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $generation
	 * @param \System\GCCollectionMode $mode
	 * @param \System\Boolean|bool $blocking
	 * @param \System\Boolean|bool $compacting
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Collect_5 ($generation, $mode, $blocking, $compacting){}
	/**
	 * @deprecated
	 * @return \System\GCNotificationStatus
	 */
	#[MethodOverride]public static function WaitForFullGCApproach_1 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $millisecondsTimeout
	 * @return \System\GCNotificationStatus
	 */
	#[MethodOverride]public static function WaitForFullGCApproach_2 ($millisecondsTimeout){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $timeout
	 * @return \System\GCNotificationStatus
	 */
	#[MethodOverride]public static function WaitForFullGCApproach_3 ($timeout){}
	/**
	 * @deprecated
	 * @return \System\GCNotificationStatus
	 */
	#[MethodOverride]public static function WaitForFullGCComplete_1 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $millisecondsTimeout
	 * @return \System\GCNotificationStatus
	 */
	#[MethodOverride]public static function WaitForFullGCComplete_2 ($millisecondsTimeout){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $timeout
	 * @return \System\GCNotificationStatus
	 */
	#[MethodOverride]public static function WaitForFullGCComplete_3 ($timeout){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $totalSize
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryStartNoGCRegion_1 ($totalSize){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $totalSize
	 * @param \System\Int64|int $lohSize
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryStartNoGCRegion_2 ($totalSize, $lohSize){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $totalSize
	 * @param \System\Boolean|bool $disallowFullBlockingGC
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryStartNoGCRegion_3 ($totalSize, $disallowFullBlockingGC){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $totalSize
	 * @param \System\Int64|int $lohSize
	 * @param \System\Boolean|bool $disallowFullBlockingGC
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryStartNoGCRegion_4 ($totalSize, $lohSize, $disallowFullBlockingGC){}
}
class GC extends \System\Object
{
	use GCOverride;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MaxGeneration;
	private static function GetMemoryInfo($data, $kind){}
	/**
	 * @uses GCOverride::GetGCMemoryInfo_1 <br>public , args: ()<br>
	 * @uses GCOverride::GetGCMemoryInfo_2 <br>public , args: ($kind)<br>
	 * @var mixed|\override ...$args
	 * @return \System\GCMemoryInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetGCMemoryInfo (\override ...$args){}
	/**
	 * @param \System\Int64|int $totalSize
	 * @param \System\Boolean|bool $lohSizeKnown
	 * @param \System\Int64|int $lohSize
	 * @param \System\Boolean|bool $disallowFullBlockingGC
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
	 * @param \System\GC+GC_ALLOC_FLAGS $flags
	 * @return \System\Array|array
	 */
	protected static function AllocateNewArray($typeHandle, $length, $flags){}
	private static function GetGenerationWR($handle){}
	/**
	 * @uses GCOverride::GetTotalMemory_1 <br>private , args: ()<br>
	 * @uses GCOverride::GetTotalMemory_2 <br>public , args: ($forceFullCollection)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int64|int|mixed|\override
	 */
	#[MethodOverridePublic]function GetTotalMemory (\override ...$args){}
	private static function _Collect($generation, $mode){}
	private static function GetMaxGeneration(){}
	private static function _CollectionCount($generation, $getSpecialGCCount){}
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
	private static function _AddMemoryPressure($bytesAllocated){}
	private static function _RemoveMemoryPressure($bytesAllocated){}
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
	 * @uses GCOverride::GetGeneration_1 <br>public , args: ($obj)<br>
	 * @uses GCOverride::GetGeneration_2 <br>public , args: ($wo)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function GetGeneration (\override ...$args){}
	/**
	 * @uses GCOverride::Collect_1 <br>public , args: ($generation)<br>
	 * @uses GCOverride::Collect_2 <br>public , args: ()<br>
	 * @uses GCOverride::Collect_3 <br>public , args: ($generation, $mode)<br>
	 * @uses GCOverride::Collect_4 <br>public , args: ($generation, $mode, $blocking)<br>
	 * @uses GCOverride::Collect_5 <br>public , args: ($generation, $mode, $blocking, $compacting)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Collect (\override ...$args){}
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
	private static function _WaitForPendingFinalizers(){}
	/**
	 * @return \System\Void|void
	 */
	public static function WaitForPendingFinalizers(){}
	private static function _SuppressFinalize($o){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Void|void
	 */
	public static function SuppressFinalize($obj){}
	private static function _ReRegisterForFinalize($o){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Void|void
	 */
	public static function ReRegisterForFinalize($obj){}
	private static function _RegisterFrozenSegment($sectionAddress, $sectionSize){}
	private static function _UnregisterFrozenSegment($segmentHandle){}
	/**
	 * @return \System\Int64|int
	 */
	public static function GetAllocatedBytesForCurrentThread(){}
	/**
	 * @param \System\Boolean|bool $precise
	 * @return \System\Int64|int
	 */
	public static function GetTotalAllocatedBytes($precise){}
	private static function _RegisterForFullGCNotification($maxGenerationPercentage, $largeObjectHeapPercentage){}
	private static function _CancelFullGCNotification(){}
	private static function _WaitForFullGCApproach($millisecondsTimeout){}
	private static function _WaitForFullGCComplete($millisecondsTimeout){}
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
	 * @uses GCOverride::WaitForFullGCApproach_1 <br>public , args: ()<br>
	 * @uses GCOverride::WaitForFullGCApproach_2 <br>public , args: ($millisecondsTimeout)<br>
	 * @uses GCOverride::WaitForFullGCApproach_3 <br>public , args: ($timeout)<br>
	 * @var mixed|\override ...$args
	 * @return \System\GCNotificationStatus|mixed|\override
	 */
	#[MethodOverridePublic]function WaitForFullGCApproach (\override ...$args){}
	/**
	 * @uses GCOverride::WaitForFullGCComplete_1 <br>public , args: ()<br>
	 * @uses GCOverride::WaitForFullGCComplete_2 <br>public , args: ($millisecondsTimeout)<br>
	 * @uses GCOverride::WaitForFullGCComplete_3 <br>public , args: ($timeout)<br>
	 * @var mixed|\override ...$args
	 * @return \System\GCNotificationStatus|mixed|\override
	 */
	#[MethodOverridePublic]function WaitForFullGCComplete (\override ...$args){}
	private static function StartNoGCRegionWorker($totalSize, $hasLohSize, $lohSize, $disallowFullBlockingGC){}
	/**
	 * @uses GCOverride::TryStartNoGCRegion_1 <br>public , args: ($totalSize)<br>
	 * @uses GCOverride::TryStartNoGCRegion_2 <br>public , args: ($totalSize, $lohSize)<br>
	 * @uses GCOverride::TryStartNoGCRegion_3 <br>public , args: ($totalSize, $disallowFullBlockingGC)<br>
	 * @uses GCOverride::TryStartNoGCRegion_4 <br>public , args: ($totalSize, $lohSize, $disallowFullBlockingGC)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryStartNoGCRegion (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public static function EndNoGCRegion(){}
	/**
	 * @param \System\Int32|int $length
	 * @param \System\Boolean|bool $pinned
	 * @return \T[]
	 */
	public static function AllocateUninitializedArray($length, $pinned){}
	/**
	 * @param \System\Int32|int $length
	 * @param \System\Boolean|bool $pinned
	 * @return \T[]
	 */
	public static function AllocateArray($length, $pinned){}
	private static function _GetTotalPauseDuration(){}
	/**
	 * @return \System\TimeSpan
	 */
	public static function GetTotalPauseDuration(){}
	private static function Callback($configurationContext, $name, $publicKey, $type, $data){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyDictionary_2[System\String,System\Object]
	 */
	public static function GetConfigurationVariables(){}
	/**
	 * @param \System\Void* $configurationDictionary
	 * @param \System\IntPtr $callback
	 * @return \System\Void|void
	 */
	protected static function _EnumerateConfigurationValues($configurationDictionary, $callback){}
}