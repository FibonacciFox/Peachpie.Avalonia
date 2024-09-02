<?php
namespace System;
class Nullable extends \System\Object
{

	/**
	 * @param \System\Nullable_1 $n1 [generic: T]
	 * @param \System\Nullable_1 $n2 [generic: T]
	 * @return \System\Int32|int
	 */
	public static function Compare($n1, $n2){}
	/**
	 * @param \System\Type $nullableType
	 * @return \System\Type
	 */
	public static function GetUnderlyingType($nullableType){}
	/**
	 * @param \System\Nullable_1 &$nullable [generic: T]
	 * @return \T&
	 */
	public static function GetValueRefOrDefaultRef(&$nullable){}
}