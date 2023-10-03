<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
interface IRangeValueProvider
{
	/**
	 * @param \System\Double|double $value
	 */
	public function SetValue($value);
	/**
	 */
	public function get_Value();
	/**
	 */
	public function get_IsReadOnly();
	/**
	 */
	public function get_Maximum();
	/**
	 */
	public function get_Minimum();
	/**
	 */
	public function get_LargeChange();
	/**
	 */
	public function get_SmallChange();
}
