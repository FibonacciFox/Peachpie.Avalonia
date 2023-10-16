<?php
namespace System\Runtime\Intrinsics\X86;
/**
 */
class Popcnt extends \System\Runtime\Intrinsics\X86\Sse42
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSupported;
	/**
	 * @param \System\UInt32 $value
	 * @return \System\UInt32
	 */
	public static function PopCount($value){}
}
