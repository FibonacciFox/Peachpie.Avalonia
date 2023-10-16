<?php
namespace System\Runtime\Intrinsics\Arm;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Crc32MethodsOverride
{
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function ComputeCrc32_1($crc, $data){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function ComputeCrc32_2($crc, $data){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function ComputeCrc32_3($crc, $data){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function ComputeCrc32C_1($crc, $data){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function ComputeCrc32C_2($crc, $data){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function ComputeCrc32C_3($crc, $data){}
}
/**
 */
class Crc32 extends \System\Runtime\Intrinsics\Arm\ArmBase
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSupported;
	/**
	 * @uses Crc32MethodsOverride::ComputeCrc32_1 ($crc, $data)
	 * @uses Crc32MethodsOverride::ComputeCrc32_2 ($crc, $data)
	 * @uses Crc32MethodsOverride::ComputeCrc32_3 ($crc, $data)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ComputeCrc32(mixed ...$args){}
	/**
	 * @uses Crc32MethodsOverride::ComputeCrc32C_1 ($crc, $data)
	 * @uses Crc32MethodsOverride::ComputeCrc32C_2 ($crc, $data)
	 * @uses Crc32MethodsOverride::ComputeCrc32C_3 ($crc, $data)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ComputeCrc32C(mixed ...$args){}
}
