<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait LargeArrayBuilder_1Override {
	/**
	 * @deprecated
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function AddWithBufferAllocation_1 ($item){}
	/**
	 * @deprecated
	 * @param \T|object $item
	 * @param \T $destination
	 * @param \System\Int32& $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function AddWithBufferAllocation_2 ($item, $destination, $index){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \System\Int32|int $arrayIndex
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_1 ($array, $arrayIndex, $count){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\CopyPosition $position
	 * @param \T $array
	 * @param \System\Int32|int $arrayIndex
	 * @param \System\Int32|int $count
	 * @return \System\Collections\Generic\CopyPosition
	 */
	#[MethodOverride]public function CopyTo_2 ($position, $array, $arrayIndex, $count){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Int32|int $maxCapacity
	 */
	#[MethodOverride]public function __construct_2 ($maxCapacity){}
}
final class LargeArrayBuilder_1 extends \System\ValueType
{
	use LargeArrayBuilder_1Override;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	public function Add($item){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses LargeArrayBuilder_1Override::AddWithBufferAllocation_1 <br>private , args: ($item)<br>
	 * @uses LargeArrayBuilder_1Override::AddWithBufferAllocation_2 <br>private , args: ($item, $destination, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function AddWithBufferAllocation (\override ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $items [generic: T]
	 * @return \System\Void|void
	 */
	public function AddRange($items){}
	/**
	 * @uses LargeArrayBuilder_1Override::CopyTo_1 <br>public , args: ($array, $arrayIndex, $count)<br>
	 * @uses LargeArrayBuilder_1Override::CopyTo_2 <br>public , args: ($position, $array, $arrayIndex, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\Collections\Generic\CopyPosition|mixed|\override
	 */
	#[MethodOverridePublic]function CopyTo (\override ...$args){}
	/**
	 * @param \System\Int32|int $index
	 * @return \T[]
	 */
	public function GetBuffer($index){}
	/**
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	public function SlowAdd($item){}
	/**
	 * @return \T[]
	 */
	public function ToArray(){}
	/**
	 * @param \T &$array
	 * @return \System\Boolean|bool
	 */
	public function TryMove(&$array){}
	private function AllocateBuffer(){}
	/**
	 * @uses LargeArrayBuilder_1Override::__construct_1 <br>public , args: ()<br>
	 * @uses LargeArrayBuilder_1Override::__construct_2 <br>public , args: ($maxCapacity)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}