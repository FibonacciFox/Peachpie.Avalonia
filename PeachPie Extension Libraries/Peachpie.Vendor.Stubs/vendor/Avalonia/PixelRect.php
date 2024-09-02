<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PixelRectOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\PixelPoint $p
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Contains_1 ($p){}
	/**
	 * @deprecated
	 * @param \Avalonia\PixelRect $r
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Contains_2 ($r){}
	/**
	 * @deprecated
	 * @param \System\Double|double $scale
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride]public function ToRect_1 ($scale){}
	/**
	 * @deprecated
	 * @param \Avalonia\Vector $scale
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride]public function ToRect_2 ($scale){}
	/**
	 * @deprecated
	 * @param \System\Double|double $dpi
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride]public function ToRectWithDpi_1 ($dpi){}
	/**
	 * @deprecated
	 * @param \Avalonia\Vector $dpi
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride]public function ToRectWithDpi_2 ($dpi){}
	/**
	 * @deprecated
	 * @param \Avalonia\Rect $rect
	 * @param \System\Double|double $scale
	 * @return \Avalonia\PixelRect
	 */
	#[MethodOverride]public static function FromRect_1 ($rect, $scale){}
	/**
	 * @deprecated
	 * @param \Avalonia\Rect $rect
	 * @param \Avalonia\Vector $scale
	 * @return \Avalonia\PixelRect
	 */
	#[MethodOverride]public static function FromRect_2 ($rect, $scale){}
	/**
	 * @deprecated
	 * @param \Avalonia\Rect $rect
	 * @param \System\Double|double $dpi
	 * @return \Avalonia\PixelRect
	 */
	#[MethodOverride]public static function FromRectWithDpi_1 ($rect, $dpi){}
	/**
	 * @deprecated
	 * @param \Avalonia\Rect $rect
	 * @param \Avalonia\Vector $dpi
	 * @return \Avalonia\PixelRect
	 */
	#[MethodOverride]public static function FromRectWithDpi_2 ($rect, $dpi){}
	/**
	 * @param \System\Int32|int $x
	 * @param \System\Int32|int $y
	 * @param \System\Int32|int $width
	 * @param \System\Int32|int $height
	 */
	#[MethodOverride]public function __construct_1 ($x, $y, $width, $height){}
	/**
	 * @param \Avalonia\PixelSize $size
	 */
	#[MethodOverride]public function __construct_2 ($size){}
	/**
	 * @param \Avalonia\PixelPoint $position
	 * @param \Avalonia\PixelSize $size
	 */
	#[MethodOverride]public function __construct_3 ($position, $size){}
	/**
	 * @param \Avalonia\PixelPoint $topLeft
	 * @param \Avalonia\PixelPoint $bottomRight
	 */
	#[MethodOverride]public function __construct_4 ($topLeft, $bottomRight){}
}
final class PixelRect extends \System\ValueType implements
	\System\IEquatable_1
{
	use PixelRectOverride;
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
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Width;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Height;
	/**
	 * @property
	 * @var \Avalonia\PixelPoint
	 * @since readonly
	 */
	public $Position;
	/**
	 * @property
	 * @var \Avalonia\PixelSize
	 * @since readonly
	 */
	public $Size;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Right;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Bottom;
	/**
	 * @property
	 * @var \Avalonia\PixelPoint
	 * @since readonly
	 */
	public $TopLeft;
	/**
	 * @property
	 * @var \Avalonia\PixelPoint
	 * @since readonly
	 */
	public $TopRight;
	/**
	 * @property
	 * @var \Avalonia\PixelPoint
	 * @since readonly
	 */
	public $BottomLeft;
	/**
	 * @property
	 * @var \Avalonia\PixelPoint
	 * @since readonly
	 */
	public $BottomRight;
	/**
	 * @property
	 * @var \Avalonia\PixelPoint
	 * @since readonly
	 */
	public $Center;
	/**
	 * @param \Avalonia\PixelRect $left
	 * @param \Avalonia\PixelRect $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\PixelRect $left
	 * @param \Avalonia\PixelRect $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses PixelRectOverride::Contains_1 <br>public , args: ($p)<br>
	 * @uses PixelRectOverride::Contains_2 <br>public , args: ($r)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function Contains (\override ...$args){}
	/**
	 * @param \Avalonia\PixelPoint $p
	 * @return \System\Boolean|bool
	 */
	public function ContainsExclusive($p){}
	/**
	 * @param \Avalonia\PixelRect $rect
	 * @return \Avalonia\PixelRect
	 */
	public function CenterRect($rect){}
	/**
	 * @param \Avalonia\PixelRect $rect
	 * @return \Avalonia\PixelRect
	 */
	public function Intersect($rect){}
	/**
	 * @param \Avalonia\PixelRect $rect
	 * @return \System\Boolean|bool
	 */
	public function Intersects($rect){}
	/**
	 * @param \Avalonia\PixelVector $offset
	 * @return \Avalonia\PixelRect
	 */
	public function Translate($offset){}
	/**
	 * @param \Avalonia\PixelRect $rect
	 * @return \Avalonia\PixelRect
	 */
	public function Union($rect){}
	/**
	 * @param \System\Int32|int $x
	 * @return \Avalonia\PixelRect
	 */
	public function WithX($x){}
	/**
	 * @param \System\Int32|int $y
	 * @return \Avalonia\PixelRect
	 */
	public function WithY($y){}
	/**
	 * @param \System\Int32|int $width
	 * @return \Avalonia\PixelRect
	 */
	public function WithWidth($width){}
	/**
	 * @param \System\Int32|int $height
	 * @return \Avalonia\PixelRect
	 */
	public function WithHeight($height){}
	/**
	 * @uses PixelRectOverride::ToRect_1 <br>public , args: ($scale)<br>
	 * @uses PixelRectOverride::ToRect_2 <br>public , args: ($scale)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Rect|mixed|\override
	 */
	#[MethodOverridePublic]function ToRect (\override ...$args){}
	/**
	 * @uses PixelRectOverride::ToRectWithDpi_1 <br>public , args: ($dpi)<br>
	 * @uses PixelRectOverride::ToRectWithDpi_2 <br>public , args: ($dpi)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Rect|mixed|\override
	 */
	#[MethodOverridePublic]function ToRectWithDpi (\override ...$args){}
	/**
	 * @uses PixelRectOverride::FromRect_1 <br>public , args: ($rect, $scale)<br>
	 * @uses PixelRectOverride::FromRect_2 <br>public , args: ($rect, $scale)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\PixelRect|mixed|\override
	 */
	#[MethodOverridePublic]function FromRect (\override ...$args){}
	/**
	 * @uses PixelRectOverride::FromRectWithDpi_1 <br>public , args: ($rect, $dpi)<br>
	 * @uses PixelRectOverride::FromRectWithDpi_2 <br>public , args: ($rect, $dpi)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\PixelRect|mixed|\override
	 */
	#[MethodOverridePublic]function FromRectWithDpi (\override ...$args){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\PixelRect
	 */
	public static function Parse($s){}
	private static function FromPointCeiling($point, $scale){}
	/**
	 * @uses PixelRectOverride::__construct_1 <br>public , args: ($x, $y, $width, $height)<br>
	 * @uses PixelRectOverride::__construct_2 <br>public , args: ($size)<br>
	 * @uses PixelRectOverride::__construct_3 <br>public , args: ($position, $size)<br>
	 * @uses PixelRectOverride::__construct_4 <br>public , args: ($topLeft, $bottomRight)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}