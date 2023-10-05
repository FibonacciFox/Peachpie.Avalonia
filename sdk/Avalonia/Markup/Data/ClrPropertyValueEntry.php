<?php
namespace Avalonia\Markup\Data;
/**
 */
class ClrPropertyValueEntry extends \Avalonia\Markup\Data\Entry
{
	/**
	 * @var \System\Reflection\PropertyInfo
	 * @property
	 */
	public readonly $Property;
	/**
	 * @var \System\Func_2[Avalonia\StyledElement,System\Object]
	 * @property
	 */
	public readonly $Value;
	/**
	 * @return \System\Reflection\PropertyInfo
	 */
	public  function get_Property(){}
	/**
	 * @return \System\Func_2
	 */
	public  function get_Value(){}
}
