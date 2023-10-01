<?php
namespace Avalonia\Native;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait HelpersMethodsOverride
{
	/**
	 * @return \Avalonia\Native\Interop\AvnPoint
	 */
	#[MethodOverride] public static function ToAvnPoint_1($pt){}
	/**
	 * @return \Avalonia\Native\Interop\AvnPoint
	 */
	#[MethodOverride] public static function ToAvnPoint_2($pt){}
}
/**
 */
class Helpers extends \System\Object
{
	/**
	 * @param \Avalonia\Native\Interop\AvnPoint $pt
	 * @return \Avalonia\Point
	 */
	public static function ToAvaloniaPoint($pt){}
	/**
	 * @param \Avalonia\Native\Interop\AvnPoint $pt
	 * @return \Avalonia\PixelPoint
	 */
	public static function ToAvaloniaPixelPoint($pt){}
	/**
	 * @uses HelpersMethodsOverride::ToAvnPoint_1 ($pt)
	 * @uses HelpersMethodsOverride::ToAvnPoint_2 ($pt)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToAvnPoint(mixed ...$args){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @return \Avalonia\Native\Interop\AvnRect
	 */
	public static function ToAvnRect($rect){}
	/**
	 * @param \Avalonia\Size $size
	 * @return \Avalonia\Native\Interop\AvnSize
	 */
	public static function ToAvnSize($size){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Native\Interop\IAvnString
	 */
	public static function ToAvnString($s){}
	/**
	 * @param \Avalonia\Native\Interop\AvnSize $size
	 * @return \Avalonia\Size
	 */
	public static function ToAvaloniaSize($size){}
	/**
	 * @param \Avalonia\Native\Interop\AvnRect $rect
	 * @return \Avalonia\Rect
	 */
	public static function ToAvaloniaRect($rect){}
	/**
	 * @param \Avalonia\Native\Interop\AvnRect $rect
	 * @return \Avalonia\PixelRect
	 */
	public static function ToAvaloniaPixelRect($rect){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
