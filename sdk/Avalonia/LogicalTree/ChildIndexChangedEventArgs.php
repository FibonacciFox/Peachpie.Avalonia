<?php
namespace Avalonia\LogicalTree;
/**
 */
class ChildIndexChangedEventArgs extends \System\EventArgs
{
	/**
	 * @var \Avalonia\LogicalTree\ChildIndexChangedAction
	 * @property
	 */
	public readonly $Action;
	/**
	 * @var \Avalonia\LogicalTree\ILogical
	 * @property
	 */
	public readonly $Child;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Index;
	/**
	 * @var \Avalonia\LogicalTree\ChildIndexChangedEventArgs
	 * @property
	 */
	public readonly $ChildIndexesReset;
	/**
	 * @var \Avalonia\LogicalTree\ChildIndexChangedEventArgs
	 * @property
	 */
	public readonly $TotalCountChanged;
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
