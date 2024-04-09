<?php
namespace Avalonia\Controls\Automation\Peers;
class RadioButtonAutomationPeer extends \Avalonia\Automation\Peers\ToggleButtonAutomationPeer implements
	\Avalonia\Automation\Provider\IToggleProvider,
	\Avalonia\Automation\Provider\ISelectionItemProvider
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSelected;
	/**
	 * @property
	 * @var \Avalonia\Automation\Provider\ISelectionProvider
	 * @since readonly
	 */
	public $SelectionContainer;
	/**
	 * @property dublicate
	 * @var \Avalonia\Controls\Primitives\ToggleButton|\Avalonia\Controls\ContentControl|\Avalonia\Controls\Control
	 */
	public $Owner;
	/**
	 * @return \System\Void|void
	 */
	public function AddToSelection(){}
	/**
	 * @return \System\Void|void
	 */
	public function RemoveFromSelection(){}
	/**
	 * @return \System\Void|void
	 */
	public function Select(){}
	/**
	 * @param \System\Nullable_1 $oldValue [generic: System\Boolean]
	 * @param \System\Nullable_1 $newValue [generic: System\Boolean]
	 * @return \System\Void|void
	 */
	protected function RaiseToggleStatePropertyChangedEvent($oldValue, $newValue){}
	private function get_ToggleState(){}
	private function Toggle(){}
	/**
	 * @param \Avalonia\Controls\RadioButton $owner
	 */
	public function __construct($owner){}
}