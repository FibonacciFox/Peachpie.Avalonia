<?php
namespace Avalonia\PropertyStore;
/**
 */
class UntypedValueUtils extends \System\Object
{
	/**
	 * @param \System\Object|object $value
	 * @param \System\Type $targetType
	 * @param \System\Func_2 $validate
	 * @return \Avalonia\Data\BindingValue_1
	 */
	public static function ConvertAndValidate($value, $targetType, $validate){}
	/**
	 * @param \Avalonia\StyledProperty_1 $property
	 * @param \System\Object|object $value
	 * @param \Avalonia\PropertyStore\T& $result
	 * @return \System\Boolean
	 */
	public static function TryConvertAndValidate($property, $value, $result){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
