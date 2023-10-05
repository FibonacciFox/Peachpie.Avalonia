<?php
namespace Avalonia\Data\Converters;
/**
 */
class ObjectConverters extends \System\Object
{
	/**
	 * @var \Avalonia\Data\Converters\IValueConverter
	 * @field
	 */
	public readonly $IsNull;
	/**
	 * @var \Avalonia\Data\Converters\IValueConverter
	 * @field
	 */
	public readonly $IsNotNull;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
