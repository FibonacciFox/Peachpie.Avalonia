<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait InterlockedMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Increment_1($location){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function Increment_2($location){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function Increment_3($location){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] public static function Increment_4($location){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Decrement_1($location){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function Decrement_2($location){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function Decrement_3($location){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] public static function Decrement_4($location){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Exchange_1($location1, $value){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function Exchange_2($location1, $value){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Exchange_3($location1, $value){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function Exchange_4($location1, $value){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function Exchange_5($location1, $value){}
	/**
	 * @return \System\Threading\T
	 */
	#[MethodOverride] public static function Exchange_6($location1, $value){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function Exchange_7($location1, $value){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] public static function Exchange_8($location1, $value){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function Exchange_9($location1, $value){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] public static function Exchange_10($location1, $value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function CompareExchange_1($location1, $value, $comparand){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function CompareExchange_2($location1, $value, $comparand){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function CompareExchange_3($location1, $value, $comparand){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function CompareExchange_4($location1, $value, $comparand){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function CompareExchange_5($location1, $value, $comparand){}
	/**
	 * @return \System\Threading\T
	 */
	#[MethodOverride] public static function CompareExchange_6($location1, $value, $comparand){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function CompareExchange_7($location1, $value, $comparand){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] public static function CompareExchange_8($location1, $value, $comparand){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function CompareExchange_9($location1, $value, $comparand){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] public static function CompareExchange_10($location1, $value, $comparand){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Add_1($location1, $value){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function Add_2($location1, $value){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function Add_3($location1, $value){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] public static function Add_4($location1, $value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function ExchangeAdd_1($location1, $value){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] private static function ExchangeAdd_2($location1, $value){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function Read_1($location){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] public static function Read_2($location){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function And_1($location1, $value){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function And_2($location1, $value){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function And_3($location1, $value){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] public static function And_4($location1, $value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Or_1($location1, $value){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function Or_2($location1, $value){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function Or_3($location1, $value){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] public static function Or_4($location1, $value){}
}
/**
 */
class Interlocked extends \System\Object
{
	/**
	 * @uses InterlockedMethodsOverride::Increment_1 ($location)
	 * @uses InterlockedMethodsOverride::Increment_2 ($location)
	 * @uses InterlockedMethodsOverride::Increment_3 ($location)
	 * @uses InterlockedMethodsOverride::Increment_4 ($location)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Increment(mixed ...$args){}
	/**
	 * @uses InterlockedMethodsOverride::Decrement_1 ($location)
	 * @uses InterlockedMethodsOverride::Decrement_2 ($location)
	 * @uses InterlockedMethodsOverride::Decrement_3 ($location)
	 * @uses InterlockedMethodsOverride::Decrement_4 ($location)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Decrement(mixed ...$args){}
	/**
	 * @uses InterlockedMethodsOverride::Exchange_1 ($location1, $value)
	 * @uses InterlockedMethodsOverride::Exchange_2 ($location1, $value)
	 * @uses InterlockedMethodsOverride::Exchange_3 ($location1, $value)
	 * @uses InterlockedMethodsOverride::Exchange_4 ($location1, $value)
	 * @uses InterlockedMethodsOverride::Exchange_5 ($location1, $value)
	 * @uses InterlockedMethodsOverride::Exchange_6 ($location1, $value)
	 * @uses InterlockedMethodsOverride::Exchange_7 ($location1, $value)
	 * @uses InterlockedMethodsOverride::Exchange_8 ($location1, $value)
	 * @uses InterlockedMethodsOverride::Exchange_9 ($location1, $value)
	 * @uses InterlockedMethodsOverride::Exchange_10 ($location1, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Exchange(mixed ...$args){}
	/**
	 * @uses InterlockedMethodsOverride::CompareExchange_1 ($location1, $value, $comparand)
	 * @uses InterlockedMethodsOverride::CompareExchange_2 ($location1, $value, $comparand)
	 * @uses InterlockedMethodsOverride::CompareExchange_3 ($location1, $value, $comparand)
	 * @uses InterlockedMethodsOverride::CompareExchange_4 ($location1, $value, $comparand)
	 * @uses InterlockedMethodsOverride::CompareExchange_5 ($location1, $value, $comparand)
	 * @uses InterlockedMethodsOverride::CompareExchange_6 ($location1, $value, $comparand)
	 * @uses InterlockedMethodsOverride::CompareExchange_7 ($location1, $value, $comparand)
	 * @uses InterlockedMethodsOverride::CompareExchange_8 ($location1, $value, $comparand)
	 * @uses InterlockedMethodsOverride::CompareExchange_9 ($location1, $value, $comparand)
	 * @uses InterlockedMethodsOverride::CompareExchange_10 ($location1, $value, $comparand)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CompareExchange(mixed ...$args){}
	/**
	 * @uses InterlockedMethodsOverride::Add_1 ($location1, $value)
	 * @uses InterlockedMethodsOverride::Add_2 ($location1, $value)
	 * @uses InterlockedMethodsOverride::Add_3 ($location1, $value)
	 * @uses InterlockedMethodsOverride::Add_4 ($location1, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Add(mixed ...$args){}
	/**
	 * @uses InterlockedMethodsOverride::ExchangeAdd_1 ($location1, $value)
	 * @uses InterlockedMethodsOverride::ExchangeAdd_2 ($location1, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ExchangeAdd(mixed ...$args){}
	/**
	 * @uses InterlockedMethodsOverride::Read_1 ($location)
	 * @uses InterlockedMethodsOverride::Read_2 ($location)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Read(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public static function MemoryBarrier(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ReadMemoryBarrier(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _MemoryBarrierProcessWide(){}
	/**
	 * @return \System\Void|void
	 */
	public static function MemoryBarrierProcessWide(){}
	/**
	 * @uses InterlockedMethodsOverride::And_1 ($location1, $value)
	 * @uses InterlockedMethodsOverride::And_2 ($location1, $value)
	 * @uses InterlockedMethodsOverride::And_3 ($location1, $value)
	 * @uses InterlockedMethodsOverride::And_4 ($location1, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function And(mixed ...$args){}
	/**
	 * @uses InterlockedMethodsOverride::Or_1 ($location1, $value)
	 * @uses InterlockedMethodsOverride::Or_2 ($location1, $value)
	 * @uses InterlockedMethodsOverride::Or_3 ($location1, $value)
	 * @uses InterlockedMethodsOverride::Or_4 ($location1, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Or(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
