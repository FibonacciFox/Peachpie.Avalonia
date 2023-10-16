<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FieldInfoMethodsOverride
{
	/**
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride] public static function GetFieldFromHandle_1($handle){}
	/**
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride] public static function GetFieldFromHandle_2($handle, $declaringType){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_1($obj, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_2($obj, $value, $invokeAttr, $binder, $culture){}
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
class FieldInfo extends \System\Reflection\MemberInfo implements 
	\System\Reflection\ICustomAttributeProvider
{
	/**
	 * @var \System\Reflection\MemberTypes
	 * @property
	 */
	public readonly $MemberType;
	/**
	 * @var \System\Reflection\FieldAttributes
	 * @property
	 */
	public readonly $Attributes;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $FieldType;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsInitOnly;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsLiteral;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsNotSerialized;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsPinvokeImpl;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSpecialName;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsStatic;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsAssembly;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsFamily;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsFamilyAndAssembly;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsFamilyOrAssembly;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsPrivate;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsPublic;
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
	 * @var \System\RuntimeFieldHandle
	 * @property
	 */
	public readonly $FieldHandle;
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
	 * @var \System\Type
	 * @property
	 */
	public readonly $ReflectedType;
	/**
	 * @var \System\Reflection\Module
	 * @property
	 */
	public readonly $Module;
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
	 * @uses FieldInfoMethodsOverride::GetFieldFromHandle_1 ($handle)
	 * @uses FieldInfoMethodsOverride::GetFieldFromHandle_2 ($handle, $declaringType)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetFieldFromHandle(mixed ...$args){}
	/**
	 * @return \System\Reflection\FieldAttributes
	 */
	public  function get_Attributes(){}
	/**
	 * @return \System\Type
	 */
	public  function get_FieldType(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsInitOnly(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsLiteral(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsNotSerialized(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsPinvokeImpl(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSpecialName(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsStatic(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsAssembly(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsFamily(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsFamilyAndAssembly(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsFamilyOrAssembly(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsPrivate(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsPublic(){}
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
	 * @return \System\RuntimeFieldHandle
	 */
	public  function get_FieldHandle(){}
	/**
	 * @param \System\Reflection\FieldInfo $left
	 * @param \System\Reflection\FieldInfo $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Reflection\FieldInfo $left
	 * @param \System\Reflection\FieldInfo $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Object|object
	 */
	public  function GetValue($obj){}
	/**
	 * @uses FieldInfoMethodsOverride::SetValue_1 ($obj, $value)
	 * @uses FieldInfoMethodsOverride::SetValue_2 ($obj, $value, $invokeAttr, $binder, $culture)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @param \System\TypedReference $obj
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function SetValueDirect($obj, $value){}
	/**
	 * @param \System\TypedReference $obj
	 * @return \System\Object|object
	 */
	public  function GetValueDirect($obj){}
	/**
	 * @return \System\Object|object
	 */
	public  function GetRawConstantValue(){}
	/**
	 * @return \System\Type[]
	 */
	public  function GetOptionalCustomModifiers(){}
	/**
	 * @return \System\Type[]
	 */
	public  function GetRequiredCustomModifiers(){}
	/**
	 * @uses FieldInfoMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses FieldInfoMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
}
