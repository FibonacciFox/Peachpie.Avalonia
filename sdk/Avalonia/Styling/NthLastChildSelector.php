<?php
namespace Avalonia\Styling;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait NthLastChildSelectorMethodsOverride
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
class NthLastChildSelector extends \Avalonia\Styling\NthChildSelector
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Step;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Offset;
	/**
	 * @param \Avalonia\StyledElement $control
	 * @param \Avalonia\Styling\IStyle $parent
	 * @param \System\Boolean $subscribe
	 * @return \Avalonia\Styling\SelectorMatch
	 */
	protected  function Evaluate($control, $parent, $subscribe){}
	/**
	 * @uses NthLastChildSelectorMethodsOverride::ToString_1 ($owner)
	 * @uses NthLastChildSelectorMethodsOverride::ToString_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
}
