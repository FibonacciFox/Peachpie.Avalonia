<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RuntimeMethodHandleMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($handle){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] protected static function GetFunctionPointer_1($handle){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public  function GetFunctionPointer_2(){}
	/**
	 * @return \System\Reflection\MethodAttributes
	 */
	#[MethodOverride] protected static function GetAttributes_1($method){}
	/**
	 * @return \System\Reflection\MethodAttributes
	 */
	#[MethodOverride] protected static function GetAttributes_2($method){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function ConstructInstantiation_1($method, $format, $retString){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected static function ConstructInstantiation_2($method, $format){}
	/**
	 * @return \System\RuntimeType
	 */
	#[MethodOverride] protected static function GetDeclaringType_1($method){}
	/**
	 * @return \System\RuntimeType
	 */
	#[MethodOverride] protected static function GetDeclaringType_2($method){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function GetSlot_1($method){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function GetSlot_2($method){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected static function GetName_1($method){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected static function GetName_2($method){}
	/**
	 * @return \System\RuntimeType[]
	 */
	#[MethodOverride] protected static function GetMethodInstantiationInternal_1($method){}
	/**
	 * @return \System\RuntimeType[]
	 */
	#[MethodOverride] protected static function GetMethodInstantiationInternal_2($method){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function HasMethodInstantiation_1($method){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function HasMethodInstantiation_2($method){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function IsGenericMethodDefinition_1($method){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function IsGenericMethodDefinition_2($method){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function GetTypicalMethodDefinition_1($method, $outMethod){}
	/**
	 * @return \System\IRuntimeMethodInfo
	 */
	#[MethodOverride] protected static function GetTypicalMethodDefinition_2($method){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function GetGenericParameterCount_1($method){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function GetGenericParameterCount_2($method){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function StripMethodInstantiation_1($method, $outMethod){}
	/**
	 * @return \System\IRuntimeMethodInfo
	 */
	#[MethodOverride] protected static function StripMethodInstantiation_2($method){}
}
/**
 */
class RuntimeMethodHandle extends \System\ValueType implements 
	\System\IEquatable_1,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $Value;
	/**
	 * @param \System\IRuntimeMethodInfo $method
	 * @return \System\IRuntimeMethodInfo
	 */
	protected static function EnsureNonNullMethodInfo($method){}
	/**
	 * @return \System\IRuntimeMethodInfo
	 */
	protected  function GetMethodInfo(){}
	/**
	 * @param \System\RuntimeMethodHandle $rmh
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetValueInternal($rmh){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public  function GetObjectData($info, $context){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Value(){}
	/**
	 * @uses RuntimeMethodHandleMethodsOverride::Equals_1 ($obj)
	 * @uses RuntimeMethodHandleMethodsOverride::Equals_2 ($handle)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\IntPtr $value
	 * @return \System\RuntimeMethodHandle
	 */
	public static function FromIntPtr($value){}
	/**
	 * @param \System\RuntimeMethodHandle $value
	 * @return \System\IntPtr
	 */
	public static function ToIntPtr($value){}
	/**
	 * @param \System\RuntimeMethodHandle $left
	 * @param \System\RuntimeMethodHandle $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\RuntimeMethodHandle $left
	 * @param \System\RuntimeMethodHandle $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	protected  function IsNullHandle(){}
	/**
	 * @uses RuntimeMethodHandleMethodsOverride::GetFunctionPointer_1 ($handle)
	 * @uses RuntimeMethodHandleMethodsOverride::GetFunctionPointer_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetFunctionPointer(mixed ...$args){}
	/**
	 * @param \System\RuntimeMethodHandleInternal $handle
	 * @return \\BOOL
	 */
	protected static function GetIsCollectible($handle){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallTypeHandle $attrTypeHandle
	 * @param \System\RuntimeMethodHandleInternal $attrCtor
	 * @param \System\Runtime\CompilerServices\QCallTypeHandle $sourceTypeHandle
	 * @param \System\Runtime\CompilerServices\QCallModule $sourceModule
	 * @return \\BOOL
	 */
	protected static function IsCAVisibleFromDecoratedType($attrTypeHandle, $attrCtor, $sourceTypeHandle, $sourceModule){}
	/**
	 * @param \System\Threading\StackCrawlMark& $stackMark
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _GetCurrentMethod($stackMark){}
	/**
	 * @param \System\Threading\StackCrawlMark& $stackMark
	 * @return \System\IRuntimeMethodInfo
	 */
	protected static function GetCurrentMethod($stackMark){}
	/**
	 * @uses RuntimeMethodHandleMethodsOverride::GetAttributes_1 ($method)
	 * @uses RuntimeMethodHandleMethodsOverride::GetAttributes_2 ($method)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetAttributes(mixed ...$args){}
	/**
	 * @param \System\IRuntimeMethodInfo $method
	 * @return \System\Reflection\MethodImplAttributes
	 */
	protected static function GetImplAttributes($method){}
	/**
	 * @uses RuntimeMethodHandleMethodsOverride::ConstructInstantiation_1 ($method, $format, $retString)
	 * @uses RuntimeMethodHandleMethodsOverride::ConstructInstantiation_2 ($method, $format)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ConstructInstantiation(mixed ...$args){}
	/**
	 * @uses RuntimeMethodHandleMethodsOverride::GetDeclaringType_1 ($method)
	 * @uses RuntimeMethodHandleMethodsOverride::GetDeclaringType_2 ($method)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetDeclaringType(mixed ...$args){}
	/**
	 * @uses RuntimeMethodHandleMethodsOverride::GetSlot_1 ($method)
	 * @uses RuntimeMethodHandleMethodsOverride::GetSlot_2 ($method)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetSlot(mixed ...$args){}
	/**
	 * @param \System\IRuntimeMethodInfo $method
	 * @return \System\Int32|int
	 */
	protected static function GetMethodDef($method){}
	/**
	 * @uses RuntimeMethodHandleMethodsOverride::GetName_1 ($method)
	 * @uses RuntimeMethodHandleMethodsOverride::GetName_2 ($method)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetName(mixed ...$args){}
	/**
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _GetUtf8Name($method){}
	/**
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @return \System\MdUtf8String
	 */
	protected static function GetUtf8Name($method){}
	/**
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @param \System\UInt32 $hash
	 * @return \System\Boolean
	 */
	protected static function MatchesNameHash($method, $hash){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\Void** $arguments
	 * @param \System\Signature $sig
	 * @param \System\Boolean $isConstructor
	 * @return \System\Object|object
	 */
	protected static function InvokeMethod($target, $arguments, $sig, $isConstructor){}
	/**
	 * @param \System\Object|object $src
	 * @return \System\Object|object
	 */
	protected static function ReboxFromNullable($src){}
	/**
	 * @param \System\Object|object $src
	 * @param \System\RuntimeType $destNullableType
	 * @return \System\Object|object
	 */
	protected static function ReboxToNullable($src, $destNullableType){}
	/**
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $types
	 * @param \\BOOL $fAsRuntimeTypeArray
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetMethodInstantiation($method, $types, $fAsRuntimeTypeArray){}
	/**
	 * @uses RuntimeMethodHandleMethodsOverride::GetMethodInstantiationInternal_1 ($method)
	 * @uses RuntimeMethodHandleMethodsOverride::GetMethodInstantiationInternal_2 ($method)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetMethodInstantiationInternal(mixed ...$args){}
	/**
	 * @param \System\IRuntimeMethodInfo $method
	 * @return \System\Type[]
	 */
	protected static function GetMethodInstantiationPublic($method){}
	/**
	 * @uses RuntimeMethodHandleMethodsOverride::HasMethodInstantiation_1 ($method)
	 * @uses RuntimeMethodHandleMethodsOverride::HasMethodInstantiation_2 ($method)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function HasMethodInstantiation(mixed ...$args){}
	/**
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @param \System\RuntimeType $declaringType
	 * @param \System\RuntimeType[] $methodInstantiation
	 * @return \System\RuntimeMethodHandleInternal
	 */
	protected static function GetStubIfNeeded($method, $declaringType, $methodInstantiation){}
	/**
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @param \System\RuntimeType $declaringType
	 * @return \System\RuntimeMethodHandleInternal
	 */
	protected static function GetMethodFromCanonical($method, $declaringType){}
	/**
	 * @uses RuntimeMethodHandleMethodsOverride::IsGenericMethodDefinition_1 ($method)
	 * @uses RuntimeMethodHandleMethodsOverride::IsGenericMethodDefinition_2 ($method)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsGenericMethodDefinition(mixed ...$args){}
	/**
	 * @param \System\IRuntimeMethodInfo $method
	 * @return \System\Boolean
	 */
	protected static function IsTypicalMethodDefinition($method){}
	/**
	 * @uses RuntimeMethodHandleMethodsOverride::GetTypicalMethodDefinition_1 ($method, $outMethod)
	 * @uses RuntimeMethodHandleMethodsOverride::GetTypicalMethodDefinition_2 ($method)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetTypicalMethodDefinition(mixed ...$args){}
	/**
	 * @uses RuntimeMethodHandleMethodsOverride::GetGenericParameterCount_1 ($method)
	 * @uses RuntimeMethodHandleMethodsOverride::GetGenericParameterCount_2 ($method)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetGenericParameterCount(mixed ...$args){}
	/**
	 * @uses RuntimeMethodHandleMethodsOverride::StripMethodInstantiation_1 ($method, $outMethod)
	 * @uses RuntimeMethodHandleMethodsOverride::StripMethodInstantiation_2 ($method)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function StripMethodInstantiation(mixed ...$args){}
	/**
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @return \System\Boolean
	 */
	protected static function IsDynamicMethod($method){}
	/**
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @return \System\Void|void
	 */
	protected static function Destroy($method){}
	/**
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @return \System\Resolver
	 */
	protected static function GetResolver($method){}
	/**
	 * @param \System\IRuntimeMethodInfo $method
	 * @param \System\RuntimeType $declaringType
	 * @return \System\Reflection\RuntimeMethodBody
	 */
	protected static function GetMethodBody($method, $declaringType){}
	/**
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @return \System\Boolean
	 */
	protected static function IsConstructor($method){}
	/**
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @return \System\Reflection\LoaderAllocator
	 */
	protected static function GetLoaderAllocator($method){}
}
