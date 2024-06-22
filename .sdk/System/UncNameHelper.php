<?php
namespace System;
class UncNameHelper extends \System\Object
{


	/**
	 * @param \System\String|string $str
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $end
	 * @param \System\Boolean& $loopback
	 * @return \System\String|string
	 */
	public static function ParseCanonicalName($str, $start, $end, $loopback){}
	/**
	 * @param \System\Char* $name
	 * @param \System\Int32|int $start
	 * @param \System\Int32& $returnedEnd
	 * @param \System\Boolean|bool $notImplicitFile
	 * @return \System\Boolean|bool
	 */
	public static function IsValid($name, $start, $returnedEnd, $notImplicitFile){}
}