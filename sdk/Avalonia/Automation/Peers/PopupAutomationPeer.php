<?php
namespace Avalonia\Automation\Peers;
/**
 */
class PopupAutomationPeer extends \Avalonia\Automation\Peers\ControlAutomationPeer
{
	/**
	 * @var \Avalonia\Controls\Control
	 * @property
	 */
	public readonly $Owner;
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PopupOpenedClosed($sender, $e){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPopupRoot(){}
}
