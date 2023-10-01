<?php
namespace Avalonia\Automation\Peers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PopupRootAutomationPeerMethodsOverride
{
	/**
	 * @return \Avalonia\Controls\WindowBase
	 */
	#[MethodOverride] public  function get_Owner_1(){}
	/**
	 * @return \Avalonia\Controls\Control
	 */
	#[MethodOverride] public  function get_Owner_2(){}
}
/**
 */
class PopupRootAutomationPeer extends \Avalonia\Automation\Peers\WindowBaseAutomationPeer implements 
	\Avalonia\Automation\Provider\IRootProvider
{
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnOpened($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnClosed($sender, $e){}
	/**
	 * @uses PopupRootAutomationPeerMethodsOverride::get_Owner_1 ()
	 * @uses PopupRootAutomationPeerMethodsOverride::get_Owner_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Owner(mixed ...$args){}
}
