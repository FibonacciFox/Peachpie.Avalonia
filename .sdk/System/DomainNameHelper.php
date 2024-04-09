<?php
namespace System;
class DomainNameHelper extends \System\Object
{

	/**
	 * @param \System\String|string $str
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $end
	 * @param \System\Boolean& $loopback
	 * @return \System\String|string
	 */
	protected static function ParseCanonicalName($str, $start, $end, $loopback){}
	/**
	 * @param \System\Char* $name
	 * @param \System\Int32|int $pos
	 * @param \System\Int32& $returnedEnd
	 * @param \System\Boolean& $notCanonical
	 * @param \System\Boolean|bool $notImplicitFile
	 * @return \System\Boolean|bool
	 */
	protected static function IsValid($name, $pos, $returnedEnd, $notCanonical, $notImplicitFile){}
	/**
	 * @param \System\Char* $name
	 * @param \System\Int32|int $pos
	 * @param \System\Int32& $returnedEnd
	 * @param \System\Boolean& $notCanonical
	 * @param \System\Boolean|bool $notImplicitFile
	 * @return \System\Boolean|bool
	 */
	protected static function IsValidByIri($name, $pos, $returnedEnd, $notCanonical, $notImplicitFile){}
	/**
	 * @param \System\String|string $hostname
	 * @return \System\String|string
	 */
	protected static function IdnEquivalent($hostname){}
	/**
	 * @param \System\String|string $hostname
	 * @param \System\Text\ValueStringBuilder& $dest
	 * @return \System\Boolean|bool
	 */
	protected static function TryGetUnicodeEquivalent($hostname, $dest){}
	private static function IsASCIILetterOrDigit($character, $notCanonical){}
	private static function IsValidDomainLabelCharacter($character, $notCanonical){}
	/**
	 * @param \System\String|string $host
	 * @return \System\Boolean|bool
	 */
	protected static function ContainsCharactersUnsafeForNormalizedHost($host){}
}