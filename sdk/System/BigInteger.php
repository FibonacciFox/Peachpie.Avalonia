<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BigIntegerMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Add_1($lhs, $rhs, $result){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Add_2($value){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function CountSignificantBits_1($value){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function CountSignificantBits_2($value){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function CountSignificantBits_3($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Multiply_1($lhs, $value, $result){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Multiply_2($lhs, $rhs, $result){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Multiply_3($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Multiply_4($value){}
}
/**
 */
class BigInteger extends \System\ValueType
{
	/**
	 * @uses BigIntegerMethodsOverride::Add_1 ($lhs, $rhs, $result)
	 * @uses BigIntegerMethodsOverride::Add_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @param \System\BigInteger& $lhs
	 * @param \System\BigInteger& $rhs
	 * @return \System\Int32|int
	 */
	public static function Compare($lhs, $rhs){}
	/**
	 * @uses BigIntegerMethodsOverride::CountSignificantBits_1 ($value)
	 * @uses BigIntegerMethodsOverride::CountSignificantBits_2 ($value)
	 * @uses BigIntegerMethodsOverride::CountSignificantBits_3 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CountSignificantBits(mixed ...$args){}
	/**
	 * @param \System\BigInteger& $lhs
	 * @param \System\BigInteger& $rhs
	 * @param \System\BigInteger& $quo
	 * @param \System\BigInteger& $rem
	 * @return \System\Void|void
	 */
	public static function DivRem($lhs, $rhs, $quo, $rem){}
	/**
	 * @param \System\BigInteger& $dividend
	 * @param \System\BigInteger& $divisor
	 * @return \System\UInt32
	 */
	public static function HeuristicDivide($dividend, $divisor){}
	/**
	 * @uses BigIntegerMethodsOverride::Multiply_1 ($lhs, $value, $result)
	 * @uses BigIntegerMethodsOverride::Multiply_2 ($lhs, $rhs, $result)
	 * @uses BigIntegerMethodsOverride::Multiply_3 ($value)
	 * @uses BigIntegerMethodsOverride::Multiply_4 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Multiply(mixed ...$args){}
	/**
	 * @param \System\UInt32 $exponent
	 * @param \System\BigInteger& $result
	 * @return \System\Void|void
	 */
	public static function Pow2($exponent, $result){}
	/**
	 * @param \System\UInt32 $exponent
	 * @param \System\BigInteger& $result
	 * @return \System\Void|void
	 */
	public static function Pow10($exponent, $result){}
	/**
	 * @param \System\BigInteger& $lhs
	 * @param \System\Int32|int $lhsStartIndex
	 * @param \System\BigInteger& $rhs
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AddDivisor($lhs, $lhsStartIndex, $rhs){}
	/**
	 * @param \System\UInt64 $q
	 * @param \System\UInt64 $valHi
	 * @param \System\UInt32 $valLo
	 * @param \System\UInt32 $divHi
	 * @param \System\UInt32 $divLo
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DivideGuessTooBig($q, $valHi, $valLo, $divHi, $divLo){}
	/**
	 * @param \System\BigInteger& $lhs
	 * @param \System\Int32|int $lhsStartIndex
	 * @param \System\BigInteger& $rhs
	 * @param \System\UInt64 $q
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SubtractDivisor($lhs, $lhsStartIndex, $rhs, $q){}
	/**
	 * @param \System\UInt32 $index
	 * @return \System\UInt32
	 */
	public  function GetBlock($index){}
	/**
	 * @return \System\Int32|int
	 */
	public  function GetLength(){}
	/**
	 * @return \System\Boolean
	 */
	public  function IsZero(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Multiply10(){}
	/**
	 * @param \System\UInt32 $exponent
	 * @return \System\Void|void
	 */
	public  function MultiplyPow10($exponent){}
	/**
	 * @param \System\BigInteger& $result
	 * @param \System\UInt32 $value
	 * @return \System\Void|void
	 */
	public static function SetUInt32($result, $value){}
	/**
	 * @param \System\BigInteger& $result
	 * @param \System\UInt64 $value
	 * @return \System\Void|void
	 */
	public static function SetUInt64($result, $value){}
	/**
	 * @param \System\BigInteger& $result
	 * @param \System\BigInteger& $value
	 * @return \System\Void|void
	 */
	public static function SetValue($result, $value){}
	/**
	 * @param \System\BigInteger& $result
	 * @return \System\Void|void
	 */
	public static function SetZero($result){}
	/**
	 * @param \System\UInt32 $shift
	 * @return \System\Void|void
	 */
	public  function ShiftLeft($shift){}
	/**
	 * @return \System\UInt32
	 */
	public  function ToUInt32(){}
	/**
	 * @return \System\UInt64
	 */
	public  function ToUInt64(){}
	/**
	 * @param \System\UInt32 $length
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Clear($length){}
	/**
	 * @param \System\UInt32 $value
	 * @param \System\UInt32& $remainder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DivRem32($value, $remainder){}
}
