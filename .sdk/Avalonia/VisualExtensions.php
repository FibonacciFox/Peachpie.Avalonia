<?php
namespace Avalonia;
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
	 * @return \System\Nullable_1[Avalonia\Matrix]
	 */
	public static function TransformToVisual($from, $to){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @param \Avalonia\Point $point
	 * @param \Avalonia\Visual $relativeTo
	 * @return \System\Nullable_1[Avalonia\Point]
	 */
	public static function TranslatePoint($visual, $point, $relativeTo){}
	private static function GetOffsetFrom($ancestor, $visual){}
}