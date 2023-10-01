<?php
namespace Avalonia\Controls\Primitives;
/**
 */
interface ILogicalScrollable
{
	/**
	 */
	public function get_CanHorizontallyScroll();
	/**
	 * @param \System\Boolean $value
	 */
	public function set_CanHorizontallyScroll($value);
	/**
	 */
	public function get_CanVerticallyScroll();
	/**
	 * @param \System\Boolean $value
	 */
	public function set_CanVerticallyScroll($value);
	/**
	 */
	public function get_IsLogicalScrollEnabled();
	/**
	 */
	public function get_ScrollSize();
	/**
	 */
	public function get_PageScrollSize();
	/**
	 * @param \System\EventHandler $value
	 */
	public function add_ScrollInvalidated($value);
	/**
	 * @param \System\EventHandler $value
	 */
	public function remove_ScrollInvalidated($value);
	/**
	 * @param \Avalonia\Controls\Control $target
	 * @param \Avalonia\Rect $targetRect
	 */
	public function BringIntoView($target, $targetRect);
	/**
	 * @param \Avalonia\Input\NavigationDirection $direction
	 * @param \Avalonia\Controls\Control $from
	 */
	public function GetControlInDirection($direction, $from);
	/**
	 * @param \System\EventArgs $e
	 */
	public function RaiseScrollInvalidated($e);
}
