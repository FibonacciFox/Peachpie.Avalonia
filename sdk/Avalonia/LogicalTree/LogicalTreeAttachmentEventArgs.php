<?php
namespace Avalonia\LogicalTree;
/**
 */
class LogicalTreeAttachmentEventArgs extends \System\EventArgs
{
	/**
	 * @var \Avalonia\LogicalTree\ILogicalRoot
	 * @property
	 */
	public readonly $Root;
	/**
	 * @var \Avalonia\LogicalTree\ILogical
	 * @property
	 */
	public readonly $Source;
	/**
	 * @var \Avalonia\LogicalTree\ILogical
	 * @property
	 */
	public readonly $Parent;
	/**
	 * @return \Avalonia\LogicalTree\ILogicalRoot
	 */
	public  function get_Root(){}
	/**
	 * @return \Avalonia\LogicalTree\ILogical
	 */
	public  function get_Source(){}
	/**
	 * @return \Avalonia\LogicalTree\ILogical
	 */
	public  function get_Parent(){}
}
