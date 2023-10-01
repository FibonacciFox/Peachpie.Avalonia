<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
interface IScrollProvider
{
	/**
	 * @param \Avalonia\Automation\Provider\ScrollAmount $horizontalAmount
	 * @param \Avalonia\Automation\Provider\ScrollAmount $verticalAmount
	 */
	public function Scroll($horizontalAmount, $verticalAmount);
	/**
	 * @param \System\Double|double $horizontalPercent
	 * @param \System\Double|double $verticalPercent
	 */
	public function SetScrollPercent($horizontalPercent, $verticalPercent);
	/**
	 */
	public function get_HorizontalScrollPercent();
	/**
	 */
	public function get_VerticalScrollPercent();
	/**
	 */
	public function get_HorizontalViewSize();
	/**
	 */
	public function get_VerticalViewSize();
	/**
	 */
	public function get_HorizontallyScrollable();
	/**
	 */
	public function get_VerticallyScrollable();
}
