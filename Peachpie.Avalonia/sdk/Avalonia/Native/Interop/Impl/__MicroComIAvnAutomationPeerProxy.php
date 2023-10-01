<?php
namespace Avalonia\Native\Interop\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIAvnAutomationPeerProxyMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function QueryInterface_1($guid, $ppv){}
	/**
	 * @return \MicroCom\Runtime\T
	 */
	#[MethodOverride] public  function QueryInterface_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_1($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
}
/**
 */
class __MicroComIAvnAutomationPeerProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Native\Interop\IAvnAutomationPeer
{
	/**
	 * @return \Avalonia\Native\Interop\IAvnAutomationNode
	 */
	public  function get_Node(){}
	/**
	 * @param \Avalonia\Native\Interop\IAvnAutomationNode $node
	 * @return \System\Void|void
	 */
	public  function SetNode($node){}
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
	 * @return \Avalonia\Native\Interop\IAvnAutomationPeer
	 */
	public  function get_RootPeer(){}
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
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIAvnAutomationPeerProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIAvnAutomationPeerProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIAvnAutomationPeerProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIAvnAutomationPeerProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
