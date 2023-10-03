<?php
namespace Avalonia\Automation\Peers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TextBlockAutomationPeerMethodsOverride
{
	/**
	 * @return \Avalonia\Controls\TextBlock
	 */
	#[MethodOverride] public  function get_Owner_1(){}
	/**
	 * @return \Avalonia\Controls\Control
	 */
	#[MethodOverride] public  function get_Owner_2(){}
}
/**
 */
class TextBlockAutomationPeer extends \Avalonia\Automation\Peers\ControlAutomationPeer
{
	/**
	 * @uses TextBlockAutomationPeerMethodsOverride::get_Owner_1 ()
	 * @uses TextBlockAutomationPeerMethodsOverride::get_Owner_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Owner(mixed ...$args){}
}
