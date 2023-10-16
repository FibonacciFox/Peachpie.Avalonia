<?php
namespace System\Globalization;
/**
 */
class OrdinalCasing extends \System\Object
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_s_casingTableInit(){}
	/**
	 * @param \System\Char $c
	 * @return \System\Char
	 */
	protected static function ToUpper($c){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Span_1 $destination
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
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\ReadOnlySpan_1 $value
	 * @return \System\Int32|int
	 */
	protected static function IndexOf($source, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\ReadOnlySpan_1 $value
	 * @return \System\Int32|int
	 */
	protected static function LastIndexOf($source, $value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InitCasingTable(){}
	/**
	 * @param \System\Int32|int $pageNumber
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InitOrdinalCasingPage($pageNumber){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
