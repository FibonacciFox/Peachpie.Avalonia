<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CustomAttributeDataMethodsOverride
{
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride] public static function GetCustomAttributes_1($target){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride] public static function GetCustomAttributes_2($target){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride] public static function GetCustomAttributes_3($target){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride] public static function GetCustomAttributes_4($target){}
}
/**
 */
class CustomAttributeData extends \System\Object
{
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $AttributeType;
	/**
	 * @var \System\Reflection\ConstructorInfo
	 * @property
	 */
	public readonly $Constructor;
	/**
	 * @var \System\Collections\Generic\IList_1[System\Reflection\CustomAttributeTypedArgument]
	 * @property
	 */
	public readonly $ConstructorArguments;
	/**
	 * @var \System\Collections\Generic\IList_1[System\Reflection\CustomAttributeNamedArgument]
	 * @property
	 */
	public readonly $NamedArguments;
	/**
	 * @uses CustomAttributeDataMethodsOverride::GetCustomAttributes_1 ($target)
	 * @uses CustomAttributeDataMethodsOverride::GetCustomAttributes_2 ($target)
	 * @uses CustomAttributeDataMethodsOverride::GetCustomAttributes_3 ($target)
	 * @uses CustomAttributeDataMethodsOverride::GetCustomAttributes_4 ($target)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetCustomAttributes(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
	/**
	 * @return \System\Type
	 */
	public  function get_AttributeType(){}
	/**
	 * @return \System\Reflection\ConstructorInfo
	 */
	public  function get_Constructor(){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	public  function get_ConstructorArguments(){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	public  function get_NamedArguments(){}
}
