<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait HsvColorOverride {
	/**
	 * @deprecated
	 * @return \Avalonia\Media\Color
	 */
	#[MethodOverride]public function ToRgb_1 (){}
	/**
	 * @deprecated
	 * @param \System\Double|double $hue
	 * @param \System\Double|double $saturation
	 * @param \System\Double|double $value
	 * @param \System\Double|double $alpha
	 * @return \Avalonia\Media\Color
	 */
	#[MethodOverride]public static function ToRgb_2 ($hue, $saturation, $value, $alpha){}
	/**
	 * @deprecated
	 * @return \Avalonia\Media\HslColor
	 */
	#[MethodOverride]public function ToHsl_1 (){}
	/**
	 * @deprecated
	 * @param \System\Double|double $hue
	 * @param \System\Double|double $saturation
	 * @param \System\Double|double $value
	 * @param \System\Double|double $alpha
	 * @return \Avalonia\Media\HslColor
	 */
	#[MethodOverride]public static function ToHsl_2 ($hue, $saturation, $value, $alpha){}
	/**
	 * @param \System\Double|double $alpha
	 * @param \System\Double|double $hue
	 * @param \System\Double|double $saturation
	 * @param \System\Double|double $value
	 */
	#[MethodOverride]public function __construct_1 ($alpha, $hue, $saturation, $value){}
	/**
	 * @param \Avalonia\Media\Color $color
	 */
	#[MethodOverride]public function __construct_2 ($color){}
}
final class HsvColor extends \System\ValueType implements
	\System\IEquatable_1
{
	use HsvColorOverride;
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
	public $V;
	/**
	 * @uses HsvColorOverride::ToRgb_1 <br>public , args: ()<br>
	 * @uses HsvColorOverride::ToRgb_2 <br>public , args: ($hue, $saturation, $value, $alpha)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Media\Color|mixed|\override
	 */
	#[MethodOverridePublic]function ToRgb (\override ...$args){}
	/**
	 * @uses HsvColorOverride::ToHsl_1 <br>public , args: ()<br>
	 * @uses HsvColorOverride::ToHsl_2 <br>public , args: ($hue, $saturation, $value, $alpha)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Media\HslColor|mixed|\override
	 */
	#[MethodOverridePublic]function ToHsl (\override ...$args){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\HsvColor
	 */
	public static function Parse($s){}
	/**
	 * @param \System\String|string $s
	 * @param \Avalonia\Media\HsvColor& &$hsvColor
	 * @return \System\Boolean|bool
	 */
	public static function TryParse($s, &$hsvColor){}
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
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Media\HsvColor $left
	 * @param \Avalonia\Media\HsvColor $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\HsvColor $hsvColor
	 * @return \Avalonia\Media\Color
	 */
	public static function op_Explicit($hsvColor){}
	/**
	 * @uses HsvColorOverride::__construct_1 <br>public , args: ($alpha, $hue, $saturation, $value)<br>
	 * @uses HsvColorOverride::__construct_2 <br>public , args: ($color)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}