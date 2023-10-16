<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RuntimeTypeHandleMethodsOverride
{
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] protected static function GetTypeHelper_1($typeStart, $genericArgs, $pModifiers, $cModifiers){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] protected static function GetTypeHelper_2($typeStart, $genericArgs, $modifiers){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function op_Equality_1($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function op_Equality_2($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function op_Inequality_1($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function op_Inequality_2($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($handle){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride] protected static function CopyRuntimeTypeHandles_1($inHandles, $stackScratch){}
	/**
	 * @return \System\IntPtr[]
	 */
	#[MethodOverride] protected static function CopyRuntimeTypeHandles_2($inHandles, $length){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected static function CreateInstanceForAnotherGenericParameter_1($type, $genericParameter){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected static function CreateInstanceForAnotherGenericParameter_2($type, $genericParameter1, $genericParameter2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function CreateInstanceForAnotherGenericParameter_3($baseType, $pTypeHandles, $cTypeHandles, $instantiatedObject){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function GetActivationInfo_1($rt, $pfnAllocator, $vAllocatorFirstArg, $pfnCtor, $ctorIsPublic){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function GetActivationInfo_2($pRuntimeType, $ppfnAllocator, $pvAllocatorFirstArg, $ppfnCtor, $pfCtorIsPublic){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function GetConstraints_1($handle, $types){}
	/**
	 * @return \System\Type[]
	 */
	#[MethodOverride] protected  function GetConstraints_2(){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] private static function GetGCHandle_1($handle, $type){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] protected  function GetGCHandle_2($type){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] private static function FreeGCHandle_1($typeHandle, $objHandle){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] protected  function FreeGCHandle_2($objHandle){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function VerifyInterfaceIsImplemented_1($handle, $interfaceHandle){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function VerifyInterfaceIsImplemented_2($interfaceHandle){}
	/**
	 * @return \System\RuntimeMethodHandleInternal
	 */
	#[MethodOverride] private static function GetInterfaceMethodImplementation_1($handle, $interfaceHandle, $interfaceMethodHandle){}
	/**
	 * @return \System\RuntimeMethodHandleInternal
	 */
	#[MethodOverride] protected  function GetInterfaceMethodImplementation_2($interfaceHandle, $interfaceMethodHandle){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function ConstructName_1($handle, $formatFlags, $retString){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected  function ConstructName_2($formatFlags){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function GetTypeByName_1($name, $throwOnError, $ignoreCase, $stackMark, $assemblyLoadContext, $type, $keepalive){}
	/**
	 * @return \System\RuntimeType
	 */
	#[MethodOverride] protected static function GetTypeByName_2($name, $throwOnError, $ignoreCase, $stackMark){}
	/**
	 * @return \System\RuntimeType
	 */
	#[MethodOverride] protected static function GetTypeByName_3($name, $throwOnError, $ignoreCase, $stackMark, $assemblyLoadContext){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function GetTypeByNameUsingCARules_1($name, $scope, $type){}
	/**
	 * @return \System\RuntimeType
	 */
	#[MethodOverride] protected static function GetTypeByNameUsingCARules_2($name, $scope){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function Instantiate_1($handle, $pInst, $numGenericArgs, $type){}
	/**
	 * @return \System\RuntimeType
	 */
	#[MethodOverride] protected  function Instantiate_2($inst){}
	/**
	 * @return \System\RuntimeType
	 */
	#[MethodOverride] protected  function Instantiate_3($inst){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function MakeArray_1($handle, $rank, $type){}
	/**
	 * @return \System\RuntimeType
	 */
	#[MethodOverride] protected  function MakeArray_2($rank){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function MakeSZArray_1($handle, $type){}
	/**
	 * @return \System\RuntimeType
	 */
	#[MethodOverride] protected  function MakeSZArray_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function MakeByRef_1($handle, $type){}
	/**
	 * @return \System\RuntimeType
	 */
	#[MethodOverride] protected  function MakeByRef_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function MakePointer_1($handle, $type){}
	/**
	 * @return \System\RuntimeType
	 */
	#[MethodOverride] protected  function MakePointer_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function GetGenericTypeDefinition_1($type, $retType){}
	/**
	 * @return \System\RuntimeType
	 */
	#[MethodOverride] protected static function GetGenericTypeDefinition_2($type){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function GetGenericVariableIndex_1($type){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetGenericVariableIndex_2(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function ContainsGenericVariables_1($handle){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function ContainsGenericVariables_2(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function SatisfiesConstraints_1($paramType, $pTypeContext, $typeContextLength, $pMethodContext, $methodContextLength, $toType){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function SatisfiesConstraints_2($paramType, $typeContext, $methodContext, $toType){}
}
/**
 */
class RuntimeTypeHandle extends \System\ValueType implements 
	\System\IEquatable_1,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\RuntimeType
	 * @field
	 */
	protected $m_type;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $Value;
	/**
	 * @return \System\RuntimeTypeHandle
	 */
	protected  function GetNativeHandle(){}
	/**
	 * @return \System\RuntimeType
	 */
	protected  function GetTypeChecked(){}
	/**
	 * @param \System\RuntimeType $type
	 * @param \System\Object|object $o
	 * @return \System\Boolean
	 */
	protected static function IsInstanceOfType($type, $o){}
	/**
	 * @uses RuntimeTypeHandleMethodsOverride::GetTypeHelper_1 ($typeStart, $genericArgs, $pModifiers, $cModifiers)
	 * @uses RuntimeTypeHandleMethodsOverride::GetTypeHelper_2 ($typeStart, $genericArgs, $modifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetTypeHelper(mixed ...$args){}
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
	 * @uses RuntimeTypeHandleMethodsOverride::op_Equality_1 ($left, $right)
	 * @uses RuntimeTypeHandleMethodsOverride::op_Equality_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Equality(mixed ...$args){}
	/**
	 * @uses RuntimeTypeHandleMethodsOverride::op_Inequality_1 ($left, $right)
	 * @uses RuntimeTypeHandleMethodsOverride::op_Inequality_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Inequality(mixed ...$args){}
	/**
	 * @uses RuntimeTypeHandleMethodsOverride::Equals_1 ($obj)
	 * @uses RuntimeTypeHandleMethodsOverride::Equals_2 ($handle)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Value(){}
	/**
	 * @param \System\RuntimeTypeHandle $handle
	 * @return \System\IntPtr
	 */
	protected static function GetValueInternal($handle){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Boolean
	 */
	protected static function IsTypeDefinition($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Boolean
	 */
	protected static function IsPrimitive($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Boolean
	 */
	protected static function IsByRef($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @param \System\RuntimeType& $elementType
	 * @return \System\Boolean
	 */
	protected static function TryGetByRefElementType($type, $elementType){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Boolean
	 */
	protected static function IsPointer($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Boolean
	 */
	protected static function IsArray($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Boolean
	 */
	protected static function IsSZArray($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Boolean
	 */
	protected static function HasElementType($type){}
	/**
	 * @uses RuntimeTypeHandleMethodsOverride::CopyRuntimeTypeHandles_1 ($inHandles, $stackScratch)
	 * @uses RuntimeTypeHandleMethodsOverride::CopyRuntimeTypeHandles_2 ($inHandles, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CopyRuntimeTypeHandles(mixed ...$args){}
	/**
	 * @uses RuntimeTypeHandleMethodsOverride::CreateInstanceForAnotherGenericParameter_1 ($type, $genericParameter)
	 * @uses RuntimeTypeHandleMethodsOverride::CreateInstanceForAnotherGenericParameter_2 ($type, $genericParameter1, $genericParameter2)
	 * @uses RuntimeTypeHandleMethodsOverride::CreateInstanceForAnotherGenericParameter_3 ($baseType, $pTypeHandles, $cTypeHandles, $instantiatedObject)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateInstanceForAnotherGenericParameter(mixed ...$args){}
	/**
	 * @uses RuntimeTypeHandleMethodsOverride::GetActivationInfo_1 ($rt, $pfnAllocator, $vAllocatorFirstArg, $pfnCtor, $ctorIsPublic)
	 * @uses RuntimeTypeHandleMethodsOverride::GetActivationInfo_2 ($pRuntimeType, $ppfnAllocator, $pvAllocatorFirstArg, $ppfnCtor, $pfCtorIsPublic)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetActivationInfo(mixed ...$args){}
	/**
	 * @param \System\Void* $pClassFactory
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AllocateComObject($pClassFactory){}
	/**
	 * @return \System\RuntimeType
	 */
	protected  function GetRuntimeType(){}
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
	public  function GetModuleHandle(){}
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
	 * @return \System\Boolean
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
	 * @return \System\IntroducedMethodEnumerator
	 */
	protected static function GetIntroducedMethods($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFirstIntroducedMethod($type){}
	/**
	 * @param \System\RuntimeMethodHandleInternal& $method
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetNextIntroducedMethod($method){}
	/**
	 * @param \System\RuntimeType $type
	 * @param \System\IntPtr* $result
	 * @param \System\Int32* $count
	 * @return \System\Boolean
	 */
	protected static function GetFields($type, $result, $count){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Type[]
	 */
	protected static function GetInterfaces($type){}
	/**
	 * @uses RuntimeTypeHandleMethodsOverride::GetConstraints_1 ($handle, $types)
	 * @uses RuntimeTypeHandleMethodsOverride::GetConstraints_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetConstraints(mixed ...$args){}
	/**
	 * @uses RuntimeTypeHandleMethodsOverride::GetGCHandle_1 ($handle, $type)
	 * @uses RuntimeTypeHandleMethodsOverride::GetGCHandle_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetGCHandle(mixed ...$args){}
	/**
	 * @uses RuntimeTypeHandleMethodsOverride::FreeGCHandle_1 ($typeHandle, $objHandle)
	 * @uses RuntimeTypeHandleMethodsOverride::FreeGCHandle_2 ($objHandle)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FreeGCHandle(mixed ...$args){}
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
	 * @uses RuntimeTypeHandleMethodsOverride::VerifyInterfaceIsImplemented_1 ($handle, $interfaceHandle)
	 * @uses RuntimeTypeHandleMethodsOverride::VerifyInterfaceIsImplemented_2 ($interfaceHandle)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function VerifyInterfaceIsImplemented(mixed ...$args){}
	/**
	 * @uses RuntimeTypeHandleMethodsOverride::GetInterfaceMethodImplementation_1 ($handle, $interfaceHandle, $interfaceMethodHandle)
	 * @uses RuntimeTypeHandleMethodsOverride::GetInterfaceMethodImplementation_2 ($interfaceHandle, $interfaceMethodHandle)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetInterfaceMethodImplementation(mixed ...$args){}
	/**
	 * @param \System\RuntimeType $type
	 * @param \System\Boolean $isGenericCOM
	 * @return \System\Boolean
	 */
	protected static function IsComObject($type, $isGenericCOM){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Boolean
	 */
	protected static function IsInterface($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Boolean
	 */
	protected static function IsByRefLike($type){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallTypeHandle $typeHandle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _IsVisible($typeHandle){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Boolean
	 */
	protected static function IsVisible($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Boolean
	 */
	protected static function IsValueType($type){}
	/**
	 * @uses RuntimeTypeHandleMethodsOverride::ConstructName_1 ($handle, $formatFlags, $retString)
	 * @uses RuntimeTypeHandleMethodsOverride::ConstructName_2 ($formatFlags)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConstructName(mixed ...$args){}
	/**
	 * @param \System\RuntimeType $type
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _GetUtf8Name($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\MdUtf8String
	 */
	protected static function GetUtf8Name($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @param \System\RuntimeType $target
	 * @return \System\Boolean
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
	 * @uses RuntimeTypeHandleMethodsOverride::GetTypeByName_1 ($name, $throwOnError, $ignoreCase, $stackMark, $assemblyLoadContext, $type, $keepalive)
	 * @uses RuntimeTypeHandleMethodsOverride::GetTypeByName_2 ($name, $throwOnError, $ignoreCase, $stackMark)
	 * @uses RuntimeTypeHandleMethodsOverride::GetTypeByName_3 ($name, $throwOnError, $ignoreCase, $stackMark, $assemblyLoadContext)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetTypeByName(mixed ...$args){}
	/**
	 * @uses RuntimeTypeHandleMethodsOverride::GetTypeByNameUsingCARules_1 ($name, $scope, $type)
	 * @uses RuntimeTypeHandleMethodsOverride::GetTypeByNameUsingCARules_2 ($name, $scope)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetTypeByNameUsingCARules(mixed ...$args){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallTypeHandle $type
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $types
	 * @param \\BOOL $fAsRuntimeTypeArray
	 * @return \System\Void|void
	 */
	protected static function GetInstantiation($type, $types, $fAsRuntimeTypeArray){}
	/**
	 * @return \System\RuntimeType[]
	 */
	protected  function GetInstantiationInternal(){}
	/**
	 * @return \System\Type[]
	 */
	protected  function GetInstantiationPublic(){}
	/**
	 * @uses RuntimeTypeHandleMethodsOverride::Instantiate_1 ($handle, $pInst, $numGenericArgs, $type)
	 * @uses RuntimeTypeHandleMethodsOverride::Instantiate_2 ($inst)
	 * @uses RuntimeTypeHandleMethodsOverride::Instantiate_3 ($inst)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Instantiate(mixed ...$args){}
	/**
	 * @uses RuntimeTypeHandleMethodsOverride::MakeArray_1 ($handle, $rank, $type)
	 * @uses RuntimeTypeHandleMethodsOverride::MakeArray_2 ($rank)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MakeArray(mixed ...$args){}
	/**
	 * @uses RuntimeTypeHandleMethodsOverride::MakeSZArray_1 ($handle, $type)
	 * @uses RuntimeTypeHandleMethodsOverride::MakeSZArray_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MakeSZArray(mixed ...$args){}
	/**
	 * @uses RuntimeTypeHandleMethodsOverride::MakeByRef_1 ($handle, $type)
	 * @uses RuntimeTypeHandleMethodsOverride::MakeByRef_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MakeByRef(mixed ...$args){}
	/**
	 * @uses RuntimeTypeHandleMethodsOverride::MakePointer_1 ($handle, $type)
	 * @uses RuntimeTypeHandleMethodsOverride::MakePointer_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MakePointer(mixed ...$args){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallTypeHandle $handle
	 * @return \\BOOL
	 */
	protected static function IsCollectible($handle){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Boolean
	 */
	protected static function HasInstantiation($type){}
	/**
	 * @uses RuntimeTypeHandleMethodsOverride::GetGenericTypeDefinition_1 ($type, $retType)
	 * @uses RuntimeTypeHandleMethodsOverride::GetGenericTypeDefinition_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetGenericTypeDefinition(mixed ...$args){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Boolean
	 */
	protected static function IsGenericTypeDefinition($type){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Boolean
	 */
	protected static function IsGenericVariable($type){}
	/**
	 * @uses RuntimeTypeHandleMethodsOverride::GetGenericVariableIndex_1 ($type)
	 * @uses RuntimeTypeHandleMethodsOverride::GetGenericVariableIndex_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetGenericVariableIndex(mixed ...$args){}
	/**
	 * @uses RuntimeTypeHandleMethodsOverride::ContainsGenericVariables_1 ($handle)
	 * @uses RuntimeTypeHandleMethodsOverride::ContainsGenericVariables_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ContainsGenericVariables(mixed ...$args){}
	/**
	 * @uses RuntimeTypeHandleMethodsOverride::SatisfiesConstraints_1 ($paramType, $pTypeContext, $typeContextLength, $pMethodContext, $methodContextLength, $toType)
	 * @uses RuntimeTypeHandleMethodsOverride::SatisfiesConstraints_2 ($paramType, $typeContext, $methodContext, $toType)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SatisfiesConstraints(mixed ...$args){}
	/**
	 * @param \System\RuntimeType $type
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _GetMetadataImport($type){}
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
	public  function GetObjectData($info, $context){}
	/**
	 * @param \System\RuntimeType $rtType1
	 * @param \System\RuntimeType $rtType2
	 * @return \System\Boolean
	 */
	protected static function IsEquivalentTo($rtType1, $rtType2){}
}
