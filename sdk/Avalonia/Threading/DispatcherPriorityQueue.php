<?php
namespace Avalonia\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DispatcherPriorityQueueMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function InsertItemInPriorityChain_1($item, $chain){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function InsertItemInPriorityChain_2($item, $chain, $after){}
}
/**
 */
class DispatcherPriorityQueue extends \System\Object
{
	/**
	 * @return \Avalonia\Threading\DispatcherPriority
	 */
	public  function get_MaxPriority(){}
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @param \Avalonia\Threading\DispatcherOperation $item
	 * @return \Avalonia\Threading\DispatcherOperation
	 */
	public  function Enqueue($priority, $item){}
	/**
	 * @return \Avalonia\Threading\DispatcherOperation
	 */
	public  function Dequeue(){}
	/**
	 * @return \Avalonia\Threading\DispatcherOperation
	 */
	public  function Peek(){}
	/**
	 * @param \Avalonia\Threading\DispatcherOperation $item
	 * @return \System\Void|void
	 */
	public  function RemoveItem($item){}
	/**
	 * @param \Avalonia\Threading\DispatcherOperation $item
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @return \System\Void|void
	 */
	public  function ChangeItemPriority($item, $priority){}
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetChain($priority){}
	/**
	 * @uses DispatcherPriorityQueueMethodsOverride::InsertItemInPriorityChain_1 ($item, $chain)
	 * @uses DispatcherPriorityQueueMethodsOverride::InsertItemInPriorityChain_2 ($item, $chain, $after)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function InsertItemInPriorityChain(mixed ...$args){}
	/**
	 * @param \Avalonia\Threading\DispatcherOperation $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RemoveItemFromPriorityChain($item){}
	/**
	 * @param \Avalonia\Threading\DispatcherOperation $item
	 * @param \Avalonia\Threading\DispatcherOperation $after
	 * @return \System\Void|void
	 */
	protected  function InsertItemInSequentialChain($item, $after){}
	/**
	 * @param \Avalonia\Threading\DispatcherOperation $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RemoveItemFromSequentialChain($item){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
