<?php
namespace Avalonia\Automation\Peers;
class WindowAutomationPeer extends \Avalonia\Automation\Peers\WindowBaseAutomationPeer implements
	\Avalonia\Automation\Provider\IRootProvider
{

	/**
	 * @property duplicate
	 * @var \Avalonia\Controls\Window|\Avalonia\Controls\WindowBase|\Avalonia\Controls\Control
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
	 * @param \Avalonia\Controls\Window $owner
	 */
	public function __construct($owner){}
}