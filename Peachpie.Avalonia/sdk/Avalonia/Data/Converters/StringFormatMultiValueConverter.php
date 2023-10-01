<?php
namespace Avalonia\Data\Converters;
/**
 */
class StringFormatMultiValueConverter extends \System\Object implements 
	\Avalonia\Data\Converters\IMultiValueConverter
{
	/**
	 * @return \Avalonia\Data\Converters\IMultiValueConverter
	 */
	public  function get_Inner(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Format(){}
	/**
	 * @param \System\Collections\Generic\IList_1 $values
	 * @param \System\Type $targetType
	 * @param \System\Object|object $parameter
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Object|object
	 */
	public  function Convert($values, $targetType, $parameter, $culture){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
