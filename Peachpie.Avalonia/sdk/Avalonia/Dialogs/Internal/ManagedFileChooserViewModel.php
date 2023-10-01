<?php
namespace Avalonia\Dialogs\Internal;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ManagedFileChooserViewModelMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Navigate_1($path, $initialSelectionName){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Navigate_2($path, $initialSelectionName){}
}
/**
 */
class ManagedFileChooserViewModel extends \Avalonia\Dialogs\Internal\AvaloniaDialogsInternalViewModelBase implements 
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function add_CancelRequested($value){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function remove_CancelRequested($value){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function add_CompleteRequested($value){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_CompleteRequested($value){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function add_OverwritePrompt($value){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_OverwritePrompt($value){}
	/**
	 * @return \Avalonia\Collections\AvaloniaList_1
	 */
	public  function get_QuickLinks(){}
	/**
	 * @return \Avalonia\Collections\AvaloniaList_1
	 */
	public  function get_Items(){}
	/**
	 * @return \Avalonia\Collections\AvaloniaList_1
	 */
	public  function get_Filters(){}
	/**
	 * @return \Avalonia\Collections\AvaloniaList_1
	 */
	public  function get_SelectedItems(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Location(){}
	/**
	 * @param \System\String|string $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Location($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_FileName(){}
	/**
	 * @param \System\String|string $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_FileName($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_SelectingFolder(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ShowFilters(){}
	/**
	 * @return \Avalonia\Controls\SelectionMode
	 */
	public  function get_SelectionMode(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Title(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_QuickLinksSelectedIndex(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_QuickLinksSelectedIndex($value){}
	/**
	 * @return \Avalonia\Dialogs\Internal\ManagedFileChooserFilterViewModel
	 */
	public  function get_SelectedFilter(){}
	/**
	 * @param \Avalonia\Dialogs\Internal\ManagedFileChooserFilterViewModel $value
	 * @return \System\Void|void
	 */
	public  function set_SelectedFilter($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ShowHiddenFiles(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_ShowHiddenFiles($value){}
	/**
	 * @param \Avalonia\Dialogs\Internal\ManagedFileChooserSources $quickSources
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RefreshQuickLinks($quickSources){}
	/**
	 * @return \System\Void|void
	 */
	public  function EnterPressed(){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnSelectionChangedAsync($sender, $e){}
	/**
	 * @param \System\String|string $initialSelectionName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NavigateRoot($initialSelectionName){}
	/**
	 * @return \System\Void|void
	 */
	public  function Refresh(){}
	/**
	 * @uses ManagedFileChooserViewModelMethodsOverride::Navigate_1 ($path, $initialSelectionName)
	 * @uses ManagedFileChooserViewModelMethodsOverride::Navigate_2 ($path, $initialSelectionName)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Navigate(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function GoUp(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Cancel(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Ok(){}
	/**
	 * @param \Avalonia\Dialogs\Internal\ManagedFileChooserItemViewModel $item
	 * @return \System\Void|void
	 */
	public  function SelectSingleFile($item){}
}
