<?php
namespace Avalonia\Data\Converters;
class StringFormatValueConverter extends \System\Object implements
	\Avalonia\Data\Converters\IValueConverter
{
	/**
	 * @property
	 * @var \Avalonia\Data\Converters\IValueConverter
	 * @since readonly
	 */
	public $Inner;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Format;
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
	 * @param \System\String|string $format
	 * @param \Avalonia\Data\Converters\IValueConverter $inner
	 */
	public function __construct($format, $inner){}
}