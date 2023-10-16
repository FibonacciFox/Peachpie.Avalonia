<?php
namespace System\Numerics;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BitOperationsMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsPow2_1($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsPow2_2($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsPow2_3($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsPow2_4($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsPow2_5($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsPow2_6($value){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function RoundUpToPowerOf2_1($value){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] public static function RoundUpToPowerOf2_2($value){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] public static function RoundUpToPowerOf2_3($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function LeadingZeroCount_1($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function LeadingZeroCount_2($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function LeadingZeroCount_3($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function LeadingZeroCount_4($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function LeadingZeroCount_5($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Log2_1($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Log2_2($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Log2_3($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function Log2Ceiling_1($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function Log2Ceiling_2($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function PopCount_1($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function PopCount_2($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function PopCount_3($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function TrailingZeroCount_1($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function TrailingZeroCount_2($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function TrailingZeroCount_3($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function TrailingZeroCount_4($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function TrailingZeroCount_5($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function TrailingZeroCount_6($value){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function RotateLeft_1($value, $offset){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] public static function RotateLeft_2($value, $offset){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] public static function RotateLeft_3($value, $offset){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function RotateRight_1($value, $offset){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] public static function RotateRight_2($value, $offset){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] public static function RotateRight_3($value, $offset){}
}
/**
 */
class BitOperations extends \System\Object
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_TrailingZeroCountDeBruijn(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_Log2DeBruijn(){}
	/**
	 * @uses BitOperationsMethodsOverride::IsPow2_1 ($value)
	 * @uses BitOperationsMethodsOverride::IsPow2_2 ($value)
	 * @uses BitOperationsMethodsOverride::IsPow2_3 ($value)
	 * @uses BitOperationsMethodsOverride::IsPow2_4 ($value)
	 * @uses BitOperationsMethodsOverride::IsPow2_5 ($value)
	 * @uses BitOperationsMethodsOverride::IsPow2_6 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsPow2(mixed ...$args){}
	/**
	 * @uses BitOperationsMethodsOverride::RoundUpToPowerOf2_1 ($value)
	 * @uses BitOperationsMethodsOverride::RoundUpToPowerOf2_2 ($value)
	 * @uses BitOperationsMethodsOverride::RoundUpToPowerOf2_3 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function RoundUpToPowerOf2(mixed ...$args){}
	/**
	 * @uses BitOperationsMethodsOverride::LeadingZeroCount_1 ($value)
	 * @uses BitOperationsMethodsOverride::LeadingZeroCount_2 ($value)
	 * @uses BitOperationsMethodsOverride::LeadingZeroCount_3 ($value)
	 * @uses BitOperationsMethodsOverride::LeadingZeroCount_4 ($value)
	 * @uses BitOperationsMethodsOverride::LeadingZeroCount_5 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function LeadingZeroCount(mixed ...$args){}
	/**
	 * @uses BitOperationsMethodsOverride::Log2_1 ($value)
	 * @uses BitOperationsMethodsOverride::Log2_2 ($value)
	 * @uses BitOperationsMethodsOverride::Log2_3 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Log2(mixed ...$args){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Log2SoftwareFallback($value){}
	/**
	 * @uses BitOperationsMethodsOverride::Log2Ceiling_1 ($value)
	 * @uses BitOperationsMethodsOverride::Log2Ceiling_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Log2Ceiling(mixed ...$args){}
	/**
	 * @uses BitOperationsMethodsOverride::PopCount_1 ($value)
	 * @uses BitOperationsMethodsOverride::PopCount_2 ($value)
	 * @uses BitOperationsMethodsOverride::PopCount_3 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function PopCount(mixed ...$args){}
	/**
	 * @uses BitOperationsMethodsOverride::TrailingZeroCount_1 ($value)
	 * @uses BitOperationsMethodsOverride::TrailingZeroCount_2 ($value)
	 * @uses BitOperationsMethodsOverride::TrailingZeroCount_3 ($value)
	 * @uses BitOperationsMethodsOverride::TrailingZeroCount_4 ($value)
	 * @uses BitOperationsMethodsOverride::TrailingZeroCount_5 ($value)
	 * @uses BitOperationsMethodsOverride::TrailingZeroCount_6 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TrailingZeroCount(mixed ...$args){}
	/**
	 * @uses BitOperationsMethodsOverride::RotateLeft_1 ($value, $offset)
	 * @uses BitOperationsMethodsOverride::RotateLeft_2 ($value, $offset)
	 * @uses BitOperationsMethodsOverride::RotateLeft_3 ($value, $offset)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function RotateLeft(mixed ...$args){}
	/**
	 * @uses BitOperationsMethodsOverride::RotateRight_1 ($value, $offset)
	 * @uses BitOperationsMethodsOverride::RotateRight_2 ($value, $offset)
	 * @uses BitOperationsMethodsOverride::RotateRight_3 ($value, $offset)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function RotateRight(mixed ...$args){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\UInt32
	 */
	protected static function ResetLowestSetBit($value){}
	/**
	 * @param \System\UInt32 $value
	 * @param \System\Int32|int $bitPos
	 * @return \System\UInt32
	 */
	protected static function ResetBit($value, $bitPos){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
