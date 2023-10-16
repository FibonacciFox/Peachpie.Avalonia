<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TypeInfoMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsAssignableFrom_1($typeInfo){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsAssignableFrom_2($c){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_1(){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_2(){}
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
class TypeInfo extends \System\Type implements 
	\System\Reflection\ICustomAttributeProvider,
	\System\Reflection\IReflect,
	\System\Reflection\IReflectableType
{
	/**
	 * @var \System\Type[]
	 * @property
	 */
	public readonly $GenericTypeParameters;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\ConstructorInfo]
	 * @property
	 */
	public readonly $DeclaredConstructors;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\EventInfo]
	 * @property
	 */
	public readonly $DeclaredEvents;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\FieldInfo]
	 * @property
	 */
	public readonly $DeclaredFields;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\MemberInfo]
	 * @property
	 */
	public readonly $DeclaredMembers;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\MethodInfo]
	 * @property
	 */
	public readonly $DeclaredMethods;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\TypeInfo]
	 * @property
	 */
	public readonly $DeclaredNestedTypes;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\PropertyInfo]
	 * @property
	 */
	public readonly $DeclaredProperties;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Type]
	 * @property
	 */
	public readonly $ImplementedInterfaces;
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
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetTypeInfo(){}
	/**
	 * @return \System\Type
	 */
	public  function AsType(){}
	/**
	 * @return \System\Type[]
	 */
	public  function get_GenericTypeParameters(){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Reflection\EventInfo
	 */
	public  function GetDeclaredEvent($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Reflection\FieldInfo
	 */
	public  function GetDeclaredField($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Reflection\MethodInfo
	 */
	public  function GetDeclaredMethod($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Reflection\TypeInfo
	 */
	public  function GetDeclaredNestedType($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Reflection\PropertyInfo
	 */
	public  function GetDeclaredProperty($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function GetDeclaredMethods($name){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_DeclaredConstructors(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_DeclaredEvents(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_DeclaredFields(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_DeclaredMembers(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_DeclaredMethods(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_DeclaredNestedTypes(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_DeclaredProperties(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_ImplementedInterfaces(){}
	/**
	 * @uses TypeInfoMethodsOverride::IsAssignableFrom_1 ($typeInfo)
	 * @uses TypeInfoMethodsOverride::IsAssignableFrom_2 ($c)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsAssignableFrom(mixed ...$args){}
	/**
	 * @param \System\Int32|int $rank
	 * @return \System\String|string
	 */
	protected static function GetRankString($rank){}
	/**
	 * @uses TypeInfoMethodsOverride::GetType_1 ()
	 * @uses TypeInfoMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
	/**
	 * @uses TypeInfoMethodsOverride::get_Module_1 ()
	 * @uses TypeInfoMethodsOverride::get_Module_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Module(mixed ...$args){}
	/**
	 * @uses TypeInfoMethodsOverride::GetConstructor_1 ($types)
	 * @uses TypeInfoMethodsOverride::GetConstructor_2 ($bindingAttr, $types)
	 * @uses TypeInfoMethodsOverride::GetConstructor_3 ($bindingAttr, $binder, $types, $modifiers)
	 * @uses TypeInfoMethodsOverride::GetConstructor_4 ($bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetConstructor(mixed ...$args){}
	/**
	 * @uses TypeInfoMethodsOverride::GetConstructors_1 ()
	 * @uses TypeInfoMethodsOverride::GetConstructors_2 ($bindingAttr)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetConstructors(mixed ...$args){}
	/**
	 * @uses TypeInfoMethodsOverride::GetEvent_1 ($name)
	 * @uses TypeInfoMethodsOverride::GetEvent_2 ($name, $bindingAttr)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEvent(mixed ...$args){}
	/**
	 * @uses TypeInfoMethodsOverride::GetEvents_1 ()
	 * @uses TypeInfoMethodsOverride::GetEvents_2 ($bindingAttr)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEvents(mixed ...$args){}
	/**
	 * @uses TypeInfoMethodsOverride::GetField_1 ($name)
	 * @uses TypeInfoMethodsOverride::GetField_2 ($name, $bindingAttr)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetField(mixed ...$args){}
	/**
	 * @uses TypeInfoMethodsOverride::GetFields_1 ()
	 * @uses TypeInfoMethodsOverride::GetFields_2 ($bindingAttr)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetFields(mixed ...$args){}
	/**
	 * @uses TypeInfoMethodsOverride::GetMember_1 ($name)
	 * @uses TypeInfoMethodsOverride::GetMember_2 ($name, $bindingAttr)
	 * @uses TypeInfoMethodsOverride::GetMember_3 ($name, $type, $bindingAttr)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMember(mixed ...$args){}
	/**
	 * @uses TypeInfoMethodsOverride::GetMembers_1 ()
	 * @uses TypeInfoMethodsOverride::GetMembers_2 ($bindingAttr)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMembers(mixed ...$args){}
	/**
	 * @uses TypeInfoMethodsOverride::GetMethod_1 ($name)
	 * @uses TypeInfoMethodsOverride::GetMethod_2 ($name, $bindingAttr)
	 * @uses TypeInfoMethodsOverride::GetMethod_3 ($name, $bindingAttr, $types)
	 * @uses TypeInfoMethodsOverride::GetMethod_4 ($name, $types)
	 * @uses TypeInfoMethodsOverride::GetMethod_5 ($name, $types, $modifiers)
	 * @uses TypeInfoMethodsOverride::GetMethod_6 ($name, $bindingAttr, $binder, $types, $modifiers)
	 * @uses TypeInfoMethodsOverride::GetMethod_7 ($name, $bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @uses TypeInfoMethodsOverride::GetMethod_8 ($name, $genericParameterCount, $types)
	 * @uses TypeInfoMethodsOverride::GetMethod_9 ($name, $genericParameterCount, $types, $modifiers)
	 * @uses TypeInfoMethodsOverride::GetMethod_10 ($name, $genericParameterCount, $bindingAttr, $binder, $types, $modifiers)
	 * @uses TypeInfoMethodsOverride::GetMethod_11 ($name, $genericParameterCount, $bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMethod(mixed ...$args){}
	/**
	 * @uses TypeInfoMethodsOverride::GetMethodImpl_1 ($name, $bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @uses TypeInfoMethodsOverride::GetMethodImpl_2 ($name, $genericParameterCount, $bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMethodImpl(mixed ...$args){}
	/**
	 * @uses TypeInfoMethodsOverride::GetMethods_1 ()
	 * @uses TypeInfoMethodsOverride::GetMethods_2 ($bindingAttr)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMethods(mixed ...$args){}
	/**
	 * @uses TypeInfoMethodsOverride::GetNestedType_1 ($name)
	 * @uses TypeInfoMethodsOverride::GetNestedType_2 ($name, $bindingAttr)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetNestedType(mixed ...$args){}
	/**
	 * @uses TypeInfoMethodsOverride::GetNestedTypes_1 ()
	 * @uses TypeInfoMethodsOverride::GetNestedTypes_2 ($bindingAttr)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetNestedTypes(mixed ...$args){}
	/**
	 * @uses TypeInfoMethodsOverride::GetProperty_1 ($name)
	 * @uses TypeInfoMethodsOverride::GetProperty_2 ($name, $bindingAttr)
	 * @uses TypeInfoMethodsOverride::GetProperty_3 ($name, $returnType)
	 * @uses TypeInfoMethodsOverride::GetProperty_4 ($name, $types)
	 * @uses TypeInfoMethodsOverride::GetProperty_5 ($name, $returnType, $types)
	 * @uses TypeInfoMethodsOverride::GetProperty_6 ($name, $returnType, $types, $modifiers)
	 * @uses TypeInfoMethodsOverride::GetProperty_7 ($name, $bindingAttr, $binder, $returnType, $types, $modifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetProperty(mixed ...$args){}
	/**
	 * @uses TypeInfoMethodsOverride::GetProperties_1 ()
	 * @uses TypeInfoMethodsOverride::GetProperties_2 ($bindingAttr)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetProperties(mixed ...$args){}
	/**
	 * @uses TypeInfoMethodsOverride::InvokeMember_1 ($name, $invokeAttr, $binder, $target, $args)
	 * @uses TypeInfoMethodsOverride::InvokeMember_2 ($name, $invokeAttr, $binder, $target, $args, $culture)
	 * @uses TypeInfoMethodsOverride::InvokeMember_3 ($name, $invokeAttr, $binder, $target, $args, $modifiers, $culture, $namedParameters)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function InvokeMember(mixed ...$args){}
	/**
	 * @uses TypeInfoMethodsOverride::GetInterface_1 ($name)
	 * @uses TypeInfoMethodsOverride::GetInterface_2 ($name, $ignoreCase)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetInterface(mixed ...$args){}
	/**
	 * @uses TypeInfoMethodsOverride::MakeArrayType_1 ()
	 * @uses TypeInfoMethodsOverride::MakeArrayType_2 ($rank)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MakeArrayType(mixed ...$args){}
	/**
	 * @uses TypeInfoMethodsOverride::Equals_1 ($o)
	 * @uses TypeInfoMethodsOverride::Equals_2 ($o)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses TypeInfoMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses TypeInfoMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
}
