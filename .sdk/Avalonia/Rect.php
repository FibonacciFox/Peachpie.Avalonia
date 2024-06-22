<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RectOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Rect $rect
	 * @param \Avalonia\Vector $scale
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride]public static function op_Multiply_1 ($rect, $scale){}
	/**
	 * @deprecated
	 * @param \Avalonia\Rect $rect
	 * @param \System\Double|double $scale
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride]public static function op_Multiply_2 ($rect, $scale){}
	/**
	 * @deprecated
	 * @param \Avalonia\Point $p
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Contains_1 ($p){}
	/**
	 * @deprecated
	 * @param \Avalonia\Rect $r
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Contains_2 ($r){}
	/**
	 * @deprecated
	 * @param \System\Double|double $thickness
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride]public function Inflate_1 ($thickness){}
	/**
	 * @deprecated
	 * @param \Avalonia\Thickness $thickness
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride]public function Inflate_2 ($thickness){}
	/**
	 * @deprecated
	 * @param \System\Double|double $thickness
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride]public function Deflate_1 ($thickness){}
	/**
	 * @deprecated
	 * @param \Avalonia\Thickness $thickness
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride]public function Deflate_2 ($thickness){}
	/**
	 * @deprecated
	 * @param \Avalonia\Matrix $matrix
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride]public function TransformToAABB_1 ($matrix){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Matrix4x4 $matrix
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride]protected function TransformToAABB_2 ($matrix){}
	/**
	 * @deprecated
	 * @param \Avalonia\Rect $rect
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride]public function Union_1 ($rect){}
	/**
	 * @deprecated
	 * @param \System\Nullable_1 $left [generic: Avalonia\Rect]
	 * @param \System\Nullable_1 $right [generic: Avalonia\Rect]
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]protected static function Union_2 ($left, $right){}
	/**
	 * @param \System\Double|double $x
	 * @param \System\Double|double $y
	 * @param \System\Double|double $width
	 * @param \System\Double|double $height
	 */
	#[MethodOverride]public function __construct_1 ($x, $y, $width, $height){}
	/**
	 * @param \Avalonia\Size $size
	 */
	#[MethodOverride]public function __construct_2 ($size){}
	/**
	 * @param \Avalonia\Point $position
	 * @param \Avalonia\Size $size
	 */
	#[MethodOverride]public function __construct_3 ($position, $size){}
	/**
	 * @param \Avalonia\Point $topLeft
	 * @param \Avalonia\Point $bottomRight
	 */
	#[MethodOverride]public function __construct_4 ($topLeft, $bottomRight){}
}
final class Rect extends \System\ValueType implements
	\System\IEquatable_1
{
	use RectOverride;

	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $X;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Y;
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
	 * @property
	 * @var \Avalonia\Point
	 * @since readonly
	 */
	public $Position;
	/**
	 * @property
	 * @var \Avalonia\Size
	 * @since readonly
	 */
	public $Size;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Right;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Bottom;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Left;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Top;
	/**
	 * @property
	 * @var \Avalonia\Point
	 * @since readonly
	 */
	public $TopLeft;
	/**
	 * @property
	 * @var \Avalonia\Point
	 * @since readonly
	 */
	public $TopRight;
	/**
	 * @property
	 * @var \Avalonia\Point
	 * @since readonly
	 */
	public $BottomLeft;
	/**
	 * @property
	 * @var \Avalonia\Point
	 * @since readonly
	 */
	public $BottomRight;
	/**
	 * @property
	 * @var \Avalonia\Point
	 * @since readonly
	 */
	public $Center;
	/**
	 * @param \Avalonia\Rect $left
	 * @param \Avalonia\Rect $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Rect $left
	 * @param \Avalonia\Rect $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses RectOverride::op_Multiply_1 <br>public , args: ($rect, $scale)<br>
	 * @uses RectOverride::op_Multiply_2 <br>public , args: ($rect, $scale)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Rect|mixed|\override
	 */
	#[MethodOverridePublic]function op_Multiply (\override ...$args){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @param \Avalonia\Vector $scale
	 * @return \Avalonia\Rect
	 */
	public static function op_Division($rect, $scale){}
	/**
	 * @uses RectOverride::Contains_1 <br>public , args: ($p)<br>
	 * @uses RectOverride::Contains_2 <br>public , args: ($r)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function Contains (\override ...$args){}
	/**
	 * @param \Avalonia\Point $p
	 * @return \System\Boolean|bool
	 */
	public function ContainsExclusive($p){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @return \Avalonia\Rect
	 */
	public function CenterRect($rect){}
	/**
	 * @uses RectOverride::Inflate_1 <br>public , args: ($thickness)<br>
	 * @uses RectOverride::Inflate_2 <br>public , args: ($thickness)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Rect|mixed|\override
	 */
	#[MethodOverridePublic]function Inflate (\override ...$args){}
	/**
	 * @uses RectOverride::Deflate_1 <br>public , args: ($thickness)<br>
	 * @uses RectOverride::Deflate_2 <br>public , args: ($thickness)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Rect|mixed|\override
	 */
	#[MethodOverridePublic]function Deflate (\override ...$args){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @return \Avalonia\Rect
	 */
	public function Intersect($rect){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @return \System\Boolean|bool
	 */
	public function Intersects($rect){}
	/**
	 * @uses RectOverride::TransformToAABB_1 <br>public , args: ($matrix)<br>
	 * @uses RectOverride::TransformToAABB_2 <br>protected , args: ($matrix)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Rect|mixed|\override
	 */
	#[MethodOverridePublic]function TransformToAABB (\override ...$args){}
	/**
	 * @param \Avalonia\Vector $offset
	 * @return \Avalonia\Rect
	 */
	public function Translate($offset){}
	/**
	 * @return \Avalonia\Rect
	 */
	public function Normalize(){}
	/**
	 * @uses RectOverride::Union_1 <br>public , args: ($rect)<br>
	 * @uses RectOverride::Union_2 <br>protected , args: ($left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Rect|\System\Nullable_1|mixed|\override
	 */
	#[MethodOverridePublic]function Union (\override ...$args){}
	/**
	 * @param \System\Double|double $x
	 * @return \Avalonia\Rect
	 */
	public function WithX($x){}
	/**
	 * @param \System\Double|double $y
	 * @return \Avalonia\Rect
	 */
	public function WithY($y){}
	/**
	 * @param \System\Double|double $width
	 * @return \Avalonia\Rect
	 */
	public function WithWidth($width){}
	/**
	 * @param \System\Double|double $height
	 * @return \Avalonia\Rect
	 */
	public function WithHeight($height){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Rect
	 */
	public static function Parse($s){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected function IsEmpty(){}
	/**
	 * @uses RectOverride::__construct_1 <br>public , args: ($x, $y, $width, $height)<br>
	 * @uses RectOverride::__construct_2 <br>public , args: ($size)<br>
	 * @uses RectOverride::__construct_3 <br>public , args: ($position, $size)<br>
	 * @uses RectOverride::__construct_4 <br>public , args: ($topLeft, $bottomRight)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}