<?php
namespace System\Numerics;
interface IBinaryInteger_1
{

	/**
	 * @param \TSelf $left
	 * @param \TSelf $right
	 * @return \System\ValueTuple_2[TSelf,TSelf]
	 */
	public static function DivRem($left, $right){}
	/**
	 * @param \TSelf $value
	 * @return \TSelf
	 */
	public static function LeadingZeroCount($value){}
	/**
	 * @param \TSelf $value
	 * @return \TSelf
	 */
	public static function PopCount($value);
	/**
	 * @param \System\Byte $source
	 * @param \System\Boolean|bool $isUnsigned
	 * @return \TSelf
	 */
	public static function ReadBigEndian($source, $isUnsigned){}
	/**
	 * @param \System\Byte $source
	 * @param \System\Int32|int $startIndex
	 * @param \System\Boolean|bool $isUnsigned
	 * @return \TSelf
	 */
	public static function ReadBigEndian($source, $startIndex, $isUnsigned){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\Boolean|bool $isUnsigned
	 * @return \TSelf
	 */
	public static function ReadBigEndian($source, $isUnsigned){}
	/**
	 * @param \System\Byte $source
	 * @param \System\Boolean|bool $isUnsigned
	 * @return \TSelf
	 */
	public static function ReadLittleEndian($source, $isUnsigned){}
	/**
	 * @param \System\Byte $source
	 * @param \System\Int32|int $startIndex
	 * @param \System\Boolean|bool $isUnsigned
	 * @return \TSelf
	 */
	public static function ReadLittleEndian($source, $startIndex, $isUnsigned){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\Boolean|bool $isUnsigned
	 * @return \TSelf
	 */
	public static function ReadLittleEndian($source, $isUnsigned){}
	/**
	 * @param \TSelf $value
	 * @param \System\Int32|int $rotateAmount
	 * @return \TSelf
	 */
	public static function RotateLeft($value, $rotateAmount){}
	/**
	 * @param \TSelf $value
	 * @param \System\Int32|int $rotateAmount
	 * @return \TSelf
	 */
	public static function RotateRight($value, $rotateAmount){}
	/**
	 * @param \TSelf $value
	 * @return \TSelf
	 */
	public static function TrailingZeroCount($value);
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\Boolean|bool $isUnsigned
	 * @param \TSelf& &$value
	 * @return \System\Boolean|bool
	 */
	public static function TryReadBigEndian($source, $isUnsigned, &$value);
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\Boolean|bool $isUnsigned
	 * @param \TSelf& &$value
	 * @return \System\Boolean|bool
	 */
	public static function TryReadLittleEndian($source, $isUnsigned, &$value);
	/**
	 * @return \System\Int32|int
	 */
	public function GetByteCount();
	/**
	 * @return \System\Int32|int
	 */
	public function GetShortestBitLength();
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Int32& &$bytesWritten
	 * @return \System\Boolean|bool
	 */
	public function TryWriteBigEndian($destination, &$bytesWritten);
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Int32& &$bytesWritten
	 * @return \System\Boolean|bool
	 */
	public function TryWriteLittleEndian($destination, &$bytesWritten);
	/**
	 * @param \System\Byte $destination
	 * @return \System\Int32|int
	 */
	public function WriteBigEndian($destination){}
	/**
	 * @param \System\Byte $destination
	 * @param \System\Int32|int $startIndex
	 * @return \System\Int32|int
	 */
	public function WriteBigEndian($destination, $startIndex){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @return \System\Int32|int
	 */
	public function WriteBigEndian($destination){}
	/**
	 * @param \System\Byte $destination
	 * @return \System\Int32|int
	 */
	public function WriteLittleEndian($destination){}
	/**
	 * @param \System\Byte $destination
	 * @param \System\Int32|int $startIndex
	 * @return \System\Int32|int
	 */
	public function WriteLittleEndian($destination, $startIndex){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @return \System\Int32|int
	 */
	public function WriteLittleEndian($destination){}
}