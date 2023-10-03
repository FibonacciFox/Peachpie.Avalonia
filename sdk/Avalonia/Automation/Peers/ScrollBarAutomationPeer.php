<?php
namespace Avalonia\Automation\Peers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ScrollBarAutomationPeerMethodsOverride
{
	/**
	 * @return \Avalonia\Controls\Primitives\RangeBase
	 */
	#[MethodOverride] public  function get_Owner_1(){}
	/**
	 * @return \Avalonia\Controls\Control
	 */
	#[MethodOverride] public  function get_Owner_2(){}
}
/**
 */
class ScrollBarAutomationPeer extends \Avalonia\Automation\Peers\RangeBaseAutomationPeer implements 
	\Avalonia\Automation\Provider\IRangeValueProvider
{
	/**
	 * @uses ScrollBarAutomationPeerMethodsOverride::get_Owner_1 ()
	 * @uses ScrollBarAutomationPeerMethodsOverride::get_Owner_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Owner(mixed ...$args){}
}
