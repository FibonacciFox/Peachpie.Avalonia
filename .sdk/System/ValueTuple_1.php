<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ValueTuple_1Override {
	/**
	 * @deprecated
	 * @param \System\Object|object $other
	 * @param \System\Collections\IEqualityComparer $comparer
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function Equals_1 ($other, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Object|object $other
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function CompareTo_1 ($other){}
	/**
	 * @deprecated
	 * @param \System\ValueTuple_1 $other [generic: T1]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_2 ($other){}
	/**
	 * @deprecated
	 * @param \System\Object|object $other
	 * @param \System\Collections\IComparer $comparer
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function CompareTo_3 ($other, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\IEqualityComparer $comparer
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function GetHashCode_1 ($comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\IEqualityComparer $comparer
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function GetHashCode_2 ($comparer){}
}
final class ValueTuple_1 extends \System\ValueType implements
	\System\IEquatable_1,
	\System\Collections\IStructuralEquatable,
	\System\Collections\IStructuralComparable,
	\System\IComparable,
	\System\IComparable_1,
	\System\IValueTupleInternal,
	\System\Runtime\CompilerServices\ITuple
{
	use ValueTuple_1Override;

	/**
	 * @field
	 * @var \T1
	 */
	public $Item1;
	/**
	 * @uses ValueTuple_1Override::CompareTo_1 <br>private , args: ($other)<br>
	 * @uses ValueTuple_1Override::CompareTo_2 <br>public , args: ($other)<br>
	 * @uses ValueTuple_1Override::CompareTo_3 <br>private , args: ($other, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function CompareTo (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ValueTuple_1Override::GetHashCode_1 <br>private , args: ($comparer)<br>
	 * @uses ValueTuple_1Override::GetHashCode_2 <br>private , args: ($comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePrivate]function GetHashCode (\override ...$args){}
	private function ToStringEnd(){}
	private function get_Length(){}
	private function get_Item($index){}
	/**
	 * @param \T1 $item1
	 */
	public function __construct($item1){}
}