<?php
namespace System\Runtime\Intrinsics\X86;
/**
 */
class Lzcnt extends \System\Runtime\Intrinsics\X86\X86Base
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
	public static function LeadingZeroCount($value){}
}
