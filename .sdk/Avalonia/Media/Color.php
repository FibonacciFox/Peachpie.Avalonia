<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ColorOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\Color
	 */
	#[MethodOverride]public static function Parse_1 ($s){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @return \Avalonia\Media\Color
	 */
	#[MethodOverride]public static function Parse_2 ($s){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \Avalonia\Media\Color& &$color
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_1 ($s, &$color){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \Avalonia\Media\Color& &$color
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_2 ($s, &$color){}
	/**
	 * @deprecated
	 * @return \Avalonia\Media\HslColor
	 */
	#[MethodOverride]public function ToHsl_1 (){}
	/**
	 * @deprecated
	 * @param \System\Byte $red
	 * @param \System\Byte $green
	 * @param \System\Byte $blue
	 * @param \System\Byte $alpha
	 * @return \Avalonia\Media\HslColor
	 */
	#[MethodOverride]public static function ToHsl_2 ($red, $green, $blue, $alpha){}
	/**
	 * @deprecated
	 * @param \System\Double|double $r
	 * @param \System\Double|double $g
	 * @param \System\Double|double $b
	 * @param \System\Double|double $a
	 * @return \Avalonia\Media\HslColor
	 */
	#[MethodOverride]protected static function ToHsl_3 ($r, $g, $b, $a){}
	/**
	 * @deprecated
	 * @return \Avalonia\Media\HsvColor
	 */
	#[MethodOverride]public function ToHsv_1 (){}
	/**
	 * @deprecated
	 * @param \System\Byte $red
	 * @param \System\Byte $green
	 * @param \System\Byte $blue
	 * @param \System\Byte $alpha
	 * @return \Avalonia\Media\HsvColor
	 */
	#[MethodOverride]public static function ToHsv_2 ($red, $green, $blue, $alpha){}
	/**
	 * @deprecated
	 * @param \System\Double|double $r
	 * @param \System\Double|double $g
	 * @param \System\Double|double $b
	 * @param \System\Double|double $a
	 * @return \Avalonia\Media\HsvColor
	 */
	#[MethodOverride]protected static function ToHsv_3 ($r, $g, $b, $a){}
}
final class Color extends \System\ValueType implements
	\System\IEquatable_1
{
	use ColorOverride;

	/**
	 * @property
	 * @var \System\Byte
	 * @since readonly
	 */
	public $A;
	/**
	 * @property
	 * @var \System\Byte
	 * @since readonly
	 */
	public $R;
	/**
	 * @property
	 * @var \System\Byte
	 * @since readonly
	 */
	public $G;
	/**
	 * @property
	 * @var \System\Byte
	 * @since readonly
	 */
	public $B;
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
	 * @uses ColorOverride::Parse_1 <br>public , args: ($s)<br>
	 * @uses ColorOverride::Parse_2 <br>public , args: ($s)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Media\Color|mixed|\override
	 */
	#[MethodOverridePublic]function Parse (\override ...$args){}
	/**
	 * @uses ColorOverride::TryParse_1 <br>public , args: ($s, &$color)<br>
	 * @uses ColorOverride::TryParse_2 <br>public , args: ($s, &$color)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryParse (\override ...$args){}
	private static function TryParseHexFormat($s, &$color){}
	private static function TryParseCssFormat($s, &$color){}
	/**
	 * @return \System\UInt32
	 */
	public function ToUInt32(){}
	/**
	 * @return \System\UInt32
	 */
	public function ToUint32(){}
	/**
	 * @uses ColorOverride::ToHsl_1 <br>public , args: ()<br>
	 * @uses ColorOverride::ToHsl_2 <br>public , args: ($red, $green, $blue, $alpha)<br>
	 * @uses ColorOverride::ToHsl_3 <br>protected , args: ($r, $g, $b, $a)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Media\HslColor|mixed|\override
	 */
	#[MethodOverridePublic]function ToHsl (\override ...$args){}
	/**
	 * @uses ColorOverride::ToHsv_1 <br>public , args: ()<br>
	 * @uses ColorOverride::ToHsv_2 <br>public , args: ($red, $green, $blue, $alpha)<br>
	 * @uses ColorOverride::ToHsv_3 <br>protected , args: ($r, $g, $b, $a)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Media\HsvColor|mixed|\override
	 */
	#[MethodOverridePublic]function ToHsv (\override ...$args){}
	/**
	 * @param \Avalonia\Media\Color $left
	 * @param \Avalonia\Media\Color $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Media\Color $left
	 * @param \Avalonia\Media\Color $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\Byte $a
	 * @param \System\Byte $r
	 * @param \System\Byte $g
	 * @param \System\Byte $b
	 */
	public function __construct($a, $r, $g, $b){}
}