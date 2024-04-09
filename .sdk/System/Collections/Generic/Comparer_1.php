<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Comparer_1Override {
	/**
	 * @deprecated
	 * @param \T|object $x
	 * @param \T|object $y
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Compare_1 ($x, $y){}
	/**
	 * @deprecated
	 * @param \System\Object|object $x
	 * @param \System\Object|object $y
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function Compare_2 ($x, $y){}
}
class Comparer_1 extends \System\Object implements
	\System\Collections\IComparer,
	\System\Collections\Generic\IComparer_1
{
	use Comparer_1Override;
	/**
	 * @property
	 * @var \System\Collections\Generic\Comparer_1[T]
	 * @since readonly
	 */
	public $Default;
	/**
	 * @param \System\Comparison_1 $comparison [generic: T]
	 * @return \System\Collections\Generic\Comparer_1[T]
	 */
	public static function Create($comparison){}
	/**
	 * @uses Comparer_1Override::Compare_1 <br>public , args: ($x, $y)<br>
	 * @uses Comparer_1Override::Compare_2 <br>private , args: ($x, $y)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function Compare (\override ...$args){}
}