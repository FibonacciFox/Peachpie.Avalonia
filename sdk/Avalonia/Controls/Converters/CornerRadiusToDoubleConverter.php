<?php
namespace Avalonia\Controls\Converters;
/**
 */
class CornerRadiusToDoubleConverter extends \System\Object implements 
	\Avalonia\Data\Converters\IValueConverter
{
	/**
	 * @var \Avalonia\Controls\Converters\Corners
	 * @property
	 */
	public $Corner;
	/**
	 * @return \Avalonia\Controls\Converters\Corners
	 */
	public  function get_Corner(){}
	/**
	 * @param \Avalonia\Controls\Converters\Corners $value
	 * @return \System\Void|void
	 */
	public  function set_Corner($value){}
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
