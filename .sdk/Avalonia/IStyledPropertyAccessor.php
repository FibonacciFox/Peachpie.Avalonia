<?php
namespace Avalonia;
interface IStyledPropertyAccessor
{

	/**
	 * @param \System\Type $type
	 * @return \System\Object|object
	 */
	public function GetDefaultValue($type);
	/**
	 * @param \System\Object|object $value
	 * @return \System\Boolean|bool
	 */
	public function ValidateValue($value);
}