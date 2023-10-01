<?php
namespace Avalonia\Automation\Peers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait WindowAutomationPeerMethodsOverride
{
	/**
	 * @return \Avalonia\Controls\Window
	 */
	#[MethodOverride] public  function get_Owner_1(){}
	/**
	 * @return \Avalonia\Controls\WindowBase
	 */
	#[MethodOverride] public  function get_Owner_2(){}
	/**
	 * @return \Avalonia\Controls\Control
	 */
	#[MethodOverride] public  function get_Owner_3(){}
}
/**
 */
class WindowAutomationPeer extends \Avalonia\Automation\Peers\WindowBaseAutomationPeer implements 
	\Avalonia\Automation\Provider\IRootProvider
{
	/**
	 * @uses WindowAutomationPeerMethodsOverride::get_Owner_1 ()
	 * @uses WindowAutomationPeerMethodsOverride::get_Owner_2 ()
	 * @uses WindowAutomationPeerMethodsOverride::get_Owner_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Owner(mixed ...$args){}
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
}
