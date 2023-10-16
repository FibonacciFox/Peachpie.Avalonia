<?php
namespace System\Text\Unicode;
/**
 */
class TextSegmentationUtility extends \System\Object
{
	/**
	 * @param \System\ReadOnlySpan_1 $input
	 * @param \System\Text\Unicode\DecodeFirstRune_1 $decoder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetLengthOfFirstExtendedGraphemeCluster($input, $decoder){}
	/**
	 * @param \System\ReadOnlySpan_1 $input
	 * @return \System\Int32|int
	 */
	public static function GetLengthOfFirstUtf16ExtendedGraphemeCluster($input){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
