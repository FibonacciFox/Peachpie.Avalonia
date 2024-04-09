<?php
namespace Avalonia\Styling;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait NthChildSelectorOverride {
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \Avalonia\LogicalTree\IChildIndexProvider $childIndexProvider
	 * @param \System\Int32|int $step
	 * @param \System\Int32|int $offset
	 * @param \System\Boolean|bool $reversed
	 * @return \Avalonia\Styling\SelectorMatch
	 */
	#[MethodOverride]protected static function Evaluate_1 ($index, $childIndexProvider, $step, $offset, $reversed){}
}
class NthChildSelector extends \Avalonia\Styling\Selector
{
	use NthChildSelectorOverride;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Step;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Offset;
	/**
	 * @param \Avalonia\Styling\Selector $previous
	 * @param \System\Int32|int $step
	 * @param \System\Int32|int $offset
	 */
	public function __construct($previous, $step, $offset){}
}