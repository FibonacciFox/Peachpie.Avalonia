<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RuntimeEventInfoMethodsOverride
{
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_1($inherit){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_2($attributeType, $inherit){}
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
	#[MethodOverride] public  function GetAddMethod_1($nonPublic){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetAddMethod_2(){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetRemoveMethod_1($nonPublic){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetRemoveMethod_2(){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetRaiseMethod_1($nonPublic){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetRaiseMethod_2(){}
}
/**
 */
class RuntimeEventInfo extends \System\Reflection\EventInfo implements 
	\System\Reflection\ICustomAttributeProvider
{
	/**
	 * @var \System\Reflection\MemberTypes
	 * @property
	 */
	public readonly $MemberType;
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
	 * @return \System\Reflection\BindingFlags
	 */
	protected  function get_BindingFlags(){}
	/**
	 * @uses RuntimeEventInfoMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses RuntimeEventInfoMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_ReflectedTypeInternal(){}
	/**
	 * @return \System\Reflection\RuntimeModule
	 */
	protected  function GetRuntimeModule(){}
	/**
	 * @uses RuntimeEventInfoMethodsOverride::GetOtherMethods_1 ($nonPublic)
	 * @uses RuntimeEventInfoMethodsOverride::GetOtherMethods_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetOtherMethods(mixed ...$args){}
	/**
	 * @uses RuntimeEventInfoMethodsOverride::GetAddMethod_1 ($nonPublic)
	 * @uses RuntimeEventInfoMethodsOverride::GetAddMethod_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetAddMethod(mixed ...$args){}
	/**
	 * @uses RuntimeEventInfoMethodsOverride::GetRemoveMethod_1 ($nonPublic)
	 * @uses RuntimeEventInfoMethodsOverride::GetRemoveMethod_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetRemoveMethod(mixed ...$args){}
	/**
	 * @uses RuntimeEventInfoMethodsOverride::GetRaiseMethod_1 ($nonPublic)
	 * @uses RuntimeEventInfoMethodsOverride::GetRaiseMethod_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetRaiseMethod(mixed ...$args){}
}
