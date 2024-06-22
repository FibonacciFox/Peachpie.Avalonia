<?php
namespace Avalonia\Automation\Peers;
class SelectingItemsControlAutomationPeer extends \Avalonia\Automation\Peers\ItemsControlAutomationPeer implements
	\Avalonia\Automation\Provider\IScrollProvider,
	\Avalonia\Automation\Provider\ISelectionProvider
{

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
	 * @property duplicate
	 * @var \Avalonia\Controls\ItemsControl|\Avalonia\Controls\Control
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
	 * @return \System\Collections\Generic\IReadOnlyList_1[Avalonia\Automation\Peers\AutomationPeer]
	 */
	public function GetSelection(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1[Avalonia\Automation\Peers\AutomationPeer]
	 */
	protected function GetSelectionCore(){}
	/**
	 * @return \Avalonia\Controls\SelectionMode
	 */
	protected function GetSelectionModeCore(){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OwnerPropertyChanged($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Controls\Selection\SelectionModelSelectionChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OwnerSelectionChanged($sender, $e){}
	private function RaiseSelectionChanged(){}
}