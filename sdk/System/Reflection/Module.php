<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ModuleMethodsOverride
{
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_1($inherit){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_2($attributeType, $inherit){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetMethod_1($name){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetMethod_2($name, $types){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetMethod_3($name, $bindingAttr, $binder, $callConvention, $types, $modifiers){}
	/**
	 * @return \System\Reflection\MethodInfo[]
	 */
	#[MethodOverride] public  function GetMethods_1(){}
	/**
	 * @return \System\Reflection\MethodInfo[]
	 */
	#[MethodOverride] public  function GetMethods_2($bindingFlags){}
	/**
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride] public  function GetField_1($name){}
	/**
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride] public  function GetField_2($name, $bindingAttr){}
	/**
	 * @return \System\Reflection\FieldInfo[]
	 */
	#[MethodOverride] public  function GetFields_1(){}
	/**
	 * @return \System\Reflection\FieldInfo[]
	 */
	#[MethodOverride] public  function GetFields_2($bindingFlags){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_1($className){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_2($className, $ignoreCase){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_3($className, $throwOnError, $ignoreCase){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_4(){}
	/**
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride] public  function ResolveField_1($metadataToken){}
	/**
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride] public  function ResolveField_2($metadataToken, $genericTypeArguments, $genericMethodArguments){}
	/**
	 * @return \System\Reflection\MemberInfo
	 */
	#[MethodOverride] public  function ResolveMember_1($metadataToken){}
	/**
	 * @return \System\Reflection\MemberInfo
	 */
	#[MethodOverride] public  function ResolveMember_2($metadataToken, $genericTypeArguments, $genericMethodArguments){}
	/**
	 * @return \System\Reflection\MethodBase
	 */
	#[MethodOverride] public  function ResolveMethod_1($metadataToken){}
	/**
	 * @return \System\Reflection\MethodBase
	 */
	#[MethodOverride] public  function ResolveMethod_2($metadataToken, $genericTypeArguments, $genericMethodArguments){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function ResolveType_1($metadataToken){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function ResolveType_2($metadataToken, $genericTypeArguments, $genericMethodArguments){}
}
/**
 */
class Module extends \System\Object implements 
	\System\Reflection\ICustomAttributeProvider,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\Reflection\TypeFilter
	 * @field
	 */
	public readonly $FilterTypeName;
	/**
	 * @var \System\Reflection\TypeFilter
	 * @field
	 */
	public readonly $FilterTypeNameIgnoreCase;
	/**
	 * @var \System\Reflection\Assembly
	 * @property
	 */
	public readonly $Assembly;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $FullyQualifiedName;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MDStreamVersion;
	/**
	 * @var \System\Guid
	 * @property
	 */
	public readonly $ModuleVersionId;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $ScopeName;
	/**
	 * @var \System\ModuleHandle
	 * @property
	 */
	public readonly $ModuleHandle;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\CustomAttributeData]
	 * @property
	 */
	public readonly $CustomAttributes;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MetadataToken;
	/**
	 * @return \System\Reflection\Assembly
	 */
	public  function get_Assembly(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_FullyQualifiedName(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MDStreamVersion(){}
	/**
	 * @return \System\Guid
	 */
	public  function get_ModuleVersionId(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_ScopeName(){}
	/**
	 * @return \System\ModuleHandle
	 */
	public  function get_ModuleHandle(){}
	/**
	 * @return \System\ModuleHandle
	 */
	protected  function GetModuleHandleImpl(){}
	/**
	 * @param \System\Reflection\PortableExecutableKinds& $peKind
	 * @param \System\Reflection\ImageFileMachine& $machine
	 * @return \System\Void|void
	 */
	public  function GetPEKind($peKind, $machine){}
	/**
	 * @return \System\Boolean
	 */
	public  function IsResource(){}
	/**
	 * @param \System\Type $attributeType
	 * @param \System\Boolean $inherit
	 * @return \System\Boolean
	 */
	public  function IsDefined($attributeType, $inherit){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_CustomAttributes(){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	public  function GetCustomAttributesData(){}
	/**
	 * @uses ModuleMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses ModuleMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
	/**
	 * @uses ModuleMethodsOverride::GetMethod_1 ($name)
	 * @uses ModuleMethodsOverride::GetMethod_2 ($name, $types)
	 * @uses ModuleMethodsOverride::GetMethod_3 ($name, $bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMethod(mixed ...$args){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Reflection\CallingConventions $callConvention
	 * @param \System\Type[] $types
	 * @param \System\Reflection\ParameterModifier[] $modifiers
	 * @return \System\Reflection\MethodInfo
	 */
	protected  function GetMethodImpl($name, $bindingAttr, $binder, $callConvention, $types, $modifiers){}
	/**
	 * @uses ModuleMethodsOverride::GetMethods_1 ()
	 * @uses ModuleMethodsOverride::GetMethods_2 ($bindingFlags)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMethods(mixed ...$args){}
	/**
	 * @uses ModuleMethodsOverride::GetField_1 ($name)
	 * @uses ModuleMethodsOverride::GetField_2 ($name, $bindingAttr)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetField(mixed ...$args){}
	/**
	 * @uses ModuleMethodsOverride::GetFields_1 ()
	 * @uses ModuleMethodsOverride::GetFields_2 ($bindingFlags)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetFields(mixed ...$args){}
	/**
	 * @return \System\Type[]
	 */
	public  function GetTypes(){}
	/**
	 * @uses ModuleMethodsOverride::GetType_1 ($className)
	 * @uses ModuleMethodsOverride::GetType_2 ($className, $ignoreCase)
	 * @uses ModuleMethodsOverride::GetType_3 ($className, $throwOnError, $ignoreCase)
	 * @uses ModuleMethodsOverride::GetType_4 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
	/**
	 * @param \System\Reflection\TypeFilter $filter
	 * @param \System\Object|object $filterCriteria
	 * @return \System\Type[]
	 */
	public  function FindTypes($filter, $filterCriteria){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MetadataToken(){}
	/**
	 * @uses ModuleMethodsOverride::ResolveField_1 ($metadataToken)
	 * @uses ModuleMethodsOverride::ResolveField_2 ($metadataToken, $genericTypeArguments, $genericMethodArguments)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ResolveField(mixed ...$args){}
	/**
	 * @uses ModuleMethodsOverride::ResolveMember_1 ($metadataToken)
	 * @uses ModuleMethodsOverride::ResolveMember_2 ($metadataToken, $genericTypeArguments, $genericMethodArguments)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ResolveMember(mixed ...$args){}
	/**
	 * @uses ModuleMethodsOverride::ResolveMethod_1 ($metadataToken)
	 * @uses ModuleMethodsOverride::ResolveMethod_2 ($metadataToken, $genericTypeArguments, $genericMethodArguments)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ResolveMethod(mixed ...$args){}
	/**
	 * @param \System\Int32|int $metadataToken
	 * @return \System\Byte[]
	 */
	public  function ResolveSignature($metadataToken){}
	/**
	 * @param \System\Int32|int $metadataToken
	 * @return \System\String|string
	 */
	public  function ResolveString($metadataToken){}
	/**
	 * @uses ModuleMethodsOverride::ResolveType_1 ($metadataToken)
	 * @uses ModuleMethodsOverride::ResolveType_2 ($metadataToken, $genericTypeArguments, $genericMethodArguments)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ResolveType(mixed ...$args){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public  function GetObjectData($info, $context){}
	/**
	 * @param \System\Object|object $o
	 * @return \System\Boolean
	 */
	public  function Equals($o){}
	/**
	 * @param \System\Reflection\Module $left
	 * @param \System\Reflection\Module $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Reflection\Module $left
	 * @param \System\Reflection\Module $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\Type $cls
	 * @param \System\Object|object $filterCriteria
	 * @param \System\StringComparison $comparison
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FilterTypeNameImpl($cls, $filterCriteria, $comparison){}
}
