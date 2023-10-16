<?php
namespace System\Text\Unicode;
/**
 */
class Utf8Utility extends \System\Object
{
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ExtractCharFromFirstThreeByteSequence($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ExtractCharFromFirstTwoByteSequence($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ExtractCharsFromFourByteSequence($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ExtractFourUtf8BytesFromSurrogatePair($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ExtractTwoCharsPackedFromTwoAdjacentTwoByteSequences($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ExtractTwoUtf8TwoByteSequencesFromTwoPackedUtf16Chars($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ExtractUtf8TwoByteSequenceFromFirstUtf16Char($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsFirstCharAscii($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsFirstCharAtLeastThreeUtf8Bytes($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsFirstCharSurrogate($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsFirstCharTwoUtf8Bytes($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsLowByteUtf8ContinuationByte($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsSecondCharAscii($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsSecondCharAtLeastThreeUtf8Bytes($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsSecondCharSurrogate($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsSecondCharTwoUtf8Bytes($value){}
	/**
	 * @param \System\Byte& $value
	 * @return \System\Boolean
	 */
	protected static function IsUtf8ContinuationByte($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsWellFormedUtf16SurrogatePair($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ToLittleEndian($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UInt32BeginsWithOverlongUtf8TwoByteSequence($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UInt32BeginsWithUtf8FourByteMask($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UInt32BeginsWithUtf8ThreeByteMask($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UInt32BeginsWithUtf8TwoByteMask($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UInt32BeginsWithValidUtf8TwoByteSequenceLittleEndian($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UInt32EndsWithValidUtf8TwoByteSequenceLittleEndian($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UInt32FirstByteIsAscii($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UInt32FourthByteIsAscii($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UInt32SecondByteIsAscii($value){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UInt32ThirdByteIsAscii($value){}
	/**
	 * @param \System\Byte& $outputBuffer
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WriteTwoUtf16CharsAsTwoUtf8ThreeByteSequences($outputBuffer, $value){}
	/**
	 * @param \System\Byte& $outputBuffer
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WriteFirstUtf16CharAsUtf8ThreeByteSequence($outputBuffer, $value){}
	/**
	 * @param \System\Byte* $pInputBuffer
	 * @param \System\Int32|int $inputLength
	 * @param \System\Char* $pOutputBuffer
	 * @param \System\Int32|int $outputCharsRemaining
	 * @param \System\Byte*& $pInputBufferRemaining
	 * @param \System\Char*& $pOutputBufferRemaining
	 * @return \System\Buffers\OperationStatus
	 */
	public static function TranscodeToUtf16($pInputBuffer, $inputLength, $pOutputBuffer, $outputCharsRemaining, $pInputBufferRemaining, $pOutputBufferRemaining){}
	/**
	 * @param \System\Char* $pInputBuffer
	 * @param \System\Int32|int $inputLength
	 * @param \System\Byte* $pOutputBuffer
	 * @param \System\Int32|int $outputBytesRemaining
	 * @param \System\Char*& $pInputBufferRemaining
	 * @param \System\Byte*& $pOutputBufferRemaining
	 * @return \System\Buffers\OperationStatus
	 */
	public static function TranscodeToUtf8($pInputBuffer, $inputLength, $pOutputBuffer, $outputBytesRemaining, $pInputBufferRemaining, $pOutputBufferRemaining){}
	/**
	 * @param \System\Byte* $pInputBuffer
	 * @param \System\Int32|int $inputLength
	 * @param \System\Int32& $utf16CodeUnitCountAdjustment
	 * @param \System\Int32& $scalarCountAdjustment
	 * @return \System\Byte*
	 */
	public static function GetPointerToFirstInvalidByte($pInputBuffer, $inputLength, $utf16CodeUnitCountAdjustment, $scalarCountAdjustment){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
