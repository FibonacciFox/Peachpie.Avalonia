<?php
namespace Avalonia\Automation\Peers;
class ComboBoxAutomationPeer extends \Avalonia\Automation\Peers\SelectingItemsControlAutomationPeer implements
	\Avalonia\Automation\Provider\IScrollProvider,
	\Avalonia\Automation\Provider\ISelectionProvider,
	\Avalonia\Automation\Provider\IExpandCollapseProvider,
	\Avalonia\Automation\Provider\IValueProvider
{

	/**
	 * @property duplicate
	 * @var \Avalonia\Controls\ComboBox|\Avalonia\Controls\ItemsControl|\Avalonia\Controls\Control
	 */
	public $Owner;
	/**
	 * @property
	 * @var \Avalonia\Automation\ExpandCollapseState
	 * @since readonly
	 */
	public $ExpandCollapseState;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $ShowsMenu;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CanSelectMultiple;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSelectionRequired;
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
	 * @return \System\Void|void
	 */
	public function Collapse(){}
	/**
	 * @return \System\Void|void
	 */
	public function Expand(){}
	private function get_IsReadOnly(){}
	private function get_Value(){}
	private function SetValue($value){}
	private static function ToState($value){}
	/**
	 * @param \Avalonia\Controls\ComboBox $owner
	 */
	public function __construct($owner){}
}