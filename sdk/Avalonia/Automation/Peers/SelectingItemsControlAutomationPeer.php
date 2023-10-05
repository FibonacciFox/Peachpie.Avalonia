<?php
namespace Avalonia\Automation\Peers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SelectingItemsControlAutomationPeerMethodsOverride
{
	/**
	 * @return \Avalonia\Controls\ItemsControl
	 */
	#[MethodOverride] public  function get_Owner_1(){}
	/**
	 * @return \Avalonia\Controls\Control
	 */
	#[MethodOverride] public  function get_Owner_2(){}
}
/**
 */
class SelectingItemsControlAutomationPeer extends \Avalonia\Automation\Peers\ItemsControlAutomationPeer implements 
	\Avalonia\Automation\Provider\IScrollProvider,
	\Avalonia\Automation\Provider\ISelectionProvider
{
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
	 * @var \Avalonia\Controls\ItemsControl
	 * @property
	 */
	public readonly $Owner;
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
	 * @return \System\Boolean
	 */
	public  function get_CanSelectMultiple(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSelectionRequired(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function GetSelection(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	protected  function GetSelectionCore(){}
	/**
	 * @return \Avalonia\Controls\SelectionMode
	 */
	protected  function GetSelectionModeCore(){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function OwnerPropertyChanged($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Controls\Selection\SelectionModelSelectionChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function OwnerSelectionChanged($sender, $e){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RaiseSelectionChanged(){}
	/**
	 * @uses SelectingItemsControlAutomationPeerMethodsOverride::get_Owner_1 ()
	 * @uses SelectingItemsControlAutomationPeerMethodsOverride::get_Owner_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Owner(mixed ...$args){}
}
