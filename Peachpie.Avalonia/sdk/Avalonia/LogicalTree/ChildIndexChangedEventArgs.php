<?php
namespace Avalonia\LogicalTree;
/**
 */
class ChildIndexChangedEventArgs extends \System\EventArgs
{
	/**
	 * @return \Avalonia\LogicalTree\ChildIndexChangedAction
	 */
	public  function get_Action(){}
	/**
	 * @return \Avalonia\LogicalTree\ILogical
	 */
	public  function get_Child(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Index(){}
	/**
	 * @return \Avalonia\LogicalTree\ChildIndexChangedEventArgs
	 */
	public static function get_ChildIndexesReset(){}
	/**
	 * @return \Avalonia\LogicalTree\ChildIndexChangedEventArgs
	 */
	public static function get_TotalCountChanged(){}
}
