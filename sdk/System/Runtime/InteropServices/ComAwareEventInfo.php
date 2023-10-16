<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ComAwareEventInfoMethodsOverride
{
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetAddMethod_1($nonPublic){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetAddMethod_2(){}
	/**
	 * @return \System\Reflection\MethodInfo[]
	 */
	#[MethodOverride] public  function GetOtherMethods_1($nonPublic){}
	/**
	 * @return \System\Reflection\MethodInfo[]
	 */
	#[MethodOverride] public  function GetOtherMethods_2(){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetRaiseMethod_1($nonPublic){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetRaiseMethod_2(){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetRemoveMethod_1($nonPublic){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetRemoveMethod_2(){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_1($attributeType, $inherit){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_2($inherit){}
}
/**
 */
class ComAwareEventInfo extends \System\Reflection\EventInfo implements 
	\System\Reflection\ICustomAttributeProvider
{
	/**
	 * @var \System\Reflection\EventAttributes
	 * @property
	 */
	public readonly $Attributes;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $DeclaringType;
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
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $ReflectedType;
	/**
	 * @var \System\Reflection\MemberTypes
	 * @property
	 */
	public readonly $MemberType;
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
	 * @uses ComAwareEventInfoMethodsOverride::GetAddMethod_1 ($nonPublic)
	 * @uses ComAwareEventInfoMethodsOverride::GetAddMethod_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetAddMethod(mixed ...$args){}
	/**
	 * @uses ComAwareEventInfoMethodsOverride::GetOtherMethods_1 ($nonPublic)
	 * @uses ComAwareEventInfoMethodsOverride::GetOtherMethods_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetOtherMethods(mixed ...$args){}
	/**
	 * @uses ComAwareEventInfoMethodsOverride::GetRaiseMethod_1 ($nonPublic)
	 * @uses ComAwareEventInfoMethodsOverride::GetRaiseMethod_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetRaiseMethod(mixed ...$args){}
	/**
	 * @uses ComAwareEventInfoMethodsOverride::GetRemoveMethod_1 ($nonPublic)
	 * @uses ComAwareEventInfoMethodsOverride::GetRemoveMethod_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetRemoveMethod(mixed ...$args){}
	/**
	 * @uses ComAwareEventInfoMethodsOverride::GetCustomAttributes_1 ($attributeType, $inherit)
	 * @uses ComAwareEventInfoMethodsOverride::GetCustomAttributes_2 ($inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
	/**
	 * @param \System\Reflection\EventInfo $eventInfo
	 * @param \System\Guid& $sourceIid
	 * @param \System\Int32& $dispid
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDataForComInvocation($eventInfo, $sourceIid, $dispid){}
}
