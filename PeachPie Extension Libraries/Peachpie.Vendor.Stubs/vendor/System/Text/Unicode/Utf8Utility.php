<?php
namespace System\Text\Unicode;
class Utf8Utility extends \System\Object
{

	private static function ExtractCharFromFirstThreeByteSequence($value){}
	private static function ExtractCharFromFirstTwoByteSequence($value){}
	private static function ExtractCharsFromFourByteSequence($value){}
	private static function ExtractFourUtf8BytesFromSurrogatePair($value){}
	private static function ExtractTwoCharsPackedFromTwoAdjacentTwoByteSequences($value){}
	private static function ExtractTwoUtf8TwoByteSequencesFromTwoPackedUtf16Chars($value){}
	private static function ExtractUtf8TwoByteSequenceFromFirstUtf16Char($value){}
	private static function IsFirstCharAscii($value){}
	private static function IsFirstCharAtLeastThreeUtf8Bytes($value){}
	private static function IsFirstCharSurrogate($value){}
	private static function IsFirstCharTwoUtf8Bytes($value){}
	private static function IsLowByteUtf8ContinuationByte($value){}
	private static function IsSecondCharAscii($value){}
	private static function IsSecondCharAtLeastThreeUtf8Bytes($value){}
	private static function IsSecondCharSurrogate($value){}
	private static function IsSecondCharTwoUtf8Bytes($value){}
	/**
	 * @param \System\Byte& &$value
	 * @return \System\Boolean|bool
	 */
	protected static function IsUtf8ContinuationByte(&$value){}
	private static function IsWellFormedUtf16SurrogatePair($value){}
	private static function ToLittleEndian($value){}
	private static function UInt32BeginsWithOverlongUtf8TwoByteSequence($value){}
	private static function UInt32BeginsWithUtf8FourByteMask($value){}
	private static function UInt32BeginsWithUtf8ThreeByteMask($value){}
	private static function UInt32BeginsWithUtf8TwoByteMask($value){}
	private static function UInt32BeginsWithValidUtf8TwoByteSequenceLittleEndian($value){}
	private static function UInt32EndsWithValidUtf8TwoByteSequenceLittleEndian($value){}
	private static function UInt32FirstByteIsAscii($value){}
	private static function UInt32FourthByteIsAscii($value){}
	private static function UInt32SecondByteIsAscii($value){}
	private static function UInt32ThirdByteIsAscii($value){}
	private static function WriteTwoUtf16CharsAsTwoUtf8ThreeByteSequences($outputBuffer, $value){}
	private static function WriteFirstUtf16CharAsUtf8ThreeByteSequence($outputBuffer, $value){}
	/**
	 * @param \System\Byte* $pInputBuffer
	 * @param \System\Int32|int $inputLength
	 * @param \System\Char* $pOutputBuffer
	 * @param \System\Int32|int $outputCharsRemaining
	 * @param \System\Byte*& &$pInputBufferRemaining
	 * @param \System\Char*& &$pOutputBufferRemaining
	 * @return \System\Buffers\OperationStatus
	 */
	public static function TranscodeToUtf16($pInputBuffer, $inputLength, $pOutputBuffer, $outputCharsRemaining, &$pInputBufferRemaining, &$pOutputBufferRemaining){}
	/**
	 * @param \System\Char* $pInputBuffer
	 * @param \System\Int32|int $inputLength
	 * @param \System\Byte* $pOutputBuffer
	 * @param \System\Int32|int $outputBytesRemaining
	 * @param \System\Char*& &$pInputBufferRemaining
	 * @param \System\Byte*& &$pOutputBufferRemaining
	 * @return \System\Buffers\OperationStatus
	 */
	public static function TranscodeToUtf8($pInputBuffer, $inputLength, $pOutputBuffer, $outputBytesRemaining, &$pInputBufferRemaining, &$pOutputBufferRemaining){}
	/**
	 * @param \System\Byte* $pInputBuffer
	 * @param \System\Int32|int $inputLength
	 * @param \System\Int32& &$utf16CodeUnitCountAdjustment
	 * @param \System\Int32& &$scalarCountAdjustment
	 * @return \System\Byte*
	 */
	public static function GetPointerToFirstInvalidByte($pInputBuffer, $inputLength, &$utf16CodeUnitCountAdjustment, &$scalarCountAdjustment){}
}