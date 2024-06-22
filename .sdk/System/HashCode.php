<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait HashCodeOverride {
	/**
	 * @deprecated
	 * @param \T1 $value1
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Combine_1 ($value1){}
	/**
	 * @deprecated
	 * @param \T1 $value1
	 * @param \T2 $value2
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Combine_2 ($value1, $value2){}
	/**
	 * @deprecated
	 * @param \T1 $value1
	 * @param \T2 $value2
	 * @param \T3 $value3
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Combine_3 ($value1, $value2, $value3){}
	/**
	 * @deprecated
	 * @param \T1 $value1
	 * @param \T2 $value2
	 * @param \T3 $value3
	 * @param \T4 $value4
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Combine_4 ($value1, $value2, $value3, $value4){}
	/**
	 * @deprecated
	 * @param \T1 $value1
	 * @param \T2 $value2
	 * @param \T3 $value3
	 * @param \T4 $value4
	 * @param \T5 $value5
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Combine_5 ($value1, $value2, $value3, $value4, $value5){}
	/**
	 * @deprecated
	 * @param \T1 $value1
	 * @param \T2 $value2
	 * @param \T3 $value3
	 * @param \T4 $value4
	 * @param \T5 $value5
	 * @param \T6 $value6
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Combine_6 ($value1, $value2, $value3, $value4, $value5, $value6){}
	/**
	 * @deprecated
	 * @param \T1 $value1
	 * @param \T2 $value2
	 * @param \T3 $value3
	 * @param \T4 $value4
	 * @param \T5 $value5
	 * @param \T6 $value6
	 * @param \T7 $value7
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Combine_7 ($value1, $value2, $value3, $value4, $value5, $value6, $value7){}
	/**
	 * @deprecated
	 * @param \T1 $value1
	 * @param \T2 $value2
	 * @param \T3 $value3
	 * @param \T4 $value4
	 * @param \T5 $value5
	 * @param \T6 $value6
	 * @param \T7 $value7
	 * @param \T8 $value8
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Combine_8 ($value1, $value2, $value3, $value4, $value5, $value6, $value7, $value8){}
	/**
	 * @deprecated
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Add_1 ($value){}
	/**
	 * @deprecated
	 * @param \T|object $value
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Add_2 ($value, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Add_3 ($value){}
}
final class HashCode extends \System\ValueType
{
	use HashCodeOverride;


	private static function GenerateGlobalSeed(){}
	/**
	 * @uses HashCodeOverride::Combine_1 <br>public , args: ($value1)<br>
	 * @uses HashCodeOverride::Combine_2 <br>public , args: ($value1, $value2)<br>
	 * @uses HashCodeOverride::Combine_3 <br>public , args: ($value1, $value2, $value3)<br>
	 * @uses HashCodeOverride::Combine_4 <br>public , args: ($value1, $value2, $value3, $value4)<br>
	 * @uses HashCodeOverride::Combine_5 <br>public , args: ($value1, $value2, $value3, $value4, $value5)<br>
	 * @uses HashCodeOverride::Combine_6 <br>public , args: ($value1, $value2, $value3, $value4, $value5, $value6)<br>
	 * @uses HashCodeOverride::Combine_7 <br>public , args: ($value1, $value2, $value3, $value4, $value5, $value6, $value7)<br>
	 * @uses HashCodeOverride::Combine_8 <br>public , args: ($value1, $value2, $value3, $value4, $value5, $value6, $value7, $value8)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function Combine (\override ...$args){}
	private static function Initialize(&$v1, &$v2, &$v3, &$v4){}
	private static function Round($hash, $input){}
	private static function QueueRound($hash, $queuedValue){}
	private static function MixState($v1, $v2, $v3, $v4){}
	private static function MixEmptyState(){}
	private static function MixFinal($hash){}
	/**
	 * @uses HashCodeOverride::Add_1 <br>public , args: ($value)<br>
	 * @uses HashCodeOverride::Add_2 <br>public , args: ($value, $comparer)<br>
	 * @uses HashCodeOverride::Add_3 <br>private , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Add (\override ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Byte]
	 * @return \System\Void|void
	 */
	public function AddBytes($value){}
	/**
	 * @return \System\Int32|int
	 */
	public function ToHashCode(){}
}