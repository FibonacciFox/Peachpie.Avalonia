<?php
namespace Avalonia\Automation\Peers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait WindowBaseAutomationPeerMethodsOverride
{
	/**
	 * @return \Avalonia\Controls\WindowBase
	 */
	#[MethodOverride] public  function get_Owner_1(){}
	/**
	 * @return \Avalonia\Controls\Control
	 */
	#[MethodOverride] public  function get_Owner_2(){}
}
/**
 */
class WindowBaseAutomationPeer extends \Avalonia\Automation\Peers\ControlAutomationPeer implements 
	\Avalonia\Automation\Provider\IRootProvider
{
	/**
	 * @var \Avalonia\Controls\WindowBase
	 * @property
	 */
	public readonly $Owner;
	/**
	 * @var \Avalonia\Platform\ITopLevelImpl
	 * @property
	 */
	public readonly $PlatformImpl;
	/**
	 * @uses WindowBaseAutomationPeerMethodsOverride::get_Owner_1 ()
	 * @uses WindowBaseAutomationPeerMethodsOverride::get_Owner_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Owner(mixed ...$args){}
	/**
	 * @return \Avalonia\Platform\ITopLevelImpl
	 */
	public  function get_PlatformImpl(){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_FocusChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_FocusChanged($value){}
	/**
	 * @return \Avalonia\Automation\Peers\AutomationPeer
	 */
	public  function GetFocus(){}
	/**
	 * @param \Avalonia\Point $p
	 * @return \Avalonia\Automation\Peers\AutomationPeer
	 */
	public  function GetPeerFromPoint($p){}
	/**
	 * @return \System\Void|void
	 */
	protected  function StartTrackingFocus(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function StopTrackingFocus(){}
	/**
	 * @param \Avalonia\Input\IInputElement $focus
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnFocusChanged($focus){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\ComponentModel\PropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function KeyboardDevicePropertyChanged($sender, $e){}
}
