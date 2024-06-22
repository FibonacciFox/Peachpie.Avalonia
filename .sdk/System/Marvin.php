<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MarvinOverride {
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $data [generic: System\Byte]
	 * @param \System\UInt64 $seed
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function ComputeHash32_1 ($data, $seed){}
	/**
	 * @deprecated
	 * @param \System\Byte& $data
	 * @param \System\UInt32 $count
	 * @param \System\UInt32 $p0
	 * @param \System\UInt32 $p1
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function ComputeHash32_2 ($data, $count, $p0, $p1){}
}
class Marvin extends \System\Object
{
	use MarvinOverride;

	/**
	 * @property
	 * @var \System\UInt64
	 * @since readonly
	 */
	public $DefaultSeed;
	/**
	 * @uses MarvinOverride::ComputeHash32_1 <br>public , args: ($data, $seed)<br>
	 * @uses MarvinOverride::ComputeHash32_2 <br>public , args: ($data, $count, $p0, $p1)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function ComputeHash32 (\override ...$args){}
	private static function Block($rp0, $rp1){}
	private static function GenerateSeed(){}
	/**
	 * @param \System\Char& $data
	 * @param \System\Int32|int $count
	 * @param \System\UInt32 $p0
	 * @param \System\UInt32 $p1
	 * @return \System\Int32|int
	 */
	public static function ComputeHash32OrdinalIgnoreCase($data, $count, $p0, $p1){}
	private static function ComputeHash32OrdinalIgnoreCaseSlow($data, $count, $p0, $p1){}
}