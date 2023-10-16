<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GenericTypeParameterBuilderMethodsOverride
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
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($o){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($o){}
	/**
	 * @return \System\Reflection\Module
	 */
	#[MethodOverride] public  function get_Module_1(){}
	/**
	 * @return \System\Reflection\Module
	 */
	#[MethodOverride] public  function get_Module_2(){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function MakeArrayType_1(){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function MakeArrayType_2($rank){}
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
	 * @return \System\Reflection\ConstructorInfo[]
	 */
	#[MethodOverride] public  function GetConstructors_1($bindingAttr){}
	/**
	 * @return \System\Reflection\ConstructorInfo[]
	 */
	#[MethodOverride] public  function GetConstructors_2(){}
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
	#[MethodOverride] public  function GetMethods_1($bindingAttr){}
	/**
	 * @return \System\Reflection\MethodInfo[]
	 */
	#[MethodOverride] public  function GetMethods_2(){}
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
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetInterface_1($name, $ignoreCase){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetInterface_2($name){}
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
	#[MethodOverride] public  function GetEvents_1(){}
	/**
	 * @return \System\Reflection\EventInfo[]
	 */
	#[MethodOverride] public  function GetEvents_2($bindingAttr){}
	/**
	 * @return \System\Reflection\PropertyInfo[]
	 */
	#[MethodOverride] public  function GetProperties_1($bindingAttr){}
	/**
	 * @return \System\Reflection\PropertyInfo[]
	 */
	#[MethodOverride] public  function GetProperties_2(){}
	/**
	 * @return \System\Type[]
	 */
	#[MethodOverride] public  function GetNestedTypes_1($bindingAttr){}
	/**
	 * @return \System\Type[]
	 */
	#[MethodOverride] public  function GetNestedTypes_2(){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetNestedType_1($name, $bindingAttr){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetNestedType_2($name){}
	/**
	 * @return \System\Reflection\MemberInfo[]
	 */
	#[MethodOverride] public  function GetMember_1($name, $type, $bindingAttr){}
	/**
	 * @return \System\Reflection\MemberInfo[]
	 */
	#[MethodOverride] public  function GetMember_2($name){}
	/**
	 * @return \System\Reflection\MemberInfo[]
	 */
	#[MethodOverride] public  function GetMember_3($name, $bindingAttr){}
	/**
	 * @return \System\Reflection\MemberInfo[]
	 */
	#[MethodOverride] public  function GetMembers_1($bindingAttr){}
	/**
	 * @return \System\Reflection\MemberInfo[]
	 */
	#[MethodOverride] public  function GetMembers_2(){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_1($inherit){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_2($attributeType, $inherit){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCustomAttribute_1($con, $binaryAttribute){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCustomAttribute_2($customBuilder){}
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
}
/**
 */
class GenericTypeParameterBuilder extends \System\Reflection\TypeInfo implements 
	\System\Reflection\ICustomAttributeProvider,
	\System\Reflection\IReflect,
	\System\Reflection\IReflectableType
{
	/**
	 * @var \System\Reflection\Emit\TypeBuilder
	 * @field
	 */
	protected $m_type;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $DeclaringType;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $ReflectedType;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Reflection\Module
	 * @property
	 */
	public readonly $Module;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsByRefLike;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MetadataToken;
	/**
	 * @var \System\Guid
	 * @property
	 */
	public readonly $GUID;
	/**
	 * @var \System\Reflection\Assembly
	 * @property
	 */
	public readonly $Assembly;
	/**
	 * @var \System\RuntimeTypeHandle
	 * @property
	 */
	public readonly $TypeHandle;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $FullName;
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
	 * @var \System\Type
	 * @property
	 */
	public readonly $BaseType;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsTypeDefinition;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSZArray;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $UnderlyingSystemType;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsGenericTypeDefinition;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsGenericType;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsGenericParameter;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsConstructedGenericType;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $GenericParameterPosition;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $ContainsGenericParameters;
	/**
	 * @var \System\Reflection\GenericParameterAttributes
	 * @property
	 */
	public readonly $GenericParameterAttributes;
	/**
	 * @var \System\Reflection\MethodBase
	 * @property
	 */
	public readonly $DeclaringMethod;
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
	public readonly $IsVariableBoundArray;
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
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSerializable;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsVisible;
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
	 * @uses GenericTypeParameterBuilderMethodsOverride::IsAssignableFrom_1 ($typeInfo)
	 * @uses GenericTypeParameterBuilderMethodsOverride::IsAssignableFrom_2 ($c)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsAssignableFrom(mixed ...$args){}
	/**
	 * @uses GenericTypeParameterBuilderMethodsOverride::Equals_1 ($o)
	 * @uses GenericTypeParameterBuilderMethodsOverride::Equals_2 ($o)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses GenericTypeParameterBuilderMethodsOverride::get_Module_1 ()
	 * @uses GenericTypeParameterBuilderMethodsOverride::get_Module_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Module(mixed ...$args){}
	/**
	 * @uses GenericTypeParameterBuilderMethodsOverride::MakeArrayType_1 ()
	 * @uses GenericTypeParameterBuilderMethodsOverride::MakeArrayType_2 ($rank)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MakeArrayType(mixed ...$args){}
	/**
	 * @uses GenericTypeParameterBuilderMethodsOverride::InvokeMember_1 ($name, $invokeAttr, $binder, $target, $args, $modifiers, $culture, $namedParameters)
	 * @uses GenericTypeParameterBuilderMethodsOverride::InvokeMember_2 ($name, $invokeAttr, $binder, $target, $args)
	 * @uses GenericTypeParameterBuilderMethodsOverride::InvokeMember_3 ($name, $invokeAttr, $binder, $target, $args, $culture)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function InvokeMember(mixed ...$args){}
	/**
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetConstructors_1 ($bindingAttr)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetConstructors_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetConstructors(mixed ...$args){}
	/**
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetMethodImpl_1 ($name, $bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetMethodImpl_2 ($name, $genericParameterCount, $bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMethodImpl(mixed ...$args){}
	/**
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetMethods_1 ($bindingAttr)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetMethods_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMethods(mixed ...$args){}
	/**
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetField_1 ($name, $bindingAttr)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetField_2 ($name)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetField(mixed ...$args){}
	/**
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetFields_1 ($bindingAttr)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetFields_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetFields(mixed ...$args){}
	/**
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetInterface_1 ($name, $ignoreCase)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetInterface_2 ($name)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetInterface(mixed ...$args){}
	/**
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetEvent_1 ($name, $bindingAttr)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetEvent_2 ($name)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEvent(mixed ...$args){}
	/**
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetEvents_1 ()
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetEvents_2 ($bindingAttr)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEvents(mixed ...$args){}
	/**
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetProperties_1 ($bindingAttr)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetProperties_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetProperties(mixed ...$args){}
	/**
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetNestedTypes_1 ($bindingAttr)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetNestedTypes_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetNestedTypes(mixed ...$args){}
	/**
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetNestedType_1 ($name, $bindingAttr)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetNestedType_2 ($name)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetNestedType(mixed ...$args){}
	/**
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetMember_1 ($name, $type, $bindingAttr)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetMember_2 ($name)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetMember_3 ($name, $bindingAttr)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMember(mixed ...$args){}
	/**
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetMembers_1 ($bindingAttr)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetMembers_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMembers(mixed ...$args){}
	/**
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
	/**
	 * @uses GenericTypeParameterBuilderMethodsOverride::SetCustomAttribute_1 ($con, $binaryAttribute)
	 * @uses GenericTypeParameterBuilderMethodsOverride::SetCustomAttribute_2 ($customBuilder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCustomAttribute(mixed ...$args){}
	/**
	 * @param \System\Type $baseTypeConstraint
	 * @return \System\Void|void
	 */
	public  function SetBaseTypeConstraint($baseTypeConstraint){}
	/**
	 * @param \System\Type[] $interfaceConstraints
	 * @return \System\Void|void
	 */
	public  function SetInterfaceConstraints($interfaceConstraints){}
	/**
	 * @param \System\Reflection\GenericParameterAttributes $genericParameterAttributes
	 * @return \System\Void|void
	 */
	public  function SetGenericParameterAttributes($genericParameterAttributes){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetTypeInfo(){}
	/**
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetType_1 ()
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
	/**
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetConstructor_1 ($types)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetConstructor_2 ($bindingAttr, $types)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetConstructor_3 ($bindingAttr, $binder, $types, $modifiers)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetConstructor_4 ($bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetConstructor(mixed ...$args){}
	/**
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetMethod_1 ($name)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetMethod_2 ($name, $bindingAttr)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetMethod_3 ($name, $bindingAttr, $types)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetMethod_4 ($name, $types)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetMethod_5 ($name, $types, $modifiers)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetMethod_6 ($name, $bindingAttr, $binder, $types, $modifiers)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetMethod_7 ($name, $bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetMethod_8 ($name, $genericParameterCount, $types)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetMethod_9 ($name, $genericParameterCount, $types, $modifiers)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetMethod_10 ($name, $genericParameterCount, $bindingAttr, $binder, $types, $modifiers)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetMethod_11 ($name, $genericParameterCount, $bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMethod(mixed ...$args){}
	/**
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetProperty_1 ($name)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetProperty_2 ($name, $bindingAttr)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetProperty_3 ($name, $returnType)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetProperty_4 ($name, $types)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetProperty_5 ($name, $returnType, $types)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetProperty_6 ($name, $returnType, $types, $modifiers)
	 * @uses GenericTypeParameterBuilderMethodsOverride::GetProperty_7 ($name, $bindingAttr, $binder, $returnType, $types, $modifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetProperty(mixed ...$args){}
}
