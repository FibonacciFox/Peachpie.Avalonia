<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RelativeRectOverride {
	/**
	 * @param \System\Double|double $x
	 * @param \System\Double|double $y
	 * @param \System\Double|double $width
	 * @param \System\Double|double $height
	 * @param \Avalonia\RelativeUnit $unit
	 */
	#[MethodOverride]public function __construct_1 ($x, $y, $width, $height, $unit){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @param \Avalonia\RelativeUnit $unit
	 */
	#[MethodOverride]public function __construct_2 ($rect, $unit){}
	/**
	 * @param \Avalonia\Size $size
	 * @param \Avalonia\RelativeUnit $unit
	 */
	#[MethodOverride]public function __construct_3 ($size, $unit){}
	/**
	 * @param \Avalonia\Point $position
	 * @param \Avalonia\Size $size
	 * @param \Avalonia\RelativeUnit $unit
	 */
	#[MethodOverride]public function __construct_4 ($position, $size, $unit){}
	/**
	 * @param \Avalonia\Point $topLeft
	 * @param \Avalonia\Point $bottomRight
	 * @param \Avalonia\RelativeUnit $unit
	 */
	#[MethodOverride]public function __construct_5 ($topLeft, $bottomRight, $unit){}
}
final class RelativeRect extends \System\ValueType implements
	\System\IEquatable_1
{
	use RelativeRectOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\RelativeRect
	 */
	public static $Fill;
	/**
	 * @property
	 * @var \Avalonia\RelativeUnit
	 * @since readonly
	 */
	public $Unit;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 * @since readonly
	 */
	public $Rect;
	/**
	 * @param \Avalonia\RelativeRect $left
	 * @param \Avalonia\RelativeRect $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\RelativeRect $left
	 * @param \Avalonia\RelativeRect $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Size $size
	 * @return \Avalonia\Rect
	 */
	public function ToPixels($size){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\RelativeRect
	 */
	public static function Parse($s){}
	/**
	 * @uses RelativeRectOverride::__construct_1 <br>public , args: ($x, $y, $width, $height, $unit)<br>
	 * @uses RelativeRectOverride::__construct_2 <br>public , args: ($rect, $unit)<br>
	 * @uses RelativeRectOverride::__construct_3 <br>public , args: ($size, $unit)<br>
	 * @uses RelativeRectOverride::__construct_4 <br>public , args: ($position, $size, $unit)<br>
	 * @uses RelativeRectOverride::__construct_5 <br>public , args: ($topLeft, $bottomRight, $unit)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}