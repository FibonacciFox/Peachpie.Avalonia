<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CharUnicodeInfoMethodsOverride
{
	/**
	 * @return \System\Globalization\StrongBidiCategory
	 */
	#[MethodOverride] protected static function GetBidiCategory_1($s, $index){}
	/**
	 * @return \System\Globalization\StrongBidiCategory
	 */
	#[MethodOverride] protected static function GetBidiCategory_2($s, $index){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function GetDecimalDigitValue_1($ch){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function GetDecimalDigitValue_2($s, $index){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function GetDigitValue_1($ch){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function GetDigitValue_2($s, $index){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function GetNumericValue_1($ch){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] protected static function GetNumericValue_2($codePoint){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function GetNumericValue_3($s, $index){}
	/**
	 * @return \System\Char
	 */
	#[MethodOverride] protected static function ToUpper_1($codePoint){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] protected static function ToUpper_2($codePoint){}
	/**
	 * @return \System\Char
	 */
	#[MethodOverride] protected static function ToLower_1($codePoint){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] protected static function ToLower_2($codePoint){}
	/**
	 * @return \System\Globalization\UnicodeCategory
	 */
	#[MethodOverride] public static function GetUnicodeCategory_1($ch){}
	/**
	 * @return \System\Globalization\UnicodeCategory
	 */
	#[MethodOverride] public static function GetUnicodeCategory_2($codePoint){}
	/**
	 * @return \System\Globalization\UnicodeCategory
	 */
	#[MethodOverride] public static function GetUnicodeCategory_3($s, $index){}
	/**
	 * @return \System\Globalization\UnicodeCategory
	 */
	#[MethodOverride] protected static function GetUnicodeCategoryInternal_1($value, $index){}
	/**
	 * @return \System\Globalization\UnicodeCategory
	 */
	#[MethodOverride] protected static function GetUnicodeCategoryInternal_2($str, $index, $charLength){}
}
/**
 */
class CharUnicodeInfo extends \System\Object
{
	/**
	 * @uses CharUnicodeInfoMethodsOverride::GetBidiCategory_1 ($s, $index)
	 * @uses CharUnicodeInfoMethodsOverride::GetBidiCategory_2 ($s, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetBidiCategory(mixed ...$args){}
	/**
	 * @param \System\UInt32 $codePoint
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetBidiCategoryNoBoundsChecks($codePoint){}
	/**
	 * @uses CharUnicodeInfoMethodsOverride::GetDecimalDigitValue_1 ($ch)
	 * @uses CharUnicodeInfoMethodsOverride::GetDecimalDigitValue_2 ($s, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetDecimalDigitValue(mixed ...$args){}
	/**
	 * @param \System\UInt32 $codePoint
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDecimalDigitValueInternalNoBoundsCheck($codePoint){}
	/**
	 * @uses CharUnicodeInfoMethodsOverride::GetDigitValue_1 ($ch)
	 * @uses CharUnicodeInfoMethodsOverride::GetDigitValue_2 ($s, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetDigitValue(mixed ...$args){}
	/**
	 * @param \System\UInt32 $codePoint
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDigitValueInternalNoBoundsCheck($codePoint){}
	/**
	 * @param \System\Text\Rune $rune
	 * @return \System\Text\Unicode\GraphemeClusterBreakType
	 */
	protected static function GetGraphemeClusterBreakType($rune){}
	/**
	 * @param \System\Char $ch
	 * @return \System\Boolean
	 */
	protected static function GetIsWhiteSpace($ch){}
	/**
	 * @uses CharUnicodeInfoMethodsOverride::GetNumericValue_1 ($ch)
	 * @uses CharUnicodeInfoMethodsOverride::GetNumericValue_2 ($codePoint)
	 * @uses CharUnicodeInfoMethodsOverride::GetNumericValue_3 ($s, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetNumericValue(mixed ...$args){}
	/**
	 * @param \System\String|string $s
	 * @param \System\Int32|int $index
	 * @return \System\Double|double
	 */
	protected static function GetNumericValueInternal($s, $index){}
	/**
	 * @param \System\UInt32 $codePoint
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetNumericValueNoBoundsCheck($codePoint){}
	/**
	 * @uses CharUnicodeInfoMethodsOverride::ToUpper_1 ($codePoint)
	 * @uses CharUnicodeInfoMethodsOverride::ToUpper_2 ($codePoint)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToUpper(mixed ...$args){}
	/**
	 * @uses CharUnicodeInfoMethodsOverride::ToLower_1 ($codePoint)
	 * @uses CharUnicodeInfoMethodsOverride::ToLower_2 ($codePoint)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToLower(mixed ...$args){}
	/**
	 * @uses CharUnicodeInfoMethodsOverride::GetUnicodeCategory_1 ($ch)
	 * @uses CharUnicodeInfoMethodsOverride::GetUnicodeCategory_2 ($codePoint)
	 * @uses CharUnicodeInfoMethodsOverride::GetUnicodeCategory_3 ($s, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetUnicodeCategory(mixed ...$args){}
	/**
	 * @uses CharUnicodeInfoMethodsOverride::GetUnicodeCategoryInternal_1 ($value, $index)
	 * @uses CharUnicodeInfoMethodsOverride::GetUnicodeCategoryInternal_2 ($str, $index, $charLength)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetUnicodeCategoryInternal(mixed ...$args){}
	/**
	 * @param \System\UInt32 $codePoint
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetUnicodeCategoryNoBoundsChecks($codePoint){}
	/**
	 * @param \System\String|string $s
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCodePointFromString($s, $index){}
	/**
	 * @param \System\UInt32 $codePoint
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCategoryCasingTableOffsetNoBoundsChecks($codePoint){}
	/**
	 * @param \System\UInt32 $codePoint
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetNumericGraphemeTableOffsetNoBoundsChecks($codePoint){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_CategoryCasingLevel1Index(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_CategoryCasingLevel2Index(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_CategoryCasingLevel3Index(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_CategoriesValues(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_UppercaseValues(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_LowercaseValues(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_NumericGraphemeLevel1Index(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_NumericGraphemeLevel2Index(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_NumericGraphemeLevel3Index(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_DigitValues(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_NumericValues(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_GraphemeSegmentationValues(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
