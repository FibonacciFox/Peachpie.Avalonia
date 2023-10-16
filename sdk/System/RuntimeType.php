<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RuntimeTypeMethodsOverride
{
	/**
	 * @return \System\RuntimeType
	 */
	#[MethodOverride] protected static function GetType_1($typeName, $throwOnError, $ignoreCase, $stackMark){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_2(){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_3(){}
	/**
	 * @return \System\Reflection\MethodBase
	 */
	#[MethodOverride] protected static function GetMethodBase_1($scope, $typeMetadataToken){}
	/**
	 * @return \System\Reflection\MethodBase
	 */
	#[MethodOverride] protected static function GetMethodBase_2($methodHandle){}
	/**
	 * @return \System\Reflection\MethodBase
	 */
	#[MethodOverride] protected static function GetMethodBase_3($reflectedType, $methodHandle){}
	/**
	 * @return \System\Reflection\MethodBase
	 */
	#[MethodOverride] protected static function GetMethodBase_4($reflectedType, $methodHandle){}
	/**
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride] protected static function GetFieldInfo_1($fieldHandle){}
	/**
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride] protected static function GetFieldInfo_2($reflectedType, $field){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function FilterHelper_1($bindingFlags, $name, $allowPrefixLookup, $prefixLookup, $ignoreCase, $listType){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function FilterHelper_2($bindingFlags, $name, $ignoreCase, $listType){}
	/**
	 * @return \System\Reflection\MethodInfo[]
	 */
	#[MethodOverride] public  function GetMethods_1($bindingAttr){}
	/**
	 * @return \System\Reflection\MethodInfo[]
	 */
	#[MethodOverride] public  function GetMethods_2(){}
	/**
	 * @return \System\Reflection\ConstructorInfo[]
	 */
	#[MethodOverride] public  function GetConstructors_1($bindingAttr){}
	/**
	 * @return \System\Reflection\ConstructorInfo[]
	 */
	#[MethodOverride] public  function GetConstructors_2(){}
	/**
	 * @return \System\Reflection\PropertyInfo[]
	 */
	#[MethodOverride] public  function GetProperties_1($bindingAttr){}
	/**
	 * @return \System\Reflection\PropertyInfo[]
	 */
	#[MethodOverride] public  function GetProperties_2(){}
	/**
	 * @return \System\Reflection\EventInfo[]
	 */
	#[MethodOverride] public  function GetEvents_1($bindingAttr){}
	/**
	 * @return \System\Reflection\EventInfo[]
	 */
	#[MethodOverride] public  function GetEvents_2(){}
	/**
	 * @return \System\Reflection\FieldInfo[]
	 */
	#[MethodOverride] public  function GetFields_1($bindingAttr){}
	/**
	 * @return \System\Reflection\FieldInfo[]
	 */
	#[MethodOverride] public  function GetFields_2(){}
	/**
	 * @return \System\Type[]
	 */
	#[MethodOverride] public  function GetNestedTypes_1($bindingAttr){}
	/**
	 * @return \System\Type[]
	 */
	#[MethodOverride] public  function GetNestedTypes_2(){}
	/**
	 * @return \System\Reflection\MemberInfo[]
	 */
	#[MethodOverride] public  function GetMembers_1($bindingAttr){}
	/**
	 * @return \System\Reflection\MemberInfo[]
	 */
	#[MethodOverride] public  function GetMembers_2(){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] protected  function GetMethodImpl_1($name, $bindingAttr, $binder, $callConv, $types, $modifiers){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] protected  function GetMethodImpl_2($name, $genericParameterCount, $bindingAttr, $binder, $callConv, $types, $modifiers){}
	/**
	 * @return \System\Reflection\EventInfo
	 */
	#[MethodOverride] public  function GetEvent_1($name, $bindingAttr){}
	/**
	 * @return \System\Reflection\EventInfo
	 */
	#[MethodOverride] public  function GetEvent_2($name){}
	/**
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride] public  function GetField_1($name, $bindingAttr){}
	/**
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride] public  function GetField_2($name){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetInterface_1($fullname, $ignoreCase){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetInterface_2($name){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetNestedType_1($fullname, $bindingAttr){}
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
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
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
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsAssignableFrom_1($typeInfo){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsAssignableFrom_2($c){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function InvokeMember_1($name, $bindingFlags, $binder, $target, $providedArgs, $modifiers, $culture, $namedParams){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function InvokeMember_2($name, $invokeAttr, $binder, $target, $args){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function InvokeMember_3($name, $invokeAttr, $binder, $target, $args, $culture){}
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
class RuntimeType extends \System\Reflection\TypeInfo implements 
	\System\Reflection\ICustomAttributeProvider,
	\System\Reflection\IReflect,
	\System\Reflection\IReflectableType,
	\System\ICloneable
{
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $m_handle;
	/**
	 * @var \System\RuntimeType
	 * @field
	 */
	protected readonly $ValueType;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCollectible;
	/**
	 * @var \System\Reflection\MethodBase
	 * @property
	 */
	public readonly $DeclaringMethod;
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
	 * @var \System\String
	 * @property
	 */
	public readonly $Namespace;
	/**
	 * @var \System\Guid
	 * @property
	 */
	public readonly $GUID;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsEnum;
	/**
	 * @var \System\Reflection\GenericParameterAttributes
	 * @property
	 */
	public readonly $GenericParameterAttributes;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSZArray;
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
	 * @var \System\Runtime\InteropServices\StructLayoutAttribute
	 * @property
	 */
	public readonly $StructLayoutAttribute;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $DeclaringType;
	/**
	 * @var \System\Reflection\Assembly
	 * @property
	 */
	public readonly $Assembly;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $BaseType;
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
	public readonly $IsGenericParameter;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsTypeDefinition;
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
	 * @var \System\Reflection\MemberTypes
	 * @property
	 */
	public readonly $MemberType;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MetadataToken;
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
	 * @var \System\RuntimeTypeHandle
	 * @property
	 */
	public readonly $TypeHandle;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $UnderlyingSystemType;
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
	 * @uses RuntimeTypeMethodsOverride::GetType_1 ($typeName, $throwOnError, $ignoreCase, $stackMark)
	 * @uses RuntimeTypeMethodsOverride::GetType_2 ()
	 * @uses RuntimeTypeMethodsOverride::GetType_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
	/**
	 * @uses RuntimeTypeMethodsOverride::GetMethodBase_1 ($scope, $typeMetadataToken)
	 * @uses RuntimeTypeMethodsOverride::GetMethodBase_2 ($methodHandle)
	 * @uses RuntimeTypeMethodsOverride::GetMethodBase_3 ($reflectedType, $methodHandle)
	 * @uses RuntimeTypeMethodsOverride::GetMethodBase_4 ($reflectedType, $methodHandle)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetMethodBase(mixed ...$args){}
	/**
	 * @return \System\Object|object
	 */
	protected  function get_GenericCache(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	protected  function set_GenericCache($value){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_DomainInitialized(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_DomainInitialized($value){}
	/**
	 * @uses RuntimeTypeMethodsOverride::GetFieldInfo_1 ($fieldHandle)
	 * @uses RuntimeTypeMethodsOverride::GetFieldInfo_2 ($reflectedType, $field)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetFieldInfo(mixed ...$args){}
	/**
	 * @param \System\RuntimeType $reflectedType
	 * @param \System\Int32|int $tkProperty
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetPropertyInfo($reflectedType, $tkProperty){}
	/**
	 * @param \System\Reflection\MemberInfo $definition
	 * @param \System\RuntimeType[] $genericArguments
	 * @param \System\Exception $e
	 * @return \System\Void|void
	 */
	protected static function ValidateGenericArguments($definition, $genericArguments, $e){}
	/**
	 * @param \System\String|string $fullname
	 * @param \System\String& $name
	 * @param \System\String& $ns
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SplitName($fullname, $name, $ns){}
	/**
	 * @param \System\Boolean $isPublic
	 * @param \System\Boolean $isInherited
	 * @param \System\Boolean $isStatic
	 * @return \System\Reflection\BindingFlags
	 */
	protected static function FilterPreCalculate($isPublic, $isInherited, $isStatic){}
	/**
	 * @uses RuntimeTypeMethodsOverride::FilterHelper_1 ($bindingFlags, $name, $allowPrefixLookup, $prefixLookup, $ignoreCase, $listType)
	 * @uses RuntimeTypeMethodsOverride::FilterHelper_2 ($bindingFlags, $name, $ignoreCase, $listType)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FilterHelper(mixed ...$args){}
	/**
	 * @param \System\Reflection\MemberInfo $memberInfo
	 * @param \System\String|string $name
	 * @param \System\Boolean $ignoreCase
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FilterApplyPrefixLookup($memberInfo, $name, $ignoreCase){}
	/**
	 * @param \System\Reflection\MemberInfo $memberInfo
	 * @param \System\Reflection\BindingFlags $bindingFlags
	 * @param \System\Boolean $isPublic
	 * @param \System\Boolean $isNonProtectedInternal
	 * @param \System\Boolean $isStatic
	 * @param \System\String|string $name
	 * @param \System\Boolean $prefixLookup
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FilterApplyBase($memberInfo, $bindingFlags, $isPublic, $isNonProtectedInternal, $isStatic, $name, $prefixLookup){}
	/**
	 * @param \System\Type $type
	 * @param \System\Reflection\BindingFlags $bindingFlags
	 * @param \System\String|string $name
	 * @param \System\Boolean $prefixLookup
	 * @param \System\String|string $ns
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FilterApplyType($type, $bindingFlags, $name, $prefixLookup, $ns){}
	/**
	 * @param \System\Reflection\RuntimeMethodInfo $method
	 * @param \System\Reflection\BindingFlags $bindingFlags
	 * @param \System\Reflection\CallingConventions $callConv
	 * @param \System\Type[] $argumentTypes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FilterApplyMethodInfo($method, $bindingFlags, $callConv, $argumentTypes){}
	/**
	 * @param \System\Reflection\RuntimeConstructorInfo $constructor
	 * @param \System\Reflection\BindingFlags $bindingFlags
	 * @param \System\Reflection\CallingConventions $callConv
	 * @param \System\Type[] $argumentTypes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FilterApplyConstructorInfo($constructor, $bindingFlags, $callConv, $argumentTypes){}
	/**
	 * @param \System\Reflection\MethodBase $methodBase
	 * @param \System\Reflection\BindingFlags $methodFlags
	 * @param \System\Reflection\BindingFlags $bindingFlags
	 * @param \System\Reflection\CallingConventions $callConv
	 * @param \System\Type[] $argumentTypes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FilterApplyMethodBase($methodBase, $methodFlags, $bindingFlags, $callConv, $argumentTypes){}
	/**
	 * @return \System\Runtime\CompilerServices\TypeHandle
	 */
	protected  function GetNativeTypeHandle(){}
	/**
	 * @return \System\IntPtr
	 */
	protected  function GetUnderlyingNativeHandle(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_CacheIfExists(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Cache(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitializeCache(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function ClearCache(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetDefaultMemberName(){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Int32|int $genericParameterCount
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\CallingConventions $callConv
	 * @param \System\Type[] $types
	 * @param \System\Boolean $allowPrefixLookup
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetMethodCandidates($name, $genericParameterCount, $bindingAttr, $callConv, $types, $allowPrefixLookup){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\CallingConventions $callConv
	 * @param \System\Type[] $types
	 * @param \System\Boolean $allowPrefixLookup
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetConstructorCandidates($name, $bindingAttr, $callConv, $types, $allowPrefixLookup){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Type[] $types
	 * @param \System\Boolean $allowPrefixLookup
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyCandidates($name, $bindingAttr, $types, $allowPrefixLookup){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Boolean $allowPrefixLookup
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetEventCandidates($name, $bindingAttr, $allowPrefixLookup){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Boolean $allowPrefixLookup
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetFieldCandidates($name, $bindingAttr, $allowPrefixLookup){}
	/**
	 * @param \System\String|string $fullname
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Boolean $allowPrefixLookup
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetNestedTypeCandidates($fullname, $bindingAttr, $allowPrefixLookup){}
	/**
	 * @uses RuntimeTypeMethodsOverride::GetMethods_1 ($bindingAttr)
	 * @uses RuntimeTypeMethodsOverride::GetMethods_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMethods(mixed ...$args){}
	/**
	 * @uses RuntimeTypeMethodsOverride::GetConstructors_1 ($bindingAttr)
	 * @uses RuntimeTypeMethodsOverride::GetConstructors_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetConstructors(mixed ...$args){}
	/**
	 * @uses RuntimeTypeMethodsOverride::GetProperties_1 ($bindingAttr)
	 * @uses RuntimeTypeMethodsOverride::GetProperties_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetProperties(mixed ...$args){}
	/**
	 * @uses RuntimeTypeMethodsOverride::GetEvents_1 ($bindingAttr)
	 * @uses RuntimeTypeMethodsOverride::GetEvents_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEvents(mixed ...$args){}
	/**
	 * @uses RuntimeTypeMethodsOverride::GetFields_1 ($bindingAttr)
	 * @uses RuntimeTypeMethodsOverride::GetFields_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetFields(mixed ...$args){}
	/**
	 * @uses RuntimeTypeMethodsOverride::GetNestedTypes_1 ($bindingAttr)
	 * @uses RuntimeTypeMethodsOverride::GetNestedTypes_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetNestedTypes(mixed ...$args){}
	/**
	 * @uses RuntimeTypeMethodsOverride::GetMembers_1 ($bindingAttr)
	 * @uses RuntimeTypeMethodsOverride::GetMembers_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMembers(mixed ...$args){}
	/**
	 * @uses RuntimeTypeMethodsOverride::GetMethodImpl_1 ($name, $bindingAttr, $binder, $callConv, $types, $modifiers)
	 * @uses RuntimeTypeMethodsOverride::GetMethodImpl_2 ($name, $genericParameterCount, $bindingAttr, $binder, $callConv, $types, $modifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMethodImpl(mixed ...$args){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Int32|int $genericParameterCount
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Reflection\CallingConventions $callConv
	 * @param \System\Type[] $types
	 * @param \System\Reflection\ParameterModifier[] $modifiers
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetMethodImplCommon($name, $genericParameterCount, $bindingAttr, $binder, $callConv, $types, $modifiers){}
	/**
	 * @uses RuntimeTypeMethodsOverride::GetEvent_1 ($name, $bindingAttr)
	 * @uses RuntimeTypeMethodsOverride::GetEvent_2 ($name)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEvent(mixed ...$args){}
	/**
	 * @uses RuntimeTypeMethodsOverride::GetField_1 ($name, $bindingAttr)
	 * @uses RuntimeTypeMethodsOverride::GetField_2 ($name)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetField(mixed ...$args){}
	/**
	 * @uses RuntimeTypeMethodsOverride::GetInterface_1 ($fullname, $ignoreCase)
	 * @uses RuntimeTypeMethodsOverride::GetInterface_2 ($name)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetInterface(mixed ...$args){}
	/**
	 * @uses RuntimeTypeMethodsOverride::GetNestedType_1 ($fullname, $bindingAttr)
	 * @uses RuntimeTypeMethodsOverride::GetNestedType_2 ($name)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetNestedType(mixed ...$args){}
	/**
	 * @uses RuntimeTypeMethodsOverride::GetMember_1 ($name, $type, $bindingAttr)
	 * @uses RuntimeTypeMethodsOverride::GetMember_2 ($name)
	 * @uses RuntimeTypeMethodsOverride::GetMember_3 ($name, $bindingAttr)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMember(mixed ...$args){}
	/**
	 * @param \System\RuntimeType $runtimeType
	 * @param \System\Reflection\MemberInfo $method
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetMethodWithSameMetadataDefinitionAs($runtimeType, $method){}
	/**
	 * @param \System\RuntimeType $runtimeType
	 * @param \System\Reflection\MemberInfo $constructor
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetConstructorWithSameMetadataDefinitionAs($runtimeType, $constructor){}
	/**
	 * @param \System\RuntimeType $runtimeType
	 * @param \System\Reflection\MemberInfo $property
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetPropertyWithSameMetadataDefinitionAs($runtimeType, $property){}
	/**
	 * @param \System\RuntimeType $runtimeType
	 * @param \System\Reflection\MemberInfo $field
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFieldWithSameMetadataDefinitionAs($runtimeType, $field){}
	/**
	 * @param \System\RuntimeType $runtimeType
	 * @param \System\Reflection\MemberInfo $eventInfo
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetEventWithSameMetadataDefinitionAs($runtimeType, $eventInfo){}
	/**
	 * @param \System\RuntimeType $runtimeType
	 * @param \System\Reflection\MemberInfo $nestedType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetNestedTypeWithSameMetadataDefinitionAs($runtimeType, $nestedType){}
	/**
	 * @param \System\Guid& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetGUID($result){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsActualEnum(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function IsDelegate(){}
	/**
	 * @return \System\Object[]
	 */
	protected  function GetEmptyArray(){}
	/**
	 * @return \System\RuntimeType[]
	 */
	protected  function GetGenericArgumentsInternal(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsNullableOfT(){}
	/**
	 * @uses RuntimeTypeMethodsOverride::MakeArrayType_1 ()
	 * @uses RuntimeTypeMethodsOverride::MakeArrayType_2 ($rank)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MakeArrayType(mixed ...$args){}
	/**
	 * @param \System\RuntimeType $valueType
	 * @param \System\RuntimeType $targetType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CanValueSpecialCast($valueType, $targetType){}
	/**
	 * @param \System\RuntimeType $type
	 * @param \System\Object|object $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AllocateValueType($type, $value){}
	/**
	 * @param \System\Object& $value
	 * @param \System\Reflection\ParameterCopyBackAction& $copyBack
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Reflection\BindingFlags $invokeAttr
	 * @return \System\Boolean
	 */
	protected  function CheckValue($value, $copyBack, $binder, $culture, $invokeAttr){}
	/**
	 * @param \System\Object& $value
	 * @param \System\Reflection\ParameterCopyBackAction& $copyBack
	 * @param \System\Boolean& $isValueType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryChangeType($value, $copyBack, $isValueType){}
	/**
	 * @param \System\Object& $arg
	 * @param \System\Boolean& $isValueType
	 * @return \System\Boolean
	 */
	protected  function TryByRefFastPath($arg, $isValueType){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Reflection\CorElementType
	 */
	protected static function GetUnderlyingType($type){}
	/**
	 * @param \System\TypeNameKind $kind
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetCachedName($kind){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateInstanceCheckThis(){}
	/**
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Object[] $args
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Object|object
	 */
	protected  function CreateInstanceImpl($bindingAttr, $binder, $args, $culture){}
	/**
	 * @param \System\Boolean $publicOnly
	 * @param \System\Boolean $wrapExceptions
	 * @return \System\Object|object
	 */
	protected  function CreateInstanceDefaultCtor($publicOnly, $wrapExceptions){}
	/**
	 * @return \System\Object|object
	 */
	protected  function CreateInstanceOfT(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function InvalidateCachedNestedType(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function IsGenericCOMObjectImpl(){}
	/**
	 * @param \System\RuntimeType $enumType
	 * @param \System\Int64|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _CreateEnum($enumType, $value){}
	/**
	 * @param \System\RuntimeType $enumType
	 * @param \System\Int64|int $value
	 * @return \System\Object|object
	 */
	protected static function CreateEnum($enumType, $value){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $invokeAttr
	 * @param \System\Object|object $target
	 * @param \System\Object[] $args
	 * @param \System\Boolean[] $byrefModifiers
	 * @param \System\Int32|int $culture
	 * @param \System\String[] $namedParameters
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InvokeDispMethod($name, $invokeAttr, $target, $args, $byrefModifiers, $culture, $namedParameters){}
	/**
	 * @param \System\String|string $memberName
	 * @param \System\Reflection\BindingFlags $flags
	 * @param \System\Object|object $target
	 * @param \System\Object[] $aArgs
	 * @param \System\Boolean[] $aArgsIsByRef
	 * @param \System\Int32[] $aArgsWrapperTypes
	 * @param \System\Type[] $aArgsTypes
	 * @param \System\Type $retType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ForwardCallToInvokeMember($memberName, $flags, $target, $aArgs, $aArgsIsByRef, $aArgsWrapperTypes, $aArgsTypes, $retType){}
	/**
	 * @param \System\Object[] $aArgs
	 * @param \System\Int32[] $aArgsWrapperTypes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WrapArgsForInvokeCall($aArgs, $aArgsWrapperTypes){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_ForwardCallBinder(){}
	/**
	 * @uses RuntimeTypeMethodsOverride::get_Module_1 ()
	 * @uses RuntimeTypeMethodsOverride::get_Module_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Module(mixed ...$args){}
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @uses RuntimeTypeMethodsOverride::Equals_1 ($obj)
	 * @uses RuntimeTypeMethodsOverride::Equals_2 ($o)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses RuntimeTypeMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses RuntimeTypeMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
	/**
	 * @return \System\Reflection\RuntimeModule
	 */
	protected  function GetRuntimeModule(){}
	/**
	 * @uses RuntimeTypeMethodsOverride::IsAssignableFrom_1 ($typeInfo)
	 * @uses RuntimeTypeMethodsOverride::IsAssignableFrom_2 ($c)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsAssignableFrom(mixed ...$args){}
	/**
	 * @uses RuntimeTypeMethodsOverride::InvokeMember_1 ($name, $bindingFlags, $binder, $target, $providedArgs, $modifiers, $culture, $namedParams)
	 * @uses RuntimeTypeMethodsOverride::InvokeMember_2 ($name, $invokeAttr, $binder, $target, $args)
	 * @uses RuntimeTypeMethodsOverride::InvokeMember_3 ($name, $invokeAttr, $binder, $target, $args, $culture)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function InvokeMember(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetBaseType(){}
	/**
	 * @param \System\RuntimeType $type
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowIfTypeNeverValidGenericArgument($type){}
	/**
	 * @param \System\RuntimeType[] $genericArguments
	 * @param \System\RuntimeType[] $genericParameters
	 * @return \System\Void|void
	 */
	protected static function SanityCheckGenericArguments($genericArguments, $genericParameters){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetTypeInfo(){}
	/**
	 * @uses RuntimeTypeMethodsOverride::GetConstructor_1 ($types)
	 * @uses RuntimeTypeMethodsOverride::GetConstructor_2 ($bindingAttr, $types)
	 * @uses RuntimeTypeMethodsOverride::GetConstructor_3 ($bindingAttr, $binder, $types, $modifiers)
	 * @uses RuntimeTypeMethodsOverride::GetConstructor_4 ($bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetConstructor(mixed ...$args){}
	/**
	 * @uses RuntimeTypeMethodsOverride::GetMethod_1 ($name)
	 * @uses RuntimeTypeMethodsOverride::GetMethod_2 ($name, $bindingAttr)
	 * @uses RuntimeTypeMethodsOverride::GetMethod_3 ($name, $bindingAttr, $types)
	 * @uses RuntimeTypeMethodsOverride::GetMethod_4 ($name, $types)
	 * @uses RuntimeTypeMethodsOverride::GetMethod_5 ($name, $types, $modifiers)
	 * @uses RuntimeTypeMethodsOverride::GetMethod_6 ($name, $bindingAttr, $binder, $types, $modifiers)
	 * @uses RuntimeTypeMethodsOverride::GetMethod_7 ($name, $bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @uses RuntimeTypeMethodsOverride::GetMethod_8 ($name, $genericParameterCount, $types)
	 * @uses RuntimeTypeMethodsOverride::GetMethod_9 ($name, $genericParameterCount, $types, $modifiers)
	 * @uses RuntimeTypeMethodsOverride::GetMethod_10 ($name, $genericParameterCount, $bindingAttr, $binder, $types, $modifiers)
	 * @uses RuntimeTypeMethodsOverride::GetMethod_11 ($name, $genericParameterCount, $bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMethod(mixed ...$args){}
	/**
	 * @uses RuntimeTypeMethodsOverride::GetProperty_1 ($name)
	 * @uses RuntimeTypeMethodsOverride::GetProperty_2 ($name, $bindingAttr)
	 * @uses RuntimeTypeMethodsOverride::GetProperty_3 ($name, $returnType)
	 * @uses RuntimeTypeMethodsOverride::GetProperty_4 ($name, $types)
	 * @uses RuntimeTypeMethodsOverride::GetProperty_5 ($name, $returnType, $types)
	 * @uses RuntimeTypeMethodsOverride::GetProperty_6 ($name, $returnType, $types, $modifiers)
	 * @uses RuntimeTypeMethodsOverride::GetProperty_7 ($name, $bindingAttr, $binder, $returnType, $types, $modifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetProperty(mixed ...$args){}
}
