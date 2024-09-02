<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PixelPointOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\PixelPoint $a
	 * @param \Avalonia\PixelPoint $b
	 * @return \Avalonia\PixelPoint
	 */
	#[MethodOverride]public static function op_Addition_1 ($a, $b){}
	/**
	 * @deprecated
	 * @param \Avalonia\PixelPoint $a
	 * @param \Avalonia\PixelVector $b
	 * @return \Avalonia\PixelPoint
	 */
	#[MethodOverride]public static function op_Addition_2 ($a, $b){}
	/**
	 * @deprecated
	 * @param \Avalonia\PixelPoint $a
	 * @param \Avalonia\PixelPoint $b
	 * @return \Avalonia\PixelPoint
	 */
	#[MethodOverride]public static function op_Subtraction_1 ($a, $b){}
	/**
	 * @deprecated
	 * @param \Avalonia\PixelPoint $a
	 * @param \Avalonia\PixelVector $b
	 * @return \Avalonia\PixelPoint
	 */
	#[MethodOverride]public static function op_Subtraction_2 ($a, $b){}
	/**
	 * @deprecated
	 * @param \System\Double|double $scale
	 * @return \Avalonia\Point
	 */
	#[MethodOverride]public function ToPoint_1 ($scale){}
	/**
	 * @deprecated
	 * @param \Avalonia\Vector $scale
	 * @return \Avalonia\Point
	 */
	#[MethodOverride]public function ToPoint_2 ($scale){}
	/**
	 * @deprecated
	 * @param \System\Double|double $dpi
	 * @return \Avalonia\Point
	 */
	#[MethodOverride]public function ToPointWithDpi_1 ($dpi){}
	/**
	 * @deprecated
	 * @param \Avalonia\Vector $dpi
	 * @return \Avalonia\Point
	 */
	#[MethodOverride]public function ToPointWithDpi_2 ($dpi){}
	/**
	 * @deprecated
	 * @param \Avalonia\Point $point
	 * @param \System\Double|double $scale
	 * @return \Avalonia\PixelPoint
	 */
	#[MethodOverride]public static function FromPoint_1 ($point, $scale){}
	/**
	 * @deprecated
	 * @param \Avalonia\Point $point
	 * @param \Avalonia\Vector $scale
	 * @return \Avalonia\PixelPoint
	 */
	#[MethodOverride]public static function FromPoint_2 ($point, $scale){}
	/**
	 * @deprecated
	 * @param \Avalonia\Point $point
	 * @param \System\Double|double $dpi
	 * @return \Avalonia\PixelPoint
	 */
	#[MethodOverride]public static function FromPointWithDpi_1 ($point, $dpi){}
	/**
	 * @deprecated
	 * @param \Avalonia\Point $point
	 * @param \Avalonia\Vector $dpi
	 * @return \Avalonia\PixelPoint
	 */
	#[MethodOverride]public static function FromPointWithDpi_2 ($point, $dpi){}
}
final class PixelPoint extends \System\ValueType implements
	\System\IEquatable_1
{
	use PixelPointOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\PixelPoint
	 */
	public static $Origin;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $X;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Y;
	/**
	 * @param \Avalonia\PixelPoint $left
	 * @param \Avalonia\PixelPoint $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\PixelPoint $left
	 * @param \Avalonia\PixelPoint $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\PixelPoint $p
	 * @return \Avalonia\PixelVector
	 */
	public static function op_Implicit($p){}
	/**
	 * @uses PixelPointOverride::op_Addition_1 <br>public , args: ($a, $b)<br>
	 * @uses PixelPointOverride::op_Addition_2 <br>public , args: ($a, $b)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\PixelPoint|mixed|\override
	 */
	#[MethodOverridePublic]function op_Addition (\override ...$args){}
	/**
	 * @uses PixelPointOverride::op_Subtraction_1 <br>public , args: ($a, $b)<br>
	 * @uses PixelPointOverride::op_Subtraction_2 <br>public , args: ($a, $b)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\PixelPoint|mixed|\override
	 */
	#[MethodOverridePublic]function op_Subtraction (\override ...$args){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\PixelPoint
	 */
	public static function Parse($s){}
	/**
	 * @param \System\Int32|int $x
	 * @return \Avalonia\PixelPoint
	 */
	public function WithX($x){}
	/**
	 * @param \System\Int32|int $y
	 * @return \Avalonia\PixelPoint
	 */
	public function WithY($y){}
	/**
	 * @uses PixelPointOverride::ToPoint_1 <br>public , args: ($scale)<br>
	 * @uses PixelPointOverride::ToPoint_2 <br>public , args: ($scale)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Point|mixed|\override
	 */
	#[MethodOverridePublic]function ToPoint (\override ...$args){}
	/**
	 * @uses PixelPointOverride::ToPointWithDpi_1 <br>public , args: ($dpi)<br>
	 * @uses PixelPointOverride::ToPointWithDpi_2 <br>public , args: ($dpi)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Point|mixed|\override
	 */
	#[MethodOverridePublic]function ToPointWithDpi (\override ...$args){}
	/**
	 * @uses PixelPointOverride::FromPoint_1 <br>public , args: ($point, $scale)<br>
	 * @uses PixelPointOverride::FromPoint_2 <br>public , args: ($point, $scale)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\PixelPoint|mixed|\override
	 */
	#[MethodOverridePublic]function FromPoint (\override ...$args){}
	/**
	 * @uses PixelPointOverride::FromPointWithDpi_1 <br>public , args: ($point, $dpi)<br>
	 * @uses PixelPointOverride::FromPointWithDpi_2 <br>public , args: ($point, $dpi)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\PixelPoint|mixed|\override
	 */
	#[MethodOverridePublic]function FromPointWithDpi (\override ...$args){}
	/**
	 * @param \System\Int32|int $x
	 * @param \System\Int32|int $y
	 */
	public function __construct($x, $y){}
}