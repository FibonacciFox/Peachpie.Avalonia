<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AppContextConfigHelperMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function GetBooleanConfig_1($configName, $defaultValue){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function GetBooleanConfig_2($switchName, $envVariable, $defaultValue){}
}
/**
 */
class AppContextConfigHelper extends \System\Object
{
	/**
	 * @uses AppContextConfigHelperMethodsOverride::GetBooleanConfig_1 ($configName, $defaultValue)
	 * @uses AppContextConfigHelperMethodsOverride::GetBooleanConfig_2 ($switchName, $envVariable, $defaultValue)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetBooleanConfig(mixed ...$args){}
	/**
	 * @param \System\String|string $configName
	 * @param \System\Int32|int $defaultValue
	 * @param \System\Boolean $allowNegative
	 * @return \System\Int32|int
	 */
	protected static function GetInt32Config($configName, $defaultValue, $allowNegative){}
	/**
	 * @param \System\String|string $configName
	 * @param \System\Int16 $defaultValue
	 * @param \System\Boolean $allowNegative
	 * @return \System\Int16
	 */
	protected static function GetInt16Config($configName, $defaultValue, $allowNegative){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
