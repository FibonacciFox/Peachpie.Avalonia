<?php
namespace Avalonia\Automation\Peers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TextBoxAutomationPeerMethodsOverride
{
	/**
	 * @return \Avalonia\Controls\TextBox
	 */
	#[MethodOverride] public  function get_Owner_1(){}
	/**
	 * @return \Avalonia\Controls\Control
	 */
	#[MethodOverride] public  function get_Owner_2(){}
}
/**
 */
class TextBoxAutomationPeer extends \Avalonia\Automation\Peers\ControlAutomationPeer implements 
	\Avalonia\Automation\Provider\IValueProvider
{
	/**
	 * @var \Avalonia\Controls\TextBox
	 * @property
	 */
	public readonly $Owner;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsReadOnly;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Value;
	/**
	 * @uses TextBoxAutomationPeerMethodsOverride::get_Owner_1 ()
	 * @uses TextBoxAutomationPeerMethodsOverride::get_Owner_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Owner(mixed ...$args){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReadOnly(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Value(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function SetValue($value){}
}
