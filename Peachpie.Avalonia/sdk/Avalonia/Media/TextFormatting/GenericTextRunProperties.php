<?php
namespace Avalonia\Media\TextFormatting;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GenericTextRunPropertiesMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($other){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
}
/**
 */
class GenericTextRunProperties extends \Avalonia\Media\TextFormatting\TextRunProperties implements 
	\System\IEquatable_1
{
	/**
	 * @uses GenericTextRunPropertiesMethodsOverride::Equals_1 ($other)
	 * @uses GenericTextRunPropertiesMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
