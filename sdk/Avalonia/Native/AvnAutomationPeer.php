<?php
namespace Avalonia\Native;
/**
 */
class AvnAutomationPeer extends \Avalonia\Native\NativeCallbackBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\MicroCom\Runtime\IMicroComShadowContainer,
	\MicroCom\Runtime\IMicroComExceptionCallback,
	\Avalonia\Native\Interop\IAvnAutomationPeer
{
	/**
	 * @var \Avalonia\Native\Interop\IAvnAutomationNode
	 * @property
	 */
	public $Node;
	/**
	 * @var \Avalonia\Native\Interop\IAvnString
	 * @property
	 */
	public readonly $AcceleratorKey;
	/**
	 * @var \Avalonia\Native\Interop\IAvnString
	 * @property
	 */
	public readonly $AccessKey;
	/**
	 * @var \Avalonia\Native\Interop\AvnAutomationControlType
	 * @property
	 */
	public readonly $AutomationControlType;
	/**
	 * @var \Avalonia\Native\Interop\IAvnString
	 * @property
	 */
	public readonly $AutomationId;
	/**
	 * @var \Avalonia\Native\Interop\AvnRect
	 * @property
	 */
	public readonly $BoundingRectangle;
	/**
	 * @var \Avalonia\Native\Interop\IAvnAutomationPeerArray
	 * @property
	 */
	public readonly $Children;
	/**
	 * @var \Avalonia\Native\Interop\IAvnString
	 * @property
	 */
	public readonly $ClassName;
	/**
	 * @var \Avalonia\Native\Interop\IAvnAutomationPeer
	 * @property
	 */
	public readonly $LabeledBy;
	/**
	 * @var \Avalonia\Native\Interop\IAvnString
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \Avalonia\Native\Interop\IAvnAutomationPeer
	 * @property
	 */
	public readonly $Parent;
	/**
	 * @var \Avalonia\Native\Interop\IAvnAutomationPeer
	 * @property
	 */
	public readonly $VisualRoot;
	/**
	 * @var \Avalonia\Native\Interop\IAvnAutomationPeer
	 * @property
	 */
	public readonly $RootPeer;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsDestroyed;
	/**
	 * @var \MicroCom\Runtime\MicroComShadow
	 * @property
	 */
	public $Shadow;
	/**
	 * @return \Avalonia\Native\Interop\IAvnAutomationNode
	 */
	public  function get_Node(){}
	/**
	 * @param \Avalonia\Native\Interop\IAvnAutomationNode $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Node($value){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnString
	 */
	public  function get_AcceleratorKey(){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnString
	 */
	public  function get_AccessKey(){}
	/**
	 * @return \Avalonia\Native\Interop\AvnAutomationControlType
	 */
	public  function get_AutomationControlType(){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnString
	 */
	public  function get_AutomationId(){}
	/**
	 * @return \Avalonia\Native\Interop\AvnRect
	 */
	public  function get_BoundingRectangle(){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnAutomationPeerArray
	 */
	public  function get_Children(){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnString
	 */
	public  function get_ClassName(){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnAutomationPeer
	 */
	public  function get_LabeledBy(){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnString
	 */
	public  function get_Name(){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnAutomationPeer
	 */
	public  function get_Parent(){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnAutomationPeer
	 */
	public  function get_VisualRoot(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function HasKeyboardFocus(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function IsContentElement(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function IsControlElement(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function IsEnabled(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function IsKeyboardFocusable(){}
	/**
	 * @return \System\Void|void
	 */
	public  function SetFocus(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function ShowContextMenu(){}
	/**
	 * @param \Avalonia\Native\Interop\IAvnAutomationNode $node
	 * @return \System\Void|void
	 */
	public  function SetNode($node){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnAutomationPeer
	 */
	public  function get_RootPeer(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_EmbeddedRootProvider(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_ExpandCollapseProvider(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_InvokeProvider(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_RangeValueProvider(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_RootProvider(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_SelectionItemProvider(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_ToggleProvider(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_ValueProvider(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function IsRootProvider(){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnWindowBase
	 */
	public  function RootProvider_GetWindow(){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnAutomationPeer
	 */
	public  function RootProvider_GetFocus(){}
	/**
	 * @param \Avalonia\Native\Interop\AvnPoint $point
	 * @return \Avalonia\Native\Interop\IAvnAutomationPeer
	 */
	public  function RootProvider_GetPeerFromPoint($point){}
	/**
	 * @return \System\Int32|int
	 */
	public  function IsEmbeddedRootProvider(){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnAutomationPeer
	 */
	public  function EmbeddedRootProvider_GetFocus(){}
	/**
	 * @param \Avalonia\Native\Interop\AvnPoint $point
	 * @return \Avalonia\Native\Interop\IAvnAutomationPeer
	 */
	public  function EmbeddedRootProvider_GetPeerFromPoint($point){}
	/**
	 * @return \System\Int32|int
	 */
	public  function IsExpandCollapseProvider(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function ExpandCollapseProvider_GetIsExpanded(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function ExpandCollapseProvider_GetShowsMenu(){}
	/**
	 * @return \System\Void|void
	 */
	public  function ExpandCollapseProvider_Expand(){}
	/**
	 * @return \System\Void|void
	 */
	public  function ExpandCollapseProvider_Collapse(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function IsInvokeProvider(){}
	/**
	 * @return \System\Void|void
	 */
	public  function InvokeProvider_Invoke(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function IsRangeValueProvider(){}
	/**
	 * @return \System\Double|double
	 */
	public  function RangeValueProvider_GetValue(){}
	/**
	 * @return \System\Double|double
	 */
	public  function RangeValueProvider_GetMinimum(){}
	/**
	 * @return \System\Double|double
	 */
	public  function RangeValueProvider_GetMaximum(){}
	/**
	 * @return \System\Double|double
	 */
	public  function RangeValueProvider_GetSmallChange(){}
	/**
	 * @return \System\Double|double
	 */
	public  function RangeValueProvider_GetLargeChange(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function RangeValueProvider_SetValue($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function IsSelectionItemProvider(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function SelectionItemProvider_IsSelected(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function IsToggleProvider(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function ToggleProvider_GetToggleState(){}
	/**
	 * @return \System\Void|void
	 */
	public  function ToggleProvider_Toggle(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function IsValueProvider(){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnString
	 */
	public  function ValueProvider_GetValue(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function ValueProvider_SetValue($value){}
	/**
	 * @param \Avalonia\Automation\Peers\AutomationPeer $peer
	 * @return \Avalonia\Native\AvnAutomationPeer
	 */
	public static function Wrap($peer){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetProvider(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsProvider(){}
}
