<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PixelVectorOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\PixelVector $a
	 * @param \Avalonia\PixelVector $b
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function op_Multiply_1 ($a, $b){}
	/**
	 * @deprecated
	 * @param \Avalonia\PixelVector $vector
	 * @param \System\Int32|int $scale
	 * @return \Avalonia\PixelVector
	 */
	#[MethodOverride]public static function op_Multiply_2 ($vector, $scale){}
}
final class PixelVector extends \System\ValueType
{
	use PixelVectorOverride;
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
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Length;
	/**
	 * @param \Avalonia\PixelVector $a
	 * @return \Avalonia\PixelPoint
	 */
	public static function op_Explicit($a){}
	/**
	 * @uses PixelVectorOverride::op_Multiply_1 <br>public , args: ($a, $b)<br>
	 * @uses PixelVectorOverride::op_Multiply_2 <br>public , args: ($vector, $scale)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\Avalonia\PixelVector|mixed|\override
	 */
	#[MethodOverridePublic]function op_Multiply (\override ...$args){}
	/**
	 * @param \Avalonia\PixelVector $vector
	 * @param \System\Int32|int $scale
	 * @return \Avalonia\PixelVector
	 */
	public static function op_Division($vector, $scale){}
	/**
	 * @param \Avalonia\PixelVector $a
	 * @return \Avalonia\PixelVector
	 */
	public static function op_UnaryNegation($a){}
	/**
	 * @param \Avalonia\PixelVector $a
	 * @param \Avalonia\PixelVector $b
	 * @return \Avalonia\PixelVector
	 */
	public static function op_Addition($a, $b){}
	/**
	 * @param \Avalonia\PixelVector $a
	 * @param \Avalonia\PixelVector $b
	 * @return \Avalonia\PixelVector
	 */
	public static function op_Subtraction($a, $b){}
	/**
	 * @param \Avalonia\PixelVector $other
	 * @return \System\Boolean|bool
	 */
	public function NearlyEquals($other){}
	/**
	 * @param \Avalonia\PixelVector $left
	 * @param \Avalonia\PixelVector $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\PixelVector $left
	 * @param \Avalonia\PixelVector $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\Int32|int $x
	 * @return \Avalonia\PixelVector
	 */
	public function WithX($x){}
	/**
	 * @param \System\Int32|int $y
	 * @return \Avalonia\PixelVector
	 */
	public function WithY($y){}
	/**
	 * @param \System\Int32|int $x
	 * @param \System\Int32|int $y
	 */
	public function __construct($x, $y){}
}