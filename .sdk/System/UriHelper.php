<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait UriHelperOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $stringToEscape
	 * @param \System\Boolean|bool $checkExistingEscaped
	 * @param \System\ReadOnlySpan_1 $unreserved [generic: System\Boolean]
	 * @param \System\Char $forceEscape1
	 * @param \System\Char $forceEscape2
	 * @return \System\String|string
	 */
	#[MethodOverride]protected static function EscapeString_1 ($stringToEscape, $checkExistingEscaped, $unreserved, $forceEscape1, $forceEscape2){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $stringToEscape [generic: System\Char]
	 * @param \System\Text\ValueStringBuilder& $dest
	 * @param \System\Boolean|bool $checkExistingEscaped
	 * @param \System\Char $forceEscape1
	 * @param \System\Char $forceEscape2
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function EscapeString_2 ($stringToEscape, $dest, $checkExistingEscaped, $forceEscape1, $forceEscape2){}
	/**
	 * @deprecated
	 * @param \System\String|string $input
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $end
	 * @param \System\Char $dest
	 * @param \System\Int32& $destPosition
	 * @param \System\Char $rsvd1
	 * @param \System\Char $rsvd2
	 * @param \System\Char $rsvd3
	 * @param \System\UnescapeMode $unescapeMode
	 * @param \System\UriParser $syntax
	 * @param \System\Boolean|bool $isQuery
	 * @return \System\Char
	 */
	#[MethodOverride]protected static function UnescapeString_1 ($input, $start, $end, $dest, $destPosition, $rsvd1, $rsvd2, $rsvd3, $unescapeMode, $syntax, $isQuery){}
	/**
	 * @deprecated
	 * @param \System\Char* $pStr
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $end
	 * @param \System\Char $dest
	 * @param \System\Int32& $destPosition
	 * @param \System\Char $rsvd1
	 * @param \System\Char $rsvd2
	 * @param \System\Char $rsvd3
	 * @param \System\UnescapeMode $unescapeMode
	 * @param \System\UriParser $syntax
	 * @param \System\Boolean|bool $isQuery
	 * @return \System\Char
	 */
	#[MethodOverride]protected static function UnescapeString_2 ($pStr, $start, $end, $dest, $destPosition, $rsvd1, $rsvd2, $rsvd3, $unescapeMode, $syntax, $isQuery){}
	/**
	 * @deprecated
	 * @param \System\String|string $input
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $end
	 * @param \System\Text\ValueStringBuilder& $dest
	 * @param \System\Char $rsvd1
	 * @param \System\Char $rsvd2
	 * @param \System\Char $rsvd3
	 * @param \System\UnescapeMode $unescapeMode
	 * @param \System\UriParser $syntax
	 * @param \System\Boolean|bool $isQuery
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function UnescapeString_3 ($input, $start, $end, $dest, $rsvd1, $rsvd2, $rsvd3, $unescapeMode, $syntax, $isQuery){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @param \System\Text\ValueStringBuilder& $dest
	 * @param \System\Char $rsvd1
	 * @param \System\Char $rsvd2
	 * @param \System\Char $rsvd3
	 * @param \System\UnescapeMode $unescapeMode
	 * @param \System\UriParser $syntax
	 * @param \System\Boolean|bool $isQuery
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function UnescapeString_4 ($input, $dest, $rsvd1, $rsvd2, $rsvd3, $unescapeMode, $syntax, $isQuery){}
	/**
	 * @deprecated
	 * @param \System\Char* $pStr
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $end
	 * @param \System\Text\ValueStringBuilder& $dest
	 * @param \System\Char $rsvd1
	 * @param \System\Char $rsvd2
	 * @param \System\Char $rsvd3
	 * @param \System\UnescapeMode $unescapeMode
	 * @param \System\UriParser $syntax
	 * @param \System\Boolean|bool $isQuery
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function UnescapeString_5 ($pStr, $start, $end, $dest, $rsvd1, $rsvd2, $rsvd3, $unescapeMode, $syntax, $isQuery){}
}
class UriHelper extends \System\Object
{
	use UriHelperOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\Char[]
	 */
	protected static $s_WSchars;
	/**
	 * @param \System\Char* $selfPtr
	 * @param \System\Int32|int $selfLength
	 * @param \System\Char* $otherPtr
	 * @param \System\Int32|int $otherLength
	 * @param \System\Boolean|bool $ignoreCase
	 * @return \System\Boolean|bool
	 */
	protected static function TestForSubPath($selfPtr, $selfLength, $otherPtr, $otherLength, $ignoreCase){}
	/**
	 * @uses UriHelperOverride::EscapeString_1 <br>protected , args: ($stringToEscape, $checkExistingEscaped, $unreserved, $forceEscape1, $forceEscape2)<br>
	 * @uses UriHelperOverride::EscapeString_2 <br>protected , args: ($stringToEscape, $dest, $checkExistingEscaped, $forceEscape1, $forceEscape2)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|\System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function EscapeString (\override ...$args){}
	private static function EscapeStringToBuilder($stringToEscape, $vsb, $noEscape, $checkExistingEscaped){}
	/**
	 * @uses UriHelperOverride::UnescapeString_1 <br>protected , args: ($input, $start, $end, $dest, $destPosition, $rsvd1, $rsvd2, $rsvd3, $unescapeMode, $syntax, $isQuery)<br>
	 * @uses UriHelperOverride::UnescapeString_2 <br>protected , args: ($pStr, $start, $end, $dest, $destPosition, $rsvd1, $rsvd2, $rsvd3, $unescapeMode, $syntax, $isQuery)<br>
	 * @uses UriHelperOverride::UnescapeString_3 <br>protected , args: ($input, $start, $end, $dest, $rsvd1, $rsvd2, $rsvd3, $unescapeMode, $syntax, $isQuery)<br>
	 * @uses UriHelperOverride::UnescapeString_4 <br>protected , args: ($input, $dest, $rsvd1, $rsvd2, $rsvd3, $unescapeMode, $syntax, $isQuery)<br>
	 * @uses UriHelperOverride::UnescapeString_5 <br>protected , args: ($pStr, $start, $end, $dest, $rsvd1, $rsvd2, $rsvd3, $unescapeMode, $syntax, $isQuery)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Char|\System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function UnescapeString (\override ...$args){}
	/**
	 * @param \System\Byte $b
	 * @param \System\Text\ValueStringBuilder& $to
	 * @return \System\Void|void
	 */
	protected static function EscapeAsciiChar($b, $to){}
	/**
	 * @param \System\Int32|int $first
	 * @param \System\Int32|int $second
	 * @return \System\Char
	 */
	protected static function DecodeHexChars($first, $second){}
	/**
	 * @param \System\Char $ch
	 * @return \System\Boolean|bool
	 */
	protected static function IsNotSafeForUnescape($ch){}
	/**
	 * @param \System\Char $ch
	 * @return \System\Boolean|bool
	 */
	protected static function IsGenDelim($ch){}
	/**
	 * @param \System\Char $ch
	 * @return \System\Boolean|bool
	 */
	protected static function IsLWS($ch){}
	/**
	 * @param \System\Char $ch
	 * @return \System\Boolean|bool
	 */
	protected static function IsBidiControlCharacter($ch){}
	/**
	 * @param \System\ReadOnlySpan_1 $strToClean [generic: System\Char]
	 * @param \System\String|string $backingString
	 * @return \System\String|string
	 */
	protected static function StripBidiControlCharacters($strToClean, $backingString){}
}