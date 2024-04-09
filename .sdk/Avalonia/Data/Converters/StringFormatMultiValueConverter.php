<?php
namespace Avalonia\Data\Converters;
class StringFormatMultiValueConverter extends \System\Object implements
	\Avalonia\Data\Converters\IMultiValueConverter
{
	/**
	 * @property
	 * @var \Avalonia\Data\Converters\IMultiValueConverter
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
	 * @param \System\Collections\Generic\IList_1 $values [generic: System\Object]
	 * @param \System\Type $targetType
	 * @param \System\Object|object $parameter
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Object|object
	 */
	public function Convert($values, $targetType, $parameter, $culture){}
	/**
	 * @param \System\String|string $format
	 * @param \Avalonia\Data\Converters\IMultiValueConverter $inner
	 */
	public function __construct($format, $inner){}
}