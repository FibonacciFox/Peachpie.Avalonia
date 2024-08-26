<?php
namespace Avalonia\Automation\Provider;
interface IScrollProvider
{

	/**
	 * @param \Avalonia\Automation\Provider\ScrollAmount $horizontalAmount
	 * @param \Avalonia\Automation\Provider\ScrollAmount $verticalAmount
	 * @return \System\Void|void
	 */
	public function Scroll($horizontalAmount, $verticalAmount);
	/**
	 * @param \System\Double|double $horizontalPercent
	 * @param \System\Double|double $verticalPercent
	 * @return \System\Void|void
	 */
	public function SetScrollPercent($horizontalPercent, $verticalPercent);
}