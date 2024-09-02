<?php
namespace Avalonia\Data\Converters;
interface IMultiValueConverter
{

	/**
	 * @param \System\Collections\Generic\IList_1 $values [generic: System\Object]
	 * @param \System\Type $targetType
	 * @param \System\Object|object $parameter
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Object|object
	 */
	public function Convert($values, $targetType, $parameter, $culture);
}