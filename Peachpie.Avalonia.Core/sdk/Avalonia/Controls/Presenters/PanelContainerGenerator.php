<?php
namespace Avalonia\Controls\Presenters;
/**
 */
class PanelContainerGenerator extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Refresh(){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnItemsChanged($sender, $e){}
	/**
	 * @param \Avalonia\Controls\ItemsControl $itemsControl
	 * @param \Avalonia\Controls\Controls $children
	 * @param \System\Object|object $item
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InsertContainer($itemsControl, $children, $item, $index){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ClearItemsControlLogicalChildren(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
