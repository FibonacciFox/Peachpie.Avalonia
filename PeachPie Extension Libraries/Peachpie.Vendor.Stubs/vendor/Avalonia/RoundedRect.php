<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RoundedRectOverride {
	/**
	 * @param \Avalonia\Rect $rect
	 * @param \Avalonia\Vector $radiiTopLeft
	 * @param \Avalonia\Vector $radiiTopRight
	 * @param \Avalonia\Vector $radiiBottomRight
	 * @param \Avalonia\Vector $radiiBottomLeft
	 */
	#[MethodOverride]public function __construct_1 ($rect, $radiiTopLeft, $radiiTopRight, $radiiBottomRight, $radiiBottomLeft){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @param \System\Double|double $radiusTopLeft
	 * @param \System\Double|double $radiusTopRight
	 * @param \System\Double|double $radiusBottomRight
	 * @param \System\Double|double $radiusBottomLeft
	 */
	#[MethodOverride]public function __construct_2 ($rect, $radiusTopLeft, $radiusTopRight, $radiusBottomRight, $radiusBottomLeft){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @param \Avalonia\Vector $radii
	 */
	#[MethodOverride]public function __construct_3 ($rect, $radii){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @param \System\Double|double $radiusX
	 * @param \System\Double|double $radiusY
	 */
	#[MethodOverride]public function __construct_4 ($rect, $radiusX, $radiusY){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @param \System\Double|double $radius
	 */
	#[MethodOverride]public function __construct_5 ($rect, $radius){}
	/**
	 * @param \Avalonia\Rect $rect
	 */
	#[MethodOverride]public function __construct_6 ($rect){}
	/**
	 * @param \Avalonia\Rect& &$bounds
	 * @param \Avalonia\CornerRadius& &$radius
	 */
	#[MethodOverride]public function __construct_7 (&$bounds, &$radius){}
}
final class RoundedRect extends \System\ValueType
{
	use RoundedRectOverride;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 * @since readonly
	 */
	public $Rect;
	/**
	 * @property
	 * @var \Avalonia\Vector
	 * @since readonly
	 */
	public $RadiiTopLeft;
	/**
	 * @property
	 * @var \Avalonia\Vector
	 * @since readonly
	 */
	public $RadiiTopRight;
	/**
	 * @property
	 * @var \Avalonia\Vector
	 * @since readonly
	 */
	public $RadiiBottomLeft;
	/**
	 * @property
	 * @var \Avalonia\Vector
	 * @since readonly
	 */
	public $RadiiBottomRight;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsRounded;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsUniform;
	/**
	 * @param \Avalonia\RoundedRect $left
	 * @param \Avalonia\RoundedRect $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\RoundedRect $left
	 * @param \Avalonia\RoundedRect $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Rect $r
	 * @return \Avalonia\RoundedRect
	 */
	public static function op_Implicit($r){}
	/**
	 * @param \System\Double|double $dx
	 * @param \System\Double|double $dy
	 * @return \Avalonia\RoundedRect
	 */
	public function Inflate($dx, $dy){}
	/**
	 * @param \System\Double|double $dx
	 * @param \System\Double|double $dy
	 * @return \Avalonia\RoundedRect
	 */
	public function Deflate($dx, $dy){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected function IsEmpty(){}
	private static function IsOutsideCorner($dx, $dy, $radius){}
	/**
	 * @param \Avalonia\Point $p
	 * @return \System\Boolean|bool
	 */
	public function ContainsExclusive($p){}
	/**
	 * @uses RoundedRectOverride::__construct_1 <br>public , args: ($rect, $radiiTopLeft, $radiiTopRight, $radiiBottomRight, $radiiBottomLeft)<br>
	 * @uses RoundedRectOverride::__construct_2 <br>public , args: ($rect, $radiusTopLeft, $radiusTopRight, $radiusBottomRight, $radiusBottomLeft)<br>
	 * @uses RoundedRectOverride::__construct_3 <br>public , args: ($rect, $radii)<br>
	 * @uses RoundedRectOverride::__construct_4 <br>public , args: ($rect, $radiusX, $radiusY)<br>
	 * @uses RoundedRectOverride::__construct_5 <br>public , args: ($rect, $radius)<br>
	 * @uses RoundedRectOverride::__construct_6 <br>public , args: ($rect)<br>
	 * @uses RoundedRectOverride::__construct_7 <br>public , args: (&$bounds, &$radius)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}