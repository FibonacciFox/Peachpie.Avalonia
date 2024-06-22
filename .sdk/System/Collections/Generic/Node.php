<?php
namespace System\Collections\Generic;
final class Node extends \System\Object
{

	/**
	 * @property
	 * @var \T|object
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\Collections\Generic\SortedSet_1+Node[T]
	 */
	public $Left;
	/**
	 * @property
	 * @var \System\Collections\Generic\SortedSet_1+Node[T]
	 */
	public $Right;
	/**
	 * @property
	 * @var \System\Collections\Generic\NodeColor
	 */
	public $Color;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsBlack;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsRed;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $Is2Node;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $Is4Node;
	/**
	 * @param \System\Collections\Generic\SortedSet_1+Node $node [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function IsNonNullRed($node){}
	/**
	 * @param \System\Collections\Generic\SortedSet_1+Node $node [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function IsNullOrBlack($node){}
	/**
	 * @return \System\Void|void
	 */
	public function ColorBlack(){}
	/**
	 * @return \System\Void|void
	 */
	public function ColorRed(){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Collections\Generic\SortedSet_1+Node[T]
	 */
	public function DeepClone($count){}
	/**
	 * @param \System\Collections\Generic\SortedSet_1+Node $current [generic: T]
	 * @param \System\Collections\Generic\SortedSet_1+Node $sibling [generic: T]
	 * @return \System\Collections\Generic\TreeRotation
	 */
	public function GetRotation($current, $sibling){}
	/**
	 * @param \System\Collections\Generic\SortedSet_1+Node $node [generic: T]
	 * @return \System\Collections\Generic\SortedSet_1+Node[T]
	 */
	public function GetSibling($node){}
	/**
	 * @return \System\Collections\Generic\SortedSet_1+Node[T]
	 */
	public function ShallowClone(){}
	/**
	 * @return \System\Void|void
	 */
	public function Split4Node(){}
	/**
	 * @param \System\Collections\Generic\TreeRotation $rotation
	 * @return \System\Collections\Generic\SortedSet_1+Node[T]
	 */
	public function Rotate($rotation){}
	/**
	 * @return \System\Collections\Generic\SortedSet_1+Node[T]
	 */
	public function RotateLeft(){}
	/**
	 * @return \System\Collections\Generic\SortedSet_1+Node[T]
	 */
	public function RotateLeftRight(){}
	/**
	 * @return \System\Collections\Generic\SortedSet_1+Node[T]
	 */
	public function RotateRight(){}
	/**
	 * @return \System\Collections\Generic\SortedSet_1+Node[T]
	 */
	public function RotateRightLeft(){}
	/**
	 * @return \System\Void|void
	 */
	public function Merge2Nodes(){}
	/**
	 * @param \System\Collections\Generic\SortedSet_1+Node $child [generic: T]
	 * @param \System\Collections\Generic\SortedSet_1+Node $newChild [generic: T]
	 * @return \System\Void|void
	 */
	public function ReplaceChild($child, $newChild){}
	/**
	 * @param \T|object $item
	 * @param \System\Collections\Generic\NodeColor $color
	 */
	public function __construct($item, $color){}
}