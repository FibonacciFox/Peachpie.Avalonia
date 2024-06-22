<?php
namespace Avalonia\Automation\Peers;
class PopupAutomationPeer extends \Avalonia\Automation\Peers\ControlAutomationPeer
{

	/**
	 * @property
	 * @var \Avalonia\Controls\Control
	 * @since readonly
	 */
	public $Owner;
	private function PopupOpenedClosed($sender, $e){}
	private function GetPopupRoot(){}
	/**
	 * @param \Avalonia\Controls\Primitives\Popup $owner
	 */
	public function __construct($owner){}
}