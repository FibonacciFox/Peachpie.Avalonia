<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ModuleHandleOverride {
	/**
	 * @deprecated
	 * @param \System\Int32|int $typeToken
	 * @return \System\RuntimeTypeHandle
	 */
	#[MethodOverride]public function ResolveTypeHandle_1 ($typeToken){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $typeToken
	 * @param \System\RuntimeTypeHandle $typeInstantiationContext
	 * @param \System\RuntimeTypeHandle $methodInstantiationContext
	 * @return \System\RuntimeTypeHandle
	 */
	#[MethodOverride]public function ResolveTypeHandle_2 ($typeToken, $typeInstantiationContext, $methodInstantiationContext){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $methodToken
	 * @return \System\RuntimeMethodHandle
	 */
	#[MethodOverride]public function ResolveMethodHandle_1 ($methodToken){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $methodToken
	 * @param \System\RuntimeTypeHandle $typeInstantiationContext
	 * @param \System\RuntimeTypeHandle $methodInstantiationContext
	 * @return \System\RuntimeMethodHandle
	 */
	#[MethodOverride]public function ResolveMethodHandle_2 ($methodToken, $typeInstantiationContext, $methodInstantiationContext){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $fieldToken
	 * @return \System\RuntimeFieldHandle
	 */
	#[MethodOverride]public function ResolveFieldHandle_1 ($fieldToken){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $fieldToken
	 * @param \System\RuntimeTypeHandle $typeInstantiationContext
	 * @param \System\RuntimeTypeHandle $methodInstantiationContext
	 * @return \System\RuntimeFieldHandle
	 */
	#[MethodOverride]public function ResolveFieldHandle_2 ($fieldToken, $typeInstantiationContext, $methodInstantiationContext){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallModule $handle
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $type
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function GetModuleType_1 ($handle, $type){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeModule $module
	 * @return \System\RuntimeType
	 */
	#[MethodOverride]protected static function GetModuleType_2 ($module){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallModule $handle
	 * @param \System\Int32* $peKind
	 * @param \System\Int32* $machine
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function GetPEKind_1 ($handle, $peKind, $machine){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeModule $module
	 * @param \System\Reflection\PortableExecutableKinds& &$peKind
	 * @param \System\Reflection\ImageFileMachine& &$machine
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function GetPEKind_2 ($module, &$peKind, &$machine){}
}
final class ModuleHandle extends \System\ValueType implements
	\System\IEquatable_1
{
	use ModuleHandleOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \System\ModuleHandle
	 */
	public static $EmptyHandle;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MDStreamVersion;
	/**
	 * @return \System\Reflection\RuntimeModule
	 */
	protected function GetRuntimeModule(){}
	/**
	 * @param \System\ModuleHandle $left
	 * @param \System\ModuleHandle $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\ModuleHandle $left
	 * @param \System\ModuleHandle $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\Reflection\Emit\DynamicMethod $method
	 * @param \System\Reflection\RuntimeModule $module
	 * @param \System\String|string $name
	 * @param \System\Byte $sig
	 * @param \System\Resolver $resolver
	 * @return \System\IRuntimeMethodInfo
	 */
	protected static function GetDynamicMethod($method, $module, $name, $sig, $resolver){}
	/**
	 * @param \System\Reflection\RuntimeModule $module
	 * @return \System\Int32|int
	 */
	protected static function GetToken($module){}
	private static function ValidateModulePointer($module){}
	/**
	 * @param \System\Int32|int $typeToken
	 * @return \System\RuntimeTypeHandle
	 */
	public function GetRuntimeTypeHandleFromMetadataToken($typeToken){}
	/**
	 * @uses ModuleHandleOverride::ResolveTypeHandle_1 <br>public , args: ($typeToken)<br>
	 * @uses ModuleHandleOverride::ResolveTypeHandle_2 <br>public , args: ($typeToken, $typeInstantiationContext, $methodInstantiationContext)<br>
	 * @var mixed|\override ...$args
	 * @return \System\RuntimeTypeHandle|mixed|\override
	 */
	#[MethodOverridePublic]function ResolveTypeHandle (\override ...$args){}
	private static function ResolveType($module, $typeToken, $typeInstArgs, $typeInstCount, $methodInstArgs, $methodInstCount, $type){}
	/**
	 * @param \System\Int32|int $methodToken
	 * @return \System\RuntimeMethodHandle
	 */
	public function GetRuntimeMethodHandleFromMetadataToken($methodToken){}
	/**
	 * @uses ModuleHandleOverride::ResolveMethodHandle_1 <br>public , args: ($methodToken)<br>
	 * @uses ModuleHandleOverride::ResolveMethodHandle_2 <br>public , args: ($methodToken, $typeInstantiationContext, $methodInstantiationContext)<br>
	 * @var mixed|\override ...$args
	 * @return \System\RuntimeMethodHandle|mixed|\override
	 */
	#[MethodOverridePublic]function ResolveMethodHandle (\override ...$args){}
	/**
	 * @param \System\Reflection\RuntimeModule $module
	 * @param \System\Int32|int $methodToken
	 * @param \System\ReadOnlySpan_1 $typeInstantiationContext [generic: System\IntPtr]
	 * @param \System\ReadOnlySpan_1 $methodInstantiationContext [generic: System\IntPtr]
	 * @return \System\RuntimeMethodHandleInternal
	 */
	protected static function ResolveMethodHandleInternal($module, $methodToken, $typeInstantiationContext, $methodInstantiationContext){}
	private static function ResolveMethod($module, $methodToken, $typeInstArgs, $typeInstCount, $methodInstArgs, $methodInstCount){}
	/**
	 * @param \System\Int32|int $fieldToken
	 * @return \System\RuntimeFieldHandle
	 */
	public function GetRuntimeFieldHandleFromMetadataToken($fieldToken){}
	/**
	 * @uses ModuleHandleOverride::ResolveFieldHandle_1 <br>public , args: ($fieldToken)<br>
	 * @uses ModuleHandleOverride::ResolveFieldHandle_2 <br>public , args: ($fieldToken, $typeInstantiationContext, $methodInstantiationContext)<br>
	 * @var mixed|\override ...$args
	 * @return \System\RuntimeFieldHandle|mixed|\override
	 */
	#[MethodOverridePublic]function ResolveFieldHandle (\override ...$args){}
	private static function ResolveField($module, $fieldToken, $typeInstArgs, $typeInstCount, $methodInstArgs, $methodInstCount, $retField){}
	/**
	 * @uses ModuleHandleOverride::GetModuleType_1 <br>protected , args: ($handle, $type)<br>
	 * @uses ModuleHandleOverride::GetModuleType_2 <br>protected , args: ($module)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\RuntimeType|mixed|\override
	 */
	#[MethodOverrideProtected]function GetModuleType (\override ...$args){}
	/**
	 * @uses ModuleHandleOverride::GetPEKind_1 <br>private , args: ($handle, $peKind, $machine)<br>
	 * @uses ModuleHandleOverride::GetPEKind_2 <br>protected , args: ($module, &$peKind, &$machine)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function GetPEKind (\override ...$args){}
	/**
	 * @param \System\Reflection\RuntimeModule $module
	 * @return \System\Int32|int
	 */
	protected static function GetMDStreamVersion($module){}
	private static function _GetMetadataImport($module){}
	/**
	 * @param \System\Reflection\RuntimeModule $module
	 * @return \System\Reflection\MetadataImport
	 */
	protected static function GetMetadataImport($module){}
}