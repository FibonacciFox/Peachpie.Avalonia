<?php
namespace Avalonia\LogicalTree;
/**
 */
interface ILogical
{
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_AttachedToLogicalTree($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_AttachedToLogicalTree($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_DetachedFromLogicalTree($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_DetachedFromLogicalTree($value);
	/**
	 */
	public function get_IsAttachedToLogicalTree();
	/**
	 */
	public function get_LogicalParent();
	/**
	 */
	public function get_LogicalChildren();
	/**
	 * @param \Avalonia\LogicalTree\LogicalTreeAttachmentEventArgs $e
	 */
	public function NotifyAttachedToLogicalTree($e);
	/**
	 * @param \Avalonia\LogicalTree\LogicalTreeAttachmentEventArgs $e
	 */
	public function NotifyDetachedFromLogicalTree($e);
	/**
	 * @param \Avalonia\Controls\ResourcesChangedEventArgs $e
	 */
	public function NotifyResourcesChanged($e);
}
