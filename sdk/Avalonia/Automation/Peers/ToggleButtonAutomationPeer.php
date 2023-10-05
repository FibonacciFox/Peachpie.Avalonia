<?php
namespace Avalonia\Automation\Peers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ToggleButtonAutomationPeerMethodsOverride
{
	/**
	 * @return \Avalonia\Controls\Primitives\ToggleButton
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
class ToggleButtonAutomationPeer extends \Avalonia\Automation\Peers\ContentControlAutomationPeer implements 
	\Avalonia\Automation\Provider\IToggleProvider
{
	/**
	 * @var \Avalonia\Controls\Primitives\ToggleButton
	 * @property
	 */
	public readonly $Owner;
	/**
	 * @uses ToggleButtonAutomationPeerMethodsOverride::get_Owner_1 ()
	 * @uses ToggleButtonAutomationPeerMethodsOverride::get_Owner_2 ()
	 * @uses ToggleButtonAutomationPeerMethodsOverride::get_Owner_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Owner(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_ToggleState(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Toggle(){}
}
