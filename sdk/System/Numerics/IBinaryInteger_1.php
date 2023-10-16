<?php
namespace System\Numerics;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
interface IBinaryInteger_1
{
	/**
	 * @param \System\Numerics\TSelf $left
	 * @param \System\Numerics\TSelf $right
	 */
	public function DivRem($left, $right){}
	/**
	 * @param \System\Numerics\TSelf $value
	 */
	public function LeadingZeroCount($value){}
	/**
	 * @param \System\Numerics\TSelf $value
	 */
	public function PopCount($value);
	/**
	 * @param \System\Numerics\TSelf $value
	 * @param \System\Int32|int $rotateAmount
	 */
	public function RotateLeft($value, $rotateAmount){}
	/**
	 * @param \System\Numerics\TSelf $value
	 * @param \System\Int32|int $rotateAmount
	 */
	public function RotateRight($value, $rotateAmount){}
	/**
	 * @param \System\Numerics\TSelf $value
	 */
	public function TrailingZeroCount($value);
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Boolean $isUnsigned
	 * @param \System\Numerics\TSelf& $value
	 */
	public function TryReadBigEndian($source, $isUnsigned, $value);
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Boolean $isUnsigned
	 * @param \System\Numerics\TSelf& $value
	 */
	public function TryReadLittleEndian($source, $isUnsigned, $value);
	/**
	 */
	public function GetByteCount();
	/**
	 */
	public function GetShortestBitLength();
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $bytesWritten
	 */
	public function TryWriteBigEndian($destination, $bytesWritten);
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $bytesWritten
	 */
	public function TryWriteLittleEndian($destination, $bytesWritten);
}
