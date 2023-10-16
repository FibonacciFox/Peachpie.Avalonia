<?php
namespace System\Globalization;
/**
 */
class Ordinal extends \System\Object
{
	/**
	 * @param \System\Char& $strA
	 * @param \System\Int32|int $lengthA
	 * @param \System\Char& $strB
	 * @param \System\Int32|int $lengthB
	 * @return \System\Int32|int
	 */
	protected static function CompareStringIgnoreCase($strA, $lengthA, $strB, $lengthB){}
	/**
	 * @param \System\Char& $strA
	 * @param \System\Int32|int $lengthA
	 * @param \System\Char& $strB
	 * @param \System\Int32|int $lengthB
	 * @return \System\Int32|int
	 */
	protected static function CompareStringIgnoreCaseNonAscii($strA, $lengthA, $strB, $lengthB){}
	/**
	 * @param \System\Char& $charA
	 * @param \System\Char& $charB
	 * @param \System\Int32|int $length
	 * @return \System\Boolean
	 */
	protected static function EqualsIgnoreCase($charA, $charB, $length){}
	/**
	 * @param \System\String|string $source
	 * @param \System\String|string $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @param \System\Boolean $ignoreCase
	 * @return \System\Int32|int
	 */
	protected static function IndexOf($source, $value, $startIndex, $count, $ignoreCase){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\ReadOnlySpan_1 $value
	 * @return \System\Int32|int
	 */
	protected static function IndexOfOrdinalIgnoreCase($source, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\ReadOnlySpan_1 $value
	 * @return \System\Int32|int
	 */
	protected static function LastIndexOfOrdinalIgnoreCase($source, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Span_1 $destination
	 * @return \System\Int32|int
	 */
	protected static function ToUpperOrdinal($source, $destination){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
