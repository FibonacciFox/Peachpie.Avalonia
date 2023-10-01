<?php
namespace Avalonia\Styling;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait NthChildSelectorMethodsOverride
{
	/**
	 * @return \Avalonia\Styling\SelectorMatch
	 */
	#[MethodOverride] protected  function Evaluate_1($control, $parent, $subscribe){}
	/**
	 * @return \Avalonia\Styling\SelectorMatch
	 */
	#[MethodOverride] protected static function Evaluate_2($index, $childIndexProvider, $step, $offset, $reversed){}
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
class NthChildSelector extends \Avalonia\Styling\Selector
{
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Step(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Offset(){}
	/**
	 * @uses NthChildSelectorMethodsOverride::Evaluate_1 ($control, $parent, $subscribe)
	 * @uses NthChildSelectorMethodsOverride::Evaluate_2 ($index, $childIndexProvider, $step, $offset, $reversed)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Evaluate(mixed ...$args){}
	/**
	 * @uses NthChildSelectorMethodsOverride::ToString_1 ($owner)
	 * @uses NthChildSelectorMethodsOverride::ToString_2 ()
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
