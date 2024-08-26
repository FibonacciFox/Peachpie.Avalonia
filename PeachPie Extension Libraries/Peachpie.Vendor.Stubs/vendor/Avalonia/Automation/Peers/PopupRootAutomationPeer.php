<?php
namespace Avalonia\Automation\Peers;
class PopupRootAutomationPeer extends \Avalonia\Automation\Peers\WindowBaseAutomationPeer implements
	\Avalonia\Automation\Provider\IRootProvider
{
	/**
	 * @property dublicate
	 * @var \Avalonia\Controls\WindowBase|\Avalonia\Controls\Control
	 */
	public $Owner;
	/**
	 * @property
	 * @var \Avalonia\Platform\ITopLevelImpl
	 * @since readonly
	 */
	public $PlatformImpl;
	private function OnOpened($sender, $e){}
	private function OnClosed($sender, $e){}
	/**
	 * @param \Avalonia\Controls\Primitives\PopupRoot $owner
	 */
	public function __construct($owner){}
}