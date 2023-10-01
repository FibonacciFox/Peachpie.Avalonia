<?php
namespace Avalonia\Data\Converters;
/**
 */
interface IMultiValueConverter
{
	/**
	 * @param \System\Collections\Generic\IList_1 $values
	 * @param \System\Type $targetType
	 * @param \System\Object|object $parameter
	 * @param \System\Globalization\CultureInfo $culture
	 */
	public function Convert($values, $targetType, $parameter, $culture);
}
