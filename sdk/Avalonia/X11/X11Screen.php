<?php
namespace Avalonia\X11;
/**
 */
class X11Screen extends \System\Object
{
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsPrimary(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Name($value){}
	/**
	 * @return \Avalonia\PixelRect
	 */
	public  function get_Bounds(){}
	/**
	 * @param \Avalonia\PixelRect $value
	 * @return \System\Void|void
	 */
	public  function set_Bounds($value){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_PhysicalSize(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @return \System\Void|void
	 */
	public  function set_PhysicalSize($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Scaling(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Scaling($value){}
	/**
	 * @return \Avalonia\PixelRect
	 */
	public  function get_WorkingArea(){}
	/**
	 * @param \Avalonia\PixelRect $value
	 * @return \System\Void|void
	 */
	public  function set_WorkingArea($value){}
	/**
	 * @param \Avalonia\PixelRect $pixel
	 * @param \Avalonia\Size $physical
	 * @return \System\Double|double
	 */
	public static function GuessPixelDensity($pixel, $physical){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
