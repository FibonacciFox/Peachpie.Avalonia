<?php
namespace Avalonia\Automation\Peers;
class ScrollViewerAutomationPeer extends \Avalonia\Automation\Peers\ControlAutomationPeer implements
	\Avalonia\Automation\Provider\IScrollProvider
{
	/**
	 * @property dublicate
	 * @var \Avalonia\Controls\ScrollViewer|\Avalonia\Controls\Control
	 */
	public $Owner;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HorizontallyScrollable;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $HorizontalScrollPercent;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $HorizontalViewSize;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $VerticallyScrollable;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $VerticalScrollPercent;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $VerticalViewSize;
	/**
	 * @param \Avalonia\Automation\Provider\ScrollAmount $horizontalAmount
	 * @param \Avalonia\Automation\Provider\ScrollAmount $verticalAmount
	 * @return \System\Void|void
	 */
	public function Scroll($horizontalAmount, $verticalAmount){}
	/**
	 * @param \System\Double|double $horizontalPercent
	 * @param \System\Double|double $verticalPercent
	 * @return \System\Void|void
	 */
	public function SetScrollPercent($horizontalPercent, $verticalPercent){}
	/**
	 * @param \Avalonia\Controls\ScrollViewer $owner
	 */
	public function __construct($owner){}
}