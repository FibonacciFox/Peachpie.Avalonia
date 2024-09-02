<?php
namespace System\Runtime\Intrinsics\Arm;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Crc32Override {
	/**
	 * @deprecated
	 * @param \System\UInt32 $crc
	 * @param \System\Byte $data
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function ComputeCrc32_1 ($crc, $data){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $crc
	 * @param \System\UInt16 $data
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function ComputeCrc32_2 ($crc, $data){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $crc
	 * @param \System\UInt32 $data
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function ComputeCrc32_3 ($crc, $data){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $crc
	 * @param \System\Byte $data
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function ComputeCrc32C_1 ($crc, $data){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $crc
	 * @param \System\UInt16 $data
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function ComputeCrc32C_2 ($crc, $data){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $crc
	 * @param \System\UInt32 $data
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function ComputeCrc32C_3 ($crc, $data){}
}
class Crc32 extends \System\Runtime\Intrinsics\Arm\ArmBase
{
	use Crc32Override;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSupported;
	/**
	 * @uses Crc32Override::ComputeCrc32_1 <br>public , args: ($crc, $data)<br>
	 * @uses Crc32Override::ComputeCrc32_2 <br>public , args: ($crc, $data)<br>
	 * @uses Crc32Override::ComputeCrc32_3 <br>public , args: ($crc, $data)<br>
	 * @var mixed|\override ...$args
	 * @return \System\UInt32|mixed|\override
	 */
	#[MethodOverridePublic]function ComputeCrc32 (\override ...$args){}
	/**
	 * @uses Crc32Override::ComputeCrc32C_1 <br>public , args: ($crc, $data)<br>
	 * @uses Crc32Override::ComputeCrc32C_2 <br>public , args: ($crc, $data)<br>
	 * @uses Crc32Override::ComputeCrc32C_3 <br>public , args: ($crc, $data)<br>
	 * @var mixed|\override ...$args
	 * @return \System\UInt32|mixed|\override
	 */
	#[MethodOverridePublic]function ComputeCrc32C (\override ...$args){}
}