<?php
namespace Avalonia\Automation\Peers;
/**
 */
class ControlAutomationPeer extends \Avalonia\Automation\Peers\AutomationPeer
{
	/**
	 * @var \Avalonia\Controls\Control
	 * @property
	 */
	public readonly $Owner;
	/**
	 * @return \Avalonia\Controls\Control
	 */
	public  function get_Owner(){}
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @return \Avalonia\Automation\Peers\AutomationPeer
	 */
	public  function GetOrCreate($element){}
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @return \Avalonia\Automation\Peers\AutomationPeer
	 */
	public static function CreatePeerForElement($element){}
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @return \Avalonia\Automation\Peers\AutomationPeer
	 */
	public static function FromElement($element){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	protected  function GetChildrenCore(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function InvalidateChildren(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function InvalidateParent(){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetBounds($control){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Initialize(){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function VisualChildrenChanged($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OwnerPropertyChanged($sender, $e){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureConnected(){}
}
