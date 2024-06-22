<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EncodingByteBufferOverride {
	/**
	 * @deprecated
	 * @param \System\Byte $b
	 * @param \System\Int32|int $moreBytesExpected
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected function AddByte_1 ($b, $moreBytesExpected){}
	/**
	 * @deprecated
	 * @param \System\Byte $b1
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected function AddByte_2 ($b1){}
	/**
	 * @deprecated
	 * @param \System\Byte $b1
	 * @param \System\Byte $b2
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected function AddByte_3 ($b1, $b2){}
	/**
	 * @deprecated
	 * @param \System\Byte $b1
	 * @param \System\Byte $b2
	 * @param \System\Int32|int $moreBytesExpected
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected function AddByte_4 ($b1, $b2, $moreBytesExpected){}
}
final class EncodingByteBuffer extends \System\Object
{
	use EncodingByteBufferOverride;

	/**
	 * @field
	 * @var \System\Text\EncoderFallbackBuffer
	 */
	protected $fallbackBuffer;
	/**
	 * @uses EncodingByteBufferOverride::AddByte_1 <br>protected , args: ($b, $moreBytesExpected)<br>
	 * @uses EncodingByteBufferOverride::AddByte_2 <br>protected , args: ($b1)<br>
	 * @uses EncodingByteBufferOverride::AddByte_3 <br>protected , args: ($b1, $b2)<br>
	 * @uses EncodingByteBufferOverride::AddByte_4 <br>protected , args: ($b1, $b2, $moreBytesExpected)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function AddByte (\override ...$args){}
	/**
	 * @param \System\Boolean|bool $bThrow
	 * @return \System\Void|void
	 */
	protected function MovePrevious($bThrow){}
	/**
	 * @return \System\Char
	 */
	protected function GetNextChar(){}
}