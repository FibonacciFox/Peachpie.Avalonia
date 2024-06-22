<?php
namespace Avalonia\LogicalTree;
class ChildIndexChangedEventArgs extends \System\EventArgs
{

	/**
	 * @property
	 * @var \Avalonia\LogicalTree\ChildIndexChangedAction
	 * @since readonly
	 */
	public $Action;
	/**
	 * @property
	 * @var \Avalonia\LogicalTree\ILogical
	 * @since readonly
	 */
	public $Child;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Index;
	/**
	 * @property
	 * @var \Avalonia\LogicalTree\ChildIndexChangedEventArgs
	 * @since readonly
	 */
	public $ChildIndexesReset;
	/**
	 * @property
	 * @var \Avalonia\LogicalTree\ChildIndexChangedEventArgs
	 * @since readonly
	 */
	public $TotalCountChanged;
	/**
	 * @param \Avalonia\LogicalTree\ILogical $child
	 * @param \System\Int32|int $index
	 */
	public function __construct($child, $index){}
}