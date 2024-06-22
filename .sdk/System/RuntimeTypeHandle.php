<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RuntimeTypeHandleOverride {
	/**
	 * @deprecated
	 * @param \System\Type $typeStart
	 * @param \System\Type $genericArgs
	 * @param \System\IntPtr $pModifiers
	 * @param \System\Int32|int $cModifiers
	 * @return \System\Type
	 */
	#[MethodOverride]protected static function GetTypeHelper_1 ($typeStart, $genericArgs, $pModifiers, $cModifiers){}
	/**
	 * @deprecated
	 * @param \System\Type $typeStart
	 * @param \System\Type $genericArgs
	 * @param \System\ReadOnlySpan_1 $modifiers [generic: System\Int32]
	 * @return \System\Type
	 */
	#[MethodOverride]protected static function GetTypeHelper_2 ($typeStart, $genericArgs, $modifiers){}
	/**
	 * @deprecated
	 * @param \System\RuntimeTypeHandle $left
	 * @param \System\Object|object $right
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function op_Equality_1 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Object|object $left
	 * @param \System\RuntimeTypeHandle $right
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function op_Equality_2 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\RuntimeTypeHandle $left
	 * @param \System\Object|object $right
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function op_Inequality_1 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Object|object $left
	 * @param \System\RuntimeTypeHandle $right
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function op_Inequality_2 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\RuntimeTypeHandle $inHandles
	 * @param \System\Span_1 $stackScratch [generic: System\IntPtr]
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride]protected static function CopyRuntimeTypeHandles_1 ($inHandles, $stackScratch){}
	/**
	 * @deprecated
	 * @param \System\Type $inHandles
	 * @param \System\Int32& &$length
	 * @return \System\IntPtr
	 */
	#[MethodOverride]protected static function CopyRuntimeTypeHandles_2 ($inHandles, &$length){}
	/**
	 * @deprecated
	 * @param \System\RuntimeType $type
	 * @param \System\RuntimeType $genericParameter
	 * @return \System\Object|object
	 */
	#[MethodOverride]protected static function CreateInstanceForAnotherGenericParameter_1 ($type, $genericParameter){}
	/**
	 * @deprecated
	 * @param \System\RuntimeType $type
	 * @param \System\RuntimeType $genericParameter1
	 * @param \System\RuntimeType $genericParameter2
	 * @return \System\Object|object
	 */
	#[MethodOverride]protected static function CreateInstanceForAnotherGenericParameter_2 ($type, $genericParameter1, $genericParameter2){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallTypeHandle $baseType
	 * @param \System\IntPtr* $pTypeHandles
	 * @param \System\Int32|int $cTypeHandles
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $instantiatedObject
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function CreateInstanceForAnotherGenericParameter_3 ($baseType, $pTypeHandles, $cTypeHandles, $instantiatedObject){}
	/**
	 * @deprecated
	 * @param \System\RuntimeType $rt
	 * @param \(fnptr)& &$pfnAllocator
	 * @param \System\Void*& &$vAllocatorFirstArg
	 * @param \(fnptr)& &$pfnCtor
	 * @param \System\Boolean& &$ctorIsPublic
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function GetActivationInfo_1 ($rt, &$pfnAllocator, &$vAllocatorFirstArg, &$pfnCtor, &$ctorIsPublic){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $pRuntimeType
	 * @param \(fnptr)* $ppfnAllocator
	 * @param \System\Void** $pvAllocatorFirstArg
	 * @param \(fnptr)* $ppfnCtor
	 * @param \Interop+BOOL* $pfCtorIsPublic
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function GetActivationInfo_2 ($pRuntimeType, $ppfnAllocator, $pvAllocatorFirstArg, $ppfnCtor, $pfCtorIsPublic){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallTypeHandle $handle
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $types
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function GetConstraints_1 ($handle, $types){}
	/**
	 * @deprecated
	 * @return \System\Type
	 */
	#[MethodOverride]protected function GetConstraints_2 (){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallTypeHandle $handle
	 * @param \System\Runtime\InteropServices\GCHandleType $type
	 * @return \System\IntPtr
	 */
	#[MethodOverride]private static function GetGCHandle_1 ($handle, $type){}
	/**
	 * @deprecated
	 * @param \System\Runtime\InteropServices\GCHandleType $type
	 * @return \System\IntPtr
	 */
	#[MethodOverride]protected function GetGCHandle_2 ($type){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallTypeHandle $typeHandle
	 * @param \System\IntPtr $objHandle
	 * @return \System\IntPtr
	 */
	#[MethodOverride]private static function FreeGCHandle_1 ($typeHandle, $objHandle){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $objHandle
	 * @return \System\IntPtr
	 */
	#[MethodOverride]protected function FreeGCHandle_2 ($objHandle){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallTypeHandle $handle
	 * @param \System\Runtime\CompilerServices\QCallTypeHandle $interfaceHandle
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function VerifyInterfaceIsImplemented_1 ($handle, $interfaceHandle){}
	/**
	 * @deprecated
	 * @param \System\RuntimeTypeHandle $interfaceHandle
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function VerifyInterfaceIsImplemented_2 ($interfaceHandle){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallTypeHandle $handle
	 * @param \System\Runtime\CompilerServices\QCallTypeHandle $interfaceHandle
	 * @param \System\RuntimeMethodHandleInternal $interfaceMethodHandle
	 * @return \System\RuntimeMethodHandleInternal
	 */
	#[MethodOverride]private static function GetInterfaceMethodImplementation_1 ($handle, $interfaceHandle, $interfaceMethodHandle){}
	/**
	 * @deprecated
	 * @param \System\RuntimeTypeHandle $interfaceHandle
	 * @param \System\RuntimeMethodHandleInternal $interfaceMethodHandle
	 * @return \System\RuntimeMethodHandleInternal
	 */
	#[MethodOverride]protected function GetInterfaceMethodImplementation_2 ($interfaceHandle, $interfaceMethodHandle){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallTypeHandle $handle
	 * @param \System\TypeNameFormatFlags $formatFlags
	 * @param \System\Runtime\CompilerServices\StringHandleOnStack $retString
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function ConstructName_1 ($handle, $formatFlags, $retString){}
	/**
	 * @deprecated
	 * @param \System\TypeNameFormatFlags $formatFlags
	 * @return \System\String|string
	 */
	#[MethodOverride]protected function ConstructName_2 ($formatFlags){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Boolean|bool $throwOnError
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \System\Runtime\CompilerServices\StackCrawlMarkHandle $stackMark
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $assemblyLoadContext
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $type
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $keepalive
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function GetTypeByName_1 ($name, $throwOnError, $ignoreCase, $stackMark, $assemblyLoadContext, $type, $keepalive){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Boolean|bool $throwOnError
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \System\Threading\StackCrawlMark& $stackMark
	 * @return \System\RuntimeType
	 */
	#[MethodOverride]protected static function GetTypeByName_2 ($name, $throwOnError, $ignoreCase, $stackMark){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Boolean|bool $throwOnError
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \System\Threading\StackCrawlMark& $stackMark
	 * @param \System\Runtime\Loader\AssemblyLoadContext $assemblyLoadContext
	 * @return \System\RuntimeType
	 */
	#[MethodOverride]protected static function GetTypeByName_3 ($name, $throwOnError, $ignoreCase, $stackMark, $assemblyLoadContext){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Runtime\CompilerServices\QCallModule $scope
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $type
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function GetTypeByNameUsingCARules_1 ($name, $scope, $type){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\RuntimeModule $scope
	 * @return \System\RuntimeType
	 */
	#[MethodOverride]protected static function GetTypeByNameUsingCARules_2 ($name, $scope){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallTypeHandle $handle
	 * @param \System\IntPtr* $pInst
	 * @param \System\Int32|int $numGenericArgs
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $type
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function Instantiate_1 ($handle, $pInst, $numGenericArgs, $type){}
	/**
	 * @deprecated
	 * @param \System\RuntimeType $inst
	 * @return \System\RuntimeType
	 */
	#[MethodOverride]protected function Instantiate_2 ($inst){}
	/**
	 * @deprecated
	 * @param \System\Type $inst
	 * @return \System\RuntimeType
	 */
	#[MethodOverride]protected function Instantiate_3 ($inst){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallTypeHandle $handle
	 * @param \System\Int32|int $rank
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $type
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function MakeArray_1 ($handle, $rank, $type){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $rank
	 * @return \System\RuntimeType
	 */
	#[MethodOverride]protected function MakeArray_2 ($rank){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallTypeHandle $handle
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $type
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function MakeSZArray_1 ($handle, $type){}
	/**
	 * @deprecated
	 * @return \System\RuntimeType
	 */
	#[MethodOverride]protected function MakeSZArray_2 (){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallTypeHandle $handle
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $type
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function MakeByRef_1 ($handle, $type){}
	/**
	 * @deprecated
	 * @return \System\RuntimeType
	 */
	#[MethodOverride]protected function MakeByRef_2 (){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallTypeHandle $handle
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $type
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function MakePointer_1 ($handle, $type){}
	/**
	 * @deprecated
	 * @return \System\RuntimeType
	 */
	#[MethodOverride]protected function MakePointer_2 (){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallTypeHandle $type
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $retType
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function GetGenericTypeDefinition_1 ($type, $retType){}
	/**
	 * @deprecated
	 * @param \System\RuntimeType $type
	 * @return \System\RuntimeType
	 */
	#[MethodOverride]protected static function GetGenericTypeDefinition_2 ($type){}
	/**
	 * @deprecated
	 * @param \System\RuntimeType $type
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function GetGenericVariableIndex_1 ($type){}
	/**
	 * @deprecated
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected function GetGenericVariableIndex_2 (){}
	/**
	 * @deprecated
	 * @param \System\RuntimeType $handle
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function ContainsGenericVariables_1 ($handle){}
	/**
	 * @deprecated
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected function ContainsGenericVariables_2 (){}
	/**
	 * @deprecated
	 * @param \System\RuntimeType $paramType
	 * @param \System\IntPtr* $pTypeContext
	 * @param \System\Int32|int $typeContextLength
	 * @param \System\IntPtr* $pMethodContext
	 * @param \System\Int32|int $methodContextLength
	 * @param \System\RuntimeType $toType
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function SatisfiesConstraints_1 ($paramType, $pTypeContext, $typeContextLength, $pMethodContext, $methodContextLength, $toType){}
	/**
	 * @deprecated
	 * @param \System\RuntimeType $paramType
	 * @param \System\RuntimeType $typeContext
	 * @param \System\RuntimeType $methodContext
	 * @param \System\RuntimeType $toType
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function SatisfiesConstraints_2 ($paramType, $typeContext, $methodContext, $toType){}
}
final class RuntimeTypeHandle extends \System\ValueType implements
	\System\IEquatable_1,
	\System\Runtime\Serialization\ISerializable
{
	use RuntimeTypeHandleOverride;

	/**
	 * @field
	 * @var \System\RuntimeType
	 */
	protected $m_type;
	/**
	 * @property
	 * @var \System\IntPtr
	 * @since readonly
	 */
	public $Value;
	/**
	 * @return \System\RuntimeTypeHandle
	 */
	protected function GetNativeHandle(){}
	/**
	 * @return \System\RuntimeType
	 */
	protected function GetTypeChecked(){}
	/**
	 * @param \System\RuntimeType $type
	 * @param \System\Object|object $o
	 * @return \System\Boolean|bool
	 */
	protected static function IsInstanceOfType($type, $o){}
	/**
	 * @uses RuntimeTypeHandleOverride::GetTypeHelper_1 <br>protected , args: ($typeStart, $genericArgs, $pModifiers, $cModifiers)<br>
	 * @uses RuntimeTypeHandleOverride::GetTypeHelper_2 <br>protected , args: ($typeStart, $genericArgs, $modifiers)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Type|mixed|\override
	 */
	#[MethodOverrideProtected]function GetTypeHelper (\override ...$args){}
	/**
	 * @param \System\IntPtr $value
	 * @return \System\RuntimeTypeHandle
	 */
	public static function FromIntPtr($value){}
	/**
	 * @param \System\RuntimeTypeHandle $value
	 * @return \System\IntPtr
	 */
	public static function ToIntPtr($value){}
	/**
	 * @uses RuntimeTypeHandleOverride::op_Equality_1 <br>public , args: ($left, $right)<br>
	 * @uses RuntimeTypeHandleOverride::op_Equality_2 <br>public , args: ($left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function op_Equality (\override ...$args){}
	/**
	 * @uses RuntimeTypeHandleOverride::op_Inequality_1 <br>public , args: ($left, $right)<br>
	 * @uses RuntimeTypeHandleOverride::op_Inequality_2 <br>public , args: ($left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function op_Inequality (\override ...$args){}
	/**
	 * @param \System\RuntimeTypeHandle $handle
	 * @return \System\IntPtr
	 */
	protected static function GetValueInternal($handle){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Boolean|bool
	 */
	protected static function IsTypeDefinition($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Boolean|bool
	 */
	protected static function IsPrimitive($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Boolean|bool
	 */
	protected static function IsByRef($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @param \System\RuntimeType& &$elementType
	 * @return \System\Boolean|bool
	 */
	protected static function TryGetByRefElementType($type, &$elementType){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Boolean|bool
	 */
	protected static function IsPointer($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Boolean|bool
	 */
	protected static function IsArray($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Boolean|bool
	 */
	protected static function IsSZArray($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Boolean|bool
	 */
	protected static function HasElementType($type){}
	/**
	 * @uses RuntimeTypeHandleOverride::CopyRuntimeTypeHandles_1 <br>protected , args: ($inHandles, $stackScratch)<br>
	 * @uses RuntimeTypeHandleOverride::CopyRuntimeTypeHandles_2 <br>protected , args: ($inHandles, &$length)<br>
	 * @var mixed|\override ...$args
	 * @return \System\ReadOnlySpan_1|\System\IntPtr|mixed|\override
	 */
	#[MethodOverrideProtected]function CopyRuntimeTypeHandles (\override ...$args){}
	/**
	 * @uses RuntimeTypeHandleOverride::CreateInstanceForAnotherGenericParameter_1 <br>protected , args: ($type, $genericParameter)<br>
	 * @uses RuntimeTypeHandleOverride::CreateInstanceForAnotherGenericParameter_2 <br>protected , args: ($type, $genericParameter1, $genericParameter2)<br>
	 * @uses RuntimeTypeHandleOverride::CreateInstanceForAnotherGenericParameter_3 <br>private , args: ($baseType, $pTypeHandles, $cTypeHandles, $instantiatedObject)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|\System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function CreateInstanceForAnotherGenericParameter (\override ...$args){}
	/**
	 * @uses RuntimeTypeHandleOverride::GetActivationInfo_1 <br>protected , args: ($rt, &$pfnAllocator, &$vAllocatorFirstArg, &$pfnCtor, &$ctorIsPublic)<br>
	 * @uses RuntimeTypeHandleOverride::GetActivationInfo_2 <br>private , args: ($pRuntimeType, $ppfnAllocator, $pvAllocatorFirstArg, $ppfnCtor, $pfCtorIsPublic)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function GetActivationInfo (\override ...$args){}
	/**
	 * @return \System\RuntimeType
	 */
	protected function GetRuntimeType(){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Reflection\CorElementType
	 */
	protected static function GetCorElementType($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Reflection\RuntimeAssembly
	 */
	protected static function GetAssembly($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Reflection\RuntimeModule
	 */
	protected static function GetModule($type){}
	/**
	 * @return \System\ModuleHandle
	 */
	public function GetModuleHandle(){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\RuntimeType
	 */
	protected static function GetBaseType($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Reflection\TypeAttributes
	 */
	protected static function GetAttributes($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\RuntimeType
	 */
	protected static function GetElementType($type){}
	/**
	 * @param \System\RuntimeType $left
	 * @param \System\RuntimeType $right
	 * @return \System\Boolean|bool
	 */
	protected static function CompareCanonicalHandles($left, $right){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Int32|int
	 */
	protected static function GetArrayRank($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Int32|int
	 */
	protected static function GetToken($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @param \System\Int32|int $slot
	 * @return \System\RuntimeMethodHandleInternal
	 */
	protected static function GetMethodAt($type, $slot){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\RuntimeTypeHandle+IntroducedMethodEnumerator
	 */
	protected static function GetIntroducedMethods($type){}
	private static function GetFirstIntroducedMethod($type){}
	private static function GetNextIntroducedMethod($method){}
	/**
	 * @param \System\RuntimeType $type
	 * @param \System\IntPtr* $result
	 * @param \System\Int32* $count
	 * @return \System\Boolean|bool
	 */
	protected static function GetFields($type, $result, $count){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Type[]
	 */
	protected static function GetInterfaces($type){}
	/**
	 * @uses RuntimeTypeHandleOverride::GetConstraints_1 <br>private , args: ($handle, $types)<br>
	 * @uses RuntimeTypeHandleOverride::GetConstraints_2 <br>protected , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\Type|mixed|\override
	 */
	#[MethodOverrideProtected]function GetConstraints (\override ...$args){}
	/**
	 * @uses RuntimeTypeHandleOverride::GetGCHandle_1 <br>private , args: ($handle, $type)<br>
	 * @uses RuntimeTypeHandleOverride::GetGCHandle_2 <br>protected , args: ($type)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IntPtr|mixed|\override
	 */
	#[MethodOverrideProtected]function GetGCHandle (\override ...$args){}
	/**
	 * @uses RuntimeTypeHandleOverride::FreeGCHandle_1 <br>private , args: ($typeHandle, $objHandle)<br>
	 * @uses RuntimeTypeHandleOverride::FreeGCHandle_2 <br>protected , args: ($objHandle)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IntPtr|mixed|\override
	 */
	#[MethodOverrideProtected]function FreeGCHandle (\override ...$args){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Int32|int
	 */
	protected static function GetNumVirtuals($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Int32|int
	 */
	protected static function GetNumVirtualsAndStaticVirtuals($type){}
	/**
	 * @uses RuntimeTypeHandleOverride::VerifyInterfaceIsImplemented_1 <br>private , args: ($handle, $interfaceHandle)<br>
	 * @uses RuntimeTypeHandleOverride::VerifyInterfaceIsImplemented_2 <br>protected , args: ($interfaceHandle)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function VerifyInterfaceIsImplemented (\override ...$args){}
	/**
	 * @uses RuntimeTypeHandleOverride::GetInterfaceMethodImplementation_1 <br>private , args: ($handle, $interfaceHandle, $interfaceMethodHandle)<br>
	 * @uses RuntimeTypeHandleOverride::GetInterfaceMethodImplementation_2 <br>protected , args: ($interfaceHandle, $interfaceMethodHandle)<br>
	 * @var mixed|\override ...$args
	 * @return \System\RuntimeMethodHandleInternal|mixed|\override
	 */
	#[MethodOverrideProtected]function GetInterfaceMethodImplementation (\override ...$args){}
	/**
	 * @param \System\RuntimeType $type
	 * @param \System\Boolean|bool $isGenericCOM
	 * @return \System\Boolean|bool
	 */
	protected static function IsComObject($type, $isGenericCOM){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Boolean|bool
	 */
	protected static function IsInterface($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Boolean|bool
	 */
	protected static function IsByRefLike($type){}
	private static function _IsVisible($typeHandle){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Boolean|bool
	 */
	protected static function IsVisible($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Boolean|bool
	 */
	protected static function IsValueType($type){}
	/**
	 * @uses RuntimeTypeHandleOverride::ConstructName_1 <br>private , args: ($handle, $formatFlags, $retString)<br>
	 * @uses RuntimeTypeHandleOverride::ConstructName_2 <br>protected , args: ($formatFlags)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\String|string|mixed|\override
	 */
	#[MethodOverrideProtected]function ConstructName (\override ...$args){}
	private static function _GetUtf8Name($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\MdUtf8String
	 */
	protected static function GetUtf8Name($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @param \System\RuntimeType $target
	 * @return \System\Boolean|bool
	 */
	protected static function CanCastTo($type, $target){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\RuntimeType
	 */
	protected static function GetDeclaringType($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\IRuntimeMethodInfo
	 */
	protected static function GetDeclaringMethod($type){}
	/**
	 * @uses RuntimeTypeHandleOverride::GetTypeByName_1 <br>private , args: ($name, $throwOnError, $ignoreCase, $stackMark, $assemblyLoadContext, $type, $keepalive)<br>
	 * @uses RuntimeTypeHandleOverride::GetTypeByName_2 <br>protected , args: ($name, $throwOnError, $ignoreCase, $stackMark)<br>
	 * @uses RuntimeTypeHandleOverride::GetTypeByName_3 <br>protected , args: ($name, $throwOnError, $ignoreCase, $stackMark, $assemblyLoadContext)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\RuntimeType|mixed|\override
	 */
	#[MethodOverrideProtected]function GetTypeByName (\override ...$args){}
	/**
	 * @uses RuntimeTypeHandleOverride::GetTypeByNameUsingCARules_1 <br>private , args: ($name, $scope, $type)<br>
	 * @uses RuntimeTypeHandleOverride::GetTypeByNameUsingCARules_2 <br>protected , args: ($name, $scope)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\RuntimeType|mixed|\override
	 */
	#[MethodOverrideProtected]function GetTypeByNameUsingCARules (\override ...$args){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallTypeHandle $type
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $types
	 * @param \Interop+BOOL $fAsRuntimeTypeArray
	 * @return \System\Void|void
	 */
	protected static function GetInstantiation($type, $types, $fAsRuntimeTypeArray){}
	/**
	 * @return \System\RuntimeType[]
	 */
	protected function GetInstantiationInternal(){}
	/**
	 * @return \System\Type[]
	 */
	protected function GetInstantiationPublic(){}
	/**
	 * @uses RuntimeTypeHandleOverride::Instantiate_1 <br>private , args: ($handle, $pInst, $numGenericArgs, $type)<br>
	 * @uses RuntimeTypeHandleOverride::Instantiate_2 <br>protected , args: ($inst)<br>
	 * @uses RuntimeTypeHandleOverride::Instantiate_3 <br>protected , args: ($inst)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\RuntimeType|mixed|\override
	 */
	#[MethodOverrideProtected]function Instantiate (\override ...$args){}
	/**
	 * @uses RuntimeTypeHandleOverride::MakeArray_1 <br>private , args: ($handle, $rank, $type)<br>
	 * @uses RuntimeTypeHandleOverride::MakeArray_2 <br>protected , args: ($rank)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\RuntimeType|mixed|\override
	 */
	#[MethodOverrideProtected]function MakeArray (\override ...$args){}
	/**
	 * @uses RuntimeTypeHandleOverride::MakeSZArray_1 <br>private , args: ($handle, $type)<br>
	 * @uses RuntimeTypeHandleOverride::MakeSZArray_2 <br>protected , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\RuntimeType|mixed|\override
	 */
	#[MethodOverrideProtected]function MakeSZArray (\override ...$args){}
	/**
	 * @uses RuntimeTypeHandleOverride::MakeByRef_1 <br>private , args: ($handle, $type)<br>
	 * @uses RuntimeTypeHandleOverride::MakeByRef_2 <br>protected , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\RuntimeType|mixed|\override
	 */
	#[MethodOverrideProtected]function MakeByRef (\override ...$args){}
	/**
	 * @uses RuntimeTypeHandleOverride::MakePointer_1 <br>private , args: ($handle, $type)<br>
	 * @uses RuntimeTypeHandleOverride::MakePointer_2 <br>protected , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\RuntimeType|mixed|\override
	 */
	#[MethodOverrideProtected]function MakePointer (\override ...$args){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallTypeHandle $handle
	 * @return \Interop+BOOL
	 */
	protected static function IsCollectible($handle){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Boolean|bool
	 */
	protected static function HasInstantiation($type){}
	/**
	 * @uses RuntimeTypeHandleOverride::GetGenericTypeDefinition_1 <br>private , args: ($type, $retType)<br>
	 * @uses RuntimeTypeHandleOverride::GetGenericTypeDefinition_2 <br>protected , args: ($type)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\RuntimeType|mixed|\override
	 */
	#[MethodOverrideProtected]function GetGenericTypeDefinition (\override ...$args){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Boolean|bool
	 */
	protected static function IsGenericTypeDefinition($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Boolean|bool
	 */
	protected static function IsGenericVariable($type){}
	/**
	 * @uses RuntimeTypeHandleOverride::GetGenericVariableIndex_1 <br>private , args: ($type)<br>
	 * @uses RuntimeTypeHandleOverride::GetGenericVariableIndex_2 <br>protected , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function GetGenericVariableIndex (\override ...$args){}
	/**
	 * @uses RuntimeTypeHandleOverride::ContainsGenericVariables_1 <br>protected , args: ($handle)<br>
	 * @uses RuntimeTypeHandleOverride::ContainsGenericVariables_2 <br>protected , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function ContainsGenericVariables (\override ...$args){}
	/**
	 * @uses RuntimeTypeHandleOverride::SatisfiesConstraints_1 <br>private , args: ($paramType, $pTypeContext, $typeContextLength, $pMethodContext, $methodContextLength, $toType)<br>
	 * @uses RuntimeTypeHandleOverride::SatisfiesConstraints_2 <br>protected , args: ($paramType, $typeContext, $methodContext, $toType)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function SatisfiesConstraints (\override ...$args){}
	private static function _GetMetadataImport($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Reflection\MetadataImport
	 */
	protected static function GetMetadataImport($type){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public function GetObjectData($info, $context){}
	/**
	 * @param \System\RuntimeType $rtType1
	 * @param \System\RuntimeType $rtType2
	 * @return \System\Boolean|bool
	 */
	protected static function IsEquivalentTo($rtType1, $rtType2){}
}