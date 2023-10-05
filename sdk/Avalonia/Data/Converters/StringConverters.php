<?php
namespace Avalonia\Data\Converters;
/**
 */
class StringConverters extends \System\Object
{
	/**
	 * @var \Avalonia\Data\Converters\IValueConverter
	 * @field
	 */
	public readonly $IsNullOrEmpty;
	/**
	 * @var \Avalonia\Data\Converters\IValueConverter
	 * @field
	 */
	public readonly $IsNotNullOrEmpty;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
