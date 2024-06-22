<?php
namespace System\Text;
class ASCIIUtility extends \System\Object
{


	private static function AllBytesInUInt64AreAscii($value){}
	private static function AllCharsInUInt32AreAscii($value){}
	private static function AllCharsInUInt64AreAscii($value){}
	private static function FirstCharInUInt32IsAscii($value){}
	/**
	 * @param \System\Byte* $pBuffer
	 * @param \System\UIntPtr $bufferLength
	 * @return \System\UIntPtr
	 */
	public static function GetIndexOfFirstNonAsciiByte($pBuffer, $bufferLength){}
	private static function GetIndexOfFirstNonAsciiByte_Default($pBuffer, $bufferLength){}
	private static function ContainsNonAsciiByte_Sse2($sseMask){}
	private static function GetIndexOfFirstNonAsciiByte_Intrinsified($pBuffer, $bufferLength){}
	/**
	 * @param \System\Char* $pBuffer
	 * @param \System\UIntPtr $bufferLength
	 * @return \System\UIntPtr
	 */
	public static function GetIndexOfFirstNonAsciiChar($pBuffer, $bufferLength){}
	private static function GetIndexOfFirstNonAsciiChar_Default($pBuffer, $bufferLength){}
	private static function GetIndexOfFirstNonAsciiChar_Intrinsified($pBuffer, $bufferLength){}
	private static function NarrowFourUtf16CharsToAsciiAndWriteToBuffer($outputBuffer, $value){}
	private static function NarrowTwoUtf16CharsToAsciiAndWriteToBuffer($outputBuffer, $value){}
	/**
	 * @param \System\Char* $pUtf16Buffer
	 * @param \System\Byte* $pAsciiBuffer
	 * @param \System\UIntPtr $elementCount
	 * @return \System\UIntPtr
	 */
	public static function NarrowUtf16ToAscii($pUtf16Buffer, $pAsciiBuffer, $elementCount){}
	private static function VectorContainsNonAsciiChar($utf16Vector){}
	private static function ExtractAsciiVector($vectorFirst, $vectorSecond){}
	private static function NarrowUtf16ToAscii_Intrinsified($pUtf16Buffer, $pAsciiBuffer, $elementCount){}
	/**
	 * @param \System\Byte* $pAsciiBuffer
	 * @param \System\Char* $pUtf16Buffer
	 * @param \System\UIntPtr $elementCount
	 * @return \System\UIntPtr
	 */
	public static function WidenAsciiToUtf16($pAsciiBuffer, $pUtf16Buffer, $elementCount){}
	private static function WidenAsciiToUtf16_Intrinsified($pAsciiBuffer, $pUtf16Buffer, $elementCount){}
	/**
	 * @param \System\Char& $outputBuffer
	 * @param \System\UInt32 $value
	 * @return \System\Void|void
	 */
	protected static function WidenFourAsciiBytesToUtf16AndWriteToBuffer($outputBuffer, $value){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\Boolean|bool
	 */
	protected static function AllBytesInUInt32AreAscii($value){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\UInt32
	 */
	protected static function CountNumberOfLeadingAsciiBytesFromUInt32WithSomeNonAsciiData($value){}
}