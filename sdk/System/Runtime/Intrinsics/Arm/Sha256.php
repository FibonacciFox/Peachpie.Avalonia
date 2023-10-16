<?php
namespace System\Runtime\Intrinsics\Arm;
/**
 */
class Sha256 extends \System\Runtime\Intrinsics\Arm\ArmBase
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSupported;
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $hash_abcd
	 * @param \System\Runtime\Intrinsics\Vector128_1 $hash_efgh
	 * @param \System\Runtime\Intrinsics\Vector128_1 $wk
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function HashUpdate1($hash_abcd, $hash_efgh, $wk){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $hash_efgh
	 * @param \System\Runtime\Intrinsics\Vector128_1 $hash_abcd
	 * @param \System\Runtime\Intrinsics\Vector128_1 $wk
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function HashUpdate2($hash_efgh, $hash_abcd, $wk){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $w0_3
	 * @param \System\Runtime\Intrinsics\Vector128_1 $w4_7
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function ScheduleUpdate0($w0_3, $w4_7){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $w0_3
	 * @param \System\Runtime\Intrinsics\Vector128_1 $w8_11
	 * @param \System\Runtime\Intrinsics\Vector128_1 $w12_15
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function ScheduleUpdate1($w0_3, $w8_11, $w12_15){}
}
