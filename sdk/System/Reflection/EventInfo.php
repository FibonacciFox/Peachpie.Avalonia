<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EventInfoMethodsOverride
{
	/**
	 * @return \System\Reflection\MethodInfo[]
	 */
	#[MethodOverride] public  function GetOtherMethods_1(){}
	/**
	 * @return \System\Reflection\MethodInfo[]
	 */
	#[MethodOverride] public  function GetOtherMethods_2($nonPublic){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetAddMethod_1(){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetAddMethod_2($nonPublic){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetRemoveMethod_1(){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetRemoveMethod_2($nonPublic){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetRaiseMethod_1(){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetRaiseMethod_2($nonPublic){}
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
class EventInfo extends \System\Reflection\MemberInfo implements 
	\System\Reflection\ICustomAttributeProvider
{
	/**
	 * @var \System\Reflection\MemberTypes
	 * @property
	 */
	public readonly $MemberType;
	/**
	 * @var \System\Reflection\EventAttributes
	 * @property
	 */
	public readonly $Attributes;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSpecialName;
	/**
	 * @var \System\Reflection\MethodInfo
	 * @property
	 */
	public readonly $AddMethod;
	/**
	 * @var \System\Reflection\MethodInfo
	 * @property
	 */
	public readonly $RemoveMethod;
	/**
	 * @var \System\Reflection\MethodInfo
	 * @property
	 */
	public readonly $RaiseMethod;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsMulticast;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $EventHandlerType;
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
	 * @return \System\Reflection\EventAttributes
	 */
	public  function get_Attributes(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSpecialName(){}
	/**
	 * @uses EventInfoMethodsOverride::GetOtherMethods_1 ()
	 * @uses EventInfoMethodsOverride::GetOtherMethods_2 ($nonPublic)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetOtherMethods(mixed ...$args){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	public  function get_AddMethod(){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	public  function get_RemoveMethod(){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	public  function get_RaiseMethod(){}
	/**
	 * @uses EventInfoMethodsOverride::GetAddMethod_1 ()
	 * @uses EventInfoMethodsOverride::GetAddMethod_2 ($nonPublic)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetAddMethod(mixed ...$args){}
	/**
	 * @uses EventInfoMethodsOverride::GetRemoveMethod_1 ()
	 * @uses EventInfoMethodsOverride::GetRemoveMethod_2 ($nonPublic)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetRemoveMethod(mixed ...$args){}
	/**
	 * @uses EventInfoMethodsOverride::GetRaiseMethod_1 ()
	 * @uses EventInfoMethodsOverride::GetRaiseMethod_2 ($nonPublic)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetRaiseMethod(mixed ...$args){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsMulticast(){}
	/**
	 * @return \System\Type
	 */
	public  function get_EventHandlerType(){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\Delegate $handler
	 * @return \System\Void|void
	 */
	public  function AddEventHandler($target, $handler){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\Delegate $handler
	 * @return \System\Void|void
	 */
	public  function RemoveEventHandler($target, $handler){}
	/**
	 * @param \System\Reflection\EventInfo $left
	 * @param \System\Reflection\EventInfo $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Reflection\EventInfo $left
	 * @param \System\Reflection\EventInfo $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses EventInfoMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses EventInfoMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
}
