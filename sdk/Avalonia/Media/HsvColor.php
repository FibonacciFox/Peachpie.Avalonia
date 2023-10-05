<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait HsvColorMethodsOverride
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
	#[MethodOverride] public static function ToRgb_2($hue, $saturation, $value, $alpha){}
	/**
	 * @return \Avalonia\Media\HslColor
	 */
	#[MethodOverride] public  function ToHsl_1(){}
	/**
	 * @return \Avalonia\Media\HslColor
	 */
	#[MethodOverride] public static function ToHsl_2($hue, $saturation, $value, $alpha){}
}
/**
 */
class HsvColor extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $A;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $H;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $S;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $V;
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
	public  function get_V(){}
	/**
	 * @uses HsvColorMethodsOverride::Equals_1 ($other)
	 * @uses HsvColorMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses HsvColorMethodsOverride::ToRgb_1 ()
	 * @uses HsvColorMethodsOverride::ToRgb_2 ($hue, $saturation, $value, $alpha)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToRgb(mixed ...$args){}
	/**
	 * @uses HsvColorMethodsOverride::ToHsl_1 ()
	 * @uses HsvColorMethodsOverride::ToHsl_2 ($hue, $saturation, $value, $alpha)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToHsl(mixed ...$args){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\HsvColor
	 */
	public static function Parse($s){}
	/**
	 * @param \System\String|string $s
	 * @param \Avalonia\Media\HsvColor& $hsvColor
	 * @return \System\Boolean
	 */
	public static function TryParse($s, $hsvColor){}
	/**
	 * @param \System\Double|double $a
	 * @param \System\Double|double $h
	 * @param \System\Double|double $s
	 * @param \System\Double|double $v
	 * @return \Avalonia\Media\HsvColor
	 */
	public static function FromAhsv($a, $h, $s, $v){}
	/**
	 * @param \System\Double|double $h
	 * @param \System\Double|double $s
	 * @param \System\Double|double $v
	 * @return \Avalonia\Media\HsvColor
	 */
	public static function FromHsv($h, $s, $v){}
	/**
	 * @param \Avalonia\Media\HsvColor $left
	 * @param \Avalonia\Media\HsvColor $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Media\HsvColor $left
	 * @param \Avalonia\Media\HsvColor $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\HsvColor $hsvColor
	 * @return \Avalonia\Media\Color
	 */
	public static function op_Explicit($hsvColor){}
}
