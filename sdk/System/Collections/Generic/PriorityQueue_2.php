<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PriorityQueue_2MethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnqueueRange_1($items){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnqueueRange_2($elements, $priority){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class PriorityQueue_2 extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Collections\Generic\IComparer_1[TPriority]
	 * @property
	 */
	public readonly $Comparer;
	/**
	 * @var \System\Collections\Generic\PriorityQueue_2+UnorderedItemsCollection[TElement,TPriority]
	 * @property
	 */
	public readonly $UnorderedItems;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @return \System\Collections\Generic\IComparer_1
	 */
	public  function get_Comparer(){}
	/**
	 * @return \System\Collections\Generic\UnorderedItemsCollection
	 */
	public  function get_UnorderedItems(){}
	/**
	 * @param \System\Collections\Generic\TElement $element
	 * @param \System\Collections\Generic\TPriority $priority
	 * @return \System\Void|void
	 */
	public  function Enqueue($element, $priority){}
	/**
	 * @return \System\Collections\Generic\TElement
	 */
	public  function Peek(){}
	/**
	 * @return \System\Collections\Generic\TElement
	 */
	public  function Dequeue(){}
	/**
	 * @param \System\Collections\Generic\TElement& $element
	 * @param \System\Collections\Generic\TPriority& $priority
	 * @return \System\Boolean
	 */
	public  function TryDequeue($element, $priority){}
	/**
	 * @param \System\Collections\Generic\TElement& $element
	 * @param \System\Collections\Generic\TPriority& $priority
	 * @return \System\Boolean
	 */
	public  function TryPeek($element, $priority){}
	/**
	 * @param \System\Collections\Generic\TElement $element
	 * @param \System\Collections\Generic\TPriority $priority
	 * @return \System\Collections\Generic\TElement
	 */
	public  function EnqueueDequeue($element, $priority){}
	/**
	 * @uses PriorityQueue_2MethodsOverride::EnqueueRange_1 ($items)
	 * @uses PriorityQueue_2MethodsOverride::EnqueueRange_2 ($elements, $priority)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function EnqueueRange(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @param \System\Int32|int $capacity
	 * @return \System\Int32|int
	 */
	public  function EnsureCapacity($capacity){}
	/**
	 * @return \System\Void|void
	 */
	public  function TrimExcess(){}
	/**
	 * @param \System\Int32|int $minCapacity
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Grow($minCapacity){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RemoveRootNode(){}
	/**
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetParentIndex($index){}
	/**
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFirstChildIndex($index){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Heapify(){}
	/**
	 * @param \System\ValueTuple_2 $node
	 * @param \System\Int32|int $nodeIndex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MoveUpDefaultComparer($node, $nodeIndex){}
	/**
	 * @param \System\ValueTuple_2 $node
	 * @param \System\Int32|int $nodeIndex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MoveUpCustomComparer($node, $nodeIndex){}
	/**
	 * @param \System\ValueTuple_2 $node
	 * @param \System\Int32|int $nodeIndex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MoveDownDefaultComparer($node, $nodeIndex){}
	/**
	 * @param \System\ValueTuple_2 $node
	 * @param \System\Int32|int $nodeIndex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MoveDownCustomComparer($node, $nodeIndex){}
	/**
	 * @param \System\Collections\Generic\IComparer_1 $comparer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InitializeComparer($comparer){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
