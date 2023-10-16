<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CollectionExtensionsMethodsOverride
{
	/**
	 * @return \System\Collections\Generic\TValue
	 */
	#[MethodOverride] public static function GetValueOrDefault_1($dictionary, $key){}
	/**
	 * @return \System\Collections\Generic\TValue
	 */
	#[MethodOverride] public static function GetValueOrDefault_2($dictionary, $key, $defaultValue){}
	/**
	 * @return \System\Collections\ObjectModel\ReadOnlyCollection_1
	 */
	#[MethodOverride] public static function AsReadOnly_1($list){}
	/**
	 * @return \System\Collections\ObjectModel\ReadOnlyDictionary_2
	 */
	#[MethodOverride] public static function AsReadOnly_2($dictionary){}
}
/**
 */
class CollectionExtensions extends \System\Object
{
	/**
	 * @uses CollectionExtensionsMethodsOverride::GetValueOrDefault_1 ($dictionary, $key)
	 * @uses CollectionExtensionsMethodsOverride::GetValueOrDefault_2 ($dictionary, $key, $defaultValue)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetValueOrDefault(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IDictionary_2 $dictionary
	 * @param \System\Collections\Generic\TKey $key
	 * @param \System\Collections\Generic\TValue $value
	 * @return \System\Boolean
	 */
	public static function TryAdd($dictionary, $key, $value){}
	/**
	 * @param \System\Collections\Generic\IDictionary_2 $dictionary
	 * @param \System\Collections\Generic\TKey $key
	 * @param \System\Collections\Generic\TValue& $value
	 * @return \System\Boolean
	 */
	public static function Remove($dictionary, $key, $value){}
	/**
	 * @uses CollectionExtensionsMethodsOverride::AsReadOnly_1 ($list)
	 * @uses CollectionExtensionsMethodsOverride::AsReadOnly_2 ($dictionary)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function AsReadOnly(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
