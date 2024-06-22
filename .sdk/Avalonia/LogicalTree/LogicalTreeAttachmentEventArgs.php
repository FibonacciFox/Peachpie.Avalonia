<?php
namespace Avalonia\LogicalTree;
class LogicalTreeAttachmentEventArgs extends \System\EventArgs
{

	/**
	 * @property
	 * @var \Avalonia\LogicalTree\ILogicalRoot
	 * @since readonly
	 */
	public $Root;
	/**
	 * @property
	 * @var \Avalonia\LogicalTree\ILogical
	 * @since readonly
	 */
	public $Source;
	/**
	 * @property
	 * @var \Avalonia\LogicalTree\ILogical
	 * @since readonly
	 */
	public $Parent;
	/**
	 * @param \Avalonia\LogicalTree\ILogicalRoot $root
	 * @param \Avalonia\LogicalTree\ILogical $source
	 * @param \Avalonia\LogicalTree\ILogical $parent
	 */
	public function __construct($root, $source, $parent){}
}