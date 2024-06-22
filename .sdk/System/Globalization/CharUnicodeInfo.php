<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CharUnicodeInfoOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Int32|int $index
	 * @return \System\Globalization\StrongBidiCategory
	 */
	#[MethodOverride]protected static function GetBidiCategory_1 ($s, $index){}
	/**
	 * @deprecated
	 * @param \System\Text\StringBuilder $s
	 * @param \System\Int32|int $index
	 * @return \System\Globalization\StrongBidiCategory
	 */
	#[MethodOverride]protected static function GetBidiCategory_2 ($s, $index){}
	/**
	 * @deprecated
	 * @param \System\Char $ch
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function GetDecimalDigitValue_1 ($ch){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Int32|int $index
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function GetDecimalDigitValue_2 ($s, $index){}
	/**
	 * @deprecated
	 * @param \System\Char $ch
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function GetDigitValue_1 ($ch){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Int32|int $index
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function GetDigitValue_2 ($s, $index){}
	/**
	 * @deprecated
	 * @param \System\Char $ch
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function GetNumericValue_1 ($ch){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $codePoint
	 * @return \System\Double|double
	 */
	#[MethodOverride]protected static function GetNumericValue_2 ($codePoint){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Int32|int $index
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function GetNumericValue_3 ($s, $index){}
	/**
	 * @deprecated
	 * @param \System\Char $codePoint
	 * @return \System\Char
	 */
	#[MethodOverride]protected static function ToUpper_1 ($codePoint){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $codePoint
	 * @return \System\UInt32
	 */
	#[MethodOverride]protected static function ToUpper_2 ($codePoint){}
	/**
	 * @deprecated
	 * @param \System\Char $codePoint
	 * @return \System\Char
	 */
	#[MethodOverride]protected static function ToLower_1 ($codePoint){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $codePoint
	 * @return \System\UInt32
	 */
	#[MethodOverride]protected static function ToLower_2 ($codePoint){}
	/**
	 * @deprecated
	 * @param \System\Char $ch
	 * @return \System\Globalization\UnicodeCategory
	 */
	#[MethodOverride]public static function GetUnicodeCategory_1 ($ch){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $codePoint
	 * @return \System\Globalization\UnicodeCategory
	 */
	#[MethodOverride]public static function GetUnicodeCategory_2 ($codePoint){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Int32|int $index
	 * @return \System\Globalization\UnicodeCategory
	 */
	#[MethodOverride]public static function GetUnicodeCategory_3 ($s, $index){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @param \System\Int32|int $index
	 * @return \System\Globalization\UnicodeCategory
	 */
	#[MethodOverride]protected static function GetUnicodeCategoryInternal_1 ($value, $index){}
	/**
	 * @deprecated
	 * @param \System\String|string $str
	 * @param \System\Int32|int $index
	 * @param \System\Int32& &$charLength
	 * @return \System\Globalization\UnicodeCategory
	 */
	#[MethodOverride]protected static function GetUnicodeCategoryInternal_2 ($str, $index, &$charLength){}
}
class CharUnicodeInfo extends \System\Object
{
	use CharUnicodeInfoOverride;


	/**
	 * @uses CharUnicodeInfoOverride::GetBidiCategory_1 <br>protected , args: ($s, $index)<br>
	 * @uses CharUnicodeInfoOverride::GetBidiCategory_2 <br>protected , args: ($s, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Globalization\StrongBidiCategory|mixed|\override
	 */
	#[MethodOverrideProtected]function GetBidiCategory (\override ...$args){}
	private static function GetBidiCategoryNoBoundsChecks($codePoint){}
	/**
	 * @uses CharUnicodeInfoOverride::GetDecimalDigitValue_1 <br>public , args: ($ch)<br>
	 * @uses CharUnicodeInfoOverride::GetDecimalDigitValue_2 <br>public , args: ($s, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function GetDecimalDigitValue (\override ...$args){}
	private static function GetDecimalDigitValueInternalNoBoundsCheck($codePoint){}
	/**
	 * @uses CharUnicodeInfoOverride::GetDigitValue_1 <br>public , args: ($ch)<br>
	 * @uses CharUnicodeInfoOverride::GetDigitValue_2 <br>public , args: ($s, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function GetDigitValue (\override ...$args){}
	private static function GetDigitValueInternalNoBoundsCheck($codePoint){}
	/**
	 * @param \System\Text\Rune $rune
	 * @return \System\Text\Unicode\GraphemeClusterBreakType
	 */
	protected static function GetGraphemeClusterBreakType($rune){}
	/**
	 * @param \System\Char $ch
	 * @return \System\Boolean|bool
	 */
	protected static function GetIsWhiteSpace($ch){}
	/**
	 * @uses CharUnicodeInfoOverride::GetNumericValue_1 <br>public , args: ($ch)<br>
	 * @uses CharUnicodeInfoOverride::GetNumericValue_2 <br>protected , args: ($codePoint)<br>
	 * @uses CharUnicodeInfoOverride::GetNumericValue_3 <br>public , args: ($s, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Double|double|mixed|\override
	 */
	#[MethodOverridePublic]function GetNumericValue (\override ...$args){}
	/**
	 * @param \System\String|string $s
	 * @param \System\Int32|int $index
	 * @return \System\Double|double
	 */
	protected static function GetNumericValueInternal($s, $index){}
	private static function GetNumericValueNoBoundsCheck($codePoint){}
	/**
	 * @uses CharUnicodeInfoOverride::ToUpper_1 <br>protected , args: ($codePoint)<br>
	 * @uses CharUnicodeInfoOverride::ToUpper_2 <br>protected , args: ($codePoint)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Char|\System\UInt32|mixed|\override
	 */
	#[MethodOverrideProtected]function ToUpper (\override ...$args){}
	/**
	 * @uses CharUnicodeInfoOverride::ToLower_1 <br>protected , args: ($codePoint)<br>
	 * @uses CharUnicodeInfoOverride::ToLower_2 <br>protected , args: ($codePoint)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Char|\System\UInt32|mixed|\override
	 */
	#[MethodOverrideProtected]function ToLower (\override ...$args){}
	/**
	 * @uses CharUnicodeInfoOverride::GetUnicodeCategory_1 <br>public , args: ($ch)<br>
	 * @uses CharUnicodeInfoOverride::GetUnicodeCategory_2 <br>public , args: ($codePoint)<br>
	 * @uses CharUnicodeInfoOverride::GetUnicodeCategory_3 <br>public , args: ($s, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Globalization\UnicodeCategory|mixed|\override
	 */
	#[MethodOverridePublic]function GetUnicodeCategory (\override ...$args){}
	/**
	 * @uses CharUnicodeInfoOverride::GetUnicodeCategoryInternal_1 <br>protected , args: ($value, $index)<br>
	 * @uses CharUnicodeInfoOverride::GetUnicodeCategoryInternal_2 <br>protected , args: ($str, $index, &$charLength)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Globalization\UnicodeCategory|mixed|\override
	 */
	#[MethodOverrideProtected]function GetUnicodeCategoryInternal (\override ...$args){}
	private static function GetUnicodeCategoryNoBoundsChecks($codePoint){}
	private static function GetCodePointFromString($s, $index){}
	private static function GetCategoryCasingTableOffsetNoBoundsChecks($codePoint){}
	private static function GetNumericGraphemeTableOffsetNoBoundsChecks($codePoint){}
}