<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ModuleHandleMethodsOverride
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
	 * @return \System\RuntimeTypeHandle
	 */
	#[MethodOverride] public  function ResolveTypeHandle_1($typeToken){}
	/**
	 * @return \System\RuntimeTypeHandle
	 */
	#[MethodOverride] public  function ResolveTypeHandle_2($typeToken, $typeInstantiationContext, $methodInstantiationContext){}
	/**
	 * @return \System\RuntimeMethodHandle
	 */
	#[MethodOverride] public  function ResolveMethodHandle_1($methodToken){}
	/**
	 * @return \System\RuntimeMethodHandle
	 */
	#[MethodOverride] public  function ResolveMethodHandle_2($methodToken, $typeInstantiationContext, $methodInstantiationContext){}
	/**
	 * @return \System\RuntimeFieldHandle
	 */
	#[MethodOverride] public  function ResolveFieldHandle_1($fieldToken){}
	/**
	 * @return \System\RuntimeFieldHandle
	 */
	#[MethodOverride] public  function ResolveFieldHandle_2($fieldToken, $typeInstantiationContext, $methodInstantiationContext){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function GetModuleType_1($handle, $type){}
	/**
	 * @return \System\RuntimeType
	 */
	#[MethodOverride] protected static function GetModuleType_2($module){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function GetPEKind_1($handle, $peKind, $machine){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function GetPEKind_2($module, $peKind, $machine){}
}
/**
 */
class ModuleHandle extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\ModuleHandle
	 * @field
	 */
	public readonly $EmptyHandle;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MDStreamVersion;
	/**
	 * @return \System\Reflection\RuntimeModule
	 */
	protected  function GetRuntimeModule(){}
	/**
	 * @uses ModuleHandleMethodsOverride::Equals_1 ($obj)
	 * @uses ModuleHandleMethodsOverride::Equals_2 ($handle)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\ModuleHandle $left
	 * @param \System\ModuleHandle $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\ModuleHandle $left
	 * @param \System\ModuleHandle $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\Reflection\Emit\DynamicMethod $method
	 * @param \System\Reflection\RuntimeModule $module
	 * @param \System\String|string $name
	 * @param \System\Byte[] $sig
	 * @param \System\Resolver $resolver
	 * @return \System\IRuntimeMethodInfo
	 */
	protected static function GetDynamicMethod($method, $module, $name, $sig, $resolver){}
	/**
	 * @param \System\Reflection\RuntimeModule $module
	 * @return \System\Int32|int
	 */
	protected static function GetToken($module){}
	/**
	 * @param \System\Reflection\RuntimeModule $module
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidateModulePointer($module){}
	/**
	 * @param \System\Int32|int $typeToken
	 * @return \System\RuntimeTypeHandle
	 */
	public  function GetRuntimeTypeHandleFromMetadataToken($typeToken){}
	/**
	 * @uses ModuleHandleMethodsOverride::ResolveTypeHandle_1 ($typeToken)
	 * @uses ModuleHandleMethodsOverride::ResolveTypeHandle_2 ($typeToken, $typeInstantiationContext, $methodInstantiationContext)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ResolveTypeHandle(mixed ...$args){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Int32|int $typeToken
	 * @param \System\IntPtr* $typeInstArgs
	 * @param \System\Int32|int $typeInstCount
	 * @param \System\IntPtr* $methodInstArgs
	 * @param \System\Int32|int $methodInstCount
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $type
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ResolveType($module, $typeToken, $typeInstArgs, $typeInstCount, $methodInstArgs, $methodInstCount, $type){}
	/**
	 * @param \System\Int32|int $methodToken
	 * @return \System\RuntimeMethodHandle
	 */
	public  function GetRuntimeMethodHandleFromMetadataToken($methodToken){}
	/**
	 * @uses ModuleHandleMethodsOverride::ResolveMethodHandle_1 ($methodToken)
	 * @uses ModuleHandleMethodsOverride::ResolveMethodHandle_2 ($methodToken, $typeInstantiationContext, $methodInstantiationContext)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ResolveMethodHandle(mixed ...$args){}
	/**
	 * @param \System\Reflection\RuntimeModule $module
	 * @param \System\Int32|int $methodToken
	 * @param \System\ReadOnlySpan_1 $typeInstantiationContext
	 * @param \System\ReadOnlySpan_1 $methodInstantiationContext
	 * @return \System\RuntimeMethodHandleInternal
	 */
	protected static function ResolveMethodHandleInternal($module, $methodToken, $typeInstantiationContext, $methodInstantiationContext){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Int32|int $methodToken
	 * @param \System\IntPtr* $typeInstArgs
	 * @param \System\Int32|int $typeInstCount
	 * @param \System\IntPtr* $methodInstArgs
	 * @param \System\Int32|int $methodInstCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ResolveMethod($module, $methodToken, $typeInstArgs, $typeInstCount, $methodInstArgs, $methodInstCount){}
	/**
	 * @param \System\Int32|int $fieldToken
	 * @return \System\RuntimeFieldHandle
	 */
	public  function GetRuntimeFieldHandleFromMetadataToken($fieldToken){}
	/**
	 * @uses ModuleHandleMethodsOverride::ResolveFieldHandle_1 ($fieldToken)
	 * @uses ModuleHandleMethodsOverride::ResolveFieldHandle_2 ($fieldToken, $typeInstantiationContext, $methodInstantiationContext)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ResolveFieldHandle(mixed ...$args){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Int32|int $fieldToken
	 * @param \System\IntPtr* $typeInstArgs
	 * @param \System\Int32|int $typeInstCount
	 * @param \System\IntPtr* $methodInstArgs
	 * @param \System\Int32|int $methodInstCount
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $retField
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ResolveField($module, $fieldToken, $typeInstArgs, $typeInstCount, $methodInstArgs, $methodInstCount, $retField){}
	/**
	 * @uses ModuleHandleMethodsOverride::GetModuleType_1 ($handle, $type)
	 * @uses ModuleHandleMethodsOverride::GetModuleType_2 ($module)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetModuleType(mixed ...$args){}
	/**
	 * @uses ModuleHandleMethodsOverride::GetPEKind_1 ($handle, $peKind, $machine)
	 * @uses ModuleHandleMethodsOverride::GetPEKind_2 ($module, $peKind, $machine)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetPEKind(mixed ...$args){}
	/**
	 * @param \System\Reflection\RuntimeModule $module
	 * @return \System\Int32|int
	 */
	protected static function GetMDStreamVersion($module){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MDStreamVersion(){}
	/**
	 * @param \System\Reflection\RuntimeModule $module
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _GetMetadataImport($module){}
	/**
	 * @param \System\Reflection\RuntimeModule $module
	 * @return \System\Reflection\MetadataImport
	 */
	protected static function GetMetadataImport($module){}
}
