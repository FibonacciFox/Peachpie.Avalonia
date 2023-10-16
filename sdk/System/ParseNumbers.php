<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ParseNumbersMethodsOverride
{
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function StringToLong_1($s, $radix, $flags){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function StringToLong_2($s, $radix, $flags, $currPos){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function StringToInt_1($s, $radix, $flags){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function StringToInt_2($s, $radix, $flags, $currPos){}
}
/**
 */
class ParseNumbers extends \System\Object
{
	/**
	 * @uses ParseNumbersMethodsOverride::StringToLong_1 ($s, $radix, $flags)
	 * @uses ParseNumbersMethodsOverride::StringToLong_2 ($s, $radix, $flags, $currPos)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function StringToLong(mixed ...$args){}
	/**
	 * @uses ParseNumbersMethodsOverride::StringToInt_1 ($s, $radix, $flags)
	 * @uses ParseNumbersMethodsOverride::StringToInt_2 ($s, $radix, $flags, $currPos)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function StringToInt(mixed ...$args){}
	/**
	 * @param \System\Int32|int $n
	 * @param \System\Int32|int $radix
	 * @param \System\Int32|int $width
	 * @param \System\Char $paddingChar
	 * @param \System\Int32|int $flags
	 * @return \System\String|string
	 */
	public static function IntToString($n, $radix, $width, $paddingChar, $flags){}
	/**
	 * @param \System\Int64|int $n
	 * @param \System\Int32|int $radix
	 * @param \System\Int32|int $width
	 * @param \System\Char $paddingChar
	 * @param \System\Int32|int $flags
	 * @return \System\String|string
	 */
	public static function LongToString($n, $radix, $width, $paddingChar, $flags){}
	/**
	 * @param \System\ReadOnlySpan_1 $s
	 * @param \System\Int32& $i
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EatWhiteSpace($s, $i){}
	/**
	 * @param \System\Int32|int $radix
	 * @param \System\ReadOnlySpan_1 $s
	 * @param \System\Int32& $i
	 * @param \System\Boolean $isUnsigned
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GrabLongs($radix, $s, $i, $isUnsigned){}
	/**
	 * @param \System\Int32|int $radix
	 * @param \System\ReadOnlySpan_1 $s
	 * @param \System\Int32& $i
	 * @param \System\Boolean $isUnsigned
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GrabInts($radix, $s, $i, $isUnsigned){}
	/**
	 * @param \System\Char $c
	 * @param \System\Int32|int $radix
	 * @param \System\Int32& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsDigit($c, $radix, $result){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
