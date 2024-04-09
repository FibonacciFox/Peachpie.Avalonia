<?php
namespace Avalonia\Styling;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SelectorOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\StyledElement $control
	 * @param \Avalonia\Styling\IStyle $parent
	 * @param \System\Boolean|bool $subscribe
	 * @return \Avalonia\Styling\SelectorMatch
	 */
	#[MethodOverride]protected function Match_1 ($control, $parent, $subscribe){}
	/**
	 * @deprecated
	 * @param \Avalonia\StyledElement $control
	 * @param \Avalonia\Styling\Selector $selector
	 * @param \Avalonia\Styling\IStyle $parent
	 * @param \System\Boolean|bool $subscribe
	 * @param \Avalonia\Styling\Activators\AndActivatorBuilder& $activators
	 * @param \Avalonia\Styling\Selector& $combinator
	 * @return \Avalonia\Styling\SelectorMatchResult
	 */
	#[MethodOverride]private static function Match_2 ($control, $selector, $parent, $subscribe, $activators, $combinator){}
}
class Selector extends \System\Object
{
	use SelectorOverride;

	/**
	 * @uses SelectorOverride::Match_1 <br>protected , args: ($control, $parent, $subscribe)<br>
	 * @uses SelectorOverride::Match_2 <br>private , args: ($control, $selector, $parent, $subscribe, $activators, $combinator)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Styling\SelectorMatch|\Avalonia\Styling\SelectorMatchResult|mixed|\override
	 */
	#[MethodOverrideProtected]function Match (\override ...$args){}
	/**
	 * @param \Avalonia\StyledElement $control
	 * @param \Avalonia\Styling\IStyle $parent
	 * @param \System\Boolean|bool $subscribe
	 * @return \Avalonia\Styling\SelectorMatch
	 */
	abstract protected function Evaluate($control, $parent, $subscribe);
	/**
	 * @return \Avalonia\Styling\Selector
	 */
	abstract protected function MovePrevious();
	/**
	 * @return \Avalonia\Styling\Selector
	 */
	abstract protected function MovePreviousOrParent();
	/**
	 * @param \System\Boolean|bool $inControlTheme
	 * @return \System\Void|void
	 */
	protected function ValidateNestingSelector($inControlTheme){}
	private static function MatchUntilCombinator($control, $start, $parent, $subscribe, &$combinator){}
}