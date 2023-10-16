<?php
namespace System\Numerics;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
interface IFloatingPoint_1
{
	/**
	 * @param \System\Numerics\TSelf $x
	 */
	public function Ceiling($x){}
	/**
	 * @param \System\Numerics\TSelf $x
	 */
	public function Floor($x){}
	/**
	 * @param \System\Numerics\TSelf $x
	 */
	public function Truncate($x){}
	/**
	 */
	public function GetExponentByteCount();
	/**
	 */
	public function GetExponentShortestBitLength();
	/**
	 */
	public function GetSignificandBitLength();
	/**
	 */
	public function GetSignificandByteCount();
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $bytesWritten
	 */
	public function TryWriteExponentBigEndian($destination, $bytesWritten);
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $bytesWritten
	 */
	public function TryWriteExponentLittleEndian($destination, $bytesWritten);
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $bytesWritten
	 */
	public function TryWriteSignificandBigEndian($destination, $bytesWritten);
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $bytesWritten
	 */
	public function TryWriteSignificandLittleEndian($destination, $bytesWritten);
}
