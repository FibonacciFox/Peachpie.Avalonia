<?php
namespace Avalonia\Data\Converters;
/**
 */
class StringFormatValueConverter extends \System\Object implements 
	\Avalonia\Data\Converters\IValueConverter
{
	/**
	 * @var \Avalonia\Data\Converters\IValueConverter
	 * @property
	 */
	public readonly $Inner;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Format;
	/**
	 * @return \Avalonia\Data\Converters\IValueConverter
	 */
	public  function get_Inner(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Format(){}
	/**
	 * @param \System\Object|object $value
	 * @param \System\Type $targetType
	 * @param \System\Object|object $parameter
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Object|object
	 */
	public  function Convert($value, $targetType, $parameter, $culture){}
	/**
	 * @param \System\Object|object $value
	 * @param \System\Type $targetType
	 * @param \System\Object|object $parameter
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Object|object
	 */
	public  function ConvertBack($value, $targetType, $parameter, $culture){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
