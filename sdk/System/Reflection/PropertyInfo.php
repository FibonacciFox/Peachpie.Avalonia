<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PropertyInfoMethodsOverride
{
	/**
	 * @return \System\Reflection\MethodInfo[]
	 */
	#[MethodOverride] public  function GetAccessors_1(){}
	/**
	 * @return \System\Reflection\MethodInfo[]
	 */
	#[MethodOverride] public  function GetAccessors_2($nonPublic){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetGetMethod_1(){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetGetMethod_2($nonPublic){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetSetMethod_1(){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetSetMethod_2($nonPublic){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetValue_1($obj){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetValue_2($obj, $index){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetValue_3($obj, $invokeAttr, $binder, $index, $culture){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_1($obj, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_2($obj, $value, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_3($obj, $value, $invokeAttr, $binder, $index, $culture){}
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
class PropertyInfo extends \System\Reflection\MemberInfo implements 
	\System\Reflection\ICustomAttributeProvider
{
	/**
	 * @var \System\Reflection\MemberTypes
	 * @property
	 */
	public readonly $MemberType;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $PropertyType;
	/**
	 * @var \System\Reflection\PropertyAttributes
	 * @property
	 */
	public readonly $Attributes;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSpecialName;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanRead;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanWrite;
	/**
	 * @var \System\Reflection\MethodInfo
	 * @property
	 */
	public readonly $GetMethod;
	/**
	 * @var \System\Reflection\MethodInfo
	 * @property
	 */
	public readonly $SetMethod;
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
	 * @return \System\Type
	 */
	public  function get_PropertyType(){}
	/**
	 * @return \System\Reflection\ParameterInfo[]
	 */
	public  function GetIndexParameters(){}
	/**
	 * @return \System\Reflection\PropertyAttributes
	 */
	public  function get_Attributes(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSpecialName(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanRead(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanWrite(){}
	/**
	 * @uses PropertyInfoMethodsOverride::GetAccessors_1 ()
	 * @uses PropertyInfoMethodsOverride::GetAccessors_2 ($nonPublic)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetAccessors(mixed ...$args){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	public  function get_GetMethod(){}
	/**
	 * @uses PropertyInfoMethodsOverride::GetGetMethod_1 ()
	 * @uses PropertyInfoMethodsOverride::GetGetMethod_2 ($nonPublic)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetGetMethod(mixed ...$args){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	public  function get_SetMethod(){}
	/**
	 * @uses PropertyInfoMethodsOverride::GetSetMethod_1 ()
	 * @uses PropertyInfoMethodsOverride::GetSetMethod_2 ($nonPublic)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetSetMethod(mixed ...$args){}
	/**
	 * @return \System\Type[]
	 */
	public  function GetOptionalCustomModifiers(){}
	/**
	 * @return \System\Type[]
	 */
	public  function GetRequiredCustomModifiers(){}
	/**
	 * @uses PropertyInfoMethodsOverride::GetValue_1 ($obj)
	 * @uses PropertyInfoMethodsOverride::GetValue_2 ($obj, $index)
	 * @uses PropertyInfoMethodsOverride::GetValue_3 ($obj, $invokeAttr, $binder, $index, $culture)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @return \System\Object|object
	 */
	public  function GetConstantValue(){}
	/**
	 * @return \System\Object|object
	 */
	public  function GetRawConstantValue(){}
	/**
	 * @uses PropertyInfoMethodsOverride::SetValue_1 ($obj, $value)
	 * @uses PropertyInfoMethodsOverride::SetValue_2 ($obj, $value, $index)
	 * @uses PropertyInfoMethodsOverride::SetValue_3 ($obj, $value, $invokeAttr, $binder, $index, $culture)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @param \System\Reflection\PropertyInfo $left
	 * @param \System\Reflection\PropertyInfo $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Reflection\PropertyInfo $left
	 * @param \System\Reflection\PropertyInfo $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses PropertyInfoMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses PropertyInfoMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
}
