<?php
namespace Avalonia;
/**
 */
interface IStyledPropertyAccessor
{
	/**
	 * @param \System\Type $type
	 */
	public function GetDefaultValue($type);
	/**
	 * @param \System\Object|object $value
	 */
	public function ValidateValue($value);
}
