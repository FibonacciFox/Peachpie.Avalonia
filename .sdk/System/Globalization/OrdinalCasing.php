<?php
namespace System\Globalization;
class OrdinalCasing extends \System\Object
{

	/**
	 * @param \System\Char $c
	 * @return \System\Char
	 */
	protected static function ToUpper($c){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Char]
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @return \System\Void|void
	 */
	protected static function ToUpperOrdinal($source, $destination){}
	/**
	 * @param \System\Char& $strA
	 * @param \System\Int32|int $lengthA
	 * @param \System\Char& $strB
	 * @param \System\Int32|int $lengthB
	 * @return \System\Int32|int
	 */
	protected static function CompareStringIgnoreCase($strA, $lengthA, $strB, $lengthB){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @return \System\Int32|int
	 */
	protected static function IndexOf($source, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @return \System\Int32|int
	 */
	protected static function LastIndexOf($source, $value){}
	private static function InitCasingTable(){}
	private static function InitOrdinalCasingPage($pageNumber){}
}