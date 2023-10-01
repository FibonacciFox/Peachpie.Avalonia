<?php
namespace Avalonia\Automation\Peers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ListItemAutomationPeerMethodsOverride
{
	/**
	 * @return \Avalonia\Controls\ContentControl
	 */
	#[MethodOverride] public  function get_Owner_1(){}
	/**
	 * @return \Avalonia\Controls\Control
	 */
	#[MethodOverride] public  function get_Owner_2(){}
}
/**
 */
class ListItemAutomationPeer extends \Avalonia\Automation\Peers\ContentControlAutomationPeer implements 
	\Avalonia\Automation\Provider\ISelectionItemProvider
{
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSelected(){}
	/**
	 * @return \Avalonia\Automation\Provider\ISelectionProvider
	 */
	public  function get_SelectionContainer(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Select(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddToSelection(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RemoveFromSelection(){}
	/**
	 * @uses ListItemAutomationPeerMethodsOverride::get_Owner_1 ()
	 * @uses ListItemAutomationPeerMethodsOverride::get_Owner_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Owner(mixed ...$args){}
}
