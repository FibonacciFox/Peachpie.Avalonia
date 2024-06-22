<?php
namespace Avalonia\Data\Converters;
class DefaultValueConverter extends \System\Object implements
	\Avalonia\Data\Converters\IValueConverter
{

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Data\Converters\DefaultValueConverter
	 */
	public static $Instance;
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