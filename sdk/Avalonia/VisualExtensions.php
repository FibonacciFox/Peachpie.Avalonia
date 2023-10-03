<?php
namespace Avalonia;
/**
 */
class VisualExtensions extends \System\Object
{
	/**
	 * @param \Avalonia\Visual $visual
	 * @param \Avalonia\PixelPoint $point
	 * @return \Avalonia\Point
	 */
	public static function PointToClient($visual, $point){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @param \Avalonia\Point $point
	 * @return \Avalonia\PixelPoint
	 */
	public static function PointToScreen($visual, $point){}
	/**
	 * @param \Avalonia\Visual $from
	 * @param \Avalonia\Visual $to
	 * @return \System\Nullable_1
	 */
	public static function TransformToVisual($from, $to){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @param \Avalonia\Point $point
	 * @param \Avalonia\Visual $relativeTo
	 * @return \System\Nullable_1
	 */
	public static function TranslatePoint($visual, $point, $relativeTo){}
	/**
	 * @param \Avalonia\Visual $ancestor
	 * @param \Avalonia\Visual $visual
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetOffsetFrom($ancestor, $visual){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
