<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SizeOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Size $size
	 * @param \Avalonia\Vector $scale
	 * @return \Avalonia\Size
	 */
	#[MethodOverride]public static function op_Multiply_1 ($size, $scale){}
	/**
	 * @deprecated
	 * @param \Avalonia\Size $size
	 * @param \System\Double|double $scale
	 * @return \Avalonia\Size
	 */
	#[MethodOverride]public static function op_Multiply_2 ($size, $scale){}
	/**
	 * @deprecated
	 * @param \Avalonia\Size $size
	 * @param \Avalonia\Vector $scale
	 * @return \Avalonia\Size
	 */
	#[MethodOverride]public static function op_Division_1 ($size, $scale){}
	/**
	 * @deprecated
	 * @param \Avalonia\Size $left
	 * @param \Avalonia\Size $right
	 * @return \Avalonia\Vector
	 */
	#[MethodOverride]public static function op_Division_2 ($left, $right){}
	/**
	 * @deprecated
	 * @param \Avalonia\Size $size
	 * @param \System\Double|double $scale
	 * @return \Avalonia\Size
	 */
	#[MethodOverride]public static function op_Division_3 ($size, $scale){}
	/**
	 * @param \System\Double|double $width
	 * @param \System\Double|double $height
	 */
	#[MethodOverride]public function __construct_1 ($width, $height){}
	/**
	 * @param \System\Numerics\Vector2 $vector2
	 */
	#[MethodOverride]public function __construct_2 ($vector2){}
}
final class Size extends \System\ValueType implements
	\System\IEquatable_1
{
	use SizeOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Size
	 */
	public static $Infinity;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $AspectRatio;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Width;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Height;
	/**
	 * @param \Avalonia\Size $left
	 * @param \Avalonia\Size $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Size $left
	 * @param \Avalonia\Size $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses SizeOverride::op_Multiply_1 <br>public , args: ($size, $scale)<br>
	 * @uses SizeOverride::op_Multiply_2 <br>public , args: ($size, $scale)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Size|mixed|\override
	 */
	#[MethodOverridePublic]function op_Multiply (\override ...$args){}
	/**
	 * @uses SizeOverride::op_Division_1 <br>public , args: ($size, $scale)<br>
	 * @uses SizeOverride::op_Division_2 <br>public , args: ($left, $right)<br>
	 * @uses SizeOverride::op_Division_3 <br>public , args: ($size, $scale)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Size|\Avalonia\Vector|mixed|\override
	 */
	#[MethodOverridePublic]function op_Division (\override ...$args){}
	/**
	 * @param \Avalonia\Size $size
	 * @param \Avalonia\Size $toAdd
	 * @return \Avalonia\Size
	 */
	public static function op_Addition($size, $toAdd){}
	/**
	 * @param \Avalonia\Size $size
	 * @param \Avalonia\Size $toSubtract
	 * @return \Avalonia\Size
	 */
	public static function op_Subtraction($size, $toSubtract){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Size
	 */
	public static function Parse($s){}
	/**
	 * @param \Avalonia\Size $constraint
	 * @return \Avalonia\Size
	 */
	public function Constrain($constraint){}
	/**
	 * @param \Avalonia\Thickness $thickness
	 * @return \Avalonia\Size
	 */
	public function Deflate($thickness){}
	/**
	 * @param \Avalonia\Size $other
	 * @return \System\Boolean|bool
	 */
	public function NearlyEquals($other){}
	/**
	 * @param \Avalonia\Thickness $thickness
	 * @return \Avalonia\Size
	 */
	public function Inflate($thickness){}
	/**
	 * @param \System\Double|double $width
	 * @return \Avalonia\Size
	 */
	public function WithWidth($width){}
	/**
	 * @param \System\Double|double $height
	 * @return \Avalonia\Size
	 */
	public function WithHeight($height){}
	/**
	 * @param \System\Double& &$width
	 * @param \System\Double& &$height
	 * @return \System\Void|void
	 */
	public function Deconstruct(&$width, &$height){}
	/**
	 * @uses SizeOverride::__construct_1 <br>public , args: ($width, $height)<br>
	 * @uses SizeOverride::__construct_2 <br>public , args: ($vector2)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}