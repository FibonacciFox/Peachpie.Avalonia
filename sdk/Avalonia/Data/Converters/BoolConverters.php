<?php
namespace Avalonia\Data\Converters;
/**
 */
class BoolConverters extends \System\Object
{
	/**
	 * @var \Avalonia\Data\Converters\IMultiValueConverter
	 * @field
	 */
	public readonly $And;
	/**
	 * @var \Avalonia\Data\Converters\IMultiValueConverter
	 * @field
	 */
	public readonly $Or;
	/**
	 * @var \Avalonia\Data\Converters\IValueConverter
	 * @field
	 */
	public readonly $Not;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
