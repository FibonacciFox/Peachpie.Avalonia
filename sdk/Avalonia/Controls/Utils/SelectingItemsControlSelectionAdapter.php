<?php
namespace Avalonia\Controls\Utils;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SelectingItemsControlSelectionAdapterMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function OnCommit_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function OnCommit_2($sender, $e){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function OnCancel_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function OnCancel_2($sender, $e){}
}
/**
 */
class SelectingItemsControlSelectionAdapter extends \System\Object implements 
	\Avalonia\Controls\Utils\ISelectionAdapter
{
	/**
	 * @var \Avalonia\Controls\Primitives\SelectingItemsControl
	 * @property
	 */
	public $SelectorControl;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $SelectedItem;
	/**
	 * @var \System\Collections\IEnumerable
	 * @property
	 */
	public $ItemsSource;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IgnoringSelectionChanged(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_IgnoringSelectionChanged($value){}
	/**
	 * @return \Avalonia\Controls\Primitives\SelectingItemsControl
	 */
	public  function get_SelectorControl(){}
	/**
	 * @param \Avalonia\Controls\Primitives\SelectingItemsControl $value
	 * @return \System\Void|void
	 */
	public  function set_SelectorControl($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_SelectionChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_SelectionChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_Commit($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_Commit($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_Cancel($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_Cancel($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_SelectedItem(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_SelectedItem($value){}
	/**
	 * @return \System\Collections\IEnumerable
	 */
	public  function get_ItemsSource(){}
	/**
	 * @param \System\Collections\IEnumerable $value
	 * @return \System\Void|void
	 */
	public  function set_ItemsSource($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ResetScrollViewer(){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\PointerReleasedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnSelectorPointerReleased($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Controls\SelectionChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnSelectionChanged($sender, $e){}
	/**
	 * @return \System\Void|void
	 */
	protected  function SelectedIndexIncrement(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function SelectedIndexDecrement(){}
	/**
	 * @param \Avalonia\Input\KeyEventArgs $e
	 * @return \System\Void|void
	 */
	public  function HandleKeyDown($e){}
	/**
	 * @uses SelectingItemsControlSelectionAdapterMethodsOverride::OnCommit_1 ()
	 * @uses SelectingItemsControlSelectionAdapterMethodsOverride::OnCommit_2 ($sender, $e)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OnCommit(mixed ...$args){}
	/**
	 * @uses SelectingItemsControlSelectionAdapterMethodsOverride::OnCancel_1 ()
	 * @uses SelectingItemsControlSelectionAdapterMethodsOverride::OnCancel_2 ($sender, $e)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OnCancel(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AfterAdapterAction(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
