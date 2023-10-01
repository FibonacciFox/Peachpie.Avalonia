<?php
namespace Avalonia\Controls\Automation\Peers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RadioButtonAutomationPeerMethodsOverride
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
class RadioButtonAutomationPeer extends \Avalonia\Automation\Peers\ToggleButtonAutomationPeer implements 
	\Avalonia\Automation\Provider\IToggleProvider,
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
	public  function AddToSelection(){}
	/**
	 * @return \System\Void|void
	 */
	public  function RemoveFromSelection(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Select(){}
	/**
	 * @param \System\Nullable_1 $oldValue
	 * @param \System\Nullable_1 $newValue
	 * @return \System\Void|void
	 */
	protected  function RaiseToggleStatePropertyChangedEvent($oldValue, $newValue){}
	/**
	 * @uses RadioButtonAutomationPeerMethodsOverride::get_Owner_1 ()
	 * @uses RadioButtonAutomationPeerMethodsOverride::get_Owner_2 ()
	 * @uses RadioButtonAutomationPeerMethodsOverride::get_Owner_3 ()
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
