<?php
namespace Avalonia\LogicalTree;
/**
 */
class LogicalTreeAttachmentEventArgs extends \System\EventArgs
{
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
