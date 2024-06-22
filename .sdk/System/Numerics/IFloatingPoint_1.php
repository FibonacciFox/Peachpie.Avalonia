<?php
namespace System\Numerics;
interface IFloatingPoint_1
{


	/**
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function Ceiling($x){}
	/**
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function Floor($x){}
	/**
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function Round($x){}
	/**
	 * @param \TSelf $x
	 * @param \System\Int32|int $digits
	 * @return \TSelf
	 */
	public static function Round($x, $digits){}
	/**
	 * @param \TSelf $x
	 * @param \System\MidpointRounding $mode
	 * @return \TSelf
	 */
	public static function Round($x, $mode){}
	/**
	 * @param \TSelf $x
	 * @param \System\Int32|int $digits
	 * @param \System\MidpointRounding $mode
	 * @return \TSelf
	 */
	public static function Round($x, $digits, $mode);
	/**
	 * @param \TSelf $x
	 * @return \TSelf
	 */
	public static function Truncate($x){}
	/**
	 * @return \System\Int32|int
	 */
	public function GetExponentByteCount();
	/**
	 * @return \System\Int32|int
	 */
	public function GetExponentShortestBitLength();
	/**
	 * @return \System\Int32|int
	 */
	public function GetSignificandBitLength();
	/**
	 * @return \System\Int32|int
	 */
	public function GetSignificandByteCount();
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Int32& &$bytesWritten
	 * @return \System\Boolean|bool
	 */
	public function TryWriteExponentBigEndian($destination, &$bytesWritten);
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Int32& &$bytesWritten
	 * @return \System\Boolean|bool
	 */
	public function TryWriteExponentLittleEndian($destination, &$bytesWritten);
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Int32& &$bytesWritten
	 * @return \System\Boolean|bool
	 */
	public function TryWriteSignificandBigEndian($destination, &$bytesWritten);
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Int32& &$bytesWritten
	 * @return \System\Boolean|bool
	 */
	public function TryWriteSignificandLittleEndian($destination, &$bytesWritten);
	/**
	 * @param \System\Byte $destination
	 * @return \System\Int32|int
	 */
	public function WriteExponentBigEndian($destination){}
	/**
	 * @param \System\Byte $destination
	 * @param \System\Int32|int $startIndex
	 * @return \System\Int32|int
	 */
	public function WriteExponentBigEndian($destination, $startIndex){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @return \System\Int32|int
	 */
	public function WriteExponentBigEndian($destination){}
	/**
	 * @param \System\Byte $destination
	 * @return \System\Int32|int
	 */
	public function WriteExponentLittleEndian($destination){}
	/**
	 * @param \System\Byte $destination
	 * @param \System\Int32|int $startIndex
	 * @return \System\Int32|int
	 */
	public function WriteExponentLittleEndian($destination, $startIndex){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @return \System\Int32|int
	 */
	public function WriteExponentLittleEndian($destination){}
	/**
	 * @param \System\Byte $destination
	 * @return \System\Int32|int
	 */
	public function WriteSignificandBigEndian($destination){}
	/**
	 * @param \System\Byte $destination
	 * @param \System\Int32|int $startIndex
	 * @return \System\Int32|int
	 */
	public function WriteSignificandBigEndian($destination, $startIndex){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @return \System\Int32|int
	 */
	public function WriteSignificandBigEndian($destination){}
	/**
	 * @param \System\Byte $destination
	 * @return \System\Int32|int
	 */
	public function WriteSignificandLittleEndian($destination){}
	/**
	 * @param \System\Byte $destination
	 * @param \System\Int32|int $startIndex
	 * @return \System\Int32|int
	 */
	public function WriteSignificandLittleEndian($destination, $startIndex){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @return \System\Int32|int
	 */
	public function WriteSignificandLittleEndian($destination){}
}