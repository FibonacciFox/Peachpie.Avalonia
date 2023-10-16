<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TypeMethodsOverride
{
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public static function GetType_1($typeName, $throwOnError, $ignoreCase){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public static function GetType_2($typeName, $throwOnError){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public static function GetType_3($typeName){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public static function GetType_4($typeName, $assemblyResolver, $typeResolver){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public static function GetType_5($typeName, $assemblyResolver, $typeResolver, $throwOnError){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public static function GetType_6($typeName, $assemblyResolver, $typeResolver, $throwOnError, $ignoreCase){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_7(){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_8(){}
	/**
	 * @return \System\Reflection\Module
	 */
	#[MethodOverride] public  function get_Module_1(){}
	/**
	 * @return \System\Reflection\Module
	 */
	#[MethodOverride] public  function get_Module_2(){}
	/**
	 * @return \System\Reflection\ConstructorInfo
	 */
	#[MethodOverride] public  function GetConstructor_1($types){}
	/**
	 * @return \System\Reflection\ConstructorInfo
	 */
	#[MethodOverride] public  function GetConstructor_2($bindingAttr, $types){}
	/**
	 * @return \System\Reflection\ConstructorInfo
	 */
	#[MethodOverride] public  function GetConstructor_3($bindingAttr, $binder, $types, $modifiers){}
	/**
	 * @return \System\Reflection\ConstructorInfo
	 */
	#[MethodOverride] public  function GetConstructor_4($bindingAttr, $binder, $callConvention, $types, $modifiers){}
	/**
	 * @return \System\Reflection\ConstructorInfo[]
	 */
	#[MethodOverride] public  function GetConstructors_1(){}
	/**
	 * @return \System\Reflection\ConstructorInfo[]
	 */
	#[MethodOverride] public  function GetConstructors_2($bindingAttr){}
	/**
	 * @return \System\Reflection\EventInfo
	 */
	#[MethodOverride] public  function GetEvent_1($name){}
	/**
	 * @return \System\Reflection\EventInfo
	 */
	#[MethodOverride] public  function GetEvent_2($name, $bindingAttr){}
	/**
	 * @return \System\Reflection\EventInfo[]
	 */
	#[MethodOverride] public  function GetEvents_1(){}
	/**
	 * @return \System\Reflection\EventInfo[]
	 */
	#[MethodOverride] public  function GetEvents_2($bindingAttr){}
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
	#[MethodOverride] public  function GetFields_2($bindingAttr){}
	/**
	 * @return \System\Reflection\MemberInfo[]
	 */
	#[MethodOverride] public  function GetMember_1($name){}
	/**
	 * @return \System\Reflection\MemberInfo[]
	 */
	#[MethodOverride] public  function GetMember_2($name, $bindingAttr){}
	/**
	 * @return \System\Reflection\MemberInfo[]
	 */
	#[MethodOverride] public  function GetMember_3($name, $type, $bindingAttr){}
	/**
	 * @return \System\Reflection\MemberInfo[]
	 */
	#[MethodOverride] public  function GetMembers_1(){}
	/**
	 * @return \System\Reflection\MemberInfo[]
	 */
	#[MethodOverride] public  function GetMembers_2($bindingAttr){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetMethod_1($name){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetMethod_2($name, $bindingAttr){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetMethod_3($name, $bindingAttr, $types){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetMethod_4($name, $types){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetMethod_5($name, $types, $modifiers){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetMethod_6($name, $bindingAttr, $binder, $types, $modifiers){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetMethod_7($name, $bindingAttr, $binder, $callConvention, $types, $modifiers){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetMethod_8($name, $genericParameterCount, $types){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetMethod_9($name, $genericParameterCount, $types, $modifiers){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetMethod_10($name, $genericParameterCount, $bindingAttr, $binder, $types, $modifiers){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetMethod_11($name, $genericParameterCount, $bindingAttr, $binder, $callConvention, $types, $modifiers){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] protected  function GetMethodImpl_1($name, $bindingAttr, $binder, $callConvention, $types, $modifiers){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] protected  function GetMethodImpl_2($name, $genericParameterCount, $bindingAttr, $binder, $callConvention, $types, $modifiers){}
	/**
	 * @return \System\Reflection\MethodInfo[]
	 */
	#[MethodOverride] public  function GetMethods_1(){}
	/**
	 * @return \System\Reflection\MethodInfo[]
	 */
	#[MethodOverride] public  function GetMethods_2($bindingAttr){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetNestedType_1($name){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetNestedType_2($name, $bindingAttr){}
	/**
	 * @return \System\Type[]
	 */
	#[MethodOverride] public  function GetNestedTypes_1(){}
	/**
	 * @return \System\Type[]
	 */
	#[MethodOverride] public  function GetNestedTypes_2($bindingAttr){}
	/**
	 * @return \System\Reflection\PropertyInfo
	 */
	#[MethodOverride] public  function GetProperty_1($name){}
	/**
	 * @return \System\Reflection\PropertyInfo
	 */
	#[MethodOverride] public  function GetProperty_2($name, $bindingAttr){}
	/**
	 * @return \System\Reflection\PropertyInfo
	 */
	#[MethodOverride] public  function GetProperty_3($name, $returnType){}
	/**
	 * @return \System\Reflection\PropertyInfo
	 */
	#[MethodOverride] public  function GetProperty_4($name, $types){}
	/**
	 * @return \System\Reflection\PropertyInfo
	 */
	#[MethodOverride] public  function GetProperty_5($name, $returnType, $types){}
	/**
	 * @return \System\Reflection\PropertyInfo
	 */
	#[MethodOverride] public  function GetProperty_6($name, $returnType, $types, $modifiers){}
	/**
	 * @return \System\Reflection\PropertyInfo
	 */
	#[MethodOverride] public  function GetProperty_7($name, $bindingAttr, $binder, $returnType, $types, $modifiers){}
	/**
	 * @return \System\Reflection\PropertyInfo[]
	 */
	#[MethodOverride] public  function GetProperties_1(){}
	/**
	 * @return \System\Reflection\PropertyInfo[]
	 */
	#[MethodOverride] public  function GetProperties_2($bindingAttr){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public static function GetTypeFromCLSID_1($clsid){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public static function GetTypeFromCLSID_2($clsid, $throwOnError){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public static function GetTypeFromCLSID_3($clsid, $server){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public static function GetTypeFromCLSID_4($clsid, $server, $throwOnError){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public static function GetTypeFromProgID_1($progID){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public static function GetTypeFromProgID_2($progID, $throwOnError){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public static function GetTypeFromProgID_3($progID, $server){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public static function GetTypeFromProgID_4($progID, $server, $throwOnError){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function InvokeMember_1($name, $invokeAttr, $binder, $target, $args){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function InvokeMember_2($name, $invokeAttr, $binder, $target, $args, $culture){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function InvokeMember_3($name, $invokeAttr, $binder, $target, $args, $modifiers, $culture, $namedParameters){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetInterface_1($name){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetInterface_2($name, $ignoreCase){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function MakeArrayType_1(){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function MakeArrayType_2($rank){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($o){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($o){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_1($inherit){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_2($attributeType, $inherit){}
}
/**
 */
class Type extends \System\Reflection\MemberInfo implements 
	\System\Reflection\ICustomAttributeProvider,
	\System\Reflection\IReflect
{
	/**
	 * @var \System\Char
	 * @field
	 */
	public readonly $Delimiter;
	/**
	 * @var \System\Type[]
	 * @field
	 */
	public readonly $EmptyTypes;
	/**
	 * @var \System\Object
	 * @field
	 */
	public readonly $Missing;
	/**
	 * @var \System\Reflection\MemberFilter
	 * @field
	 */
	public readonly $FilterAttribute;
	/**
	 * @var \System\Reflection\MemberFilter
	 * @field
	 */
	public readonly $FilterName;
	/**
	 * @var \System\Reflection\MemberFilter
	 * @field
	 */
	public readonly $FilterNameIgnoreCase;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsInterface;
	/**
	 * @var \System\Reflection\MemberTypes
	 * @property
	 */
	public readonly $MemberType;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Namespace;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $AssemblyQualifiedName;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $FullName;
	/**
	 * @var \System\Reflection\Assembly
	 * @property
	 */
	public readonly $Assembly;
	/**
	 * @var \System\Reflection\Module
	 * @property
	 */
	public readonly $Module;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsNested;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $DeclaringType;
	/**
	 * @var \System\Reflection\MethodBase
	 * @property
	 */
	public readonly $DeclaringMethod;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $ReflectedType;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $UnderlyingSystemType;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsTypeDefinition;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsArray;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsByRef;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsPointer;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsConstructedGenericType;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsGenericParameter;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsGenericTypeParameter;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsGenericMethodParameter;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsGenericType;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsGenericTypeDefinition;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSZArray;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsVariableBoundArray;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsByRefLike;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HasElementType;
	/**
	 * @var \System\Type[]
	 * @property
	 */
	public readonly $GenericTypeArguments;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $GenericParameterPosition;
	/**
	 * @var \System\Reflection\GenericParameterAttributes
	 * @property
	 */
	public readonly $GenericParameterAttributes;
	/**
	 * @var \System\Reflection\TypeAttributes
	 * @property
	 */
	public readonly $Attributes;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsAbstract;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsImport;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSealed;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSpecialName;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsClass;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsNestedAssembly;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsNestedFamANDAssem;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsNestedFamily;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsNestedFamORAssem;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsNestedPrivate;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsNestedPublic;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsNotPublic;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsPublic;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsAutoLayout;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsExplicitLayout;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsLayoutSequential;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsAnsiClass;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsAutoClass;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsUnicodeClass;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCOMObject;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsContextful;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsEnum;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsMarshalByRef;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsPrimitive;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsValueType;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSignatureType;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSecurityCritical;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSecuritySafeCritical;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSecurityTransparent;
	/**
	 * @var \System\Runtime\InteropServices\StructLayoutAttribute
	 * @property
	 */
	public readonly $StructLayoutAttribute;
	/**
	 * @var \System\Reflection\ConstructorInfo
	 * @property
	 */
	public readonly $TypeInitializer;
	/**
	 * @var \System\RuntimeTypeHandle
	 * @property
	 */
	public readonly $TypeHandle;
	/**
	 * @var \System\Guid
	 * @property
	 */
	public readonly $GUID;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $BaseType;
	/**
	 * @var \System\Reflection\Binder
	 * @property
	 */
	public readonly $DefaultBinder;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSerializable;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $ContainsGenericParameters;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsVisible;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\CustomAttributeData]
	 * @property
	 */
	public readonly $CustomAttributes;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCollectible;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MetadataToken;
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsInterface(){}
	/**
	 * @uses TypeMethodsOverride::GetType_1 ($typeName, $throwOnError, $ignoreCase)
	 * @uses TypeMethodsOverride::GetType_2 ($typeName, $throwOnError)
	 * @uses TypeMethodsOverride::GetType_3 ($typeName)
	 * @uses TypeMethodsOverride::GetType_4 ($typeName, $assemblyResolver, $typeResolver)
	 * @uses TypeMethodsOverride::GetType_5 ($typeName, $assemblyResolver, $typeResolver, $throwOnError)
	 * @uses TypeMethodsOverride::GetType_6 ($typeName, $assemblyResolver, $typeResolver, $throwOnError, $ignoreCase)
	 * @uses TypeMethodsOverride::GetType_7 ()
	 * @uses TypeMethodsOverride::GetType_8 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
	/**
	 * @param \System\IntPtr $handle
	 * @return \System\RuntimeType
	 */
	protected static function GetTypeFromHandleUnsafe($handle){}
	/**
	 * @param \System\RuntimeTypeHandle $handle
	 * @return \System\Type
	 */
	public static function GetTypeFromHandle($handle){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Namespace(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_AssemblyQualifiedName(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_FullName(){}
	/**
	 * @return \System\Reflection\Assembly
	 */
	public  function get_Assembly(){}
	/**
	 * @uses TypeMethodsOverride::get_Module_1 ()
	 * @uses TypeMethodsOverride::get_Module_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Module(mixed ...$args){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsNested(){}
	/**
	 * @return \System\Reflection\MethodBase
	 */
	public  function get_DeclaringMethod(){}
	/**
	 * @return \System\Type
	 */
	public  function get_UnderlyingSystemType(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsTypeDefinition(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsArray(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function IsArrayImpl(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsByRef(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function IsByRefImpl(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsPointer(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function IsPointerImpl(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsConstructedGenericType(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsGenericParameter(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsGenericTypeParameter(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsGenericMethodParameter(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsGenericType(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsGenericTypeDefinition(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSZArray(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsVariableBoundArray(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsByRefLike(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasElementType(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function HasElementTypeImpl(){}
	/**
	 * @return \System\Type
	 */
	public  function GetElementType(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function GetArrayRank(){}
	/**
	 * @return \System\Type
	 */
	public  function GetGenericTypeDefinition(){}
	/**
	 * @return \System\Type[]
	 */
	public  function get_GenericTypeArguments(){}
	/**
	 * @return \System\Type[]
	 */
	public  function GetGenericArguments(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_GenericParameterPosition(){}
	/**
	 * @return \System\Reflection\GenericParameterAttributes
	 */
	public  function get_GenericParameterAttributes(){}
	/**
	 * @return \System\Type[]
	 */
	public  function GetGenericParameterConstraints(){}
	/**
	 * @return \System\Reflection\TypeAttributes
	 */
	public  function get_Attributes(){}
	/**
	 * @return \System\Reflection\TypeAttributes
	 */
	protected  function GetAttributeFlagsImpl(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsAbstract(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsImport(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSealed(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSpecialName(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsClass(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsNestedAssembly(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsNestedFamANDAssem(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsNestedFamily(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsNestedFamORAssem(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsNestedPrivate(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsNestedPublic(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsNotPublic(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsPublic(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsAutoLayout(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsExplicitLayout(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsLayoutSequential(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsAnsiClass(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsAutoClass(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsUnicodeClass(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCOMObject(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function IsCOMObjectImpl(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsContextful(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function IsContextfulImpl(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsEnum(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsMarshalByRef(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function IsMarshalByRefImpl(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsPrimitive(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function IsPrimitiveImpl(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsValueType(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function IsValueTypeImpl(){}
	/**
	 * @param \System\Type $targetType
	 * @return \System\Boolean
	 */
	public  function IsAssignableTo($targetType){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSignatureType(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSecurityCritical(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSecuritySafeCritical(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSecurityTransparent(){}
	/**
	 * @return \System\Runtime\InteropServices\StructLayoutAttribute
	 */
	public  function get_StructLayoutAttribute(){}
	/**
	 * @return \System\Reflection\ConstructorInfo
	 */
	public  function get_TypeInitializer(){}
	/**
	 * @uses TypeMethodsOverride::GetConstructor_1 ($types)
	 * @uses TypeMethodsOverride::GetConstructor_2 ($bindingAttr, $types)
	 * @uses TypeMethodsOverride::GetConstructor_3 ($bindingAttr, $binder, $types, $modifiers)
	 * @uses TypeMethodsOverride::GetConstructor_4 ($bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetConstructor(mixed ...$args){}
	/**
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Reflection\CallingConventions $callConvention
	 * @param \System\Type[] $types
	 * @param \System\Reflection\ParameterModifier[] $modifiers
	 * @return \System\Reflection\ConstructorInfo
	 */
	protected  function GetConstructorImpl($bindingAttr, $binder, $callConvention, $types, $modifiers){}
	/**
	 * @uses TypeMethodsOverride::GetConstructors_1 ()
	 * @uses TypeMethodsOverride::GetConstructors_2 ($bindingAttr)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetConstructors(mixed ...$args){}
	/**
	 * @uses TypeMethodsOverride::GetEvent_1 ($name)
	 * @uses TypeMethodsOverride::GetEvent_2 ($name, $bindingAttr)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEvent(mixed ...$args){}
	/**
	 * @uses TypeMethodsOverride::GetEvents_1 ()
	 * @uses TypeMethodsOverride::GetEvents_2 ($bindingAttr)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEvents(mixed ...$args){}
	/**
	 * @uses TypeMethodsOverride::GetField_1 ($name)
	 * @uses TypeMethodsOverride::GetField_2 ($name, $bindingAttr)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetField(mixed ...$args){}
	/**
	 * @uses TypeMethodsOverride::GetFields_1 ()
	 * @uses TypeMethodsOverride::GetFields_2 ($bindingAttr)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetFields(mixed ...$args){}
	/**
	 * @uses TypeMethodsOverride::GetMember_1 ($name)
	 * @uses TypeMethodsOverride::GetMember_2 ($name, $bindingAttr)
	 * @uses TypeMethodsOverride::GetMember_3 ($name, $type, $bindingAttr)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMember(mixed ...$args){}
	/**
	 * @uses TypeMethodsOverride::GetMembers_1 ()
	 * @uses TypeMethodsOverride::GetMembers_2 ($bindingAttr)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMembers(mixed ...$args){}
	/**
	 * @param \System\Reflection\MemberInfo $member
	 * @return \System\Reflection\MemberInfo
	 */
	public  function GetMemberWithSameMetadataDefinitionAs($member){}
	/**
	 * @param \System\Reflection\MemberInfo $member
	 * @return \System\ArgumentException
	 */
	protected static function CreateGetMemberWithSameMetadataDefinitionAsNotFoundException($member){}
	/**
	 * @uses TypeMethodsOverride::GetMethod_1 ($name)
	 * @uses TypeMethodsOverride::GetMethod_2 ($name, $bindingAttr)
	 * @uses TypeMethodsOverride::GetMethod_3 ($name, $bindingAttr, $types)
	 * @uses TypeMethodsOverride::GetMethod_4 ($name, $types)
	 * @uses TypeMethodsOverride::GetMethod_5 ($name, $types, $modifiers)
	 * @uses TypeMethodsOverride::GetMethod_6 ($name, $bindingAttr, $binder, $types, $modifiers)
	 * @uses TypeMethodsOverride::GetMethod_7 ($name, $bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @uses TypeMethodsOverride::GetMethod_8 ($name, $genericParameterCount, $types)
	 * @uses TypeMethodsOverride::GetMethod_9 ($name, $genericParameterCount, $types, $modifiers)
	 * @uses TypeMethodsOverride::GetMethod_10 ($name, $genericParameterCount, $bindingAttr, $binder, $types, $modifiers)
	 * @uses TypeMethodsOverride::GetMethod_11 ($name, $genericParameterCount, $bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMethod(mixed ...$args){}
	/**
	 * @uses TypeMethodsOverride::GetMethodImpl_1 ($name, $bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @uses TypeMethodsOverride::GetMethodImpl_2 ($name, $genericParameterCount, $bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMethodImpl(mixed ...$args){}
	/**
	 * @uses TypeMethodsOverride::GetMethods_1 ()
	 * @uses TypeMethodsOverride::GetMethods_2 ($bindingAttr)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMethods(mixed ...$args){}
	/**
	 * @uses TypeMethodsOverride::GetNestedType_1 ($name)
	 * @uses TypeMethodsOverride::GetNestedType_2 ($name, $bindingAttr)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetNestedType(mixed ...$args){}
	/**
	 * @uses TypeMethodsOverride::GetNestedTypes_1 ()
	 * @uses TypeMethodsOverride::GetNestedTypes_2 ($bindingAttr)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetNestedTypes(mixed ...$args){}
	/**
	 * @uses TypeMethodsOverride::GetProperty_1 ($name)
	 * @uses TypeMethodsOverride::GetProperty_2 ($name, $bindingAttr)
	 * @uses TypeMethodsOverride::GetProperty_3 ($name, $returnType)
	 * @uses TypeMethodsOverride::GetProperty_4 ($name, $types)
	 * @uses TypeMethodsOverride::GetProperty_5 ($name, $returnType, $types)
	 * @uses TypeMethodsOverride::GetProperty_6 ($name, $returnType, $types, $modifiers)
	 * @uses TypeMethodsOverride::GetProperty_7 ($name, $bindingAttr, $binder, $returnType, $types, $modifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetProperty(mixed ...$args){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Type $returnType
	 * @param \System\Type[] $types
	 * @param \System\Reflection\ParameterModifier[] $modifiers
	 * @return \System\Reflection\PropertyInfo
	 */
	protected  function GetPropertyImpl($name, $bindingAttr, $binder, $returnType, $types, $modifiers){}
	/**
	 * @uses TypeMethodsOverride::GetProperties_1 ()
	 * @uses TypeMethodsOverride::GetProperties_2 ($bindingAttr)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetProperties(mixed ...$args){}
	/**
	 * @return \System\Reflection\MemberInfo[]
	 */
	public  function GetDefaultMembers(){}
	/**
	 * @return \System\RuntimeTypeHandle
	 */
	public  function get_TypeHandle(){}
	/**
	 * @param \System\Object|object $o
	 * @return \System\RuntimeTypeHandle
	 */
	public static function GetTypeHandle($o){}
	/**
	 * @param \System\Object[] $args
	 * @return \System\Type[]
	 */
	public static function GetTypeArray($args){}
	/**
	 * @param \System\Type $type
	 * @return \System\TypeCode
	 */
	public static function GetTypeCode($type){}
	/**
	 * @return \System\TypeCode
	 */
	protected  function GetTypeCodeImpl(){}
	/**
	 * @return \System\Guid
	 */
	public  function get_GUID(){}
	/**
	 * @uses TypeMethodsOverride::GetTypeFromCLSID_1 ($clsid)
	 * @uses TypeMethodsOverride::GetTypeFromCLSID_2 ($clsid, $throwOnError)
	 * @uses TypeMethodsOverride::GetTypeFromCLSID_3 ($clsid, $server)
	 * @uses TypeMethodsOverride::GetTypeFromCLSID_4 ($clsid, $server, $throwOnError)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetTypeFromCLSID(mixed ...$args){}
	/**
	 * @uses TypeMethodsOverride::GetTypeFromProgID_1 ($progID)
	 * @uses TypeMethodsOverride::GetTypeFromProgID_2 ($progID, $throwOnError)
	 * @uses TypeMethodsOverride::GetTypeFromProgID_3 ($progID, $server)
	 * @uses TypeMethodsOverride::GetTypeFromProgID_4 ($progID, $server, $throwOnError)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetTypeFromProgID(mixed ...$args){}
	/**
	 * @return \System\Type
	 */
	public  function get_BaseType(){}
	/**
	 * @uses TypeMethodsOverride::InvokeMember_1 ($name, $invokeAttr, $binder, $target, $args)
	 * @uses TypeMethodsOverride::InvokeMember_2 ($name, $invokeAttr, $binder, $target, $args, $culture)
	 * @uses TypeMethodsOverride::InvokeMember_3 ($name, $invokeAttr, $binder, $target, $args, $modifiers, $culture, $namedParameters)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function InvokeMember(mixed ...$args){}
	/**
	 * @uses TypeMethodsOverride::GetInterface_1 ($name)
	 * @uses TypeMethodsOverride::GetInterface_2 ($name, $ignoreCase)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetInterface(mixed ...$args){}
	/**
	 * @return \System\Type[]
	 */
	public  function GetInterfaces(){}
	/**
	 * @param \System\Type $interfaceType
	 * @return \System\Reflection\InterfaceMapping
	 */
	public  function GetInterfaceMap($interfaceType){}
	/**
	 * @param \System\Object|object $o
	 * @return \System\Boolean
	 */
	public  function IsInstanceOfType($o){}
	/**
	 * @param \System\Type $other
	 * @return \System\Boolean
	 */
	public  function IsEquivalentTo($other){}
	/**
	 * @return \System\Type
	 */
	public  function GetEnumUnderlyingType(){}
	/**
	 * @return \System\Array|array
	 */
	public  function GetEnumValues(){}
	/**
	 * @return \System\Array|array
	 */
	public  function GetEnumValuesAsUnderlyingType(){}
	/**
	 * @uses TypeMethodsOverride::MakeArrayType_1 ()
	 * @uses TypeMethodsOverride::MakeArrayType_2 ($rank)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MakeArrayType(mixed ...$args){}
	/**
	 * @return \System\Type
	 */
	public  function MakeByRefType(){}
	/**
	 * @param \System\Type[] $typeArguments
	 * @return \System\Type
	 */
	public  function MakeGenericType($typeArguments){}
	/**
	 * @return \System\Type
	 */
	public  function MakePointerType(){}
	/**
	 * @param \System\Type $genericTypeDefinition
	 * @param \System\Type[] $typeArguments
	 * @return \System\Type
	 */
	public static function MakeGenericSignatureType($genericTypeDefinition, $typeArguments){}
	/**
	 * @param \System\Int32|int $position
	 * @return \System\Type
	 */
	public static function MakeGenericMethodParameter($position){}
	/**
	 * @return \System\String|string
	 */
	protected  function FormatTypeName(){}
	/**
	 * @uses TypeMethodsOverride::Equals_1 ($o)
	 * @uses TypeMethodsOverride::Equals_2 ($o)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Type $left
	 * @param \System\Type $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Type $left
	 * @param \System\Type $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\String|string $typeName
	 * @param \System\Boolean $throwIfNotFound
	 * @param \System\Boolean $ignoreCase
	 * @return \System\Type
	 */
	public static function ReflectionOnlyGetType($typeName, $throwIfNotFound, $ignoreCase){}
	/**
	 * @return \System\Reflection\Binder
	 */
	public static function get_DefaultBinder(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Boolean
	 */
	public  function IsEnumDefined($value){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\String|string
	 */
	public  function GetEnumName($value){}
	/**
	 * @return \System\String[]
	 */
	public  function GetEnumNames(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetEnumRawConstantValues(){}
	/**
	 * @param \System\String[]& $enumNames
	 * @param \System\Array& $enumValues
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetEnumData($enumNames, $enumValues){}
	/**
	 * @param \System\Array|array $array
	 * @param \System\Object|object $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function BinarySearch($array, $value){}
	/**
	 * @param \System\Type $t
	 * @return \System\Boolean
	 */
	protected static function IsIntegerType($t){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSerializable(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ContainsGenericParameters(){}
	/**
	 * @return \System\Type
	 */
	protected  function GetRootElementType(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsVisible(){}
	/**
	 * @param \System\Reflection\TypeFilter $filter
	 * @param \System\Object|object $filterCriteria
	 * @return \System\Type[]
	 */
	public  function FindInterfaces($filter, $filterCriteria){}
	/**
	 * @param \System\Reflection\MemberTypes $memberType
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\MemberFilter $filter
	 * @param \System\Object|object $filterCriteria
	 * @return \System\Reflection\MemberInfo[]
	 */
	public  function FindMembers($memberType, $bindingAttr, $filter, $filterCriteria){}
	/**
	 * @param \System\Type $c
	 * @return \System\Boolean
	 */
	public  function IsSubclassOf($c){}
	/**
	 * @param \System\Type $c
	 * @return \System\Boolean
	 */
	public  function IsAssignableFrom($c){}
	/**
	 * @param \System\Type $ifaceType
	 * @return \System\Boolean
	 */
	protected  function ImplementInterface($ifaceType){}
	/**
	 * @param \System\Reflection\MemberInfo $m
	 * @param \System\Object|object $filterCriteria
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FilterAttributeImpl($m, $filterCriteria){}
	/**
	 * @param \System\Reflection\MemberInfo $m
	 * @param \System\Object|object $filterCriteria
	 * @param \System\StringComparison $comparison
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FilterNameImpl($m, $filterCriteria, $comparison){}
	/**
	 * @uses TypeMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses TypeMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
}
