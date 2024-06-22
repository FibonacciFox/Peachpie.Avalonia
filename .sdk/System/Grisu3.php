<?php
namespace System;
class Grisu3 extends \System\Object
{


	/**
	 * @param \System\Double|double $value
	 * @param \System\Int32|int $requestedDigits
	 * @param \System\Number+NumberBuffer& $number
	 * @return \System\Boolean|bool
	 */
	public static function TryRunDouble($value, $requestedDigits, $number){}
	/**
	 * @param \System\Half $value
	 * @param \System\Int32|int $requestedDigits
	 * @param \System\Number+NumberBuffer& $number
	 * @return \System\Boolean|bool
	 */
	public static function TryRunHalf($value, $requestedDigits, $number){}
	/**
	 * @param \System\Single $value
	 * @param \System\Int32|int $requestedDigits
	 * @param \System\Number+NumberBuffer& $number
	 * @return \System\Boolean|bool
	 */
	public static function TryRunSingle($value, $requestedDigits, $number){}
	private static function TryRunCounted(&$w, $requestedDigits, $buffer, &$length, &$decimalExponent){}
	private static function TryRunShortest(&$boundaryMinus, &$w, &$boundaryPlus, $buffer, &$length, &$decimalExponent){}
	private static function BiggestPowerTen($number, $numberBits, &$exponentPlusOne){}
	private static function TryDigitGenCounted(&$w, $requestedDigits, $buffer, &$length, &$kappa){}
	private static function TryDigitGenShortest(&$low, &$w, &$high, $buffer, &$length, &$kappa){}
	private static function GetCachedPowerForBinaryExponentRange($minExponent, $maxExponent, &$decimalExponent){}
	private static function TryRoundWeedCounted($buffer, $length, $rest, $tenKappa, $unit, $kappa){}
	private static function TryRoundWeedShortest($buffer, $length, $distanceTooHighW, $unsafeInterval, $rest, $tenKappa, $unit){}
}