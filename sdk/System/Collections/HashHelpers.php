<?php
namespace System\Collections;
/**
 */
class HashHelpers extends \System\Object
{
	/**
	 * @param \System\UInt32 $divisor
	 * @return \System\UInt64
	 */
	public static function GetFastModMultiplier($divisor){}
	/**
	 * @param \System\UInt32 $value
	 * @param \System\UInt32 $divisor
	 * @param \System\UInt64 $multiplier
	 * @return \System\UInt32
	 */
	public static function FastMod($value, $divisor, $multiplier){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
