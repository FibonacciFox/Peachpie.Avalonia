<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EnumeratorOverride {
	/**
	 * @param \System\Collections\Generic\PriorityQueue_2 $queue [generic: TElement,TPriority]
	 */
	#[MethodOverride]public function __construct_1 ($queue){}
	/**
	 * @param \System\Collections\Generic\PriorityQueue_2+UnorderedItemsCollection $collection [generic: TElement,TPriority]
	 */
	#[MethodOverride]public function __construct_2 ($collection){}
}
final class PriorityQueueDebugView_2 extends \System\Object
{
	use EnumeratorOverride;

	/**
	 * @property
	 * @var \System\ValueTuple_2[TElement,TPriority][]
	 * @since readonly
	 */
	public $Items;
	/**
	 * @uses PriorityQueueDebugView_2Override::__construct_1 <br>public , args: ($queue)<br>
	 * @uses PriorityQueueDebugView_2Override::__construct_2 <br>public , args: ($collection)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}