<?php
namespace Avalonia\Win32\Automation;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AutomationNodeMethodsOverride
{
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
class AutomationNode extends \System\MarshalByRefObject implements 
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
	\Avalonia\Win32\Interop\Automation\IValueProvider
{
	/**
	 * @return \Avalonia\Automation\Peers\AutomationPeer
	 */
	public  function get_Peer(){}
	/**
	 * @param \Avalonia\Automation\Peers\AutomationPeer $value
	 * @return \System\Void|void
	 */
	protected  function set_Peer($value){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_BoundingRectangle(){}
	/**
	 * @return \Avalonia\Win32\Interop\Automation\IRawElementProviderFragmentRoot
	 */
	public  function get_FragmentRoot(){}
	/**
	 * @return \Avalonia\Win32\Interop\Automation\IRawElementProviderSimple
	 */
	public  function get_HostRawElementProvider(){}
	/**
	 * @return \Avalonia\Win32\Interop\Automation\ProviderOptions
	 */
	public  function get_ProviderOptions(){}
	/**
	 * @param \System\Int32|int $patternId
	 * @return \System\Object|object
	 */
	public  function GetPatternProvider($patternId){}
	/**
	 * @param \System\Int32|int $propertyId
	 * @return \System\Object|object
	 */
	public  function GetPropertyValue($propertyId){}
	/**
	 * @return \System\Int32[]
	 */
	public  function GetRuntimeId(){}
	/**
	 * @param \Avalonia\Win32\Interop\Automation\NavigateDirection $direction
	 * @return \Avalonia\Win32\Interop\Automation\IRawElementProviderFragment
	 */
	public  function Navigate($direction){}
	/**
	 * @return \System\Void|void
	 */
	public  function SetFocus(){}
	/**
	 * @param \Avalonia\Automation\Peers\AutomationPeer $peer
	 * @return \Avalonia\Win32\Automation\AutomationNode
	 */
	public static function GetOrCreate($peer){}
	/**
	 * @param \Avalonia\Automation\Peers\AutomationPeer $peer
	 * @return \System\Void|void
	 */
	public static function Release($peer){}
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
	 * @uses AutomationNodeMethodsOverride::InvokeSync_1 ($action)
	 * @uses AutomationNodeMethodsOverride::InvokeSync_2 ($func)
	 * @uses AutomationNodeMethodsOverride::InvokeSync_3 ($action)
	 * @uses AutomationNodeMethodsOverride::InvokeSync_4 ($func)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function InvokeSync(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected  function RaiseChildrenChanged(){}
	/**
	 * @param \Avalonia\Win32\Automation\AutomationNode $focused
	 * @return \System\Void|void
	 */
	protected  function RaiseFocusChanged($focused){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetRoot(){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnPeerChildrenChanged($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Automation\AutomationPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnPeerPropertyChanged($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnEmbeddedRootFocusChanged($sender, $e){}
	/**
	 * @param \Avalonia\Automation\Peers\AutomationPeer $peer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Create($peer){}
	/**
	 * @param \Avalonia\Automation\Peers\AutomationControlType $role
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ToUiaControlType($role){}
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
	 * @uses AutomationNodeMethodsOverride::get_Value_1 ()
	 * @uses AutomationNodeMethodsOverride::get_Value_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Value(mixed ...$args){}
	/**
	 * @uses AutomationNodeMethodsOverride::get_IsReadOnly_1 ()
	 * @uses AutomationNodeMethodsOverride::get_IsReadOnly_2 ()
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
	 * @uses AutomationNodeMethodsOverride::SetValue_1 ($value)
	 * @uses AutomationNodeMethodsOverride::SetValue_2 ($value)
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
	 * @uses AutomationNodeMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses AutomationNodeMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
