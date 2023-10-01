<?php
namespace Avalonia\Styling;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PropertyEqualsSelectorMethodsOverride
{
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_1($owner){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_2(){}
}
/**
 */
class PropertyEqualsSelector extends \Avalonia\Styling\Selector
{
	/**
	 * @uses PropertyEqualsSelectorMethodsOverride::ToString_1 ($owner)
	 * @uses PropertyEqualsSelectorMethodsOverride::ToString_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
	/**
	 * @param \System\Type $propertyType
	 * @param \System\Object|object $propertyValue
	 * @param \System\Object|object $value
	 * @return \System\Boolean
	 */
	protected static function Compare($propertyType, $propertyValue, $value){}
	/**
	 * @param \Avalonia\StyledElement $control
	 * @param \Avalonia\Styling\IStyle $parent
	 * @param \System\Boolean $subscribe
	 * @return \Avalonia\Styling\SelectorMatch
	 */
	protected  function Match($control, $parent, $subscribe){}
}
