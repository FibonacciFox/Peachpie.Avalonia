<?php
namespace Avalonia\PropertyStore;
/**
 */
class OldNewValue extends \System\ValueType
{
	/**
	 * @var \Avalonia\PropertyStore\EffectiveValue
	 * @field
	 */
	public readonly $OldValue;
	/**
	 * @var \Avalonia\PropertyStore\EffectiveValue
	 * @field
	 */
	public readonly $NewValue;
	/**
	 * @param \Avalonia\PropertyStore\EffectiveValue $newValue
	 * @return \Avalonia\PropertyStore\OldNewValue
	 */
	public  function WithNewValue($newValue){}
}
