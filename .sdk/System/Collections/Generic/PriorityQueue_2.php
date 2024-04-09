<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PriorityQueue_2Override {
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $items [generic: System\ValueTuple_2[TElement,TPriority]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function EnqueueRange_1 ($items){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $elements [generic: TElement]
	 * @param \TPriority $priority
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function EnqueueRange_2 ($elements, $priority){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Int32|int $initialCapacity
	 */
	#[MethodOverride]public function __construct_2 ($initialCapacity){}
	/**
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: TPriority]
	 */
	#[MethodOverride]public function __construct_3 ($comparer){}
	/**
	 * @param \System\Int32|int $initialCapacity
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: TPriority]
	 */
	#[MethodOverride]public function __construct_4 ($initialCapacity, $comparer){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $items [generic: System\ValueTuple_2[TElement,TPriority]
	 */
	#[MethodOverride]public function __construct_5 ($items){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $items [generic: System\ValueTuple_2[TElement,TPriority]
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: TPriority]
	 */
	#[MethodOverride]public function __construct_6 ($items, $comparer){}
}
class PriorityQueue_2 extends \System\Object
{
	use PriorityQueue_2Override;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Collections\Generic\IComparer_1[TPriority]
	 * @since readonly
	 */
	public $Comparer;
	/**
	 * @property
	 * @var \System\Collections\Generic\PriorityQueue_2+UnorderedItemsCollection[TElement,TPriority]
	 * @since readonly
	 */
	public $UnorderedItems;
	/**
	 * @param \TElement $element
	 * @param \TPriority $priority
	 * @return \System\Void|void
	 */
	public function Enqueue($element, $priority){}
	/**
	 * @return \TElement
	 */
	public function Peek(){}
	/**
	 * @return \TElement
	 */
	public function Dequeue(){}
	/**
	 * @param \TElement& &$element
	 * @param \TPriority& &$priority
	 * @return \System\Boolean|bool
	 */
	public function TryDequeue(&$element, &$priority){}
	/**
	 * @param \TElement& &$element
	 * @param \TPriority& &$priority
	 * @return \System\Boolean|bool
	 */
	public function TryPeek(&$element, &$priority){}
	/**
	 * @param \TElement $element
	 * @param \TPriority $priority
	 * @return \TElement
	 */
	public function EnqueueDequeue($element, $priority){}
	/**
	 * @uses PriorityQueue_2Override::EnqueueRange_1 <br>public , args: ($items)<br>
	 * @uses PriorityQueue_2Override::EnqueueRange_2 <br>public , args: ($elements, $priority)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function EnqueueRange (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @param \System\Int32|int $capacity
	 * @return \System\Int32|int
	 */
	public function EnsureCapacity($capacity){}
	/**
	 * @return \System\Void|void
	 */
	public function TrimExcess(){}
	private function Grow($minCapacity){}
	private function RemoveRootNode(){}
	private static function GetParentIndex($index){}
	private static function GetFirstChildIndex($index){}
	private function Heapify(){}
	private function MoveUpDefaultComparer($node, $nodeIndex){}
	private function MoveUpCustomComparer($node, $nodeIndex){}
	private function MoveDownDefaultComparer($node, $nodeIndex){}
	private function MoveDownCustomComparer($node, $nodeIndex){}
	private static function InitializeComparer($comparer){}
	/**
	 * @uses PriorityQueue_2Override::__construct_1 <br>public , args: ()<br>
	 * @uses PriorityQueue_2Override::__construct_2 <br>public , args: ($initialCapacity)<br>
	 * @uses PriorityQueue_2Override::__construct_3 <br>public , args: ($comparer)<br>
	 * @uses PriorityQueue_2Override::__construct_4 <br>public , args: ($initialCapacity, $comparer)<br>
	 * @uses PriorityQueue_2Override::__construct_5 <br>public , args: ($items)<br>
	 * @uses PriorityQueue_2Override::__construct_6 <br>public , args: ($items, $comparer)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}