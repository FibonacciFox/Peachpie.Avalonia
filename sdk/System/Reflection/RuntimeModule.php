<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RuntimeModuleMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function GetType_1($module, $className, $throwOnError, $ignoreCase, $type, $keepAlive){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_2($className, $throwOnError, $ignoreCase){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_3($className){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_4($className, $ignoreCase){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_5(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function GetFullyQualifiedName_1($module, $retString){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected  function GetFullyQualifiedName_2(){}
	/**
	 * @return \System\RuntimeType[]
	 */
	#[MethodOverride] private static function GetTypes_1($module){}
	/**
	 * @return \System\Type[]
	 */
	#[MethodOverride] public  function GetTypes_2(){}
	/**
	 * @return \System\Reflection\MethodBase
	 */
	#[MethodOverride] public  function ResolveMethod_1($metadataToken, $genericTypeArguments, $genericMethodArguments){}
	/**
	 * @return \System\Reflection\MethodBase
	 */
	#[MethodOverride] public  function ResolveMethod_2($metadataToken){}
	/**
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride] public  function ResolveField_1($metadataToken, $genericTypeArguments, $genericMethodArguments){}
	/**
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride] public  function ResolveField_2($metadataToken){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function ResolveType_1($metadataToken, $genericTypeArguments, $genericMethodArguments){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function ResolveType_2($metadataToken){}
	/**
	 * @return \System\Reflection\MemberInfo
	 */
	#[MethodOverride] public  function ResolveMember_1($metadataToken, $genericTypeArguments, $genericMethodArguments){}
	/**
	 * @return \System\Reflection\MemberInfo
	 */
	#[MethodOverride] public  function ResolveMember_2($metadataToken){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_1($inherit){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_2($attributeType, $inherit){}
	/**
	 * @return \System\Reflection\FieldInfo[]
	 */
	#[MethodOverride] public  function GetFields_1($bindingFlags){}
	/**
	 * @return \System\Reflection\FieldInfo[]
	 */
	#[MethodOverride] public  function GetFields_2(){}
	/**
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride] public  function GetField_1($name, $bindingAttr){}
	/**
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride] public  function GetField_2($name){}
	/**
	 * @return \System\Reflection\MethodInfo[]
	 */
	#[MethodOverride] public  function GetMethods_1($bindingFlags){}
	/**
	 * @return \System\Reflection\MethodInfo[]
	 */
	#[MethodOverride] public  function GetMethods_2(){}
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
}
/**
 */
class RuntimeModule extends \System\Reflection\Module implements 
	\System\Reflection\ICustomAttributeProvider,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MDStreamVersion;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $FullyQualifiedName;
	/**
	 * @var \System\Guid
	 * @property
	 */
	public readonly $ModuleVersionId;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MetadataToken;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $ScopeName;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Reflection\Assembly
	 * @property
	 */
	public readonly $Assembly;
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
	 * @uses RuntimeModuleMethodsOverride::GetType_1 ($module, $className, $throwOnError, $ignoreCase, $type, $keepAlive)
	 * @uses RuntimeModuleMethodsOverride::GetType_2 ($className, $throwOnError, $ignoreCase)
	 * @uses RuntimeModuleMethodsOverride::GetType_3 ($className)
	 * @uses RuntimeModuleMethodsOverride::GetType_4 ($className, $ignoreCase)
	 * @uses RuntimeModuleMethodsOverride::GetType_5 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Runtime\CompilerServices\StringHandleOnStack $retString
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetScopeName($module, $retString){}
	/**
	 * @uses RuntimeModuleMethodsOverride::GetFullyQualifiedName_1 ($module, $retString)
	 * @uses RuntimeModuleMethodsOverride::GetFullyQualifiedName_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetFullyQualifiedName(mixed ...$args){}
	/**
	 * @uses RuntimeModuleMethodsOverride::GetTypes_1 ($module)
	 * @uses RuntimeModuleMethodsOverride::GetTypes_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetTypes(mixed ...$args){}
	/**
	 * @return \System\RuntimeType[]
	 */
	protected  function GetDefinedTypes(){}
	/**
	 * @param \System\Type[] $genericArguments
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ConvertToTypeHandleArray($genericArguments){}
	/**
	 * @uses RuntimeModuleMethodsOverride::ResolveMethod_1 ($metadataToken, $genericTypeArguments, $genericMethodArguments)
	 * @uses RuntimeModuleMethodsOverride::ResolveMethod_2 ($metadataToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ResolveMethod(mixed ...$args){}
	/**
	 * @param \System\Int32|int $metadataToken
	 * @param \System\Type[] $genericTypeArguments
	 * @param \System\Type[] $genericMethodArguments
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ResolveLiteralField($metadataToken, $genericTypeArguments, $genericMethodArguments){}
	/**
	 * @uses RuntimeModuleMethodsOverride::ResolveField_1 ($metadataToken, $genericTypeArguments, $genericMethodArguments)
	 * @uses RuntimeModuleMethodsOverride::ResolveField_2 ($metadataToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ResolveField(mixed ...$args){}
	/**
	 * @uses RuntimeModuleMethodsOverride::ResolveType_1 ($metadataToken, $genericTypeArguments, $genericMethodArguments)
	 * @uses RuntimeModuleMethodsOverride::ResolveType_2 ($metadataToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ResolveType(mixed ...$args){}
	/**
	 * @uses RuntimeModuleMethodsOverride::ResolveMember_1 ($metadataToken, $genericTypeArguments, $genericMethodArguments)
	 * @uses RuntimeModuleMethodsOverride::ResolveMember_2 ($metadataToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ResolveMember(mixed ...$args){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Reflection\CallingConventions $callConvention
	 * @param \System\Type[] $types
	 * @param \System\Reflection\ParameterModifier[] $modifiers
	 * @return \System\Reflection\MethodInfo
	 */
	protected  function GetMethodInternal($name, $bindingAttr, $binder, $callConvention, $types, $modifiers){}
	/**
	 * @return \System\RuntimeType
	 */
	protected  function get_RuntimeType(){}
	/**
	 * @return \System\Reflection\MetadataImport
	 */
	protected  function get_MetadataImport(){}
	/**
	 * @uses RuntimeModuleMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses RuntimeModuleMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
	/**
	 * @uses RuntimeModuleMethodsOverride::GetFields_1 ($bindingFlags)
	 * @uses RuntimeModuleMethodsOverride::GetFields_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetFields(mixed ...$args){}
	/**
	 * @uses RuntimeModuleMethodsOverride::GetField_1 ($name, $bindingAttr)
	 * @uses RuntimeModuleMethodsOverride::GetField_2 ($name)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetField(mixed ...$args){}
	/**
	 * @uses RuntimeModuleMethodsOverride::GetMethods_1 ($bindingFlags)
	 * @uses RuntimeModuleMethodsOverride::GetMethods_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMethods(mixed ...$args){}
	/**
	 * @return \System\Reflection\RuntimeAssembly
	 */
	protected  function GetRuntimeAssembly(){}
	/**
	 * @return \System\IntPtr
	 */
	protected  function GetUnderlyingNativeHandle(){}
	/**
	 * @uses RuntimeModuleMethodsOverride::GetMethod_1 ($name)
	 * @uses RuntimeModuleMethodsOverride::GetMethod_2 ($name, $types)
	 * @uses RuntimeModuleMethodsOverride::GetMethod_3 ($name, $bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMethod(mixed ...$args){}
}
