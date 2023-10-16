<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MarvinMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function ComputeHash32_1($data, $seed){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function ComputeHash32_2($data, $count, $p0, $p1){}
}
/**
 */
class Marvin extends \System\Object
{
	/**
	 * @var \System\UInt64
	 * @property
	 */
	public readonly $DefaultSeed;
	/**
	 * @uses MarvinMethodsOverride::ComputeHash32_1 ($data, $seed)
	 * @uses MarvinMethodsOverride::ComputeHash32_2 ($data, $count, $p0, $p1)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ComputeHash32(mixed ...$args){}
	/**
	 * @param \System\UInt32& $rp0
	 * @param \System\UInt32& $rp1
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Block($rp0, $rp1){}
	/**
	 * @return \System\UInt64
	 */
	public static function get_DefaultSeed(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GenerateSeed(){}
	/**
	 * @param \System\Char& $data
	 * @param \System\Int32|int $count
	 * @param \System\UInt32 $p0
	 * @param \System\UInt32 $p1
	 * @return \System\Int32|int
	 */
	public static function ComputeHash32OrdinalIgnoreCase($data, $count, $p0, $p1){}
	/**
	 * @param \System\Char& $data
	 * @param \System\Int32|int $count
	 * @param \System\UInt32 $p0
	 * @param \System\UInt32 $p1
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ComputeHash32OrdinalIgnoreCaseSlow($data, $count, $p0, $p1){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
