<?php
namespace Avalonia\Automation\Provider;
/**
 */
interface IValueProvider
{
	/**
	 */
	public function get_IsReadOnly();
	/**
	 */
	public function get_Value();
	/**
	 * @param \System\String|string $value
	 */
	public function SetValue($value);
}
