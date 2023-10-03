<?php
namespace Avalonia\Data\Converters;
/**
 */
interface IValueConverter
{
	/**
	 * @param \System\Object|object $value
	 * @param \System\Type $targetType
	 * @param \System\Object|object $parameter
	 * @param \System\Globalization\CultureInfo $culture
	 */
	public function Convert($value, $targetType, $parameter, $culture);
	/**
	 * @param \System\Object|object $value
	 * @param \System\Type $targetType
	 * @param \System\Object|object $parameter
	 * @param \System\Globalization\CultureInfo $culture
	 */
	public function ConvertBack($value, $targetType, $parameter, $culture);
}
