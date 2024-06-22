<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EqualityComparer_1Override {
	/**
	 * @deprecated
	 * @param \System\Object|object $x
	 * @param \System\Object|object $y
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function Equals_1 ($x, $y){}
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function GetHashCode_1 ($obj){}
}
class EqualityComparer_1 extends \System\Object implements
	\System\Collections\IEqualityComparer,
	\System\Collections\Generic\IEqualityComparer_1
{
	use EqualityComparer_1Override;

	/**
	 * @property
	 * @var \System\Collections\Generic\EqualityComparer_1[T]
	 * @since readonly
	 */
	public $Default;
	/**
	 * @param \T $array
	 * @param \T|object $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	protected function IndexOf($array, $value, $startIndex, $count){}
	/**
	 * @param \T $array
	 * @param \T|object $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	protected function LastIndexOf($array, $value, $startIndex, $count){}
}