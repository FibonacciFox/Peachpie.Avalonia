<?php
namespace System\Runtime\Intrinsics\X86;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Sse42MethodsOverride
{
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function Crc32_1($crc, $data){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function Crc32_2($crc, $data){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function Crc32_3($crc, $data){}
}
/**
 */
class Sse42 extends \System\Runtime\Intrinsics\X86\Sse41
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSupported;
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function CompareGreaterThan($left, $right){}
	/**
	 * @uses Sse42MethodsOverride::Crc32_1 ($crc, $data)
	 * @uses Sse42MethodsOverride::Crc32_2 ($crc, $data)
	 * @uses Sse42MethodsOverride::Crc32_3 ($crc, $data)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Crc32(mixed ...$args){}
}
