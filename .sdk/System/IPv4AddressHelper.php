<?php
namespace System;
class IPv4AddressHelper extends \System\Object
{


	/**
	 * @param \System\String|string $str
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $end
	 * @param \System\Boolean& $isLoopback
	 * @return \System\String|string
	 */
	protected static function ParseCanonicalName($str, $start, $end, $isLoopback){}
	private static function Parse($name, $numbers, $start, $end){}
	/**
	 * @param \System\ReadOnlySpan_1 $str [generic: System\Char]
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $end
	 * @return \System\Int32|int
	 */
	protected static function ParseHostNumber($str, $start, $end){}
	/**
	 * @param \System\Char* $name
	 * @param \System\Int32|int $start
	 * @param \System\Int32& $end
	 * @param \System\Boolean|bool $allowIPv6
	 * @param \System\Boolean|bool $notImplicitFile
	 * @param \System\Boolean|bool $unknownScheme
	 * @return \System\Boolean|bool
	 */
	protected static function IsValid($name, $start, $end, $allowIPv6, $notImplicitFile, $unknownScheme){}
	/**
	 * @param \System\Char* $name
	 * @param \System\Int32|int $start
	 * @param \System\Int32& $end
	 * @param \System\Boolean|bool $allowIPv6
	 * @param \System\Boolean|bool $notImplicitFile
	 * @return \System\Boolean|bool
	 */
	protected static function IsValidCanonical($name, $start, $end, $allowIPv6, $notImplicitFile){}
	/**
	 * @param \System\Char* $name
	 * @param \System\Int32|int $start
	 * @param \System\Int32& $end
	 * @param \System\Boolean|bool $notImplicitFile
	 * @return \System\Int64|int
	 */
	protected static function ParseNonCanonical($name, $start, $end, $notImplicitFile){}
}