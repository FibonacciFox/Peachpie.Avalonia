<?php
namespace Avalonia\Automation\Peers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ComboBoxAutomationPeerMethodsOverride
{
	/**
	 * @return \Avalonia\Controls\ComboBox
	 */
	#[MethodOverride] public  function get_Owner_1(){}
	/**
	 * @return \Avalonia\Controls\ItemsControl
	 */
	#[MethodOverride] public  function get_Owner_2(){}
	/**
	 * @return \Avalonia\Controls\Control
	 */
	#[MethodOverride] public  function get_Owner_3(){}
}
/**
 */
class ComboBoxAutomationPeer extends \Avalonia\Automation\Peers\SelectingItemsControlAutomationPeer implements 
	\Avalonia\Automation\Provider\IScrollProvider,
	\Avalonia\Automation\Provider\ISelectionProvider,
	\Avalonia\Automation\Provider\IExpandCollapseProvider,
	\Avalonia\Automation\Provider\IValueProvider
{
	/**
	 * @var \Avalonia\Controls\ComboBox
	 * @property
	 */
	public readonly $Owner;
	/**
	 * @var \Avalonia\Automation\ExpandCollapseState
	 * @property
	 */
	public readonly $ExpandCollapseState;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $ShowsMenu;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanSelectMultiple;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSelectionRequired;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HorizontallyScrollable;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $HorizontalScrollPercent;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $HorizontalViewSize;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $VerticallyScrollable;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $VerticalScrollPercent;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $VerticalViewSize;
	/**
	 * @uses ComboBoxAutomationPeerMethodsOverride::get_Owner_1 ()
	 * @uses ComboBoxAutomationPeerMethodsOverride::get_Owner_2 ()
	 * @uses ComboBoxAutomationPeerMethodsOverride::get_Owner_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Owner(mixed ...$args){}
	/**
	 * @return \Avalonia\Automation\ExpandCollapseState
	 */
	public  function get_ExpandCollapseState(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ShowsMenu(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Collapse(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Expand(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsReadOnly(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Value(){}
	/**
	 * @param \System\String|string $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetValue($value){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ToState($value){}
}
