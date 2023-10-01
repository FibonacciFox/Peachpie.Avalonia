<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
interface IValueProvider
{
	/**
	 * @param \System\String|string $value
	 */
	public function SetValue($value);
	/**
	 */
	public function get_Value();
	/**
	 */
	public function get_IsReadOnly();
}
