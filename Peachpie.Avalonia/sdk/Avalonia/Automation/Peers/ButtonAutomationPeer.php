<?php
namespace Avalonia\Automation\Peers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ButtonAutomationPeerMethodsOverride
{
	/**
	 * @return \Avalonia\Controls\Button
	 */
	#[MethodOverride] public  function get_Owner_1(){}
	/**
	 * @return \Avalonia\Controls\ContentControl
	 */
	#[MethodOverride] public  function get_Owner_2(){}
	/**
	 * @return \Avalonia\Controls\Control
	 */
	#[MethodOverride] public  function get_Owner_3(){}
}
/**
 */
class ButtonAutomationPeer extends \Avalonia\Automation\Peers\ContentControlAutomationPeer implements 
	\Avalonia\Automation\Provider\IInvokeProvider
{
	/**
	 * @uses ButtonAutomationPeerMethodsOverride::get_Owner_1 ()
	 * @uses ButtonAutomationPeerMethodsOverride::get_Owner_2 ()
	 * @uses ButtonAutomationPeerMethodsOverride::get_Owner_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Owner(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function Invoke(){}
}
