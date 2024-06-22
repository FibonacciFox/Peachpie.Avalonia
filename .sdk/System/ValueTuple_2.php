<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ValueTuple_2Override {
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
	 * @param \System\ValueTuple_2 $other [generic: T1,T2]
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
final class ValueTuple_2 extends \System\ValueType implements
	\System\IEquatable_1,
	\System\Collections\IStructuralEquatable,
	\System\Collections\IStructuralComparable,
	\System\IComparable,
	\System\IComparable_1,
	\System\IValueTupleInternal,
	\System\Runtime\CompilerServices\ITuple
{
	use ValueTuple_2Override;

	/**
	 * @field
	 * @var \T1
	 */
	public $Item1;
	/**
	 * @field
	 * @var \T2
	 */
	public $Item2;
	/**
	 * @uses ValueTuple_2Override::CompareTo_1 <br>private , args: ($other)<br>
	 * @uses ValueTuple_2Override::CompareTo_2 <br>public , args: ($other)<br>
	 * @uses ValueTuple_2Override::CompareTo_3 <br>private , args: ($other, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function CompareTo (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ValueTuple_2Override::GetHashCode_1 <br>private , args: ($comparer)<br>
	 * @uses ValueTuple_2Override::GetHashCode_2 <br>private , args: ($comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePrivate]function GetHashCode (\override ...$args){}
	private function GetHashCodeCore($comparer){}
	private function ToStringEnd(){}
	private function get_Length(){}
	private function get_Item($index){}
	/**
	 * @param \T1 $item1
	 * @param \T2 $item2
	 */
	public function __construct($item1, $item2){}
}