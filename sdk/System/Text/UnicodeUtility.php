<?php
namespace System\Text;
/**
 */
class UnicodeUtility extends \System\Object
{
	/**
	 * @param \System\UInt32 $codePoint
	 * @return \System\Int32|int
	 */
	public static function GetPlane($codePoint){}
	/**
	 * @param \System\UInt32 $highSurrogateCodePoint
	 * @param \System\UInt32 $lowSurrogateCodePoint
	 * @return \System\UInt32
	 */
	public static function GetScalarFromUtf16SurrogatePair($highSurrogateCodePoint, $lowSurrogateCodePoint){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\Int32|int
	 */
	public static function GetUtf16SequenceLength($value){}
	/**
	 * @param \System\UInt32 $value
	 * @param \System\Char& $highSurrogateCodePoint
	 * @param \System\Char& $lowSurrogateCodePoint
	 * @return \System\Void|void
	 */
	public static function GetUtf16SurrogatesFromSupplementaryPlaneScalar($value, $highSurrogateCodePoint, $lowSurrogateCodePoint){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\Int32|int
	 */
	public static function GetUtf8SequenceLength($value){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\Boolean
	 */
	public static function IsAsciiCodePoint($value){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\Boolean
	 */
	public static function IsBmpCodePoint($value){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\Boolean
	 */
	public static function IsHighSurrogateCodePoint($value){}
	/**
	 * @param \System\UInt32 $value
	 * @param \System\UInt32 $lowerBound
	 * @param \System\UInt32 $upperBound
	 * @return \System\Boolean
	 */
	public static function IsInRangeInclusive($value, $lowerBound, $upperBound){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\Boolean
	 */
	public static function IsLowSurrogateCodePoint($value){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\Boolean
	 */
	public static function IsSurrogateCodePoint($value){}
	/**
	 * @param \System\UInt32 $codePoint
	 * @return \System\Boolean
	 */
	public static function IsValidCodePoint($codePoint){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\Boolean
	 */
	public static function IsValidUnicodeScalar($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
