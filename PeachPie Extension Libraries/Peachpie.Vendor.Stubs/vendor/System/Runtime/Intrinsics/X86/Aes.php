<?php
namespace System\Runtime\Intrinsics\X86;
class Aes extends \System\Runtime\Intrinsics\X86\Sse2
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSupported;
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $roundKey [generic: System\Byte]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Byte]
	 */
	public static function Decrypt($value, $roundKey){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $roundKey [generic: System\Byte]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Byte]
	 */
	public static function DecryptLast($value, $roundKey){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $roundKey [generic: System\Byte]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Byte]
	 */
	public static function Encrypt($value, $roundKey){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $roundKey [generic: System\Byte]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Byte]
	 */
	public static function EncryptLast($value, $roundKey){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Byte]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Byte]
	 */
	public static function InverseMixColumns($value){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Byte]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Byte]
	 */
	public static function KeygenAssist($value, $control){}
}