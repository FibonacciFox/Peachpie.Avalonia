<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SignatureArrayTypeMethodsOverride
{
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function MakeArrayType_1(){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function MakeArrayType_2($rank){}
	/**
	 * @return \System\Reflection\Module
	 */
	#[MethodOverride] public  function get_Module_1(){}
	/**
	 * @return \System\Reflection\Module
	 */
	#[MethodOverride] public  function get_Module_2(){}
	/**
	 * @return \System\Reflection\ConstructorInfo[]
	 */
	#[MethodOverride] public  function GetConstructors_1($bindingAttr){}
	/**
	 * @return \System\Reflection\ConstructorInfo[]
	 */
	#[MethodOverride] public  function GetConstructors_2(){}
	/**
	 * @return \System\Reflection\EventInfo
	 */
	#[MethodOverride] public  function GetEvent_1($name, $bindingAttr){}
	/**
	 * @return \System\Reflection\EventInfo
	 */
	#[MethodOverride] public  function GetEvent_2($name){}
	/**
	 * @return \System\Reflection\EventInfo[]
	 */
	#[MethodOverride] public  function GetEvents_1($bindingAttr){}
	/**
	 * @return \System\Reflection\EventInfo[]
	 */
	#[MethodOverride] public  function GetEvents_2(){}
	/**
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride] public  function GetField_1($name, $bindingAttr){}
	/**
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride] public  function GetField_2($name){}
	/**
	 * @return \System\Reflection\FieldInfo[]
	 */
	#[MethodOverride] public  function GetFields_1($bindingAttr){}
	/**
	 * @return \System\Reflection\FieldInfo[]
	 */
	#[MethodOverride] public  function GetFields_2(){}
	/**
	 * @return \System\Reflection\MemberInfo[]
	 */
	#[MethodOverride] public  function GetMembers_1($bindingAttr){}
	/**
	 * @return \System\Reflection\MemberInfo[]
	 */
	#[MethodOverride] public  function GetMembers_2(){}
	/**
	 * @return \System\Reflection\MethodInfo[]
	 */
	#[MethodOverride] public  function GetMethods_1($bindingAttr){}
	/**
	 * @return \System\Reflection\MethodInfo[]
	 */
	#[MethodOverride] public  function GetMethods_2(){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetNestedType_1($name, $bindingAttr){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetNestedType_2($name){}
	/**
	 * @return \System\Type[]
	 */
	#[MethodOverride] public  function GetNestedTypes_1($bindingAttr){}
	/**
	 * @return \System\Type[]
	 */
	#[MethodOverride] public  function GetNestedTypes_2(){}
	/**
	 * @return \System\Reflection\PropertyInfo[]
	 */
	#[MethodOverride] public  function GetProperties_1($bindingAttr){}
	/**
	 * @return \System\Reflection\PropertyInfo[]
	 */
	#[MethodOverride] public  function GetProperties_2(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function InvokeMember_1($name, $invokeAttr, $binder, $target, $args, $modifiers, $culture, $namedParameters){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function InvokeMember_2($name, $invokeAttr, $binder, $target, $args){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function InvokeMember_3($name, $invokeAttr, $binder, $target, $args, $culture){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] protected  function GetMethodImpl_1($name, $bindingAttr, $binder, $callConvention, $types, $modifiers){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] protected  function GetMethodImpl_2($name, $genericParameterCount, $bindingAttr, $binder, $callConvention, $types, $modifiers){}
	/**
	 * @return \System\Reflection\MemberInfo[]
	 */
	#[MethodOverride] public  function GetMember_1($name, $bindingAttr){}
	/**
	 * @return \System\Reflection\MemberInfo[]
	 */
	#[MethodOverride] public  function GetMember_2($name, $type, $bindingAttr){}
	/**
	 * @return \System\Reflection\MemberInfo[]
	 */
	#[MethodOverride] public  function GetMember_3($name){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_1($inherit){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_2($attributeType, $inherit){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetInterface_1($name, $ignoreCase){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetInterface_2($name){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_1(){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_2(){}
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
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($o){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($o){}
}
/**
 */
class SignatureArrayType extends \System\Reflection\SignatureHasElementType implements 
	\System\Reflection\ICustomAttributeProvider,
	\System\Reflection\IReflect
{
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
	public readonly $IsTypeDefinition;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsGenericTypeDefinition;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsByRefLike;
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
	public readonly $ContainsGenericParameters;
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
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Namespace;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSignatureType;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsGenericType;
	/**
	 * @var \System\Reflection\MemberTypes
	 * @property
	 */
	public readonly $MemberType;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $UnderlyingSystemType;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $FullName;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $AssemblyQualifiedName;
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
	 * @var \System\Type
	 * @property
	 */
	public readonly $ReflectedType;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $BaseType;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MetadataToken;
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
	 * @var \System\Reflection\GenericParameterAttributes
	 * @property
	 */
	public readonly $GenericParameterAttributes;
	/**
	 * @var \System\Guid
	 * @property
	 */
	public readonly $GUID;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\CustomAttributeData]
	 * @property
	 */
	public readonly $CustomAttributes;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsEnum;
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
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSerializable;
	/**
	 * @var \System\Runtime\InteropServices\StructLayoutAttribute
	 * @property
	 */
	public readonly $StructLayoutAttribute;
	/**
	 * @var \System\RuntimeTypeHandle
	 * @property
	 */
	public readonly $TypeHandle;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsInterface;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsNested;
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
	public readonly $HasElementType;
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
	 * @var \System\Reflection\ConstructorInfo
	 * @property
	 */
	public readonly $TypeInitializer;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsVisible;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCollectible;
	/**
	 * @uses SignatureArrayTypeMethodsOverride::MakeArrayType_1 ()
	 * @uses SignatureArrayTypeMethodsOverride::MakeArrayType_2 ($rank)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MakeArrayType(mixed ...$args){}
	/**
	 * @uses SignatureArrayTypeMethodsOverride::get_Module_1 ()
	 * @uses SignatureArrayTypeMethodsOverride::get_Module_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Module(mixed ...$args){}
	/**
	 * @uses SignatureArrayTypeMethodsOverride::GetConstructors_1 ($bindingAttr)
	 * @uses SignatureArrayTypeMethodsOverride::GetConstructors_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetConstructors(mixed ...$args){}
	/**
	 * @uses SignatureArrayTypeMethodsOverride::GetEvent_1 ($name, $bindingAttr)
	 * @uses SignatureArrayTypeMethodsOverride::GetEvent_2 ($name)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEvent(mixed ...$args){}
	/**
	 * @uses SignatureArrayTypeMethodsOverride::GetEvents_1 ($bindingAttr)
	 * @uses SignatureArrayTypeMethodsOverride::GetEvents_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEvents(mixed ...$args){}
	/**
	 * @uses SignatureArrayTypeMethodsOverride::GetField_1 ($name, $bindingAttr)
	 * @uses SignatureArrayTypeMethodsOverride::GetField_2 ($name)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetField(mixed ...$args){}
	/**
	 * @uses SignatureArrayTypeMethodsOverride::GetFields_1 ($bindingAttr)
	 * @uses SignatureArrayTypeMethodsOverride::GetFields_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetFields(mixed ...$args){}
	/**
	 * @uses SignatureArrayTypeMethodsOverride::GetMembers_1 ($bindingAttr)
	 * @uses SignatureArrayTypeMethodsOverride::GetMembers_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMembers(mixed ...$args){}
	/**
	 * @uses SignatureArrayTypeMethodsOverride::GetMethods_1 ($bindingAttr)
	 * @uses SignatureArrayTypeMethodsOverride::GetMethods_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMethods(mixed ...$args){}
	/**
	 * @uses SignatureArrayTypeMethodsOverride::GetNestedType_1 ($name, $bindingAttr)
	 * @uses SignatureArrayTypeMethodsOverride::GetNestedType_2 ($name)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetNestedType(mixed ...$args){}
	/**
	 * @uses SignatureArrayTypeMethodsOverride::GetNestedTypes_1 ($bindingAttr)
	 * @uses SignatureArrayTypeMethodsOverride::GetNestedTypes_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetNestedTypes(mixed ...$args){}
	/**
	 * @uses SignatureArrayTypeMethodsOverride::GetProperties_1 ($bindingAttr)
	 * @uses SignatureArrayTypeMethodsOverride::GetProperties_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetProperties(mixed ...$args){}
	/**
	 * @uses SignatureArrayTypeMethodsOverride::InvokeMember_1 ($name, $invokeAttr, $binder, $target, $args, $modifiers, $culture, $namedParameters)
	 * @uses SignatureArrayTypeMethodsOverride::InvokeMember_2 ($name, $invokeAttr, $binder, $target, $args)
	 * @uses SignatureArrayTypeMethodsOverride::InvokeMember_3 ($name, $invokeAttr, $binder, $target, $args, $culture)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function InvokeMember(mixed ...$args){}
	/**
	 * @uses SignatureArrayTypeMethodsOverride::GetMethodImpl_1 ($name, $bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @uses SignatureArrayTypeMethodsOverride::GetMethodImpl_2 ($name, $genericParameterCount, $bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMethodImpl(mixed ...$args){}
	/**
	 * @uses SignatureArrayTypeMethodsOverride::GetMember_1 ($name, $bindingAttr)
	 * @uses SignatureArrayTypeMethodsOverride::GetMember_2 ($name, $type, $bindingAttr)
	 * @uses SignatureArrayTypeMethodsOverride::GetMember_3 ($name)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMember(mixed ...$args){}
	/**
	 * @uses SignatureArrayTypeMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses SignatureArrayTypeMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
	/**
	 * @uses SignatureArrayTypeMethodsOverride::GetInterface_1 ($name, $ignoreCase)
	 * @uses SignatureArrayTypeMethodsOverride::GetInterface_2 ($name)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetInterface(mixed ...$args){}
	/**
	 * @uses SignatureArrayTypeMethodsOverride::GetType_1 ()
	 * @uses SignatureArrayTypeMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
	/**
	 * @uses SignatureArrayTypeMethodsOverride::GetConstructor_1 ($types)
	 * @uses SignatureArrayTypeMethodsOverride::GetConstructor_2 ($bindingAttr, $types)
	 * @uses SignatureArrayTypeMethodsOverride::GetConstructor_3 ($bindingAttr, $binder, $types, $modifiers)
	 * @uses SignatureArrayTypeMethodsOverride::GetConstructor_4 ($bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetConstructor(mixed ...$args){}
	/**
	 * @uses SignatureArrayTypeMethodsOverride::GetMethod_1 ($name)
	 * @uses SignatureArrayTypeMethodsOverride::GetMethod_2 ($name, $bindingAttr)
	 * @uses SignatureArrayTypeMethodsOverride::GetMethod_3 ($name, $bindingAttr, $types)
	 * @uses SignatureArrayTypeMethodsOverride::GetMethod_4 ($name, $types)
	 * @uses SignatureArrayTypeMethodsOverride::GetMethod_5 ($name, $types, $modifiers)
	 * @uses SignatureArrayTypeMethodsOverride::GetMethod_6 ($name, $bindingAttr, $binder, $types, $modifiers)
	 * @uses SignatureArrayTypeMethodsOverride::GetMethod_7 ($name, $bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @uses SignatureArrayTypeMethodsOverride::GetMethod_8 ($name, $genericParameterCount, $types)
	 * @uses SignatureArrayTypeMethodsOverride::GetMethod_9 ($name, $genericParameterCount, $types, $modifiers)
	 * @uses SignatureArrayTypeMethodsOverride::GetMethod_10 ($name, $genericParameterCount, $bindingAttr, $binder, $types, $modifiers)
	 * @uses SignatureArrayTypeMethodsOverride::GetMethod_11 ($name, $genericParameterCount, $bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMethod(mixed ...$args){}
	/**
	 * @uses SignatureArrayTypeMethodsOverride::GetProperty_1 ($name)
	 * @uses SignatureArrayTypeMethodsOverride::GetProperty_2 ($name, $bindingAttr)
	 * @uses SignatureArrayTypeMethodsOverride::GetProperty_3 ($name, $returnType)
	 * @uses SignatureArrayTypeMethodsOverride::GetProperty_4 ($name, $types)
	 * @uses SignatureArrayTypeMethodsOverride::GetProperty_5 ($name, $returnType, $types)
	 * @uses SignatureArrayTypeMethodsOverride::GetProperty_6 ($name, $returnType, $types, $modifiers)
	 * @uses SignatureArrayTypeMethodsOverride::GetProperty_7 ($name, $bindingAttr, $binder, $returnType, $types, $modifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetProperty(mixed ...$args){}
	/**
	 * @uses SignatureArrayTypeMethodsOverride::Equals_1 ($o)
	 * @uses SignatureArrayTypeMethodsOverride::Equals_2 ($o)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
