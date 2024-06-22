<?php
namespace Avalonia\Automation\Peers;
class WindowBaseAutomationPeer extends \Avalonia\Automation\Peers\ControlAutomationPeer implements
	\Avalonia\Automation\Provider\IRootProvider
{

	/**
	 * @property duplicate
	 * @var \Avalonia\Controls\WindowBase|\Avalonia\Controls\Control
	 */
	public $Owner;
	/**
	 * @property
	 * @var \Avalonia\Platform\ITopLevelImpl
	 * @since readonly
	 */
	public $PlatformImpl;
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_FocusChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_FocusChanged($value){}
	/**
	 * @return \Avalonia\Automation\Peers\AutomationPeer
	 */
	public function GetFocus(){}
	/**
	 * @param \Avalonia\Point $p
	 * @return \Avalonia\Automation\Peers\AutomationPeer
	 */
	public function GetPeerFromPoint($p){}
	/**
	 * @return \System\Void|void
	 */
	protected function StartTrackingFocus(){}
	/**
	 * @return \System\Void|void
	 */
	protected function StopTrackingFocus(){}
	private function OnFocusChanged($focus){}
	private function KeyboardDevicePropertyChanged($sender, $e){}
	/**
	 * @param \Avalonia\Controls\WindowBase $owner
	 */
	public function __construct($owner){}
}