<?php
namespace Avalonia\Automation\Peers;
class ListItemAutomationPeer extends \Avalonia\Automation\Peers\ContentControlAutomationPeer implements
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
	 * @var \Avalonia\Controls\ContentControl|\Avalonia\Controls\Control
	 */
	public $Owner;
	/**
	 * @return \System\Void|void
	 */
	public function Select(){}
	private function AddToSelection(){}
	private function RemoveFromSelection(){}
	/**
	 * @param \Avalonia\Controls\ContentControl $owner
	 */
	public function __construct($owner){}
}