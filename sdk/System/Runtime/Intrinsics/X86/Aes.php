<?php
namespace System\Runtime\Intrinsics\X86;
/**
 */
class Aes extends \System\Runtime\Intrinsics\X86\Sse2
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSupported;
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value
	 * @param \System\Runtime\Intrinsics\Vector128_1 $roundKey
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function Decrypt($value, $roundKey){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value
	 * @param \System\Runtime\Intrinsics\Vector128_1 $roundKey
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function DecryptLast($value, $roundKey){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value
	 * @param \System\Runtime\Intrinsics\Vector128_1 $roundKey
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function Encrypt($value, $roundKey){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value
	 * @param \System\Runtime\Intrinsics\Vector128_1 $roundKey
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function EncryptLast($value, $roundKey){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function InverseMixColumns($value){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function KeygenAssist($value, $control){}
}
