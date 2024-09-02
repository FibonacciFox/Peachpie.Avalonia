<?php
namespace System\Runtime\InteropServices;
final class ArrayWithOffset extends \System\ValueType implements
	\System\IEquatable_1
{

	/**
	 * @return \System\Object|object
	 */
	public function GetArray(){}
	/**
	 * @return \System\Int32|int
	 */
	public function GetOffset(){}
	/**
	 * @param \System\Runtime\InteropServices\ArrayWithOffset $a
	 * @param \System\Runtime\InteropServices\ArrayWithOffset $b
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \System\Runtime\InteropServices\ArrayWithOffset $a
	 * @param \System\Runtime\InteropServices\ArrayWithOffset $b
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($a, $b){}
	/**
	 * @param \System\Object|object $array
	 * @param \System\Int32|int $offset
	 */
	public function __construct($array, $offset){}
}