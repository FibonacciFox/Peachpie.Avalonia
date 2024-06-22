<?php
namespace Avalonia\Automation\Peers;
class AutomationPeer extends \System\Object
{


	/**
	 * @return \System\Void|void
	 */
	public function BringIntoView(){}
	/**
	 * @return \System\String|string
	 */
	public function GetAcceleratorKey(){}
	/**
	 * @return \System\String|string
	 */
	public function GetAccessKey(){}
	/**
	 * @return \Avalonia\Automation\Peers\AutomationControlType
	 */
	public function GetAutomationControlType(){}
	/**
	 * @return \System\String|string
	 */
	public function GetAutomationId(){}
	/**
	 * @return \Avalonia\Rect
	 */
	public function GetBoundingRectangle(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1[Avalonia\Automation\Peers\AutomationPeer]
	 */
	public function GetChildren(){}
	/**
	 * @return \System\String|string
	 */
	public function GetClassName(){}
	/**
	 * @return \Avalonia\Automation\Peers\AutomationPeer
	 */
	public function GetLabeledBy(){}
	/**
	 * @return \System\String|string
	 */
	public function GetLocalizedControlType(){}
	/**
	 * @return \System\String|string
	 */
	public function GetName(){}
	/**
	 * @return \Avalonia\Automation\Peers\AutomationPeer
	 */
	public function GetParent(){}
	/**
	 * @return \Avalonia\Automation\Peers\AutomationPeer
	 */
	public function GetVisualRoot(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function HasKeyboardFocus(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function IsContentElement(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function IsControlElement(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function IsEnabled(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function IsKeyboardFocusable(){}
	/**
	 * @return \System\Void|void
	 */
	public function SetFocus(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function ShowContextMenu(){}
	/**
	 * @return \T|object
	 */
	public function GetProvider(){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_ChildrenChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_ChildrenChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Automation\AutomationPropertyChangedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_PropertyChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Automation\AutomationPropertyChangedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_PropertyChanged($value){}
	/**
	 * @return \System\Void|void
	 */
	protected function RaiseChildrenChangedEvent(){}
	/**
	 * @param \Avalonia\Automation\AutomationProperty $property
	 * @param \System\Object|object $oldValue
	 * @param \System\Object|object $newValue
	 * @return \System\Void|void
	 */
	public function RaisePropertyChangedEvent($property, $oldValue, $newValue){}
	/**
	 * @return \System\String|string
	 */
	protected function GetLocalizedControlTypeCore(){}
	/**
	 * @return \System\Void|void
	 */
	abstract protected function BringIntoViewCore();
	/**
	 * @return \System\String|string
	 */
	abstract protected function GetAcceleratorKeyCore();
	/**
	 * @return \System\String|string
	 */
	abstract protected function GetAccessKeyCore();
	/**
	 * @return \Avalonia\Automation\Peers\AutomationControlType
	 */
	abstract protected function GetAutomationControlTypeCore();
	/**
	 * @return \System\String|string
	 */
	abstract protected function GetAutomationIdCore();
	/**
	 * @return \Avalonia\Rect
	 */
	abstract protected function GetBoundingRectangleCore();
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1[Avalonia\Automation\Peers\AutomationPeer]
	 */
	abstract protected function GetOrCreateChildrenCore();
	/**
	 * @return \System\String|string
	 */
	abstract protected function GetClassNameCore();
	/**
	 * @return \Avalonia\Automation\Peers\AutomationPeer
	 */
	abstract protected function GetLabeledByCore();
	/**
	 * @return \System\String|string
	 */
	abstract protected function GetNameCore();
	/**
	 * @return \Avalonia\Automation\Peers\AutomationPeer
	 */
	abstract protected function GetParentCore();
	/**
	 * @return \System\Boolean|bool
	 */
	abstract protected function HasKeyboardFocusCore();
	/**
	 * @return \System\Boolean|bool
	 */
	abstract protected function IsContentElementCore();
	/**
	 * @return \System\Boolean|bool
	 */
	abstract protected function IsControlElementCore();
	/**
	 * @return \System\Boolean|bool
	 */
	abstract protected function IsEnabledCore();
	/**
	 * @return \System\Boolean|bool
	 */
	abstract protected function IsKeyboardFocusableCore();
	/**
	 * @return \System\Void|void
	 */
	abstract protected function SetFocusCore();
	/**
	 * @return \System\Boolean|bool
	 */
	abstract protected function ShowContextMenuCore();
	/**
	 * @return \Avalonia\Automation\Peers\AutomationControlType
	 */
	protected function GetControlTypeOverrideCore(){}
	/**
	 * @return \Avalonia\Automation\Peers\AutomationPeer
	 */
	protected function GetVisualRootCore(){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected function IsContentElementOverrideCore(){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected function IsControlElementOverrideCore(){}
	/**
	 * @param \System\Type $providerType
	 * @return \System\Object|object
	 */
	protected function GetProviderCore($providerType){}
	/**
	 * @param \Avalonia\Automation\Peers\AutomationPeer $parent
	 * @return \System\Boolean|bool
	 */
	abstract protected function TrySetParent($parent);
	/**
	 * @return \System\Void|void
	 */
	protected function EnsureEnabled(){}
}