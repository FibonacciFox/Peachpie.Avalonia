<?php
namespace System\Buffers\Text;
/**
 */
class Base64 extends \System\Object
{
	/**
	 * @param \System\ReadOnlySpan_1 $bytes
	 * @param \System\Span_1 $utf8
	 * @param \System\Int32& $bytesConsumed
	 * @param \System\Int32& $bytesWritten
	 * @param \System\Boolean $isFinalBlock
	 * @return \System\Buffers\OperationStatus
	 */
	public static function EncodeToUtf8($bytes, $utf8, $bytesConsumed, $bytesWritten, $isFinalBlock){}
	/**
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	public static function GetMaxEncodedToUtf8Length($length){}
	/**
	 * @param \System\Span_1 $buffer
	 * @param \System\Int32|int $dataLength
	 * @param \System\Int32& $bytesWritten
	 * @return \System\Buffers\OperationStatus
	 */
	public static function EncodeToUtf8InPlace($buffer, $dataLength, $bytesWritten){}
	/**
	 * @param \System\Byte*& $srcBytes
	 * @param \System\Byte*& $destBytes
	 * @param \System\Byte* $srcEnd
	 * @param \System\Int32|int $sourceLength
	 * @param \System\Int32|int $destLength
	 * @param \System\Byte* $srcStart
	 * @param \System\Byte* $destStart
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Avx2Encode($srcBytes, $destBytes, $srcEnd, $sourceLength, $destLength, $srcStart, $destStart){}
	/**
	 * @param \System\Byte*& $srcBytes
	 * @param \System\Byte*& $destBytes
	 * @param \System\Byte* $srcEnd
	 * @param \System\Int32|int $sourceLength
	 * @param \System\Int32|int $destLength
	 * @param \System\Byte* $srcStart
	 * @param \System\Byte* $destStart
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Vector128Encode($srcBytes, $destBytes, $srcEnd, $sourceLength, $destLength, $srcStart, $destStart){}
	/**
	 * @param \System\Byte* $threeBytes
	 * @param \System\Byte& $encodingMap
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Encode($threeBytes, $encodingMap){}
	/**
	 * @param \System\Byte* $twoBytes
	 * @param \System\Byte& $encodingMap
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EncodeAndPadOne($twoBytes, $encodingMap){}
	/**
	 * @param \System\Byte* $oneByte
	 * @param \System\Byte& $encodingMap
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EncodeAndPadTwo($oneByte, $encodingMap){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_EncodingMap(){}
	/**
	 * @param \System\ReadOnlySpan_1 $utf8
	 * @param \System\Span_1 $bytes
	 * @param \System\Int32& $bytesConsumed
	 * @param \System\Int32& $bytesWritten
	 * @param \System\Boolean $isFinalBlock
	 * @return \System\Buffers\OperationStatus
	 */
	public static function DecodeFromUtf8($utf8, $bytes, $bytesConsumed, $bytesWritten, $isFinalBlock){}
	/**
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	public static function GetMaxDecodedFromUtf8Length($length){}
	/**
	 * @param \System\Span_1 $buffer
	 * @param \System\Int32& $bytesWritten
	 * @return \System\Buffers\OperationStatus
	 */
	public static function DecodeFromUtf8InPlace($buffer, $bytesWritten){}
	/**
	 * @param \System\Byte*& $srcBytes
	 * @param \System\Byte*& $destBytes
	 * @param \System\Byte* $srcEnd
	 * @param \System\Int32|int $sourceLength
	 * @param \System\Int32|int $destLength
	 * @param \System\Byte* $srcStart
	 * @param \System\Byte* $destStart
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Avx2Decode($srcBytes, $destBytes, $srcEnd, $sourceLength, $destLength, $srcStart, $destStart){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask8F
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SimdShuffle($left, $right, $mask8F){}
	/**
	 * @param \System\Byte*& $srcBytes
	 * @param \System\Byte*& $destBytes
	 * @param \System\Byte* $srcEnd
	 * @param \System\Int32|int $sourceLength
	 * @param \System\Int32|int $destLength
	 * @param \System\Byte* $srcStart
	 * @param \System\Byte* $destStart
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Vector128Decode($srcBytes, $destBytes, $srcEnd, $sourceLength, $destLength, $srcStart, $destStart){}
	/**
	 * @param \System\Byte* $encodedBytes
	 * @param \System\SByte& $decodingMap
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Decode($encodedBytes, $decodingMap){}
	/**
	 * @param \System\Byte* $destination
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WriteThreeLowOrderBytes($destination, $value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_DecodingMap(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
