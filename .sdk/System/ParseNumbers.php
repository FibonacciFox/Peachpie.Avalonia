<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ParseNumbersOverride {
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Int32|int $radix
	 * @param \System\Int32|int $flags
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function StringToLong_1 ($s, $radix, $flags){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Int32|int $radix
	 * @param \System\Int32|int $flags
	 * @param \System\Int32& $currPos
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function StringToLong_2 ($s, $radix, $flags, $currPos){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Int32|int $radix
	 * @param \System\Int32|int $flags
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function StringToInt_1 ($s, $radix, $flags){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Int32|int $radix
	 * @param \System\Int32|int $flags
	 * @param \System\Int32& $currPos
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function StringToInt_2 ($s, $radix, $flags, $currPos){}
}
class ParseNumbers extends \System\Object
{
	use ParseNumbersOverride;


	/**
	 * @uses ParseNumbersOverride::StringToLong_1 <br>public , args: ($s, $radix, $flags)<br>
	 * @uses ParseNumbersOverride::StringToLong_2 <br>public , args: ($s, $radix, $flags, $currPos)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int64|int|mixed|\override
	 */
	#[MethodOverridePublic]function StringToLong (\override ...$args){}
	/**
	 * @uses ParseNumbersOverride::StringToInt_1 <br>public , args: ($s, $radix, $flags)<br>
	 * @uses ParseNumbersOverride::StringToInt_2 <br>public , args: ($s, $radix, $flags, $currPos)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function StringToInt (\override ...$args){}
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
	private static function EatWhiteSpace($s, $i){}
	private static function GrabLongs($radix, $s, $i, $isUnsigned){}
	private static function GrabInts($radix, $s, $i, $isUnsigned){}
	private static function IsDigit($c, $radix, &$result){}
}