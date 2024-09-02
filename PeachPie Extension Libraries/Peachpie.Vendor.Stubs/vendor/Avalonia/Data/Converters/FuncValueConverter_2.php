<?php
namespace Avalonia\Data\Converters;
class FuncValueConverter_2 extends \System\Object implements
	\Avalonia\Data\Converters\IValueConverter
{

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
	 * @param \System\Func_2 $convert [generic: TIn,TOut]
	 */
	public function __construct($convert){}
}