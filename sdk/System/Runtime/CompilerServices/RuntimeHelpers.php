<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RuntimeHelpersMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function RunClassConstructor_1($type){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function RunClassConstructor_2($type){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function RunModuleConstructor_1($module){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function RunModuleConstructor_2($module){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function PrepareMethod_1($method, $pInstantiation, $cInstantiation){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function PrepareMethod_2($method){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function PrepareMethod_3($method, $instantiation){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function GetHashCode_1($o){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_2(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function Equals_1($o1, $o2){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function GetUninitializedObject_1($type){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function GetUninitializedObject_2($type, $retObject){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function AllocateTypeAssociatedMemory_1($type, $size){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] private static function AllocateTypeAssociatedMemory_2($type, $size){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function IsKnownConstant_1($t){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function IsKnownConstant_2($t){}
}
/**
 */
class RuntimeHelpers extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $OffsetToStringData;
	/**
	 * @param \System\Array|array $array
	 * @param \System\RuntimeFieldHandle $fldHandle
	 * @return \System\Void|void
	 */
	public static function InitializeArray($array, $fldHandle){}
	/**
	 * @param \System\RuntimeFieldHandle $fldHandle
	 * @param \System\RuntimeTypeHandle $targetTypeHandle
	 * @param \System\Int32& $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetSpanDataFrom($fldHandle, $targetTypeHandle, $count){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Object|object
	 */
	public static function GetObjectValue($obj){}
	/**
	 * @uses RuntimeHelpersMethodsOverride::RunClassConstructor_1 ($type)
	 * @uses RuntimeHelpersMethodsOverride::RunClassConstructor_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function RunClassConstructor(mixed ...$args){}
	/**
	 * @uses RuntimeHelpersMethodsOverride::RunModuleConstructor_1 ($module)
	 * @uses RuntimeHelpersMethodsOverride::RunModuleConstructor_2 ($module)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function RunModuleConstructor(mixed ...$args){}
	/**
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @return \System\Void|void
	 */
	protected static function CompileMethod($method){}
	/**
	 * @uses RuntimeHelpersMethodsOverride::PrepareMethod_1 ($method, $pInstantiation, $cInstantiation)
	 * @uses RuntimeHelpersMethodsOverride::PrepareMethod_2 ($method)
	 * @uses RuntimeHelpersMethodsOverride::PrepareMethod_3 ($method, $instantiation)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function PrepareMethod(mixed ...$args){}
	/**
	 * @param \System\Delegate $d
	 * @return \System\Void|void
	 */
	public static function PrepareDelegate($d){}
	/**
	 * @uses RuntimeHelpersMethodsOverride::GetHashCode_1 ($o)
	 * @uses RuntimeHelpersMethodsOverride::GetHashCode_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashCode(mixed ...$args){}
	/**
	 * @uses RuntimeHelpersMethodsOverride::Equals_1 ($o1, $o2)
	 * @uses RuntimeHelpersMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @return \System\Int32|int
	 */
	public static function get_OffsetToStringData(){}
	/**
	 * @return \System\Void|void
	 */
	public static function EnsureSufficientExecutionStack(){}
	/**
	 * @return \System\Boolean
	 */
	public static function TryEnsureSufficientExecutionStack(){}
	/**
	 * @uses RuntimeHelpersMethodsOverride::GetUninitializedObject_1 ($type)
	 * @uses RuntimeHelpersMethodsOverride::GetUninitializedObject_2 ($type, $retObject)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetUninitializedObject(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Object|object
	 */
	protected static function AllocateUninitializedClone($obj){}
	/**
	 * @return \System\Boolean
	 */
	public static function IsReferenceOrContainsReferences(){}
	/**
	 * @return \System\Boolean
	 */
	protected static function IsBitwiseEquatable(){}
	/**
	 * @param \System\Runtime\CompilerServices\T $x
	 * @param \System\Runtime\CompilerServices\T $y
	 * @return \System\Boolean
	 */
	protected static function EnumEquals($x, $y){}
	/**
	 * @param \System\Runtime\CompilerServices\T $x
	 * @param \System\Runtime\CompilerServices\T $y
	 * @return \System\Int32|int
	 */
	protected static function EnumCompareTo($x, $y){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Byte&
	 */
	protected static function GetRawData($obj){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\UIntPtr
	 */
	protected static function GetRawObjectDataSize($obj){}
	/**
	 * @param \System\Array|array $array
	 * @return \System\UInt16
	 */
	protected static function GetElementSize($array){}
	/**
	 * @param \System\Array|array $array
	 * @return \System\Int32&
	 */
	protected static function GetMultiDimensionalArrayBounds($array){}
	/**
	 * @param \System\Array|array $array
	 * @return \System\Int32|int
	 */
	protected static function GetMultiDimensionalArrayRank($array){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	protected static function ObjectHasComponentSize($obj){}
	/**
	 * @param \System\Runtime\CompilerServices\MethodTable* $methodTable
	 * @param \System\Byte& $data
	 * @return \System\Object|object
	 */
	protected static function Box($methodTable, $data){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Runtime\CompilerServices\MethodTable*
	 */
	protected static function GetMethodTable($obj){}
	/**
	 * @param \System\Runtime\CompilerServices\MethodTable* $pMTa
	 * @param \System\Runtime\CompilerServices\MethodTable* $pMTb
	 * @return \System\Boolean
	 */
	protected static function AreTypesEquivalent($pMTa, $pMTb){}
	/**
	 * @uses RuntimeHelpersMethodsOverride::AllocateTypeAssociatedMemory_1 ($type, $size)
	 * @uses RuntimeHelpersMethodsOverride::AllocateTypeAssociatedMemory_2 ($type, $size)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function AllocateTypeAssociatedMemory(mixed ...$args){}
	/**
	 * @param \System\Int32|int $size
	 * @param \System\IntPtr $gcDesc
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AllocTailCallArgBuffer($size, $gcDesc){}
	/**
	 * @param \System\IntPtr $retAddrSlot
	 * @param \System\IntPtr* $retAddr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetTailCallInfo($retAddrSlot, $retAddr){}
	/**
	 * @param \System\IntPtr $callersRetAddrSlot
	 * @param \System\IntPtr $callTarget
	 * @param \System\Byte& $retVal
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DispatchTailCalls($callersRetAddrSlot, $callTarget, $retVal){}
	/**
	 * @param \System\Runtime\CompilerServices\GCFrameRegistration* $pRegistration
	 * @return \System\Void|void
	 */
	protected static function RegisterForGCReporting($pRegistration){}
	/**
	 * @param \System\Runtime\CompilerServices\GCFrameRegistration* $pRegistration
	 * @return \System\Void|void
	 */
	protected static function UnregisterForGCReporting($pRegistration){}
	/**
	 * @param \System\IntPtr $ptr
	 * @return \System\Int32|int
	 */
	protected static function GetHashCodeOfPtr($ptr){}
	/**
	 * @param \System\Runtime\CompilerServices\T[] $array
	 * @param \System\Range $range
	 * @return \System\Runtime\CompilerServices\T[]
	 */
	public static function GetSubArray($array, $range){}
	/**
	 * @param \System\Runtime\CompilerServices\TryCode $code
	 * @param \System\Runtime\CompilerServices\CleanupCode $backoutCode
	 * @param \System\Object|object $userData
	 * @return \System\Void|void
	 */
	public static function ExecuteCodeWithGuaranteedCleanup($code, $backoutCode, $userData){}
	/**
	 * @param \System\Delegate $d
	 * @return \System\Void|void
	 */
	public static function PrepareContractedDelegate($d){}
	/**
	 * @return \System\Void|void
	 */
	public static function ProbeForSufficientStack(){}
	/**
	 * @return \System\Void|void
	 */
	public static function PrepareConstrainedRegions(){}
	/**
	 * @return \System\Void|void
	 */
	public static function PrepareConstrainedRegionsNoOP(){}
	/**
	 * @param \System\Reflection\CorElementType $et
	 * @return \System\Boolean
	 */
	protected static function IsPrimitiveType($et){}
	/**
	 * @param \System\RuntimeFieldHandle $fldHandle
	 * @return \System\ReadOnlySpan_1
	 */
	public static function CreateSpan($fldHandle){}
	/**
	 * @uses RuntimeHelpersMethodsOverride::IsKnownConstant_1 ($t)
	 * @uses RuntimeHelpersMethodsOverride::IsKnownConstant_2 ($t)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsKnownConstant(mixed ...$args){}
}
