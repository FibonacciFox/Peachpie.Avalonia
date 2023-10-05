<?php
namespace Avalonia\Win32\Automation;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RootAutomationNodeMethodsOverride
{
	/**
	 * @return \Avalonia\Automation\Provider\IRootProvider
	 */
	#[MethodOverride] public  function get_Peer_1(){}
	/**
	 * @return \Avalonia\Automation\Peers\AutomationPeer
	 */
	#[MethodOverride] public  function get_Peer_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function InvokeSync_1($action){}
	/**
	 * @return \Avalonia\Win32\Automation\T
	 */
	#[MethodOverride] protected  function InvokeSync_2($func){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function InvokeSync_3($action){}
	/**
	 * @return \Avalonia\Win32\Automation\TResult
	 */
	#[MethodOverride] protected  function InvokeSync_4($func){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] private  function get_Value_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private  function get_Value_2(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsReadOnly_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsReadOnly_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function SetValue_2($value){}
	/**
	 * @return \System\MarshalByRefObject
	 */
	#[MethodOverride] protected  function MemberwiseClone_1($cloneIdentity){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected  function MemberwiseClone_2(){}
}
/**
 */
class RootAutomationNode extends \Avalonia\Win32\Automation\AutomationNode implements 
	\Avalonia\Win32\Interop\Automation\IRawElementProviderSimple,
	\Avalonia\Win32\Interop\Automation\IRawElementProviderSimple2,
	\Avalonia\Win32\Interop\Automation\IRawElementProviderFragment,
	\Avalonia\Win32\Interop\Automation\IInvokeProvider,
	\Avalonia\Win32\Interop\Automation\IExpandCollapseProvider,
	\Avalonia\Win32\Interop\Automation\IRangeValueProvider,
	\Avalonia\Win32\Interop\Automation\IScrollProvider,
	\Avalonia\Win32\Interop\Automation\IScrollItemProvider,
	\Avalonia\Win32\Interop\Automation\ISelectionProvider,
	\Avalonia\Win32\Interop\Automation\ISelectionItemProvider,
	\Avalonia\Win32\Interop\Automation\IToggleProvider,
	\Avalonia\Win32\Interop\Automation\IValueProvider,
	\Avalonia\Win32\Interop\Automation\IRawElementProviderFragmentRoot
{
	/**
	 * @var \Avalonia\Win32\Interop\Automation\IRawElementProviderFragmentRoot
	 * @property
	 */
	public readonly $FragmentRoot;
	/**
	 * @var \Avalonia\Automation\Provider\IRootProvider
	 * @property
	 */
	public readonly $Peer;
	/**
	 * @var \Avalonia\Platform\IWindowBaseImpl
	 * @property
	 */
	public readonly $WindowImpl;
	/**
	 * @var \Avalonia\Win32\Interop\Automation\IRawElementProviderSimple
	 * @property
	 */
	public readonly $HostRawElementProvider;
	/**
	 * @var \Avalonia\Rect
	 * @property
	 */
	public readonly $BoundingRectangle;
	/**
	 * @var \Avalonia\Win32\Interop\Automation\ProviderOptions
	 * @property
	 */
	public readonly $ProviderOptions;
	/**
	 * @uses RootAutomationNodeMethodsOverride::get_Peer_1 ()
	 * @uses RootAutomationNodeMethodsOverride::get_Peer_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Peer(mixed ...$args){}
	/**
	 * @return \Avalonia\Platform\IWindowBaseImpl
	 */
	public  function get_WindowImpl(){}
	/**
	 * @param \System\Double|double $x
	 * @param \System\Double|double $y
	 * @return \Avalonia\Win32\Interop\Automation\IRawElementProviderFragment
	 */
	public  function ElementProviderFromPoint($x, $y){}
	/**
	 * @return \Avalonia\Win32\Interop\Automation\IRawElementProviderFragment
	 */
	public  function GetFocus(){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @return \Avalonia\Rect
	 */
	public  function ToScreen($rect){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnRootFocusChanged($sender, $e){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetEmbeddedFragmentRoots(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ShowContextMenu(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Invoke(){}
	/**
	 * @uses RootAutomationNodeMethodsOverride::InvokeSync_1 ($action)
	 * @uses RootAutomationNodeMethodsOverride::InvokeSync_2 ($func)
	 * @uses RootAutomationNodeMethodsOverride::InvokeSync_3 ($action)
	 * @uses RootAutomationNodeMethodsOverride::InvokeSync_4 ($func)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function InvokeSync(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_ExpandCollapseState(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Expand(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Collapse(){}
	/**
	 * @uses RootAutomationNodeMethodsOverride::get_Value_1 ()
	 * @uses RootAutomationNodeMethodsOverride::get_Value_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Value(mixed ...$args){}
	/**
	 * @uses RootAutomationNodeMethodsOverride::get_IsReadOnly_1 ()
	 * @uses RootAutomationNodeMethodsOverride::get_IsReadOnly_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_IsReadOnly(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Maximum(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Minimum(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_LargeChange(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_SmallChange(){}
	/**
	 * @uses RootAutomationNodeMethodsOverride::SetValue_1 ($value)
	 * @uses RootAutomationNodeMethodsOverride::SetValue_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_HorizontallyScrollable(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_HorizontalScrollPercent(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_HorizontalViewSize(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_VerticallyScrollable(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_VerticalScrollPercent(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_VerticalViewSize(){}
	/**
	 * @param \Avalonia\Automation\Provider\ScrollAmount $horizontalAmount
	 * @param \Avalonia\Automation\Provider\ScrollAmount $verticalAmount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Scroll($horizontalAmount, $verticalAmount){}
	/**
	 * @param \System\Double|double $horizontalPercent
	 * @param \System\Double|double $verticalPercent
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetScrollPercent($horizontalPercent, $verticalPercent){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ScrollIntoView(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_CanSelectMultiple(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsSelectionRequired(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsSelected(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_SelectionContainer(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetSelection(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddToSelection(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RemoveFromSelection(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Select(){}
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
	/**
	 * @uses RootAutomationNodeMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses RootAutomationNodeMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
