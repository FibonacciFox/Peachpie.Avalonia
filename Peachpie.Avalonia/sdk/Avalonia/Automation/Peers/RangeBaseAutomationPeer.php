<?php
namespace Avalonia\Automation\Peers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RangeBaseAutomationPeerMethodsOverride
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
class RangeBaseAutomationPeer extends \Avalonia\Automation\Peers\ControlAutomationPeer implements 
	\Avalonia\Automation\Provider\IRangeValueProvider
{
	/**
	 * @uses RangeBaseAutomationPeerMethodsOverride::get_Owner_1 ()
	 * @uses RangeBaseAutomationPeerMethodsOverride::get_Owner_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Owner(mixed ...$args){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReadOnly(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Maximum(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Minimum(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Value(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_SmallChange(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_LargeChange(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function SetValue($value){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function OwnerPropertyChanged($sender, $e){}
}
