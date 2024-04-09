<?php
namespace Avalonia\LogicalTree;
/**
 * @method \System\Void|void add_AttachedToLogicalTree($value) [modifier: public]
 * @method \System\Void|void remove_AttachedToLogicalTree($value) [modifier: public]
 * @method \System\Void|void add_DetachedFromLogicalTree($value) [modifier: public]
 * @method \System\Void|void remove_DetachedFromLogicalTree($value) [modifier: public]
*/
interface ILogical
{

	/**
	 * @param \Avalonia\LogicalTree\LogicalTreeAttachmentEventArgs $e
	 * @return \System\Void|void
	 */
	public function NotifyAttachedToLogicalTree($e);
	/**
	 * @param \Avalonia\LogicalTree\LogicalTreeAttachmentEventArgs $e
	 * @return \System\Void|void
	 */
	public function NotifyDetachedFromLogicalTree($e);
	/**
	 * @param \Avalonia\Controls\ResourcesChangedEventArgs $e
	 * @return \System\Void|void
	 */
	public function NotifyResourcesChanged($e);
}