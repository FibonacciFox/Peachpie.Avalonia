<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnAutomationPeer
{
	/**
	 */
	public function get_Node();
	/**
	 * @param \Avalonia\Native\Interop\IAvnAutomationNode $node
	 */
	public function SetNode($node);
	/**
	 */
	public function get_AcceleratorKey();
	/**
	 */
	public function get_AccessKey();
	/**
	 */
	public function get_AutomationControlType();
	/**
	 */
	public function get_AutomationId();
	/**
	 */
	public function get_BoundingRectangle();
	/**
	 */
	public function get_Children();
	/**
	 */
	public function get_ClassName();
	/**
	 */
	public function get_LabeledBy();
	/**
	 */
	public function get_Name();
	/**
	 */
	public function get_Parent();
	/**
	 */
	public function get_VisualRoot();
	/**
	 */
	public function HasKeyboardFocus();
	/**
	 */
	public function IsContentElement();
	/**
	 */
	public function IsControlElement();
	/**
	 */
	public function IsEnabled();
	/**
	 */
	public function IsKeyboardFocusable();
	/**
	 */
	public function SetFocus();
	/**
	 */
	public function ShowContextMenu();
	/**
	 */
	public function get_RootPeer();
	/**
	 */
	public function IsRootProvider();
	/**
	 */
	public function RootProvider_GetWindow();
	/**
	 */
	public function RootProvider_GetFocus();
	/**
	 * @param \Avalonia\Native\Interop\AvnPoint $point
	 */
	public function RootProvider_GetPeerFromPoint($point);
	/**
	 */
	public function IsEmbeddedRootProvider();
	/**
	 */
	public function EmbeddedRootProvider_GetFocus();
	/**
	 * @param \Avalonia\Native\Interop\AvnPoint $point
	 */
	public function EmbeddedRootProvider_GetPeerFromPoint($point);
	/**
	 */
	public function IsExpandCollapseProvider();
	/**
	 */
	public function ExpandCollapseProvider_GetIsExpanded();
	/**
	 */
	public function ExpandCollapseProvider_GetShowsMenu();
	/**
	 */
	public function ExpandCollapseProvider_Expand();
	/**
	 */
	public function ExpandCollapseProvider_Collapse();
	/**
	 */
	public function IsInvokeProvider();
	/**
	 */
	public function InvokeProvider_Invoke();
	/**
	 */
	public function IsRangeValueProvider();
	/**
	 */
	public function RangeValueProvider_GetValue();
	/**
	 */
	public function RangeValueProvider_GetMinimum();
	/**
	 */
	public function RangeValueProvider_GetMaximum();
	/**
	 */
	public function RangeValueProvider_GetSmallChange();
	/**
	 */
	public function RangeValueProvider_GetLargeChange();
	/**
	 * @param \System\Double|double $value
	 */
	public function RangeValueProvider_SetValue($value);
	/**
	 */
	public function IsSelectionItemProvider();
	/**
	 */
	public function SelectionItemProvider_IsSelected();
	/**
	 */
	public function IsToggleProvider();
	/**
	 */
	public function ToggleProvider_GetToggleState();
	/**
	 */
	public function ToggleProvider_Toggle();
	/**
	 */
	public function IsValueProvider();
	/**
	 */
	public function ValueProvider_GetValue();
	/**
	 * @param \System\String|string $value
	 */
	public function ValueProvider_SetValue($value);
}
