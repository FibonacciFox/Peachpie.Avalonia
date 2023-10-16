<?php
namespace System\Text\Unicode;
/**
 */
class Utf16Utility extends \System\Object
{
	/**
	 * @param \System\UInt32 $value
	 * @return \System\Boolean
	 */
	protected static function AllCharsInUInt32AreAscii($value){}
	/**
	 * @param \System\UInt64 $value
	 * @return \System\Boolean
	 */
	protected static function AllCharsInUInt64AreAscii($value){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\UInt32
	 */
	protected static function ConvertAllAsciiCharsInUInt32ToLowercase($value){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\UInt32
	 */
	protected static function ConvertAllAsciiCharsInUInt32ToUppercase($value){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\Boolean
	 */
	protected static function UInt32ContainsAnyLowercaseAsciiChar($value){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\Boolean
	 */
	protected static function UInt32ContainsAnyUppercaseAsciiChar($value){}
	/**
	 * @param \System\UInt32 $valueA
	 * @param \System\UInt32 $valueB
	 * @return \System\Boolean
	 */
	protected static function UInt32OrdinalIgnoreCaseAscii($valueA, $valueB){}
	/**
	 * @param \System\UInt64 $valueA
	 * @param \System\UInt64 $valueB
	 * @return \System\Boolean
	 */
	protected static function UInt64OrdinalIgnoreCaseAscii($valueA, $valueB){}
	/**
	 * @param \System\Char* $pInputBuffer
	 * @param \System\Int32|int $inputLength
	 * @param \System\Int64& $utf8CodeUnitCountAdjustment
	 * @param \System\Int32& $scalarCountAdjustment
	 * @return \System\Char*
	 */
	public static function GetPointerToFirstInvalidChar($pInputBuffer, $inputLength, $utf8CodeUnitCountAdjustment, $scalarCountAdjustment){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
