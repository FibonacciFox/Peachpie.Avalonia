<?php
namespace System\Runtime\Intrinsics\Arm;
class Sha1 extends \System\Runtime\Intrinsics\Arm\ArmBase
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSupported;
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $hash_e [generic: System\UInt32]
	 * @return \System\Runtime\Intrinsics\Vector64_1[System\UInt32]
	 */
	public static function FixedRotate($hash_e){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $hash_abcd [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $hash_e [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $wk [generic: System\UInt32]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\UInt32]
	 */
	public static function HashUpdateChoose($hash_abcd, $hash_e, $wk){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $hash_abcd [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $hash_e [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $wk [generic: System\UInt32]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\UInt32]
	 */
	public static function HashUpdateMajority($hash_abcd, $hash_e, $wk){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $hash_abcd [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $hash_e [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $wk [generic: System\UInt32]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\UInt32]
	 */
	public static function HashUpdateParity($hash_abcd, $hash_e, $wk){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $w0_3 [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $w4_7 [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $w8_11 [generic: System\UInt32]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\UInt32]
	 */
	public static function ScheduleUpdate0($w0_3, $w4_7, $w8_11){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $tw0_3 [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $w12_15 [generic: System\UInt32]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\UInt32]
	 */
	public static function ScheduleUpdate1($tw0_3, $w12_15){}
}