<?php
namespace System\Text;
/**
 */
class Latin1Utility extends \System\Object
{
	/**
	 * @param \System\Char* $pBuffer
	 * @param \System\UIntPtr $bufferLength
	 * @return \System\UIntPtr
	 */
	public static function GetIndexOfFirstNonLatin1Char($pBuffer, $bufferLength){}
	/**
	 * @param \System\Char* $pBuffer
	 * @param \System\UIntPtr $bufferLength
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetIndexOfFirstNonLatin1Char_Default($pBuffer, $bufferLength){}
	/**
	 * @param \System\Char* $pBuffer
	 * @param \System\UIntPtr $bufferLength
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetIndexOfFirstNonLatin1Char_Sse2($pBuffer, $bufferLength){}
	/**
	 * @param \System\Char* $pUtf16Buffer
	 * @param \System\Byte* $pLatin1Buffer
	 * @param \System\UIntPtr $elementCount
	 * @return \System\UIntPtr
	 */
	public static function NarrowUtf16ToLatin1($pUtf16Buffer, $pLatin1Buffer, $elementCount){}
	/**
	 * @param \System\Char* $pUtf16Buffer
	 * @param \System\Byte* $pLatin1Buffer
	 * @param \System\UIntPtr $elementCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NarrowUtf16ToLatin1_Sse2($pUtf16Buffer, $pLatin1Buffer, $elementCount){}
	/**
	 * @param \System\Byte* $pLatin1Buffer
	 * @param \System\Char* $pUtf16Buffer
	 * @param \System\UIntPtr $elementCount
	 * @return \System\Void|void
	 */
	public static function WidenLatin1ToUtf16($pLatin1Buffer, $pUtf16Buffer, $elementCount){}
	/**
	 * @param \System\Byte* $pLatin1Buffer
	 * @param \System\Char* $pUtf16Buffer
	 * @param \System\UIntPtr $elementCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WidenLatin1ToUtf16_Sse2($pLatin1Buffer, $pUtf16Buffer, $elementCount){}
	/**
	 * @param \System\Byte* $pLatin1Buffer
	 * @param \System\Char* $pUtf16Buffer
	 * @param \System\UIntPtr $elementCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WidenLatin1ToUtf16_Fallback($pLatin1Buffer, $pUtf16Buffer, $elementCount){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AllCharsInUInt32AreLatin1($value){}
	/**
	 * @param \System\UInt64 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AllCharsInUInt64AreLatin1($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FirstCharInUInt32IsLatin1($value){}
	/**
	 * @param \System\Byte& $outputBuffer
	 * @param \System\UInt64 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NarrowFourUtf16CharsToLatin1AndWriteToBuffer($outputBuffer, $value){}
	/**
	 * @param \System\Byte& $outputBuffer
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NarrowTwoUtf16CharsToLatin1AndWriteToBuffer($outputBuffer, $value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
