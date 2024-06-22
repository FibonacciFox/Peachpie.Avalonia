<?php
namespace Avalonia\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DispatcherPriorityQueueOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Threading\DispatcherOperation $item
	 * @param \Avalonia\Threading\PriorityChain $chain
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function InsertItemInPriorityChain_1 ($item, $chain){}
	/**
	 * @deprecated
	 * @param \Avalonia\Threading\DispatcherOperation $item
	 * @param \Avalonia\Threading\PriorityChain $chain
	 * @param \Avalonia\Threading\DispatcherOperation $after
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function InsertItemInPriorityChain_2 ($item, $chain, $after){}
}
class DispatcherPriorityQueue extends \System\Object
{
	use DispatcherPriorityQueueOverride;

	/**
	 * @property
	 * @var \Avalonia\Threading\DispatcherPriority
	 * @since readonly
	 */
	public $MaxPriority;
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @param \Avalonia\Threading\DispatcherOperation $item
	 * @return \Avalonia\Threading\DispatcherOperation
	 */
	public function Enqueue($priority, $item){}
	/**
	 * @return \Avalonia\Threading\DispatcherOperation
	 */
	public function Dequeue(){}
	/**
	 * @return \Avalonia\Threading\DispatcherOperation
	 */
	public function Peek(){}
	/**
	 * @param \Avalonia\Threading\DispatcherOperation $item
	 * @return \System\Void|void
	 */
	public function RemoveItem($item){}
	/**
	 * @param \Avalonia\Threading\DispatcherOperation $item
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @return \System\Void|void
	 */
	public function ChangeItemPriority($item, $priority){}
	private function GetChain($priority){}
	/**
	 * @uses DispatcherPriorityQueueOverride::InsertItemInPriorityChain_1 <br>private , args: ($item, $chain)<br>
	 * @uses DispatcherPriorityQueueOverride::InsertItemInPriorityChain_2 <br>protected , args: ($item, $chain, $after)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function InsertItemInPriorityChain (\override ...$args){}
	private function RemoveItemFromPriorityChain($item){}
	/**
	 * @param \Avalonia\Threading\DispatcherOperation $item
	 * @param \Avalonia\Threading\DispatcherOperation $after
	 * @return \System\Void|void
	 */
	protected function InsertItemInSequentialChain($item, $after){}
	private function RemoveItemFromSequentialChain($item){}
	/**
	 */
	public function __construct(){}
}