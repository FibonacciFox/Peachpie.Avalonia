<?php
namespace Avalonia\Automation\Peers;
/**
 */
class AutomationPeer extends \System\Object
{
	/**
	 * @return \System\Void|void
	 */
	public  function BringIntoView(){}
	/**
	 * @return \System\String|string
	 */
	public  function GetAcceleratorKey(){}
	/**
	 * @return \System\String|string
	 */
	public  function GetAccessKey(){}
	/**
	 * @return \Avalonia\Automation\Peers\AutomationControlType
	 */
	public  function GetAutomationControlType(){}
	/**
	 * @return \System\String|string
	 */
	public  function GetAutomationId(){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function GetBoundingRectangle(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function GetChildren(){}
	/**
	 * @return \System\String|string
	 */
	public  function GetClassName(){}
	/**
	 * @return \Avalonia\Automation\Peers\AutomationPeer
	 */
	public  function GetLabeledBy(){}
	/**
	 * @return \System\String|string
	 */
	public  function GetLocalizedControlType(){}
	/**
	 * @return \System\String|string
	 */
	public  function GetName(){}
	/**
	 * @return \Avalonia\Automation\Peers\AutomationPeer
	 */
	public  function GetParent(){}
	/**
	 * @return \Avalonia\Automation\Peers\AutomationPeer
	 */
	public  function GetVisualRoot(){}
	/**
	 * @return \System\Boolean
	 */
	public  function HasKeyboardFocus(){}
	/**
	 * @return \System\Boolean
	 */
	public  function IsContentElement(){}
	/**
	 * @return \System\Boolean
	 */
	public  function IsControlElement(){}
	/**
	 * @return \System\Boolean
	 */
	public  function IsEnabled(){}
	/**
	 * @return \System\Boolean
	 */
	public  function IsKeyboardFocusable(){}
	/**
	 * @return \System\Void|void
	 */
	public  function SetFocus(){}
	/**
	 * @return \System\Boolean
	 */
	public  function ShowContextMenu(){}
	/**
	 * @return \Avalonia\Automation\Peers\T
	 */
	public  function GetProvider(){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_ChildrenChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_ChildrenChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_PropertyChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_PropertyChanged($value){}
	/**
	 * @return \System\Void|void
	 */
	protected  function RaiseChildrenChangedEvent(){}
	/**
	 * @param \Avalonia\Automation\AutomationProperty $property
	 * @param \System\Object|object $oldValue
	 * @param \System\Object|object $newValue
	 * @return \System\Void|void
	 */
	public  function RaisePropertyChangedEvent($property, $oldValue, $newValue){}
	/**
	 * @return \System\String|string
	 */
	protected  function GetLocalizedControlTypeCore(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function BringIntoViewCore(){}
	/**
	 * @return \System\String|string
	 */
	protected  function GetAcceleratorKeyCore(){}
	/**
	 * @return \System\String|string
	 */
	protected  function GetAccessKeyCore(){}
	/**
	 * @return \Avalonia\Automation\Peers\AutomationControlType
	 */
	protected  function GetAutomationControlTypeCore(){}
	/**
	 * @return \System\String|string
	 */
	protected  function GetAutomationIdCore(){}
	/**
	 * @return \Avalonia\Rect
	 */
	protected  function GetBoundingRectangleCore(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	protected  function GetOrCreateChildrenCore(){}
	/**
	 * @return \System\String|string
	 */
	protected  function GetClassNameCore(){}
	/**
	 * @return \Avalonia\Automation\Peers\AutomationPeer
	 */
	protected  function GetLabeledByCore(){}
	/**
	 * @return \System\String|string
	 */
	protected  function GetNameCore(){}
	/**
	 * @return \Avalonia\Automation\Peers\AutomationPeer
	 */
	protected  function GetParentCore(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function HasKeyboardFocusCore(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function IsContentElementCore(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function IsControlElementCore(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function IsEnabledCore(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function IsKeyboardFocusableCore(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function SetFocusCore(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function ShowContextMenuCore(){}
	/**
	 * @return \Avalonia\Automation\Peers\AutomationControlType
	 */
	protected  function GetControlTypeOverrideCore(){}
	/**
	 * @return \Avalonia\Automation\Peers\AutomationPeer
	 */
	protected  function GetVisualRootCore(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function IsContentElementOverrideCore(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function IsControlElementOverrideCore(){}
	/**
	 * @param \System\Type $providerType
	 * @return \System\Object|object
	 */
	protected  function GetProviderCore($providerType){}
	/**
	 * @param \Avalonia\Automation\Peers\AutomationPeer $parent
	 * @return \System\Boolean
	 */
	protected  function TrySetParent($parent){}
	/**
	 * @return \System\Void|void
	 */
	protected  function EnsureEnabled(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
