<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ColorMethodsOverride
{
	/**
	 * @return \Avalonia\Media\Color
	 */
	#[MethodOverride] public static function Parse_1($s){}
	/**
	 * @return \Avalonia\Media\Color
	 */
	#[MethodOverride] public static function Parse_2($s){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_1($s, $color){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_2($s, $color){}
	/**
	 * @return \Avalonia\Media\HslColor
	 */
	#[MethodOverride] public  function ToHsl_1(){}
	/**
	 * @return \Avalonia\Media\HslColor
	 */
	#[MethodOverride] public static function ToHsl_2($red, $green, $blue, $alpha){}
	/**
	 * @return \Avalonia\Media\HslColor
	 */
	#[MethodOverride] protected static function ToHsl_3($r, $g, $b, $a){}
	/**
	 * @return \Avalonia\Media\HsvColor
	 */
	#[MethodOverride] public  function ToHsv_1(){}
	/**
	 * @return \Avalonia\Media\HsvColor
	 */
	#[MethodOverride] public static function ToHsv_2($red, $green, $blue, $alpha){}
	/**
	 * @return \Avalonia\Media\HsvColor
	 */
	#[MethodOverride] protected static function ToHsv_3($r, $g, $b, $a){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($other){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
}
/**
 */
class Color extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @return \System\Byte
	 */
	public  function get_A(){}
	/**
	 * @return \System\Byte
	 */
	public  function get_R(){}
	/**
	 * @return \System\Byte
	 */
	public  function get_G(){}
	/**
	 * @return \System\Byte
	 */
	public  function get_B(){}
	/**
	 * @param \System\Byte $a
	 * @param \System\Byte $r
	 * @param \System\Byte $g
	 * @param \System\Byte $b
	 * @return \Avalonia\Media\Color
	 */
	public static function FromArgb($a, $r, $g, $b){}
	/**
	 * @param \System\Byte $r
	 * @param \System\Byte $g
	 * @param \System\Byte $b
	 * @return \Avalonia\Media\Color
	 */
	public static function FromRgb($r, $g, $b){}
	/**
	 * @param \System\UInt32 $value
	 * @return \Avalonia\Media\Color
	 */
	public static function FromUInt32($value){}
	/**
	 * @uses ColorMethodsOverride::Parse_1 ($s)
	 * @uses ColorMethodsOverride::Parse_2 ($s)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Parse(mixed ...$args){}
	/**
	 * @uses ColorMethodsOverride::TryParse_1 ($s, $color)
	 * @uses ColorMethodsOverride::TryParse_2 ($s, $color)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryParse(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $s
	 * @param \Avalonia\Media\Color& $color
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseHexFormat($s, $color){}
	/**
	 * @param \System\String|string $s
	 * @param \Avalonia\Media\Color& $color
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseCssFormat($s, $color){}
	/**
	 * @return \System\UInt32
	 */
	public  function ToUInt32(){}
	/**
	 * @return \System\UInt32
	 */
	public  function ToUint32(){}
	/**
	 * @uses ColorMethodsOverride::ToHsl_1 ()
	 * @uses ColorMethodsOverride::ToHsl_2 ($red, $green, $blue, $alpha)
	 * @uses ColorMethodsOverride::ToHsl_3 ($r, $g, $b, $a)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToHsl(mixed ...$args){}
	/**
	 * @uses ColorMethodsOverride::ToHsv_1 ()
	 * @uses ColorMethodsOverride::ToHsv_2 ($red, $green, $blue, $alpha)
	 * @uses ColorMethodsOverride::ToHsv_3 ($r, $g, $b, $a)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToHsv(mixed ...$args){}
	/**
	 * @uses ColorMethodsOverride::Equals_1 ($other)
	 * @uses ColorMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \Avalonia\Media\Color $left
	 * @param \Avalonia\Media\Color $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Media\Color $left
	 * @param \Avalonia\Media\Color $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
}
