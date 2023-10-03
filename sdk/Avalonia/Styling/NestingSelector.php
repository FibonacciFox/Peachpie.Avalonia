<?php
namespace Avalonia\Styling;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait NestingSelectorMethodsOverride
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
class NestingSelector extends \Avalonia\Styling\Selector
{
	/**
	 * @uses NestingSelectorMethodsOverride::ToString_1 ($owner)
	 * @uses NestingSelectorMethodsOverride::ToString_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
	/**
	 * @param \Avalonia\StyledElement $control
	 * @param \Avalonia\Styling\IStyle $parent
	 * @param \System\Boolean $subscribe
	 * @return \Avalonia\Styling\SelectorMatch
	 */
	protected  function Match($control, $parent, $subscribe){}
}
