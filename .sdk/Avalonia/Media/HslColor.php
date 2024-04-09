<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait HslColorOverride {
	/**
	 * @deprecated
	 * @return \Avalonia\Media\Color
	 */
	#[MethodOverride]public function ToRgb_1 (){}
	/**
	 * @deprecated
	 * @param \System\Double|double $hue
	 * @param \System\Double|double $saturation
	 * @param \System\Double|double $lightness
	 * @param \System\Double|double $alpha
	 * @return \Avalonia\Media\Color
	 */
	#[MethodOverride]public static function ToRgb_2 ($hue, $saturation, $lightness, $alpha){}
	/**
	 * @deprecated
	 * @return \Avalonia\Media\HsvColor
	 */
	#[MethodOverride]public function ToHsv_1 (){}
	/**
	 * @deprecated
	 * @param \System\Double|double $hue
	 * @param \System\Double|double $saturation
	 * @param \System\Double|double $lightness
	 * @param \System\Double|double $alpha
	 * @return \Avalonia\Media\HsvColor
	 */
	#[MethodOverride]public static function ToHsv_2 ($hue, $saturation, $lightness, $alpha){}
	/**
	 * @param \System\Double|double $alpha
	 * @param \System\Double|double $hue
	 * @param \System\Double|double $saturation
	 * @param \System\Double|double $lightness
	 */
	#[MethodOverride]public function __construct_1 ($alpha, $hue, $saturation, $lightness){}
	/**
	 * @param \Avalonia\Media\Color $color
	 */
	#[MethodOverride]public function __construct_2 ($color){}
}
final class HslColor extends \System\ValueType implements
	\System\IEquatable_1
{
	use HslColorOverride;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $A;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $H;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $S;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $L;
	/**
	 * @uses HslColorOverride::ToRgb_1 <br>public , args: ()<br>
	 * @uses HslColorOverride::ToRgb_2 <br>public , args: ($hue, $saturation, $lightness, $alpha)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Media\Color|mixed|\override
	 */
	#[MethodOverridePublic]function ToRgb (\override ...$args){}
	/**
	 * @uses HslColorOverride::ToHsv_1 <br>public , args: ()<br>
	 * @uses HslColorOverride::ToHsv_2 <br>public , args: ($hue, $saturation, $lightness, $alpha)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Media\HsvColor|mixed|\override
	 */
	#[MethodOverridePublic]function ToHsv (\override ...$args){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\HslColor
	 */
	public static function Parse($s){}
	/**
	 * @param \System\String|string $s
	 * @param \Avalonia\Media\HslColor& &$hslColor
	 * @return \System\Boolean|bool
	 */
	public static function TryParse($s, &$hslColor){}
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
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Media\HslColor $left
	 * @param \Avalonia\Media\HslColor $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\HslColor $hslColor
	 * @return \Avalonia\Media\Color
	 */
	public static function op_Explicit($hslColor){}
	/**
	 * @uses HslColorOverride::__construct_1 <br>public , args: ($alpha, $hue, $saturation, $lightness)<br>
	 * @uses HslColorOverride::__construct_2 <br>public , args: ($color)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}