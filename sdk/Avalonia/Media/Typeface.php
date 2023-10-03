<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TypefaceMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 */
class Typeface extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @return \Avalonia\Media\Typeface
	 */
	public static function get_Default(){}
	/**
	 * @return \Avalonia\Media\FontFamily
	 */
	public  function get_FontFamily(){}
	/**
	 * @return \Avalonia\Media\FontStyle
	 */
	public  function get_Style(){}
	/**
	 * @return \Avalonia\Media\FontWeight
	 */
	public  function get_Weight(){}
	/**
	 * @return \Avalonia\Media\FontStretch
	 */
	public  function get_Stretch(){}
	/**
	 * @return \Avalonia\Media\IGlyphTypeface
	 */
	public  function get_GlyphTypeface(){}
	/**
	 * @param \Avalonia\Media\Typeface $a
	 * @param \Avalonia\Media\Typeface $b
	 * @return \System\Boolean
	 */
	public static function op_Inequality($a, $b){}
	/**
	 * @param \Avalonia\Media\Typeface $a
	 * @param \Avalonia\Media\Typeface $b
	 * @return \System\Boolean
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @uses TypefaceMethodsOverride::Equals_1 ($obj)
	 * @uses TypefaceMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
