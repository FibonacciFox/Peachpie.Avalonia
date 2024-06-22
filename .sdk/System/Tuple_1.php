<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Tuple_1Override {
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
	 * @param \System\Collections\IEqualityComparer $comparer
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function Equals_2 ($other, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function CompareTo_1 ($obj){}
	/**
	 * @deprecated
	 * @param \System\Object|object $other
	 * @param \System\Collections\IComparer $comparer
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function CompareTo_2 ($other, $comparer){}
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
	/**
	 * @deprecated
	 * @param \System\Collections\IEqualityComparer $comparer
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function GetHashCode_3 ($comparer){}
	/**
	 * @deprecated
	 * @param \System\Text\StringBuilder $sb
	 * @return \System\String|string
	 */
	#[MethodOverride]private function ToString_1 ($sb){}
	/**
	 * @deprecated
	 * @param \System\Text\StringBuilder $sb
	 * @return \System\String|string
	 */
	#[MethodOverride]private function ToString_2 ($sb){}
}
class Tuple_1 extends \System\Object implements
	\System\Collections\IStructuralEquatable,
	\System\Collections\IStructuralComparable,
	\System\IComparable,
	\System\ITupleInternal,
	\System\Runtime\CompilerServices\ITuple
{
	use Tuple_1Override;

	/**
	 * @property
	 * @var \T1
	 * @since readonly
	 */
	public $Item1;
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses Tuple_1Override::Equals_1 <br>private , args: ($other, $comparer)<br>
	 * @uses Tuple_1Override::Equals_2 <br>private , args: ($other, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function Equals (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses Tuple_1Override::CompareTo_1 <br>private , args: ($obj)<br>
	 * @uses Tuple_1Override::CompareTo_2 <br>private , args: ($other, $comparer)<br>
	 * @uses Tuple_1Override::CompareTo_3 <br>private , args: ($other, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePrivate]function CompareTo (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses Tuple_1Override::GetHashCode_1 <br>private , args: ($comparer)<br>
	 * @uses Tuple_1Override::GetHashCode_2 <br>private , args: ($comparer)<br>
	 * @uses Tuple_1Override::GetHashCode_3 <br>private , args: ($comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePrivate]function GetHashCode (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses Tuple_1Override::ToString_1 <br>private , args: ($sb)<br>
	 * @uses Tuple_1Override::ToString_2 <br>private , args: ($sb)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePrivate]function ToString (\override ...$args){}
	private function get_Length(){}
	private function get_Item($index){}
	/**
	 * @param \T1 $item1
	 */
	public function __construct($item1){}
}