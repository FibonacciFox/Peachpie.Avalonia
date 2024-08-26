<?php
namespace System\Runtime\Intrinsics\X86;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Sse42Override {
	/**
	 * @deprecated
	 * @param \System\UInt32 $crc
	 * @param \System\Byte $data
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function Crc32_1 ($crc, $data){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $crc
	 * @param \System\UInt16 $data
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function Crc32_2 ($crc, $data){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $crc
	 * @param \System\UInt32 $data
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function Crc32_3 ($crc, $data){}
}
class Sse42 extends \System\Runtime\Intrinsics\X86\Sse41
{
	use Sse42Override;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSupported;
	/**
	 * @uses Sse42Override::Crc32_1 <br>public , args: ($crc, $data)<br>
	 * @uses Sse42Override::Crc32_2 <br>public , args: ($crc, $data)<br>
	 * @uses Sse42Override::Crc32_3 <br>public , args: ($crc, $data)<br>
	 * @var mixed|\override ...$args
	 * @return \System\UInt32|mixed|\override
	 */
	#[MethodOverridePublic]function Crc32 (\override ...$args){}
}