<?php
namespace System;
class IPv6AddressHelper extends \System\Object
{

	/**
	 * @param \System\String|string $str
	 * @param \System\Int32|int $start
	 * @param \System\Boolean& $isLoopback
	 * @param \System\String& $scopeId
	 * @return \System\String|string
	 */
	protected static function ParseCanonicalName($str, $start, $isLoopback, $scopeId){}
	private static function IsLoopback($numbers){}
	private static function InternalIsValid($name, $start, $end, $validateStrictAddress){}
	/**
	 * @param \System\Char* $name
	 * @param \System\Int32|int $start
	 * @param \System\Int32& $end
	 * @return \System\Boolean|bool
	 */
	protected static function IsValid($name, $start, $end){}
	/**
	 * @param \System\ReadOnlySpan_1 $numbers [generic: System\UInt16]
	 * @return \System\ValueTuple_2[System\Int32,System\Int32]
	 */
	protected static function FindCompressionRange($numbers){}
	/**
	 * @param \System\ReadOnlySpan_1 $numbers [generic: System\UInt16]
	 * @return \System\Boolean|bool
	 */
	protected static function ShouldHaveIpv4Embedded($numbers){}
	/**
	 * @param \System\ReadOnlySpan_1 $address [generic: System\Char]
	 * @param \System\Span_1 $numbers [generic: System\UInt16]
	 * @param \System\Int32|int $start
	 * @param \System\String& $scopeId
	 * @return \System\Void|void
	 */
	protected static function Parse($address, $numbers, $start, $scopeId){}
}