<?php
namespace Avalonia\Automation\Peers;
class ControlAutomationPeer extends \Avalonia\Automation\Peers\AutomationPeer
{
	/**
	 * @property
	 * @var \Avalonia\Controls\Control
	 * @since readonly
	 */
	public $Owner;
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @return \Avalonia\Automation\Peers\AutomationPeer
	 */
	public function GetOrCreate($element){}
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @return \Avalonia\Automation\Peers\AutomationPeer
	 */
	public static function CreatePeerForElement($element){}
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @return \Avalonia\Automation\Peers\AutomationPeer
	 */
	public static function FromElement($element){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1[Avalonia\Automation\Peers\AutomationPeer]
	 */
	protected function GetChildrenCore(){}
	/**
	 * @return \System\Void|void
	 */
	protected function InvalidateChildren(){}
	/**
	 * @return \System\Void|void
	 */
	protected function InvalidateParent(){}
	private static function GetBounds($control){}
	private function Initialize(){}
	private function VisualChildrenChanged($sender, $e){}
	private function OwnerPropertyChanged($sender, $e){}
	private function EnsureConnected(){}
	/**
	 * @param \Avalonia\Controls\Control $owner
	 */
	public function __construct($owner){}
}