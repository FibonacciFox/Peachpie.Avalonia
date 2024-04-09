<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EncodingCharBufferOverride {
	/**
	 * @deprecated
	 * @param \System\Char $ch
	 * @param \System\Int32|int $numBytes
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected function AddChar_1 ($ch, $numBytes){}
	/**
	 * @deprecated
	 * @param \System\Char $ch
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected function AddChar_2 ($ch){}
	/**
	 * @deprecated
	 * @param \System\Byte $fallbackByte
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected function Fallback_1 ($fallbackByte){}
	/**
	 * @deprecated
	 * @param \System\Byte $byteBuffer
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected function Fallback_2 ($byteBuffer){}
}
final class EncodingCharBuffer extends \System\Object
{
	use EncodingCharBufferOverride;

	/**
	 * @uses EncodingCharBufferOverride::AddChar_1 <br>protected , args: ($ch, $numBytes)<br>
	 * @uses EncodingCharBufferOverride::AddChar_2 <br>protected , args: ($ch)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function AddChar (\override ...$args){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	protected function AdjustBytes($count){}
	/**
	 * @return \System\Byte
	 */
	protected function GetNextByte(){}
	/**
	 * @uses EncodingCharBufferOverride::Fallback_1 <br>protected , args: ($fallbackByte)<br>
	 * @uses EncodingCharBufferOverride::Fallback_2 <br>protected , args: ($byteBuffer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function Fallback (\override ...$args){}
}