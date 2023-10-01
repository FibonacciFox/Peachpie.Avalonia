<?php
namespace Avalonia\Automation\Provider;
/**
 */
interface IRangeValueProvider
{
	/**
	 */
	public function get_IsReadOnly();
	/**
	 */
	public function get_Minimum();
	/**
	 */
	public function get_Maximum();
	/**
	 */
	public function get_Value();
	/**
	 */
	public function get_LargeChange();
	/**
	 */
	public function get_SmallChange();
	/**
	 * @param \System\Double|double $value
	 */
	public function SetValue($value);
}
