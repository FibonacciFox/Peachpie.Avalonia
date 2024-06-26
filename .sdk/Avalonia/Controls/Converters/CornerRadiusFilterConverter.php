<?php
namespace Avalonia\Controls\Converters;
class CornerRadiusFilterConverter extends \System\Object implements
	\Avalonia\Data\Converters\IValueConverter
{
	/**
	 * @property
	 * @var \Avalonia\Controls\Converters\Corners
	 */
	public $Filter;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Scale;
	/**
	 * @param \System\Object|object $value
	 * @param \System\Type $targetType
	 * @param \System\Object|object $parameter
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Object|object
	 */
	public function Convert($value, $targetType, $parameter, $culture){}
	/**
	 * @param \System\Object|object $value
	 * @param \System\Type $targetType
	 * @param \System\Object|object $parameter
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Object|object
	 */
	public function ConvertBack($value, $targetType, $parameter, $culture){}
	/**
	 */
	public function __construct(){}
}