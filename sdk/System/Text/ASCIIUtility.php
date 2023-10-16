<?php
namespace System\Text;
/**
 */
class ASCIIUtility extends \System\Object
{
	/**
	 * @param \System\UInt64 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AllBytesInUInt64AreAscii($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AllCharsInUInt32AreAscii($value){}
	/**
	 * @param \System\UInt64 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AllCharsInUInt64AreAscii($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FirstCharInUInt32IsAscii($value){}
	/**
	 * @param \System\Byte* $pBuffer
	 * @param \System\UIntPtr $bufferLength
	 * @return \System\UIntPtr
	 */
	public static function GetIndexOfFirstNonAsciiByte($pBuffer, $bufferLength){}
	/**
	 * @param \System\Byte* $pBuffer
	 * @param \System\UIntPtr $bufferLength
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetIndexOfFirstNonAsciiByte_Default($pBuffer, $bufferLength){}
	/**
	 * @param \System\UInt32 $sseMask
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ContainsNonAsciiByte_Sse2($sseMask){}
	/**
	 * @param \System\Byte* $pBuffer
	 * @param \System\UIntPtr $bufferLength
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetIndexOfFirstNonAsciiByte_Intrinsified($pBuffer, $bufferLength){}
	/**
	 * @param \System\Char* $pBuffer
	 * @param \System\UIntPtr $bufferLength
	 * @return \System\UIntPtr
	 */
	public static function GetIndexOfFirstNonAsciiChar($pBuffer, $bufferLength){}
	/**
	 * @param \System\Char* $pBuffer
	 * @param \System\UIntPtr $bufferLength
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetIndexOfFirstNonAsciiChar_Default($pBuffer, $bufferLength){}
	/**
	 * @param \System\Char* $pBuffer
	 * @param \System\UIntPtr $bufferLength
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetIndexOfFirstNonAsciiChar_Intrinsified($pBuffer, $bufferLength){}
	/**
	 * @param \System\Byte& $outputBuffer
	 * @param \System\UInt64 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NarrowFourUtf16CharsToAsciiAndWriteToBuffer($outputBuffer, $value){}
	/**
	 * @param \System\Byte& $outputBuffer
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NarrowTwoUtf16CharsToAsciiAndWriteToBuffer($outputBuffer, $value){}
	/**
	 * @param \System\Char* $pUtf16Buffer
	 * @param \System\Byte* $pAsciiBuffer
	 * @param \System\UIntPtr $elementCount
	 * @return \System\UIntPtr
	 */
	public static function NarrowUtf16ToAscii($pUtf16Buffer, $pAsciiBuffer, $elementCount){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $utf16Vector
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function VectorContainsNonAsciiChar($utf16Vector){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $vectorFirst
	 * @param \System\Runtime\Intrinsics\Vector128_1 $vectorSecond
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ExtractAsciiVector($vectorFirst, $vectorSecond){}
	/**
	 * @param \System\Char* $pUtf16Buffer
	 * @param \System\Byte* $pAsciiBuffer
	 * @param \System\UIntPtr $elementCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NarrowUtf16ToAscii_Intrinsified($pUtf16Buffer, $pAsciiBuffer, $elementCount){}
	/**
	 * @param \System\Byte* $pAsciiBuffer
	 * @param \System\Char* $pUtf16Buffer
	 * @param \System\UIntPtr $elementCount
	 * @return \System\UIntPtr
	 */
	public static function WidenAsciiToUtf16($pAsciiBuffer, $pUtf16Buffer, $elementCount){}
	/**
	 * @param \System\Byte* $pAsciiBuffer
	 * @param \System\Char* $pUtf16Buffer
	 * @param \System\UIntPtr $elementCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WidenAsciiToUtf16_Intrinsified($pAsciiBuffer, $pUtf16Buffer, $elementCount){}
	/**
	 * @param \System\Char& $outputBuffer
	 * @param \System\UInt32 $value
	 * @return \System\Void|void
	 */
	protected static function WidenFourAsciiBytesToUtf16AndWriteToBuffer($outputBuffer, $value){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\Boolean
	 */
	protected static function AllBytesInUInt32AreAscii($value){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\UInt32
	 */
	protected static function CountNumberOfLeadingAsciiBytesFromUInt32WithSomeNonAsciiData($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
