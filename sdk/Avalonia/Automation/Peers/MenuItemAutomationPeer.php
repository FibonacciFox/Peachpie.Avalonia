<?php
namespace Avalonia\Automation\Peers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MenuItemAutomationPeerMethodsOverride
{
	/**
	 * @return \Avalonia\Controls\MenuItem
	 */
	#[MethodOverride] public  function get_Owner_1(){}
	/**
	 * @return \Avalonia\Controls\Control
	 */
	#[MethodOverride] public  function get_Owner_2(){}
}
/**
 */
class MenuItemAutomationPeer extends \Avalonia\Automation\Peers\ControlAutomationPeer
{
	/**
	 * @var \Avalonia\Controls\MenuItem
	 * @property
	 */
	public readonly $Owner;
	/**
	 * @uses MenuItemAutomationPeerMethodsOverride::get_Owner_1 ()
	 * @uses MenuItemAutomationPeerMethodsOverride::get_Owner_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Owner(mixed ...$args){}
}
