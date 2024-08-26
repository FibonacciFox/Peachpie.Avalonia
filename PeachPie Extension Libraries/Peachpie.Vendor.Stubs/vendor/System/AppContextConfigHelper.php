<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AppContextConfigHelperOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $configName
	 * @param \System\Boolean|bool $defaultValue
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function GetBooleanConfig_1 ($configName, $defaultValue){}
	/**
	 * @deprecated
	 * @param \System\String|string $switchName
	 * @param \System\String|string $envVariable
	 * @param \System\Boolean|bool $defaultValue
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function GetBooleanConfig_2 ($switchName, $envVariable, $defaultValue){}
}
class AppContextConfigHelper extends \System\Object
{
	use AppContextConfigHelperOverride;

	/**
	 * @uses AppContextConfigHelperOverride::GetBooleanConfig_1 <br>protected , args: ($configName, $defaultValue)<br>
	 * @uses AppContextConfigHelperOverride::GetBooleanConfig_2 <br>protected , args: ($switchName, $envVariable, $defaultValue)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function GetBooleanConfig (\override ...$args){}
	/**
	 * @param \System\String|string $configName
	 * @param \System\Int32|int $defaultValue
	 * @param \System\Boolean|bool $allowNegative
	 * @return \System\Int32|int
	 */
	protected static function GetInt32Config($configName, $defaultValue, $allowNegative){}
	/**
	 * @param \System\String|string $configName
	 * @param \System\Int16 $defaultValue
	 * @param \System\Boolean|bool $allowNegative
	 * @return \System\Int16
	 */
	protected static function GetInt16Config($configName, $defaultValue, $allowNegative){}
}