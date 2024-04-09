<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait BigIntegerOverride {
	/**
	 * @deprecated
	 * @param \System\Number+BigInteger& $lhs
	 * @param \System\Number+BigInteger& $rhs
	 * @param \System\Number+BigInteger& &$result
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Add_1 ($lhs, $rhs, &$result){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Add_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function CountSignificantBits_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt64 $value
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function CountSignificantBits_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Number+BigInteger& $value
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function CountSignificantBits_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\Number+BigInteger& $lhs
	 * @param \System\UInt32 $value
	 * @param \System\Number+BigInteger& &$result
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Multiply_1 ($lhs, $value, &$result){}
	/**
	 * @deprecated
	 * @param \System\Number+BigInteger& $lhs
	 * @param \System\Number+BigInteger& $rhs
	 * @param \System\Number+BigInteger& &$result
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Multiply_2 ($lhs, $rhs, &$result){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Multiply_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\Number+BigInteger& $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Multiply_4 ($value){}
}
final class BigInteger extends \System\ValueType
{
	use BigIntegerOverride;

	/**
	 * @uses BigIntegerOverride::Add_1 <br>public , args: ($lhs, $rhs, &$result)<br>
	 * @uses BigIntegerOverride::Add_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Add (\override ...$args){}
	/**
	 * @param \System\Number+BigInteger& $lhs
	 * @param \System\Number+BigInteger& $rhs
	 * @return \System\Int32|int
	 */
	public static function Compare($lhs, $rhs){}
	/**
	 * @uses BigIntegerOverride::CountSignificantBits_1 <br>public , args: ($value)<br>
	 * @uses BigIntegerOverride::CountSignificantBits_2 <br>public , args: ($value)<br>
	 * @uses BigIntegerOverride::CountSignificantBits_3 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\UInt32|mixed|\override
	 */
	#[MethodOverridePublic]function CountSignificantBits (\override ...$args){}
	/**
	 * @param \System\Number+BigInteger& $lhs
	 * @param \System\Number+BigInteger& $rhs
	 * @param \System\Number+BigInteger& &$quo
	 * @param \System\Number+BigInteger& &$rem
	 * @return \System\Void|void
	 */
	public static function DivRem($lhs, $rhs, &$quo, &$rem){}
	/**
	 * @param \System\Number+BigInteger& $dividend
	 * @param \System\Number+BigInteger& $divisor
	 * @return \System\UInt32
	 */
	public static function HeuristicDivide($dividend, $divisor){}
	/**
	 * @uses BigIntegerOverride::Multiply_1 <br>public , args: ($lhs, $value, &$result)<br>
	 * @uses BigIntegerOverride::Multiply_2 <br>public , args: ($lhs, $rhs, &$result)<br>
	 * @uses BigIntegerOverride::Multiply_3 <br>public , args: ($value)<br>
	 * @uses BigIntegerOverride::Multiply_4 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Multiply (\override ...$args){}
	/**
	 * @param \System\UInt32 $exponent
	 * @param \System\Number+BigInteger& &$result
	 * @return \System\Void|void
	 */
	public static function Pow2($exponent, &$result){}
	/**
	 * @param \System\UInt32 $exponent
	 * @param \System\Number+BigInteger& &$result
	 * @return \System\Void|void
	 */
	public static function Pow10($exponent, &$result){}
	private static function AddDivisor($lhs, $lhsStartIndex, $rhs){}
	private static function DivideGuessTooBig($q, $valHi, $valLo, $divHi, $divLo){}
	private static function SubtractDivisor($lhs, $lhsStartIndex, $rhs, $q){}
	/**
	 * @param \System\UInt32 $index
	 * @return \System\UInt32
	 */
	public function GetBlock($index){}
	/**
	 * @return \System\Int32|int
	 */
	public function GetLength(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function IsZero(){}
	/**
	 * @return \System\Void|void
	 */
	public function Multiply10(){}
	/**
	 * @param \System\UInt32 $exponent
	 * @return \System\Void|void
	 */
	public function MultiplyPow10($exponent){}
	/**
	 * @param \System\Number+BigInteger& &$result
	 * @param \System\UInt32 $value
	 * @return \System\Void|void
	 */
	public static function SetUInt32(&$result, $value){}
	/**
	 * @param \System\Number+BigInteger& &$result
	 * @param \System\UInt64 $value
	 * @return \System\Void|void
	 */
	public static function SetUInt64(&$result, $value){}
	/**
	 * @param \System\Number+BigInteger& &$result
	 * @param \System\Number+BigInteger& $value
	 * @return \System\Void|void
	 */
	public static function SetValue(&$result, $value){}
	/**
	 * @param \System\Number+BigInteger& &$result
	 * @return \System\Void|void
	 */
	public static function SetZero(&$result){}
	/**
	 * @param \System\UInt32 $shift
	 * @return \System\Void|void
	 */
	public function ShiftLeft($shift){}
	/**
	 * @return \System\UInt32
	 */
	public function ToUInt32(){}
	/**
	 * @return \System\UInt64
	 */
	public function ToUInt64(){}
	private function Clear($length){}
	private static function DivRem32($value, &$remainder){}
}