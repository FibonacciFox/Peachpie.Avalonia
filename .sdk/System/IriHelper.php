<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait IriHelperOverride {
	/**
	 * @deprecated
	 * @param \System\Char $unicode
	 * @param \System\Boolean|bool $isQuery
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function CheckIriUnicodeRange_1 ($unicode, $isQuery){}
	/**
	 * @deprecated
	 * @param \System\Char $highSurr
	 * @param \System\Char $lowSurr
	 * @param \System\Boolean& &$isSurrogatePair
	 * @param \System\Boolean|bool $isQuery
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function CheckIriUnicodeRange_2 ($highSurr, $lowSurr, &$isSurrogatePair, $isQuery){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @param \System\Boolean|bool $isQuery
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function CheckIriUnicodeRange_3 ($value, $isQuery){}
}
class IriHelper extends \System\Object
{
	use IriHelperOverride;


	/**
	 * @uses IriHelperOverride::CheckIriUnicodeRange_1 <br>protected , args: ($unicode, $isQuery)<br>
	 * @uses IriHelperOverride::CheckIriUnicodeRange_2 <br>protected , args: ($highSurr, $lowSurr, &$isSurrogatePair, $isQuery)<br>
	 * @uses IriHelperOverride::CheckIriUnicodeRange_3 <br>protected , args: ($value, $isQuery)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function CheckIriUnicodeRange (\override ...$args){}
	private static function IsInInclusiveRange($value, $min, $max){}
	/**
	 * @param \System\Char $ch
	 * @param \System\UriComponents $component
	 * @return \System\Boolean|bool
	 */
	protected static function CheckIsReserved($ch, $component){}
	/**
	 * @param \System\Char* $pInput
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $end
	 * @param \System\UriComponents $component
	 * @return \System\String|string
	 */
	protected static function EscapeUnescapeIri($pInput, $start, $end, $component){}
}