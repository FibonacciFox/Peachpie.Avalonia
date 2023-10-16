<?php
namespace System\Runtime\Intrinsics\Arm;
/**
 */
class Sha1 extends \System\Runtime\Intrinsics\Arm\ArmBase
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSupported;
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $hash_e
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	public static function FixedRotate($hash_e){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $hash_abcd
	 * @param \System\Runtime\Intrinsics\Vector64_1 $hash_e
	 * @param \System\Runtime\Intrinsics\Vector128_1 $wk
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function HashUpdateChoose($hash_abcd, $hash_e, $wk){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $hash_abcd
	 * @param \System\Runtime\Intrinsics\Vector64_1 $hash_e
	 * @param \System\Runtime\Intrinsics\Vector128_1 $wk
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function HashUpdateMajority($hash_abcd, $hash_e, $wk){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $hash_abcd
	 * @param \System\Runtime\Intrinsics\Vector64_1 $hash_e
	 * @param \System\Runtime\Intrinsics\Vector128_1 $wk
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function HashUpdateParity($hash_abcd, $hash_e, $wk){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $w0_3
	 * @param \System\Runtime\Intrinsics\Vector128_1 $w4_7
	 * @param \System\Runtime\Intrinsics\Vector128_1 $w8_11
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function ScheduleUpdate0($w0_3, $w4_7, $w8_11){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $tw0_3
	 * @param \System\Runtime\Intrinsics\Vector128_1 $w12_15
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function ScheduleUpdate1($tw0_3, $w12_15){}
}
