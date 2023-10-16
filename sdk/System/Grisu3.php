<?php
namespace System;
/**
 */
class Grisu3 extends \System\Object
{
	/**
	 * @param \System\Double|double $value
	 * @param \System\Int32|int $requestedDigits
	 * @param \System\NumberBuffer& $number
	 * @return \System\Boolean
	 */
	public static function TryRunDouble($value, $requestedDigits, $number){}
	/**
	 * @param \System\Half $value
	 * @param \System\Int32|int $requestedDigits
	 * @param \System\NumberBuffer& $number
	 * @return \System\Boolean
	 */
	public static function TryRunHalf($value, $requestedDigits, $number){}
	/**
	 * @param \System\Single $value
	 * @param \System\Int32|int $requestedDigits
	 * @param \System\NumberBuffer& $number
	 * @return \System\Boolean
	 */
	public static function TryRunSingle($value, $requestedDigits, $number){}
	/**
	 * @param \System\DiyFp& $w
	 * @param \System\Int32|int $requestedDigits
	 * @param \System\Span_1 $buffer
	 * @param \System\Int32& $length
	 * @param \System\Int32& $decimalExponent
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryRunCounted($w, $requestedDigits, $buffer, $length, $decimalExponent){}
	/**
	 * @param \System\DiyFp& $boundaryMinus
	 * @param \System\DiyFp& $w
	 * @param \System\DiyFp& $boundaryPlus
	 * @param \System\Span_1 $buffer
	 * @param \System\Int32& $length
	 * @param \System\Int32& $decimalExponent
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryRunShortest($boundaryMinus, $w, $boundaryPlus, $buffer, $length, $decimalExponent){}
	/**
	 * @param \System\UInt32 $number
	 * @param \System\Int32|int $numberBits
	 * @param \System\Int32& $exponentPlusOne
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function BiggestPowerTen($number, $numberBits, $exponentPlusOne){}
	/**
	 * @param \System\DiyFp& $w
	 * @param \System\Int32|int $requestedDigits
	 * @param \System\Span_1 $buffer
	 * @param \System\Int32& $length
	 * @param \System\Int32& $kappa
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryDigitGenCounted($w, $requestedDigits, $buffer, $length, $kappa){}
	/**
	 * @param \System\DiyFp& $low
	 * @param \System\DiyFp& $w
	 * @param \System\DiyFp& $high
	 * @param \System\Span_1 $buffer
	 * @param \System\Int32& $length
	 * @param \System\Int32& $kappa
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryDigitGenShortest($low, $w, $high, $buffer, $length, $kappa){}
	/**
	 * @param \System\Int32|int $minExponent
	 * @param \System\Int32|int $maxExponent
	 * @param \System\Int32& $decimalExponent
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCachedPowerForBinaryExponentRange($minExponent, $maxExponent, $decimalExponent){}
	/**
	 * @param \System\Span_1 $buffer
	 * @param \System\Int32|int $length
	 * @param \System\UInt64 $rest
	 * @param \System\UInt64 $tenKappa
	 * @param \System\UInt64 $unit
	 * @param \System\Int32& $kappa
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryRoundWeedCounted($buffer, $length, $rest, $tenKappa, $unit, $kappa){}
	/**
	 * @param \System\Span_1 $buffer
	 * @param \System\Int32|int $length
	 * @param \System\UInt64 $distanceTooHighW
	 * @param \System\UInt64 $unsafeInterval
	 * @param \System\UInt64 $rest
	 * @param \System\UInt64 $tenKappa
	 * @param \System\UInt64 $unit
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryRoundWeedShortest($buffer, $length, $distanceTooHighW, $unsafeInterval, $rest, $tenKappa, $unit){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
