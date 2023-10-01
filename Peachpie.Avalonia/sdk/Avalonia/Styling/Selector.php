<?php
namespace Avalonia\Styling;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SelectorMethodsOverride
{
	/**
	 * @return \Avalonia\Styling\SelectorMatch
	 */
	#[MethodOverride] protected  function Match_1($control, $parent, $subscribe){}
	/**
	 * @return \Avalonia\Styling\SelectorMatchResult
	 */
	#[MethodOverride] private static function Match_2($control, $selector, $parent, $subscribe, $activators, $combinator){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_2($owner){}
}
/**
 */
class Selector extends \System\Object
{
	/**
	 * @return \System\Boolean
	 */
	protected  function get_InTemplate(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsCombinator(){}
	/**
	 * @return \System\Type
	 */
	protected  function get_TargetType(){}
	/**
	 * @uses SelectorMethodsOverride::Match_1 ($control, $parent, $subscribe)
	 * @uses SelectorMethodsOverride::Match_2 ($control, $selector, $parent, $subscribe, $activators, $combinator)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Match(mixed ...$args){}
	/**
	 * @uses SelectorMethodsOverride::ToString_1 ()
	 * @uses SelectorMethodsOverride::ToString_2 ($owner)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
	/**
	 * @param \Avalonia\StyledElement $control
	 * @param \Avalonia\Styling\IStyle $parent
	 * @param \System\Boolean $subscribe
	 * @return \Avalonia\Styling\SelectorMatch
	 */
	protected  function Evaluate($control, $parent, $subscribe){}
	/**
	 * @return \Avalonia\Styling\Selector
	 */
	protected  function MovePrevious(){}
	/**
	 * @return \Avalonia\Styling\Selector
	 */
	protected  function MovePreviousOrParent(){}
	/**
	 * @param \System\Boolean $inControlTheme
	 * @return \System\Void|void
	 */
	protected  function ValidateNestingSelector($inControlTheme){}
	/**
	 * @param \Avalonia\StyledElement $control
	 * @param \Avalonia\Styling\Selector $start
	 * @param \Avalonia\Styling\IStyle $parent
	 * @param \System\Boolean $subscribe
	 * @param \Avalonia\Styling\Selector& $combinator
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MatchUntilCombinator($control, $start, $parent, $subscribe, $combinator){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
