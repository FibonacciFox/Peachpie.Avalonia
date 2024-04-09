<?php
namespace System\Collections;
class HashHelpers extends \System\Object
{
	/**
	 * @property
	 * @var \System\Runtime\CompilerServices\ConditionalWeakTable_2[System\Object,System\Runtime\Serialization\SerializationInfo]
	 * @since readonly
	 */
	public $SerializationInfoTable;
	/**
	 * @param \System\Int32|int $candidate
	 * @return \System\Boolean|bool
	 */
	public static function IsPrime($candidate){}
	/**
	 * @param \System\Int32|int $min
	 * @return \System\Int32|int
	 */
	public static function GetPrime($min){}
	/**
	 * @param \System\Int32|int $oldSize
	 * @return \System\Int32|int
	 */
	public static function ExpandPrime($oldSize){}
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
}