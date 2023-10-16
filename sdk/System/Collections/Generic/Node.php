<?php
namespace System\Collections\Generic;
/**
 */
class Node extends \System\Object
{
	/**
	 * @var \T
	 * @property
	 */
	public $Item;
	/**
	 * @var \System\Collections\Generic\SortedSet_1+Node[T]
	 * @property
	 */
	public $Left;
	/**
	 * @var \System\Collections\Generic\SortedSet_1+Node[T]
	 * @property
	 */
	public $Right;
	/**
	 * @var \System\Collections\Generic\NodeColor
	 * @property
	 */
	public $Color;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsBlack;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsRed;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $Is2Node;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $Is4Node;
	/**
	 * @param \System\Collections\Generic\Node $node
	 * @return \System\Boolean
	 */
	public static function IsNonNullRed($node){}
	/**
	 * @param \System\Collections\Generic\Node $node
	 * @return \System\Boolean
	 */
	public static function IsNullOrBlack($node){}
	/**
	 * @return \System\Collections\Generic\T
	 */
	public  function get_Item(){}
	/**
	 * @param \System\Collections\Generic\T $value
	 * @return \System\Void|void
	 */
	public  function set_Item($value){}
	/**
	 * @return \System\Collections\Generic\Node
	 */
	public  function get_Left(){}
	/**
	 * @param \System\Collections\Generic\Node $value
	 * @return \System\Void|void
	 */
	public  function set_Left($value){}
	/**
	 * @return \System\Collections\Generic\Node
	 */
	public  function get_Right(){}
	/**
	 * @param \System\Collections\Generic\Node $value
	 * @return \System\Void|void
	 */
	public  function set_Right($value){}
	/**
	 * @return \System\Collections\Generic\NodeColor
	 */
	public  function get_Color(){}
	/**
	 * @param \System\Collections\Generic\NodeColor $value
	 * @return \System\Void|void
	 */
	public  function set_Color($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsBlack(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsRed(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Is2Node(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Is4Node(){}
	/**
	 * @return \System\Void|void
	 */
	public  function ColorBlack(){}
	/**
	 * @return \System\Void|void
	 */
	public  function ColorRed(){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Collections\Generic\Node
	 */
	public  function DeepClone($count){}
	/**
	 * @param \System\Collections\Generic\Node $current
	 * @param \System\Collections\Generic\Node $sibling
	 * @return \System\Collections\Generic\TreeRotation
	 */
	public  function GetRotation($current, $sibling){}
	/**
	 * @param \System\Collections\Generic\Node $node
	 * @return \System\Collections\Generic\Node
	 */
	public  function GetSibling($node){}
	/**
	 * @return \System\Collections\Generic\Node
	 */
	public  function ShallowClone(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Split4Node(){}
	/**
	 * @param \System\Collections\Generic\TreeRotation $rotation
	 * @return \System\Collections\Generic\Node
	 */
	public  function Rotate($rotation){}
	/**
	 * @return \System\Collections\Generic\Node
	 */
	public  function RotateLeft(){}
	/**
	 * @return \System\Collections\Generic\Node
	 */
	public  function RotateLeftRight(){}
	/**
	 * @return \System\Collections\Generic\Node
	 */
	public  function RotateRight(){}
	/**
	 * @return \System\Collections\Generic\Node
	 */
	public  function RotateRightLeft(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Merge2Nodes(){}
	/**
	 * @param \System\Collections\Generic\Node $child
	 * @param \System\Collections\Generic\Node $newChild
	 * @return \System\Void|void
	 */
	public  function ReplaceChild($child, $newChild){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
