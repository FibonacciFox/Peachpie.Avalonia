<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TypeOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $typeName
	 * @param \System\Boolean|bool $throwOnError
	 * @param \System\Boolean|bool $ignoreCase
	 * @return \System\Type
	 */
	#[MethodOverride]public static function GetType_1 ($typeName, $throwOnError, $ignoreCase){}
	/**
	 * @deprecated
	 * @param \System\String|string $typeName
	 * @param \System\Boolean|bool $throwOnError
	 * @return \System\Type
	 */
	#[MethodOverride]public static function GetType_2 ($typeName, $throwOnError){}
	/**
	 * @deprecated
	 * @param \System\String|string $typeName
	 * @return \System\Type
	 */
	#[MethodOverride]public static function GetType_3 ($typeName){}
	/**
	 * @deprecated
	 * @param \System\String|string $typeName
	 * @param \System\Func_2 $assemblyResolver [generic: System\Reflection\AssemblyName,System\Reflection\Assembly]
	 * @param \System\Func_4 $typeResolver [generic: System\Reflection\Assembly,System\String,System\Boolean,System\Type]
	 * @return \System\Type
	 */
	#[MethodOverride]public static function GetType_4 ($typeName, $assemblyResolver, $typeResolver){}
	/**
	 * @deprecated
	 * @param \System\String|string $typeName
	 * @param \System\Func_2 $assemblyResolver [generic: System\Reflection\AssemblyName,System\Reflection\Assembly]
	 * @param \System\Func_4 $typeResolver [generic: System\Reflection\Assembly,System\String,System\Boolean,System\Type]
	 * @param \System\Boolean|bool $throwOnError
	 * @return \System\Type
	 */
	#[MethodOverride]public static function GetType_5 ($typeName, $assemblyResolver, $typeResolver, $throwOnError){}
	/**
	 * @deprecated
	 * @param \System\String|string $typeName
	 * @param \System\Func_2 $assemblyResolver [generic: System\Reflection\AssemblyName,System\Reflection\Assembly]
	 * @param \System\Func_4 $typeResolver [generic: System\Reflection\Assembly,System\String,System\Boolean,System\Type]
	 * @param \System\Boolean|bool $throwOnError
	 * @param \System\Boolean|bool $ignoreCase
	 * @return \System\Type
	 */
	#[MethodOverride]public static function GetType_6 ($typeName, $assemblyResolver, $typeResolver, $throwOnError, $ignoreCase){}
	/**
	 * @deprecated
	 * @param \System\Type $types
	 * @return \System\Reflection\ConstructorInfo
	 */
	#[MethodOverride]public function GetConstructor_1 ($types){}
	/**
	 * @deprecated
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Type $types
	 * @return \System\Reflection\ConstructorInfo
	 */
	#[MethodOverride]public function GetConstructor_2 ($bindingAttr, $types){}
	/**
	 * @deprecated
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Type $types
	 * @param \System\Reflection\ParameterModifier $modifiers
	 * @return \System\Reflection\ConstructorInfo
	 */
	#[MethodOverride]public function GetConstructor_3 ($bindingAttr, $binder, $types, $modifiers){}
	/**
	 * @deprecated
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Reflection\CallingConventions $callConvention
	 * @param \System\Type $types
	 * @param \System\Reflection\ParameterModifier $modifiers
	 * @return \System\Reflection\ConstructorInfo
	 */
	#[MethodOverride]public function GetConstructor_4 ($bindingAttr, $binder, $callConvention, $types, $modifiers){}
	/**
	 * @deprecated
	 * @return \System\Reflection\ConstructorInfo
	 */
	#[MethodOverride]public function GetConstructors_1 (){}
	/**
	 * @deprecated
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @return \System\Reflection\ConstructorInfo
	 */
	#[MethodOverride]public function GetConstructors_2 ($bindingAttr){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @return \System\Reflection\EventInfo
	 */
	#[MethodOverride]public function GetEvent_1 ($name){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @return \System\Reflection\EventInfo
	 */
	#[MethodOverride]public function GetEvent_2 ($name, $bindingAttr){}
	/**
	 * @deprecated
	 * @return \System\Reflection\EventInfo
	 */
	#[MethodOverride]public function GetEvents_1 (){}
	/**
	 * @deprecated
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @return \System\Reflection\EventInfo
	 */
	#[MethodOverride]public function GetEvents_2 ($bindingAttr){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride]public function GetField_1 ($name){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride]public function GetField_2 ($name, $bindingAttr){}
	/**
	 * @deprecated
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride]public function GetFields_1 (){}
	/**
	 * @deprecated
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride]public function GetFields_2 ($bindingAttr){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @return \System\Reflection\MemberInfo
	 */
	#[MethodOverride]public function GetMember_1 ($name){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @return \System\Reflection\MemberInfo
	 */
	#[MethodOverride]public function GetMember_2 ($name, $bindingAttr){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\MemberTypes $type
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @return \System\Reflection\MemberInfo
	 */
	#[MethodOverride]public function GetMember_3 ($name, $type, $bindingAttr){}
	/**
	 * @deprecated
	 * @return \System\Reflection\MemberInfo
	 */
	#[MethodOverride]public function GetMembers_1 (){}
	/**
	 * @deprecated
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @return \System\Reflection\MemberInfo
	 */
	#[MethodOverride]public function GetMembers_2 ($bindingAttr){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetMethod_1 ($name){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetMethod_2 ($name, $bindingAttr){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Type $types
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetMethod_3 ($name, $bindingAttr, $types){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Type $types
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetMethod_4 ($name, $types){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Type $types
	 * @param \System\Reflection\ParameterModifier $modifiers
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetMethod_5 ($name, $types, $modifiers){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Type $types
	 * @param \System\Reflection\ParameterModifier $modifiers
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetMethod_6 ($name, $bindingAttr, $binder, $types, $modifiers){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Reflection\CallingConventions $callConvention
	 * @param \System\Type $types
	 * @param \System\Reflection\ParameterModifier $modifiers
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetMethod_7 ($name, $bindingAttr, $binder, $callConvention, $types, $modifiers){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Int32|int $genericParameterCount
	 * @param \System\Type $types
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetMethod_8 ($name, $genericParameterCount, $types){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Int32|int $genericParameterCount
	 * @param \System\Type $types
	 * @param \System\Reflection\ParameterModifier $modifiers
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetMethod_9 ($name, $genericParameterCount, $types, $modifiers){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Int32|int $genericParameterCount
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Type $types
	 * @param \System\Reflection\ParameterModifier $modifiers
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetMethod_10 ($name, $genericParameterCount, $bindingAttr, $binder, $types, $modifiers){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Int32|int $genericParameterCount
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Reflection\CallingConventions $callConvention
	 * @param \System\Type $types
	 * @param \System\Reflection\ParameterModifier $modifiers
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetMethod_11 ($name, $genericParameterCount, $bindingAttr, $binder, $callConvention, $types, $modifiers){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Reflection\CallingConventions $callConvention
	 * @param \System\Type $types
	 * @param \System\Reflection\ParameterModifier $modifiers
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]protected function GetMethodImpl_1 ($name, $bindingAttr, $binder, $callConvention, $types, $modifiers){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Int32|int $genericParameterCount
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Reflection\CallingConventions $callConvention
	 * @param \System\Type $types
	 * @param \System\Reflection\ParameterModifier $modifiers
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]protected function GetMethodImpl_2 ($name, $genericParameterCount, $bindingAttr, $binder, $callConvention, $types, $modifiers){}
	/**
	 * @deprecated
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetMethods_1 (){}
	/**
	 * @deprecated
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetMethods_2 ($bindingAttr){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @return \System\Type
	 */
	#[MethodOverride]public function GetNestedType_1 ($name){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @return \System\Type
	 */
	#[MethodOverride]public function GetNestedType_2 ($name, $bindingAttr){}
	/**
	 * @deprecated
	 * @return \System\Type
	 */
	#[MethodOverride]public function GetNestedTypes_1 (){}
	/**
	 * @deprecated
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @return \System\Type
	 */
	#[MethodOverride]public function GetNestedTypes_2 ($bindingAttr){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @return \System\Reflection\PropertyInfo
	 */
	#[MethodOverride]public function GetProperty_1 ($name){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @return \System\Reflection\PropertyInfo
	 */
	#[MethodOverride]public function GetProperty_2 ($name, $bindingAttr){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Type $returnType
	 * @return \System\Reflection\PropertyInfo
	 */
	#[MethodOverride]public function GetProperty_3 ($name, $returnType){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Type $types
	 * @return \System\Reflection\PropertyInfo
	 */
	#[MethodOverride]public function GetProperty_4 ($name, $types){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Type $returnType
	 * @param \System\Type $types
	 * @return \System\Reflection\PropertyInfo
	 */
	#[MethodOverride]public function GetProperty_5 ($name, $returnType, $types){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Type $returnType
	 * @param \System\Type $types
	 * @param \System\Reflection\ParameterModifier $modifiers
	 * @return \System\Reflection\PropertyInfo
	 */
	#[MethodOverride]public function GetProperty_6 ($name, $returnType, $types, $modifiers){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Type $returnType
	 * @param \System\Type $types
	 * @param \System\Reflection\ParameterModifier $modifiers
	 * @return \System\Reflection\PropertyInfo
	 */
	#[MethodOverride]public function GetProperty_7 ($name, $bindingAttr, $binder, $returnType, $types, $modifiers){}
	/**
	 * @deprecated
	 * @return \System\Reflection\PropertyInfo
	 */
	#[MethodOverride]public function GetProperties_1 (){}
	/**
	 * @deprecated
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @return \System\Reflection\PropertyInfo
	 */
	#[MethodOverride]public function GetProperties_2 ($bindingAttr){}
	/**
	 * @deprecated
	 * @param \System\Guid $clsid
	 * @return \System\Type
	 */
	#[MethodOverride]public static function GetTypeFromCLSID_1 ($clsid){}
	/**
	 * @deprecated
	 * @param \System\Guid $clsid
	 * @param \System\Boolean|bool $throwOnError
	 * @return \System\Type
	 */
	#[MethodOverride]public static function GetTypeFromCLSID_2 ($clsid, $throwOnError){}
	/**
	 * @deprecated
	 * @param \System\Guid $clsid
	 * @param \System\String|string $server
	 * @return \System\Type
	 */
	#[MethodOverride]public static function GetTypeFromCLSID_3 ($clsid, $server){}
	/**
	 * @deprecated
	 * @param \System\Guid $clsid
	 * @param \System\String|string $server
	 * @param \System\Boolean|bool $throwOnError
	 * @return \System\Type
	 */
	#[MethodOverride]public static function GetTypeFromCLSID_4 ($clsid, $server, $throwOnError){}
	/**
	 * @deprecated
	 * @param \System\String|string $progID
	 * @return \System\Type
	 */
	#[MethodOverride]public static function GetTypeFromProgID_1 ($progID){}
	/**
	 * @deprecated
	 * @param \System\String|string $progID
	 * @param \System\Boolean|bool $throwOnError
	 * @return \System\Type
	 */
	#[MethodOverride]public static function GetTypeFromProgID_2 ($progID, $throwOnError){}
	/**
	 * @deprecated
	 * @param \System\String|string $progID
	 * @param \System\String|string $server
	 * @return \System\Type
	 */
	#[MethodOverride]public static function GetTypeFromProgID_3 ($progID, $server){}
	/**
	 * @deprecated
	 * @param \System\String|string $progID
	 * @param \System\String|string $server
	 * @param \System\Boolean|bool $throwOnError
	 * @return \System\Type
	 */
	#[MethodOverride]public static function GetTypeFromProgID_4 ($progID, $server, $throwOnError){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $invokeAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Object|object $target
	 * @param \System\Object $args
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function InvokeMember_1 ($name, $invokeAttr, $binder, $target, $args){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $invokeAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Object|object $target
	 * @param \System\Object $args
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function InvokeMember_2 ($name, $invokeAttr, $binder, $target, $args, $culture){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $invokeAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Object|object $target
	 * @param \System\Object $args
	 * @param \System\Reflection\ParameterModifier $modifiers
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\String $namedParameters
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function InvokeMember_3 ($name, $invokeAttr, $binder, $target, $args, $modifiers, $culture, $namedParameters){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @return \System\Type
	 */
	#[MethodOverride]public function GetInterface_1 ($name){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Boolean|bool $ignoreCase
	 * @return \System\Type
	 */
	#[MethodOverride]public function GetInterface_2 ($name, $ignoreCase){}
	/**
	 * @deprecated
	 * @return \System\Type
	 */
	#[MethodOverride]public function MakeArrayType_1 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $rank
	 * @return \System\Type
	 */
	#[MethodOverride]public function MakeArrayType_2 ($rank){}
}
class Type extends \System\Reflection\MemberInfo implements
	\System\Reflection\ICustomAttributeProvider,
	\System\Reflection\IReflect
{
	use TypeOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\Char
	 */
	public static $Delimiter;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Type[]
	 */
	public static $EmptyTypes;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Object|object
	 */
	public static $Missing;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\MemberFilter
	 */
	public static $FilterAttribute;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\MemberFilter
	 */
	public static $FilterName;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\MemberFilter
	 */
	public static $FilterNameIgnoreCase;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsInterface;
	/**
	 * @property
	 * @var \System\Reflection\MemberTypes
	 * @since readonly
	 */
	public $MemberType;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Namespace;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $AssemblyQualifiedName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $FullName;
	/**
	 * @property
	 * @var \System\Reflection\Assembly
	 * @since readonly
	 */
	public $Assembly;
	/**
	 * @property
	 * @var \System\Reflection\Module
	 * @since readonly
	 */
	public $Module;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsNested;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $DeclaringType;
	/**
	 * @property
	 * @var \System\Reflection\MethodBase
	 * @since readonly
	 */
	public $DeclaringMethod;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $ReflectedType;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $UnderlyingSystemType;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsTypeDefinition;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsArray;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsByRef;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsPointer;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsConstructedGenericType;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsGenericParameter;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsGenericTypeParameter;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsGenericMethodParameter;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsGenericType;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsGenericTypeDefinition;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSZArray;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsVariableBoundArray;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsByRefLike;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasElementType;
	/**
	 * @property
	 * @var \System\Type[]
	 * @since readonly
	 */
	public $GenericTypeArguments;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $GenericParameterPosition;
	/**
	 * @property
	 * @var \System\Reflection\GenericParameterAttributes
	 * @since readonly
	 */
	public $GenericParameterAttributes;
	/**
	 * @property
	 * @var \System\Reflection\TypeAttributes
	 * @since readonly
	 */
	public $Attributes;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsAbstract;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsImport;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSealed;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSpecialName;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsClass;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsNestedAssembly;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsNestedFamANDAssem;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsNestedFamily;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsNestedFamORAssem;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsNestedPrivate;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsNestedPublic;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsNotPublic;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsPublic;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsAutoLayout;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsExplicitLayout;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsLayoutSequential;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsAnsiClass;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsAutoClass;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsUnicodeClass;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCOMObject;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsContextful;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsEnum;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsMarshalByRef;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsPrimitive;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsValueType;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSignatureType;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSecurityCritical;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSecuritySafeCritical;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSecurityTransparent;
	/**
	 * @property
	 * @var \System\Runtime\InteropServices\StructLayoutAttribute
	 * @since readonly
	 */
	public $StructLayoutAttribute;
	/**
	 * @property
	 * @var \System\Reflection\ConstructorInfo
	 * @since readonly
	 */
	public $TypeInitializer;
	/**
	 * @property
	 * @var \System\RuntimeTypeHandle
	 * @since readonly
	 */
	public $TypeHandle;
	/**
	 * @property
	 * @var \System\Guid
	 * @since readonly
	 */
	public $GUID;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $BaseType;
	/**
	 * @property
	 * @var \System\Reflection\Binder
	 * @since readonly
	 */
	public $DefaultBinder;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSerializable;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $ContainsGenericParameters;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsVisible;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\CustomAttributeData]
	 * @since readonly
	 */
	public $CustomAttributes;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCollectible;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MetadataToken;
	/**
	 * @uses TypeOverride::GetType_1 <br>public , args: ($typeName, $throwOnError, $ignoreCase)<br>
	 * @uses TypeOverride::GetType_2 <br>public , args: ($typeName, $throwOnError)<br>
	 * @uses TypeOverride::GetType_3 <br>public , args: ($typeName)<br>
	 * @uses TypeOverride::GetType_4 <br>public , args: ($typeName, $assemblyResolver, $typeResolver)<br>
	 * @uses TypeOverride::GetType_5 <br>public , args: ($typeName, $assemblyResolver, $typeResolver, $throwOnError)<br>
	 * @uses TypeOverride::GetType_6 <br>public , args: ($typeName, $assemblyResolver, $typeResolver, $throwOnError, $ignoreCase)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Type|mixed|\override
	 */
	#[MethodOverridePublic]function GetType (\override ...$args){}
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
	 * @return \System\Boolean|bool
	 */
	abstract protected function IsArrayImpl();
	/**
	 * @return \System\Boolean|bool
	 */
	abstract protected function IsByRefImpl();
	/**
	 * @return \System\Boolean|bool
	 */
	abstract protected function IsPointerImpl();
	/**
	 * @return \System\Boolean|bool
	 */
	abstract protected function HasElementTypeImpl();
	/**
	 * @return \System\Type
	 */
	abstract public function GetElementType();
	/**
	 * @return \System\Int32|int
	 */
	public function GetArrayRank(){}
	/**
	 * @return \System\Type
	 */
	public function GetGenericTypeDefinition(){}
	/**
	 * @return \System\Type[]
	 */
	public function GetGenericArguments(){}
	/**
	 * @return \System\Type[]
	 */
	public function GetGenericParameterConstraints(){}
	/**
	 * @return \System\Reflection\TypeAttributes
	 */
	abstract protected function GetAttributeFlagsImpl();
	/**
	 * @return \System\Boolean|bool
	 */
	abstract protected function IsCOMObjectImpl();
	/**
	 * @return \System\Boolean|bool
	 */
	protected function IsContextfulImpl(){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected function IsMarshalByRefImpl(){}
	/**
	 * @return \System\Boolean|bool
	 */
	abstract protected function IsPrimitiveImpl();
	/**
	 * @return \System\Boolean|bool
	 */
	protected function IsValueTypeImpl(){}
	/**
	 * @param \System\Type $targetType
	 * @return \System\Boolean|bool
	 */
	public function IsAssignableTo($targetType){}
	/**
	 * @uses TypeOverride::GetConstructor_1 <br>public , args: ($types)<br>
	 * @uses TypeOverride::GetConstructor_2 <br>public , args: ($bindingAttr, $types)<br>
	 * @uses TypeOverride::GetConstructor_3 <br>public , args: ($bindingAttr, $binder, $types, $modifiers)<br>
	 * @uses TypeOverride::GetConstructor_4 <br>public , args: ($bindingAttr, $binder, $callConvention, $types, $modifiers)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\ConstructorInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetConstructor (\override ...$args){}
	/**
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Reflection\CallingConventions $callConvention
	 * @param \System\Type $types
	 * @param \System\Reflection\ParameterModifier $modifiers
	 * @return \System\Reflection\ConstructorInfo
	 */
	abstract protected function GetConstructorImpl($bindingAttr, $binder, $callConvention, $types, $modifiers);
	/**
	 * @uses TypeOverride::GetConstructors_1 <br>public , args: ()<br>
	 * @uses TypeOverride::GetConstructors_2 <br>public , args: ($bindingAttr)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\ConstructorInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetConstructors (\override ...$args){}
	/**
	 * @uses TypeOverride::GetEvent_1 <br>public , args: ($name)<br>
	 * @uses TypeOverride::GetEvent_2 <br>public , args: ($name, $bindingAttr)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\EventInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetEvent (\override ...$args){}
	/**
	 * @uses TypeOverride::GetEvents_1 <br>public , args: ()<br>
	 * @uses TypeOverride::GetEvents_2 <br>public , args: ($bindingAttr)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\EventInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetEvents (\override ...$args){}
	/**
	 * @uses TypeOverride::GetField_1 <br>public , args: ($name)<br>
	 * @uses TypeOverride::GetField_2 <br>public , args: ($name, $bindingAttr)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\FieldInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetField (\override ...$args){}
	/**
	 * @uses TypeOverride::GetFields_1 <br>public , args: ()<br>
	 * @uses TypeOverride::GetFields_2 <br>public , args: ($bindingAttr)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\FieldInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetFields (\override ...$args){}
	/**
	 * @uses TypeOverride::GetMember_1 <br>public , args: ($name)<br>
	 * @uses TypeOverride::GetMember_2 <br>public , args: ($name, $bindingAttr)<br>
	 * @uses TypeOverride::GetMember_3 <br>public , args: ($name, $type, $bindingAttr)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\MemberInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetMember (\override ...$args){}
	/**
	 * @uses TypeOverride::GetMembers_1 <br>public , args: ()<br>
	 * @uses TypeOverride::GetMembers_2 <br>public , args: ($bindingAttr)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\MemberInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetMembers (\override ...$args){}
	/**
	 * @param \System\Reflection\MemberInfo $member
	 * @return \System\Reflection\MemberInfo
	 */
	public function GetMemberWithSameMetadataDefinitionAs($member){}
	/**
	 * @param \System\Reflection\MemberInfo $member
	 * @return \System\ArgumentException
	 */
	protected static function CreateGetMemberWithSameMetadataDefinitionAsNotFoundException($member){}
	/**
	 * @uses TypeOverride::GetMethod_1 <br>public , args: ($name)<br>
	 * @uses TypeOverride::GetMethod_2 <br>public , args: ($name, $bindingAttr)<br>
	 * @uses TypeOverride::GetMethod_3 <br>public , args: ($name, $bindingAttr, $types)<br>
	 * @uses TypeOverride::GetMethod_4 <br>public , args: ($name, $types)<br>
	 * @uses TypeOverride::GetMethod_5 <br>public , args: ($name, $types, $modifiers)<br>
	 * @uses TypeOverride::GetMethod_6 <br>public , args: ($name, $bindingAttr, $binder, $types, $modifiers)<br>
	 * @uses TypeOverride::GetMethod_7 <br>public , args: ($name, $bindingAttr, $binder, $callConvention, $types, $modifiers)<br>
	 * @uses TypeOverride::GetMethod_8 <br>public , args: ($name, $genericParameterCount, $types)<br>
	 * @uses TypeOverride::GetMethod_9 <br>public , args: ($name, $genericParameterCount, $types, $modifiers)<br>
	 * @uses TypeOverride::GetMethod_10 <br>public , args: ($name, $genericParameterCount, $bindingAttr, $binder, $types, $modifiers)<br>
	 * @uses TypeOverride::GetMethod_11 <br>public , args: ($name, $genericParameterCount, $bindingAttr, $binder, $callConvention, $types, $modifiers)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\MethodInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetMethod (\override ...$args){}
	/**
	 * @uses TypeOverride::GetMethodImpl_1 <br>protected , args: ($name, $bindingAttr, $binder, $callConvention, $types, $modifiers)<br>
	 * @uses TypeOverride::GetMethodImpl_2 <br>protected , args: ($name, $genericParameterCount, $bindingAttr, $binder, $callConvention, $types, $modifiers)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\MethodInfo|mixed|\override
	 */
	#[MethodOverrideProtected]function GetMethodImpl (\override ...$args){}
	/**
	 * @uses TypeOverride::GetMethods_1 <br>public , args: ()<br>
	 * @uses TypeOverride::GetMethods_2 <br>public , args: ($bindingAttr)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\MethodInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetMethods (\override ...$args){}
	/**
	 * @uses TypeOverride::GetNestedType_1 <br>public , args: ($name)<br>
	 * @uses TypeOverride::GetNestedType_2 <br>public , args: ($name, $bindingAttr)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Type|mixed|\override
	 */
	#[MethodOverridePublic]function GetNestedType (\override ...$args){}
	/**
	 * @uses TypeOverride::GetNestedTypes_1 <br>public , args: ()<br>
	 * @uses TypeOverride::GetNestedTypes_2 <br>public , args: ($bindingAttr)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Type|mixed|\override
	 */
	#[MethodOverridePublic]function GetNestedTypes (\override ...$args){}
	/**
	 * @uses TypeOverride::GetProperty_1 <br>public , args: ($name)<br>
	 * @uses TypeOverride::GetProperty_2 <br>public , args: ($name, $bindingAttr)<br>
	 * @uses TypeOverride::GetProperty_3 <br>public , args: ($name, $returnType)<br>
	 * @uses TypeOverride::GetProperty_4 <br>public , args: ($name, $types)<br>
	 * @uses TypeOverride::GetProperty_5 <br>public , args: ($name, $returnType, $types)<br>
	 * @uses TypeOverride::GetProperty_6 <br>public , args: ($name, $returnType, $types, $modifiers)<br>
	 * @uses TypeOverride::GetProperty_7 <br>public , args: ($name, $bindingAttr, $binder, $returnType, $types, $modifiers)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\PropertyInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetProperty (\override ...$args){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Type $returnType
	 * @param \System\Type $types
	 * @param \System\Reflection\ParameterModifier $modifiers
	 * @return \System\Reflection\PropertyInfo
	 */
	abstract protected function GetPropertyImpl($name, $bindingAttr, $binder, $returnType, $types, $modifiers);
	/**
	 * @uses TypeOverride::GetProperties_1 <br>public , args: ()<br>
	 * @uses TypeOverride::GetProperties_2 <br>public , args: ($bindingAttr)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\PropertyInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetProperties (\override ...$args){}
	/**
	 * @return \System\Reflection\MemberInfo[]
	 */
	public function GetDefaultMembers(){}
	/**
	 * @param \System\Object|object $o
	 * @return \System\RuntimeTypeHandle
	 */
	public static function GetTypeHandle($o){}
	/**
	 * @param \System\Object $args
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
	protected function GetTypeCodeImpl(){}
	/**
	 * @uses TypeOverride::GetTypeFromCLSID_1 <br>public , args: ($clsid)<br>
	 * @uses TypeOverride::GetTypeFromCLSID_2 <br>public , args: ($clsid, $throwOnError)<br>
	 * @uses TypeOverride::GetTypeFromCLSID_3 <br>public , args: ($clsid, $server)<br>
	 * @uses TypeOverride::GetTypeFromCLSID_4 <br>public , args: ($clsid, $server, $throwOnError)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Type|mixed|\override
	 */
	#[MethodOverridePublic]function GetTypeFromCLSID (\override ...$args){}
	/**
	 * @uses TypeOverride::GetTypeFromProgID_1 <br>public , args: ($progID)<br>
	 * @uses TypeOverride::GetTypeFromProgID_2 <br>public , args: ($progID, $throwOnError)<br>
	 * @uses TypeOverride::GetTypeFromProgID_3 <br>public , args: ($progID, $server)<br>
	 * @uses TypeOverride::GetTypeFromProgID_4 <br>public , args: ($progID, $server, $throwOnError)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Type|mixed|\override
	 */
	#[MethodOverridePublic]function GetTypeFromProgID (\override ...$args){}
	/**
	 * @uses TypeOverride::InvokeMember_1 <br>public , args: ($name, $invokeAttr, $binder, $target, $args)<br>
	 * @uses TypeOverride::InvokeMember_2 <br>public , args: ($name, $invokeAttr, $binder, $target, $args, $culture)<br>
	 * @uses TypeOverride::InvokeMember_3 <br>public , args: ($name, $invokeAttr, $binder, $target, $args, $modifiers, $culture, $namedParameters)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function InvokeMember (\override ...$args){}
	/**
	 * @uses TypeOverride::GetInterface_1 <br>public , args: ($name)<br>
	 * @uses TypeOverride::GetInterface_2 <br>public , args: ($name, $ignoreCase)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Type|mixed|\override
	 */
	#[MethodOverridePublic]function GetInterface (\override ...$args){}
	/**
	 * @return \System\Type[]
	 */
	abstract public function GetInterfaces();
	/**
	 * @param \System\Type $interfaceType
	 * @return \System\Reflection\InterfaceMapping
	 */
	public function GetInterfaceMap($interfaceType){}
	/**
	 * @param \System\Object|object $o
	 * @return \System\Boolean|bool
	 */
	public function IsInstanceOfType($o){}
	/**
	 * @param \System\Type $other
	 * @return \System\Boolean|bool
	 */
	public function IsEquivalentTo($other){}
	/**
	 * @return \System\Type
	 */
	public function GetEnumUnderlyingType(){}
	/**
	 * @return \System\Array|array
	 */
	public function GetEnumValues(){}
	/**
	 * @return \System\Array|array
	 */
	public function GetEnumValuesAsUnderlyingType(){}
	/**
	 * @uses TypeOverride::MakeArrayType_1 <br>public , args: ()<br>
	 * @uses TypeOverride::MakeArrayType_2 <br>public , args: ($rank)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Type|mixed|\override
	 */
	#[MethodOverridePublic]function MakeArrayType (\override ...$args){}
	/**
	 * @return \System\Type
	 */
	public function MakeByRefType(){}
	/**
	 * @param \System\Type ...$typeArguments
	 * @return \System\Type
	 */
	public function MakeGenericType(...$typeArguments){}
	/**
	 * @return \System\Type
	 */
	public function MakePointerType(){}
	/**
	 * @param \System\Type $genericTypeDefinition
	 * @param \System\Type ...$typeArguments
	 * @return \System\Type
	 */
	public static function MakeGenericSignatureType($genericTypeDefinition, ...$typeArguments){}
	/**
	 * @param \System\Int32|int $position
	 * @return \System\Type
	 */
	public static function MakeGenericMethodParameter($position){}
	/**
	 * @return \System\String|string
	 */
	protected function FormatTypeName(){}
	/**
	 * @param \System\String|string $typeName
	 * @param \System\Boolean|bool $throwIfNotFound
	 * @param \System\Boolean|bool $ignoreCase
	 * @return \System\Type
	 */
	public static function ReflectionOnlyGetType($typeName, $throwIfNotFound, $ignoreCase){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Boolean|bool
	 */
	public function IsEnumDefined($value){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\String|string
	 */
	public function GetEnumName($value){}
	/**
	 * @return \System\String[]|array
	 */
	public function GetEnumNames(){}
	private function GetEnumRawConstantValues(){}
	private function GetEnumData(&$enumNames, &$enumValues){}
	private static function BinarySearch($array, $value){}
	/**
	 * @param \System\Type $t
	 * @return \System\Boolean|bool
	 */
	protected static function IsIntegerType($t){}
	/**
	 * @return \System\Type
	 */
	protected function GetRootElementType(){}
	/**
	 * @param \System\Reflection\TypeFilter $filter
	 * @param \System\Object|object $filterCriteria
	 * @return \System\Type[]
	 */
	public function FindInterfaces($filter, $filterCriteria){}
	/**
	 * @param \System\Reflection\MemberTypes $memberType
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\MemberFilter $filter
	 * @param \System\Object|object $filterCriteria
	 * @return \System\Reflection\MemberInfo[]
	 */
	public function FindMembers($memberType, $bindingAttr, $filter, $filterCriteria){}
	/**
	 * @param \System\Type $c
	 * @return \System\Boolean|bool
	 */
	public function IsSubclassOf($c){}
	/**
	 * @param \System\Type $c
	 * @return \System\Boolean|bool
	 */
	public function IsAssignableFrom($c){}
	/**
	 * @param \System\Type $ifaceType
	 * @return \System\Boolean|bool
	 */
	protected function ImplementInterface($ifaceType){}
	private static function FilterAttributeImpl($m, $filterCriteria){}
	private static function FilterNameImpl($m, $filterCriteria, $comparison){}
}