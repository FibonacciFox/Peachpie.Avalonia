<?php
namespace Avalonia\Controls\Primitives;
/**
 * @method \System\Void|void add_ScrollInvalidated($value) [modifier: public]
 * @method \System\Void|void remove_ScrollInvalidated($value) [modifier: public]
*/
interface ILogicalScrollable
{

	/**
	 * @param \Avalonia\Controls\Control $target
	 * @param \Avalonia\Rect $targetRect
	 * @return \System\Boolean|bool
	 */
	public function BringIntoView($target, $targetRect);
	/**
	 * @param \Avalonia\Input\NavigationDirection $direction
	 * @param \Avalonia\Controls\Control $from
	 * @return \Avalonia\Controls\Control
	 */
	public function GetControlInDirection($direction, $from);
	/**
	 * @param \System\EventArgs $e
	 * @return \System\Void|void
	 */
	public function RaiseScrollInvalidated($e);
}