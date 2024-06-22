<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RuntimeHelpersOverride {
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallTypeHandle $type
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function RunClassConstructor_1 ($type){}
	/**
	 * @deprecated
	 * @param \System\RuntimeTypeHandle $type
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function RunClassConstructor_2 ($type){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function RunModuleConstructor_1 ($module){}
	/**
	 * @deprecated
	 * @param \System\ModuleHandle $module
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function RunModuleConstructor_2 ($module){}
	/**
	 * @deprecated
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @param \System\IntPtr* $pInstantiation
	 * @param \System\Int32|int $cInstantiation
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function PrepareMethod_1 ($method, $pInstantiation, $cInstantiation){}
	/**
	 * @deprecated
	 * @param \System\RuntimeMethodHandle $method
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function PrepareMethod_2 ($method){}
	/**
	 * @deprecated
	 * @param \System\RuntimeMethodHandle $method
	 * @param \System\RuntimeTypeHandle $instantiation
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function PrepareMethod_3 ($method, $instantiation){}
	/**
	 * @deprecated
	 * @param \System\Object|object $o
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function GetHashCode_1 ($o){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function GetUninitializedObject_1 ($type){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallTypeHandle $type
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $retObject
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function GetUninitializedObject_2 ($type, $retObject){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @param \System\Int32|int $size
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function AllocateTypeAssociatedMemory_1 ($type, $size){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallTypeHandle $type
	 * @param \System\UInt32 $size
	 * @return \System\IntPtr
	 */
	#[MethodOverride]private static function AllocateTypeAssociatedMemory_2 ($type, $size){}
	/**
	 * @deprecated
	 * @param \System\Char $t
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function IsKnownConstant_1 ($t){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $t
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function IsKnownConstant_2 ($t){}
}
class RuntimeHelpers extends \System\Object
{
	use RuntimeHelpersOverride;

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $OffsetToStringData;
	/**
	 * @param \System\Array|array $array
	 * @param \System\RuntimeFieldHandle $fldHandle
	 * @return \System\Void|void
	 */
	public static function InitializeArray($array, $fldHandle){}
	private static function GetSpanDataFrom($fldHandle, $targetTypeHandle, &$count){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Object|object
	 */
	public static function GetObjectValue($obj){}
	/**
	 * @uses RuntimeHelpersOverride::RunClassConstructor_1 <br>private , args: ($type)<br>
	 * @uses RuntimeHelpersOverride::RunClassConstructor_2 <br>public , args: ($type)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function RunClassConstructor (\override ...$args){}
	/**
	 * @uses RuntimeHelpersOverride::RunModuleConstructor_1 <br>private , args: ($module)<br>
	 * @uses RuntimeHelpersOverride::RunModuleConstructor_2 <br>public , args: ($module)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function RunModuleConstructor (\override ...$args){}
	/**
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @return \System\Void|void
	 */
	protected static function CompileMethod($method){}
	/**
	 * @uses RuntimeHelpersOverride::PrepareMethod_1 <br>private , args: ($method, $pInstantiation, $cInstantiation)<br>
	 * @uses RuntimeHelpersOverride::PrepareMethod_2 <br>public , args: ($method)<br>
	 * @uses RuntimeHelpersOverride::PrepareMethod_3 <br>public , args: ($method, $instantiation)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function PrepareMethod (\override ...$args){}
	/**
	 * @param \System\Delegate $d
	 * @return \System\Void|void
	 */
	public static function PrepareDelegate($d){}
	/**
	 * @return \System\Void|void
	 */
	public static function EnsureSufficientExecutionStack(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public static function TryEnsureSufficientExecutionStack(){}
	/**
	 * @uses RuntimeHelpersOverride::GetUninitializedObject_1 <br>public , args: ($type)<br>
	 * @uses RuntimeHelpersOverride::GetUninitializedObject_2 <br>private , args: ($type, $retObject)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function GetUninitializedObject (\override ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Object|object
	 */
	protected static function AllocateUninitializedClone($obj){}
	/**
	 * @return \System\Boolean|bool
	 */
	public static function IsReferenceOrContainsReferences(){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected static function IsBitwiseEquatable(){}
	/**
	 * @param \T|object $x
	 * @param \T|object $y
	 * @return \System\Boolean|bool
	 */
	protected static function EnumEquals($x, $y){}
	/**
	 * @param \T|object $x
	 * @param \T|object $y
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
	 * @return \System\Boolean|bool
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
	 * @return \System\Boolean|bool
	 */
	protected static function AreTypesEquivalent($pMTa, $pMTb){}
	/**
	 * @uses RuntimeHelpersOverride::AllocateTypeAssociatedMemory_1 <br>public , args: ($type, $size)<br>
	 * @uses RuntimeHelpersOverride::AllocateTypeAssociatedMemory_2 <br>private , args: ($type, $size)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IntPtr|mixed|\override
	 */
	#[MethodOverridePublic]function AllocateTypeAssociatedMemory (\override ...$args){}
	private static function AllocTailCallArgBuffer($size, $gcDesc){}
	private static function GetTailCallInfo($retAddrSlot, $retAddr){}
	private static function DispatchTailCalls($callersRetAddrSlot, $callTarget, $retVal){}
	/**
	 * @param \System\Runtime\CompilerServices\RuntimeHelpers+GCFrameRegistration* $pRegistration
	 * @return \System\Void|void
	 */
	protected static function RegisterForGCReporting($pRegistration){}
	/**
	 * @param \System\Runtime\CompilerServices\RuntimeHelpers+GCFrameRegistration* $pRegistration
	 * @return \System\Void|void
	 */
	protected static function UnregisterForGCReporting($pRegistration){}
	/**
	 * @param \System\IntPtr $ptr
	 * @return \System\Int32|int
	 */
	protected static function GetHashCodeOfPtr($ptr){}
	/**
	 * @param \T $array
	 * @param \System\Range $range
	 * @return \T[]
	 */
	public static function GetSubArray($array, $range){}
	/**
	 * @param \System\Runtime\CompilerServices\RuntimeHelpers+TryCode $code
	 * @param \System\Runtime\CompilerServices\RuntimeHelpers+CleanupCode $backoutCode
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
	 * @return \System\Boolean|bool
	 */
	protected static function IsPrimitiveType($et){}
	/**
	 * @param \System\RuntimeFieldHandle $fldHandle
	 * @return \System\ReadOnlySpan_1[T]
	 */
	public static function CreateSpan($fldHandle){}
	/**
	 * @uses RuntimeHelpersOverride::IsKnownConstant_1 <br>protected , args: ($t)<br>
	 * @uses RuntimeHelpersOverride::IsKnownConstant_2 <br>protected , args: ($t)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function IsKnownConstant (\override ...$args){}
}