<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RelativePointOverride {
	/**
	 * @param \System\Double|double $x
	 * @param \System\Double|double $y
	 * @param \Avalonia\RelativeUnit $unit
	 */
	#[MethodOverride]public function __construct_1 ($x, $y, $unit){}
	/**
	 * @param \Avalonia\Point $point
	 * @param \Avalonia\RelativeUnit $unit
	 */
	#[MethodOverride]public function __construct_2 ($point, $unit){}
}
final class RelativePoint extends \System\ValueType implements
	\System\IEquatable_1
{
	use RelativePointOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\RelativePoint
	 */
	public static $TopLeft;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\RelativePoint
	 */
	public static $Center;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\RelativePoint
	 */
	public static $BottomRight;
	/**
	 * @property
	 * @var \Avalonia\Point
	 * @since readonly
	 */
	public $Point;
	/**
	 * @property
	 * @var \Avalonia\RelativeUnit
	 * @since readonly
	 */
	public $Unit;
	/**
	 * @param \Avalonia\RelativePoint $left
	 * @param \Avalonia\RelativePoint $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\RelativePoint $left
	 * @param \Avalonia\RelativePoint $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Size $size
	 * @return \Avalonia\Point
	 */
	public function ToPixels($size){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\RelativePoint
	 */
	public static function Parse($s){}
	/**
	 * @uses RelativePointOverride::__construct_1 <br>public , args: ($x, $y, $unit)<br>
	 * @uses RelativePointOverride::__construct_2 <br>public , args: ($point, $unit)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}