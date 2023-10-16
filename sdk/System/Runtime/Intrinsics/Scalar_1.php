<?php
namespace System\Runtime\Intrinsics;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Scalar_1MethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function Equals_1($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class Scalar_1 extends \System\Object
{
	/**
	 * @var \T
	 * @property
	 */
	public readonly $AllBitsSet;
	/**
	 * @var \T
	 * @property
	 */
	public readonly $One;
	/**
	 * @return \System\Runtime\Intrinsics\T
	 */
	public static function get_AllBitsSet(){}
	/**
	 * @return \System\Runtime\Intrinsics\T
	 */
	public static function get_One(){}
	/**
	 * @param \System\Runtime\Intrinsics\T $value
	 * @return \System\Runtime\Intrinsics\T
	 */
	public static function Abs($value){}
	/**
	 * @param \System\Runtime\Intrinsics\T $left
	 * @param \System\Runtime\Intrinsics\T $right
	 * @return \System\Runtime\Intrinsics\T
	 */
	public static function Add($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\T $value
	 * @return \System\Runtime\Intrinsics\T
	 */
	public static function Ceiling($value){}
	/**
	 * @param \System\Runtime\Intrinsics\T $left
	 * @param \System\Runtime\Intrinsics\T $right
	 * @return \System\Runtime\Intrinsics\T
	 */
	public static function Divide($left, $right){}
	/**
	 * @uses Scalar_1MethodsOverride::Equals_1 ($left, $right)
	 * @uses Scalar_1MethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\T $value
	 * @return \System\UInt32
	 */
	public static function ExtractMostSignificantBit($value){}
	/**
	 * @param \System\Runtime\Intrinsics\T $value
	 * @return \System\Runtime\Intrinsics\T
	 */
	public static function Floor($value){}
	/**
	 * @param \System\Runtime\Intrinsics\T $left
	 * @param \System\Runtime\Intrinsics\T $right
	 * @return \System\Boolean
	 */
	public static function GreaterThan($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\T $left
	 * @param \System\Runtime\Intrinsics\T $right
	 * @return \System\Boolean
	 */
	public static function GreaterThanOrEqual($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\T $left
	 * @param \System\Runtime\Intrinsics\T $right
	 * @return \System\Boolean
	 */
	public static function LessThan($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\T $left
	 * @param \System\Runtime\Intrinsics\T $right
	 * @return \System\Boolean
	 */
	public static function LessThanOrEqual($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\T $left
	 * @param \System\Runtime\Intrinsics\T $right
	 * @return \System\Runtime\Intrinsics\T
	 */
	public static function Multiply($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\T $left
	 * @param \System\Runtime\Intrinsics\T $right
	 * @return \System\Boolean
	 */
	public static function ObjectEquals($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\T $value
	 * @param \System\Int32|int $shiftCount
	 * @return \System\Runtime\Intrinsics\T
	 */
	public static function ShiftLeft($value, $shiftCount){}
	/**
	 * @param \System\Runtime\Intrinsics\T $value
	 * @param \System\Int32|int $shiftCount
	 * @return \System\Runtime\Intrinsics\T
	 */
	public static function ShiftRightArithmetic($value, $shiftCount){}
	/**
	 * @param \System\Runtime\Intrinsics\T $value
	 * @param \System\Int32|int $shiftCount
	 * @return \System\Runtime\Intrinsics\T
	 */
	public static function ShiftRightLogical($value, $shiftCount){}
	/**
	 * @param \System\Runtime\Intrinsics\T $value
	 * @return \System\Runtime\Intrinsics\T
	 */
	public static function Sqrt($value){}
	/**
	 * @param \System\Runtime\Intrinsics\T $left
	 * @param \System\Runtime\Intrinsics\T $right
	 * @return \System\Runtime\Intrinsics\T
	 */
	public static function Subtract($left, $right){}
}
