<?php
namespace Avalonia\VisualTree;
final class TransformedBounds extends \System\ValueType implements
	\System\IEquatable_1
{

	/**
	 * @property
	 * @var \Avalonia\Rect
	 * @since readonly
	 */
	public $Bounds;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 * @since readonly
	 */
	public $Clip;
	/**
	 * @property
	 * @var \Avalonia\Matrix
	 * @since readonly
	 */
	public $Transform;
	/**
	 * @param \Avalonia\Point $point
	 * @return \System\Boolean|bool
	 */
	public function Contains($point){}
	/**
	 * @param \Avalonia\VisualTree\TransformedBounds $left
	 * @param \Avalonia\VisualTree\TransformedBounds $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\VisualTree\TransformedBounds $left
	 * @param \Avalonia\VisualTree\TransformedBounds $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Rect $bounds
	 * @param \Avalonia\Rect $clip
	 * @param \Avalonia\Matrix $transform
	 */
	public function __construct($bounds, $clip, $transform){}
}