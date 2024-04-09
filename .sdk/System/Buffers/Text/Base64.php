<?php
namespace System\Buffers\Text;
class Base64 extends \System\Object
{

	/**
	 * @param \System\ReadOnlySpan_1 $bytes [generic: System\Byte]
	 * @param \System\Span_1 $utf8 [generic: System\Byte]
	 * @param \System\Int32& &$bytesConsumed
	 * @param \System\Int32& &$bytesWritten
	 * @param \System\Boolean|bool $isFinalBlock
	 * @return \System\Buffers\OperationStatus
	 */
	public static function EncodeToUtf8($bytes, $utf8, &$bytesConsumed, &$bytesWritten, $isFinalBlock){}
	/**
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	public static function GetMaxEncodedToUtf8Length($length){}
	/**
	 * @param \System\Span_1 $buffer [generic: System\Byte]
	 * @param \System\Int32|int $dataLength
	 * @param \System\Int32& &$bytesWritten
	 * @return \System\Buffers\OperationStatus
	 */
	public static function EncodeToUtf8InPlace($buffer, $dataLength, &$bytesWritten){}
	private static function Avx2Encode($srcBytes, $destBytes, $srcEnd, $sourceLength, $destLength, $srcStart, $destStart){}
	private static function Vector128Encode($srcBytes, $destBytes, $srcEnd, $sourceLength, $destLength, $srcStart, $destStart){}
	private static function Encode($threeBytes, $encodingMap){}
	private static function EncodeAndPadOne($twoBytes, $encodingMap){}
	private static function EncodeAndPadTwo($oneByte, $encodingMap){}
	/**
	 * @param \System\ReadOnlySpan_1 $utf8 [generic: System\Byte]
	 * @param \System\Span_1 $bytes [generic: System\Byte]
	 * @param \System\Int32& &$bytesConsumed
	 * @param \System\Int32& &$bytesWritten
	 * @param \System\Boolean|bool $isFinalBlock
	 * @return \System\Buffers\OperationStatus
	 */
	public static function DecodeFromUtf8($utf8, $bytes, &$bytesConsumed, &$bytesWritten, $isFinalBlock){}
	/**
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	public static function GetMaxDecodedFromUtf8Length($length){}
	/**
	 * @param \System\Span_1 $buffer [generic: System\Byte]
	 * @param \System\Int32& &$bytesWritten
	 * @return \System\Buffers\OperationStatus
	 */
	public static function DecodeFromUtf8InPlace($buffer, &$bytesWritten){}
	private static function Avx2Decode($srcBytes, $destBytes, $srcEnd, $sourceLength, $destLength, $srcStart, $destStart){}
	private static function SimdShuffle($left, $right, $mask8F){}
	private static function Vector128Decode($srcBytes, $destBytes, $srcEnd, $sourceLength, $destLength, $srcStart, $destStart){}
	private static function Decode($encodedBytes, $decodingMap){}
	private static function WriteThreeLowOrderBytes($destination, $value){}
}