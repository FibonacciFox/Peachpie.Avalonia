<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait HashCodeMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Combine_1($value1){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Combine_2($value1, $value2){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Combine_3($value1, $value2, $value3){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Combine_4($value1, $value2, $value3, $value4){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Combine_5($value1, $value2, $value3, $value4, $value5){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Combine_6($value1, $value2, $value3, $value4, $value5, $value6){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Combine_7($value1, $value2, $value3, $value4, $value5, $value6, $value7){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Combine_8($value1, $value2, $value3, $value4, $value5, $value6, $value7, $value8){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Add_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Add_2($value, $comparer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Add_3($value){}
}
/**
 */
class HashCode extends \System\ValueType
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GenerateGlobalSeed(){}
	/**
	 * @uses HashCodeMethodsOverride::Combine_1 ($value1)
	 * @uses HashCodeMethodsOverride::Combine_2 ($value1, $value2)
	 * @uses HashCodeMethodsOverride::Combine_3 ($value1, $value2, $value3)
	 * @uses HashCodeMethodsOverride::Combine_4 ($value1, $value2, $value3, $value4)
	 * @uses HashCodeMethodsOverride::Combine_5 ($value1, $value2, $value3, $value4, $value5)
	 * @uses HashCodeMethodsOverride::Combine_6 ($value1, $value2, $value3, $value4, $value5, $value6)
	 * @uses HashCodeMethodsOverride::Combine_7 ($value1, $value2, $value3, $value4, $value5, $value6, $value7)
	 * @uses HashCodeMethodsOverride::Combine_8 ($value1, $value2, $value3, $value4, $value5, $value6, $value7, $value8)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Combine(mixed ...$args){}
	/**
	 * @param \System\UInt32& $v1
	 * @param \System\UInt32& $v2
	 * @param \System\UInt32& $v3
	 * @param \System\UInt32& $v4
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Initialize($v1, $v2, $v3, $v4){}
	/**
	 * @param \System\UInt32 $hash
	 * @param \System\UInt32 $input
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Round($hash, $input){}
	/**
	 * @param \System\UInt32 $hash
	 * @param \System\UInt32 $queuedValue
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function QueueRound($hash, $queuedValue){}
	/**
	 * @param \System\UInt32 $v1
	 * @param \System\UInt32 $v2
	 * @param \System\UInt32 $v3
	 * @param \System\UInt32 $v4
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MixState($v1, $v2, $v3, $v4){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MixEmptyState(){}
	/**
	 * @param \System\UInt32 $hash
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MixFinal($hash){}
	/**
	 * @uses HashCodeMethodsOverride::Add_1 ($value)
	 * @uses HashCodeMethodsOverride::Add_2 ($value, $comparer)
	 * @uses HashCodeMethodsOverride::Add_3 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @return \System\Void|void
	 */
	public  function AddBytes($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function ToHashCode(){}
}
