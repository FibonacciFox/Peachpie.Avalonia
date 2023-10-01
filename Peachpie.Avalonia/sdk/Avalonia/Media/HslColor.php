<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait HslColorMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($other){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
	/**
	 * @return \Avalonia\Media\Color
	 */
	#[MethodOverride] public  function ToRgb_1(){}
	/**
	 * @return \Avalonia\Media\Color
	 */
	#[MethodOverride] public static function ToRgb_2($hue, $saturation, $lightness, $alpha){}
	/**
	 * @return \Avalonia\Media\HsvColor
	 */
	#[MethodOverride] public  function ToHsv_1(){}
	/**
	 * @return \Avalonia\Media\HsvColor
	 */
	#[MethodOverride] public static function ToHsv_2($hue, $saturation, $lightness, $alpha){}
}
/**
 */
class HslColor extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @return \System\Double|double
	 */
	public  function get_A(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_H(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_S(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_L(){}
	/**
	 * @uses HslColorMethodsOverride::Equals_1 ($other)
	 * @uses HslColorMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses HslColorMethodsOverride::ToRgb_1 ()
	 * @uses HslColorMethodsOverride::ToRgb_2 ($hue, $saturation, $lightness, $alpha)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToRgb(mixed ...$args){}
	/**
	 * @uses HslColorMethodsOverride::ToHsv_1 ()
	 * @uses HslColorMethodsOverride::ToHsv_2 ($hue, $saturation, $lightness, $alpha)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToHsv(mixed ...$args){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\HslColor
	 */
	public static function Parse($s){}
	/**
	 * @param \System\String|string $s
	 * @param \Avalonia\Media\HslColor& $hslColor
	 * @return \System\Boolean
	 */
	public static function TryParse($s, $hslColor){}
	/**
	 * @param \System\Double|double $a
	 * @param \System\Double|double $h
	 * @param \System\Double|double $s
	 * @param \System\Double|double $l
	 * @return \Avalonia\Media\HslColor
	 */
	public static function FromAhsl($a, $h, $s, $l){}
	/**
	 * @param \System\Double|double $h
	 * @param \System\Double|double $s
	 * @param \System\Double|double $l
	 * @return \Avalonia\Media\HslColor
	 */
	public static function FromHsl($h, $s, $l){}
	/**
	 * @param \Avalonia\Media\HslColor $left
	 * @param \Avalonia\Media\HslColor $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Media\HslColor $left
	 * @param \Avalonia\Media\HslColor $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\HslColor $hslColor
	 * @return \Avalonia\Media\Color
	 */
	public static function op_Explicit($hslColor){}
}
