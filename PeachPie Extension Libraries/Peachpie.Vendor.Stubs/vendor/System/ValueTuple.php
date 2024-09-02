<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ValueTupleOverride {
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
	 * @param \System\ValueTuple $other
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
	/**
	 * @deprecated
	 * @return \System\ValueTuple
	 */
	#[MethodOverride]public static function Create_1 (){}
	/**
	 * @deprecated
	 * @param \T1 $item1
	 * @return \System\ValueTuple_1
	 */
	#[MethodOverride]public static function Create_2 ($item1){}
	/**
	 * @deprecated
	 * @param \T1 $item1
	 * @param \T2 $item2
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride]public static function Create_3 ($item1, $item2){}
	/**
	 * @deprecated
	 * @param \T1 $item1
	 * @param \T2 $item2
	 * @param \T3 $item3
	 * @return \System\ValueTuple_3
	 */
	#[MethodOverride]public static function Create_4 ($item1, $item2, $item3){}
	/**
	 * @deprecated
	 * @param \T1 $item1
	 * @param \T2 $item2
	 * @param \T3 $item3
	 * @param \T4 $item4
	 * @return \System\ValueTuple_4
	 */
	#[MethodOverride]public static function Create_5 ($item1, $item2, $item3, $item4){}
	/**
	 * @deprecated
	 * @param \T1 $item1
	 * @param \T2 $item2
	 * @param \T3 $item3
	 * @param \T4 $item4
	 * @param \T5 $item5
	 * @return \System\ValueTuple_5
	 */
	#[MethodOverride]public static function Create_6 ($item1, $item2, $item3, $item4, $item5){}
	/**
	 * @deprecated
	 * @param \T1 $item1
	 * @param \T2 $item2
	 * @param \T3 $item3
	 * @param \T4 $item4
	 * @param \T5 $item5
	 * @param \T6 $item6
	 * @return \System\ValueTuple_6
	 */
	#[MethodOverride]public static function Create_7 ($item1, $item2, $item3, $item4, $item5, $item6){}
	/**
	 * @deprecated
	 * @param \T1 $item1
	 * @param \T2 $item2
	 * @param \T3 $item3
	 * @param \T4 $item4
	 * @param \T5 $item5
	 * @param \T6 $item6
	 * @param \T7 $item7
	 * @return \System\ValueTuple_7
	 */
	#[MethodOverride]public static function Create_8 ($item1, $item2, $item3, $item4, $item5, $item6, $item7){}
	/**
	 * @deprecated
	 * @param \T1 $item1
	 * @param \T2 $item2
	 * @param \T3 $item3
	 * @param \T4 $item4
	 * @param \T5 $item5
	 * @param \T6 $item6
	 * @param \T7 $item7
	 * @param \T8 $item8
	 * @return \System\ValueTuple_8
	 */
	#[MethodOverride]public static function Create_9 ($item1, $item2, $item3, $item4, $item5, $item6, $item7, $item8){}
}
final class ValueTuple extends \System\ValueType implements
	\System\IEquatable_1,
	\System\Collections\IStructuralEquatable,
	\System\Collections\IStructuralComparable,
	\System\IComparable,
	\System\IComparable_1,
	\System\IValueTupleInternal,
	\System\Runtime\CompilerServices\ITuple
{
	use ValueTupleOverride;

	/**
	 * @uses ValueTupleOverride::CompareTo_1 <br>private , args: ($other)<br>
	 * @uses ValueTupleOverride::CompareTo_2 <br>public , args: ($other)<br>
	 * @uses ValueTupleOverride::CompareTo_3 <br>private , args: ($other, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function CompareTo (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ValueTupleOverride::GetHashCode_1 <br>private , args: ($comparer)<br>
	 * @uses ValueTupleOverride::GetHashCode_2 <br>private , args: ($comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePrivate]function GetHashCode (\override ...$args){}
	private function ToStringEnd(){}
	private function get_Length(){}
	private function get_Item($index){}
	/**
	 * @uses ValueTupleOverride::Create_1 <br>public , args: ()<br>
	 * @uses ValueTupleOverride::Create_2 <br>public , args: ($item1)<br>
	 * @uses ValueTupleOverride::Create_3 <br>public , args: ($item1, $item2)<br>
	 * @uses ValueTupleOverride::Create_4 <br>public , args: ($item1, $item2, $item3)<br>
	 * @uses ValueTupleOverride::Create_5 <br>public , args: ($item1, $item2, $item3, $item4)<br>
	 * @uses ValueTupleOverride::Create_6 <br>public , args: ($item1, $item2, $item3, $item4, $item5)<br>
	 * @uses ValueTupleOverride::Create_7 <br>public , args: ($item1, $item2, $item3, $item4, $item5, $item6)<br>
	 * @uses ValueTupleOverride::Create_8 <br>public , args: ($item1, $item2, $item3, $item4, $item5, $item6, $item7)<br>
	 * @uses ValueTupleOverride::Create_9 <br>public , args: ($item1, $item2, $item3, $item4, $item5, $item6, $item7, $item8)<br>
	 * @var mixed|\override ...$args
	 * @return \System\ValueTuple|\System\ValueTuple_1|\System\ValueTuple_2|\System\ValueTuple_3|\System\ValueTuple_4|\System\ValueTuple_5|\System\ValueTuple_6|\System\ValueTuple_7|\System\ValueTuple_8|mixed|\override
	 */
	#[MethodOverridePublic]function Create (\override ...$args){}
}