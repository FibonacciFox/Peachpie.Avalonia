<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Stack_1Override {
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \System\Int32|int $arrayIndex
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_1 ($array, $arrayIndex){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $arrayIndex
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function CopyTo_2 ($array, $arrayIndex){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\Stack_1
	 */
	#[MethodOverride]public function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_3 (){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Int32|int $capacity
	 */
	#[MethodOverride]public function __construct_2 ($capacity){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $collection [generic: T]
	 */
	#[MethodOverride]public function __construct_3 ($collection){}
}
class Stack_1 extends \System\Object implements
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyCollection_1
{
	use Stack_1Override;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @param \T|object $item
	 * @return \System\Boolean|bool
	 */
	public function Contains($item){}
	/**
	 * @uses Stack_1Override::CopyTo_1 <br>public , args: ($array, $arrayIndex)<br>
	 * @uses Stack_1Override::CopyTo_2 <br>private , args: ($array, $arrayIndex)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function CopyTo (\override ...$args){}
	/**
	 * @uses Stack_1Override::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses Stack_1Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @uses Stack_1Override::GetEnumerator_3 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\Stack_1|\System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @return \System\Void|void
	 */
	public function TrimExcess(){}
	/**
	 * @return \T|object
	 */
	public function Peek(){}
	/**
	 * @param \T& &$result
	 * @return \System\Boolean|bool
	 */
	public function TryPeek(&$result){}
	/**
	 * @return \T|object
	 */
	public function Pop(){}
	/**
	 * @param \T& &$result
	 * @return \System\Boolean|bool
	 */
	public function TryPop(&$result){}
	/**
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	public function Push($item){}
	private function PushWithResize($item){}
	/**
	 * @param \System\Int32|int $capacity
	 * @return \System\Int32|int
	 */
	public function EnsureCapacity($capacity){}
	private function Grow($capacity){}
	/**
	 * @return \T[]
	 */
	public function ToArray(){}
	private function ThrowForEmptyStack(){}
	/**
	 * @uses Stack_1Override::__construct_1 <br>public , args: ()<br>
	 * @uses Stack_1Override::__construct_2 <br>public , args: ($capacity)<br>
	 * @uses Stack_1Override::__construct_3 <br>public , args: ($collection)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}