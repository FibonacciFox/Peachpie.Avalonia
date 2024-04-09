<?php
namespace Avalonia\PropertyStore;
class UntypedValueUtils extends \System\Object
{

	/**
	 * @param \System\Object|object $value
	 * @param \System\Type $targetType
	 * @param \System\Func_2 $validate [generic: T,System\Boolean]
	 * @return \Avalonia\Data\BindingValue_1[T]
	 */
	public static function ConvertAndValidate($value, $targetType, $validate){}
	/**
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @param \System\Object|object $value
	 * @param \T& &$result
	 * @return \System\Boolean|bool
	 */
	public static function TryConvertAndValidate($property, $value, &$result){}
}