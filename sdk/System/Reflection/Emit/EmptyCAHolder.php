<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EmptyCAHolderMethodsOverride
{
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] private  function GetCustomAttributes_1($attributeType, $inherit){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] private  function GetCustomAttributes_2($inherit){}
}
/**
 */
class EmptyCAHolder extends \System\Object implements 
	\System\Reflection\ICustomAttributeProvider
{
	/**
	 * @uses EmptyCAHolderMethodsOverride::GetCustomAttributes_1 ($attributeType, $inherit)
	 * @uses EmptyCAHolderMethodsOverride::GetCustomAttributes_2 ($inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
	/**
	 * @param \System\Type $attributeType
	 * @param \System\Boolean $inherit
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsDefined($attributeType, $inherit){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
