<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RuntimeMethodHandleOverride {
	/**
	 * @deprecated
	 * @param \System\RuntimeMethodHandleInternal $handle
	 * @return \System\IntPtr
	 */
	#[MethodOverride]protected static function GetFunctionPointer_1 ($handle){}
	/**
	 * @deprecated
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public function GetFunctionPointer_2 (){}
	/**
	 * @deprecated
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @return \System\Reflection\MethodAttributes
	 */
	#[MethodOverride]protected static function GetAttributes_1 ($method){}
	/**
	 * @deprecated
	 * @param \System\IRuntimeMethodInfo $method
	 * @return \System\Reflection\MethodAttributes
	 */
	#[MethodOverride]protected static function GetAttributes_2 ($method){}
	/**
	 * @deprecated
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @param \System\TypeNameFormatFlags $format
	 * @param \System\Runtime\CompilerServices\StringHandleOnStack $retString
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function ConstructInstantiation_1 ($method, $format, $retString){}
	/**
	 * @deprecated
	 * @param \System\IRuntimeMethodInfo $method
	 * @param \System\TypeNameFormatFlags $format
	 * @return \System\String|string
	 */
	#[MethodOverride]protected static function ConstructInstantiation_2 ($method, $format){}
	/**
	 * @deprecated
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @return \System\RuntimeType
	 */
	#[MethodOverride]protected static function GetDeclaringType_1 ($method){}
	/**
	 * @deprecated
	 * @param \System\IRuntimeMethodInfo $method
	 * @return \System\RuntimeType
	 */
	#[MethodOverride]protected static function GetDeclaringType_2 ($method){}
	/**
	 * @deprecated
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function GetSlot_1 ($method){}
	/**
	 * @deprecated
	 * @param \System\IRuntimeMethodInfo $method
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function GetSlot_2 ($method){}
	/**
	 * @deprecated
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @return \System\String|string
	 */
	#[MethodOverride]protected static function GetName_1 ($method){}
	/**
	 * @deprecated
	 * @param \System\IRuntimeMethodInfo $method
	 * @return \System\String|string
	 */
	#[MethodOverride]protected static function GetName_2 ($method){}
	/**
	 * @deprecated
	 * @param \System\IRuntimeMethodInfo $method
	 * @return \System\RuntimeType
	 */
	#[MethodOverride]protected static function GetMethodInstantiationInternal_1 ($method){}
	/**
	 * @deprecated
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @return \System\RuntimeType
	 */
	#[MethodOverride]protected static function GetMethodInstantiationInternal_2 ($method){}
	/**
	 * @deprecated
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function HasMethodInstantiation_1 ($method){}
	/**
	 * @deprecated
	 * @param \System\IRuntimeMethodInfo $method
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function HasMethodInstantiation_2 ($method){}
	/**
	 * @deprecated
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function IsGenericMethodDefinition_1 ($method){}
	/**
	 * @deprecated
	 * @param \System\IRuntimeMethodInfo $method
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function IsGenericMethodDefinition_2 ($method){}
	/**
	 * @deprecated
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $outMethod
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function GetTypicalMethodDefinition_1 ($method, $outMethod){}
	/**
	 * @deprecated
	 * @param \System\IRuntimeMethodInfo $method
	 * @return \System\IRuntimeMethodInfo
	 */
	#[MethodOverride]protected static function GetTypicalMethodDefinition_2 ($method){}
	/**
	 * @deprecated
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function GetGenericParameterCount_1 ($method){}
	/**
	 * @deprecated
	 * @param \System\IRuntimeMethodInfo $method
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function GetGenericParameterCount_2 ($method){}
	/**
	 * @deprecated
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $outMethod
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function StripMethodInstantiation_1 ($method, $outMethod){}
	/**
	 * @deprecated
	 * @param \System\IRuntimeMethodInfo $method
	 * @return \System\IRuntimeMethodInfo
	 */
	#[MethodOverride]protected static function StripMethodInstantiation_2 ($method){}
}
final class RuntimeMethodHandle extends \System\ValueType implements
	\System\IEquatable_1,
	\System\Runtime\Serialization\ISerializable
{
	use RuntimeMethodHandleOverride;
	/**
	 * @property
	 * @var \System\IntPtr
	 * @since readonly
	 */
	public $Value;
	/**
	 * @param \System\IRuntimeMethodInfo $method
	 * @return \System\IRuntimeMethodInfo
	 */
	protected static function EnsureNonNullMethodInfo($method){}
	/**
	 * @return \System\IRuntimeMethodInfo
	 */
	protected function GetMethodInfo(){}
	private static function GetValueInternal($rmh){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public function GetObjectData($info, $context){}
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
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\RuntimeMethodHandle $left
	 * @param \System\RuntimeMethodHandle $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected function IsNullHandle(){}
	/**
	 * @uses RuntimeMethodHandleOverride::GetFunctionPointer_1 <br>protected , args: ($handle)<br>
	 * @uses RuntimeMethodHandleOverride::GetFunctionPointer_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\IntPtr|mixed|\override
	 */
	#[MethodOverridePublic]function GetFunctionPointer (\override ...$args){}
	/**
	 * @param \System\RuntimeMethodHandleInternal $handle
	 * @return \Interop+BOOL
	 */
	protected static function GetIsCollectible($handle){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallTypeHandle $attrTypeHandle
	 * @param \System\RuntimeMethodHandleInternal $attrCtor
	 * @param \System\Runtime\CompilerServices\QCallTypeHandle $sourceTypeHandle
	 * @param \System\Runtime\CompilerServices\QCallModule $sourceModule
	 * @return \Interop+BOOL
	 */
	protected static function IsCAVisibleFromDecoratedType($attrTypeHandle, $attrCtor, $sourceTypeHandle, $sourceModule){}
	private static function _GetCurrentMethod($stackMark){}
	/**
	 * @param \System\Threading\StackCrawlMark& $stackMark
	 * @return \System\IRuntimeMethodInfo
	 */
	protected static function GetCurrentMethod($stackMark){}
	/**
	 * @uses RuntimeMethodHandleOverride::GetAttributes_1 <br>protected , args: ($method)<br>
	 * @uses RuntimeMethodHandleOverride::GetAttributes_2 <br>protected , args: ($method)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\MethodAttributes|mixed|\override
	 */
	#[MethodOverrideProtected]function GetAttributes (\override ...$args){}
	/**
	 * @param \System\IRuntimeMethodInfo $method
	 * @return \System\Reflection\MethodImplAttributes
	 */
	protected static function GetImplAttributes($method){}
	/**
	 * @uses RuntimeMethodHandleOverride::ConstructInstantiation_1 <br>private , args: ($method, $format, $retString)<br>
	 * @uses RuntimeMethodHandleOverride::ConstructInstantiation_2 <br>protected , args: ($method, $format)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\String|string|mixed|\override
	 */
	#[MethodOverrideProtected]function ConstructInstantiation (\override ...$args){}
	/**
	 * @uses RuntimeMethodHandleOverride::GetDeclaringType_1 <br>protected , args: ($method)<br>
	 * @uses RuntimeMethodHandleOverride::GetDeclaringType_2 <br>protected , args: ($method)<br>
	 * @var mixed|\override ...$args
	 * @return \System\RuntimeType|mixed|\override
	 */
	#[MethodOverrideProtected]function GetDeclaringType (\override ...$args){}
	/**
	 * @uses RuntimeMethodHandleOverride::GetSlot_1 <br>protected , args: ($method)<br>
	 * @uses RuntimeMethodHandleOverride::GetSlot_2 <br>protected , args: ($method)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function GetSlot (\override ...$args){}
	/**
	 * @param \System\IRuntimeMethodInfo $method
	 * @return \System\Int32|int
	 */
	protected static function GetMethodDef($method){}
	/**
	 * @uses RuntimeMethodHandleOverride::GetName_1 <br>protected , args: ($method)<br>
	 * @uses RuntimeMethodHandleOverride::GetName_2 <br>protected , args: ($method)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverrideProtected]function GetName (\override ...$args){}
	private static function _GetUtf8Name($method){}
	/**
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @return \System\MdUtf8String
	 */
	protected static function GetUtf8Name($method){}
	/**
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @param \System\UInt32 $hash
	 * @return \System\Boolean|bool
	 */
	protected static function MatchesNameHash($method, $hash){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\Void** $arguments
	 * @param \System\Signature $sig
	 * @param \System\Boolean|bool $isConstructor
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
	private static function GetMethodInstantiation($method, $types, $fAsRuntimeTypeArray){}
	/**
	 * @uses RuntimeMethodHandleOverride::GetMethodInstantiationInternal_1 <br>protected , args: ($method)<br>
	 * @uses RuntimeMethodHandleOverride::GetMethodInstantiationInternal_2 <br>protected , args: ($method)<br>
	 * @var mixed|\override ...$args
	 * @return \System\RuntimeType|mixed|\override
	 */
	#[MethodOverrideProtected]function GetMethodInstantiationInternal (\override ...$args){}
	/**
	 * @param \System\IRuntimeMethodInfo $method
	 * @return \System\Type[]
	 */
	protected static function GetMethodInstantiationPublic($method){}
	/**
	 * @uses RuntimeMethodHandleOverride::HasMethodInstantiation_1 <br>protected , args: ($method)<br>
	 * @uses RuntimeMethodHandleOverride::HasMethodInstantiation_2 <br>protected , args: ($method)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function HasMethodInstantiation (\override ...$args){}
	/**
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @param \System\RuntimeType $declaringType
	 * @param \System\RuntimeType $methodInstantiation
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
	 * @uses RuntimeMethodHandleOverride::IsGenericMethodDefinition_1 <br>protected , args: ($method)<br>
	 * @uses RuntimeMethodHandleOverride::IsGenericMethodDefinition_2 <br>protected , args: ($method)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function IsGenericMethodDefinition (\override ...$args){}
	/**
	 * @param \System\IRuntimeMethodInfo $method
	 * @return \System\Boolean|bool
	 */
	protected static function IsTypicalMethodDefinition($method){}
	/**
	 * @uses RuntimeMethodHandleOverride::GetTypicalMethodDefinition_1 <br>private , args: ($method, $outMethod)<br>
	 * @uses RuntimeMethodHandleOverride::GetTypicalMethodDefinition_2 <br>protected , args: ($method)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\IRuntimeMethodInfo|mixed|\override
	 */
	#[MethodOverrideProtected]function GetTypicalMethodDefinition (\override ...$args){}
	/**
	 * @uses RuntimeMethodHandleOverride::GetGenericParameterCount_1 <br>private , args: ($method)<br>
	 * @uses RuntimeMethodHandleOverride::GetGenericParameterCount_2 <br>protected , args: ($method)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function GetGenericParameterCount (\override ...$args){}
	/**
	 * @uses RuntimeMethodHandleOverride::StripMethodInstantiation_1 <br>private , args: ($method, $outMethod)<br>
	 * @uses RuntimeMethodHandleOverride::StripMethodInstantiation_2 <br>protected , args: ($method)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\IRuntimeMethodInfo|mixed|\override
	 */
	#[MethodOverrideProtected]function StripMethodInstantiation (\override ...$args){}
	/**
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @return \System\Boolean|bool
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
	 * @return \System\Boolean|bool
	 */
	protected static function IsConstructor($method){}
	/**
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @return \System\Reflection\LoaderAllocator
	 */
	protected static function GetLoaderAllocator($method){}
}