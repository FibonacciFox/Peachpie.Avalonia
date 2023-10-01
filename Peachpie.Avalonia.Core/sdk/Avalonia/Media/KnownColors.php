<?php
namespace Avalonia\Media;
/**
 */
class KnownColors extends \System\Object
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetKnownColors(){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\ISolidColorBrush
	 */
	public static function GetKnownBrush($s){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\KnownColor
	 */
	public static function GetKnownColor($s){}
	/**
	 * @param \System\UInt32 $rgb
	 * @return \System\String|string
	 */
	public static function GetKnownColorName($rgb){}
	/**
	 * @param \Avalonia\Media\KnownColor $color
	 * @return \Avalonia\Media\Color
	 */
	public static function ToColor($color){}
	/**
	 * @param \Avalonia\Media\KnownColor $color
	 * @return \Avalonia\Media\IImmutableSolidColorBrush
	 */
	public static function ToBrush($color){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
