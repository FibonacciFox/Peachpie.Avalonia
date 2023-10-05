<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GraphNodeMethodsOverride
{
	/**
	 * @return \Avalonia\Size
	 */
	#[MethodOverride] public  function GetBoundingSize_1(){}
	/**
	 * @return \Avalonia\Size
	 */
	#[MethodOverride] private static function GetBoundingSize_2($prevNode, $prevSize, $nodes){}
}
/**
 */
class GraphNode extends \System\Object
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Measured;
	/**
	 * @var \Avalonia\Layout\Layoutable
	 * @property
	 */
	public readonly $Element;
	/**
	 * @var \Avalonia\Size
	 * @property
	 */
	public $OriginDesiredSize;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Left;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Top;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Right;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Bottom;
	/**
	 * @var \System\Collections\Generic\HashSet_1[Avalonia\Controls\RelativePanel+GraphNode]
	 * @property
	 */
	public readonly $OutgoingNodes;
	/**
	 * @var \Avalonia\Controls\RelativePanel+GraphNode
	 * @property
	 */
	public $AlignLeftWithNode;
	/**
	 * @var \Avalonia\Controls\RelativePanel+GraphNode
	 * @property
	 */
	public $AlignTopWithNode;
	/**
	 * @var \Avalonia\Controls\RelativePanel+GraphNode
	 * @property
	 */
	public $AlignRightWithNode;
	/**
	 * @var \Avalonia\Controls\RelativePanel+GraphNode
	 * @property
	 */
	public $AlignBottomWithNode;
	/**
	 * @var \Avalonia\Controls\RelativePanel+GraphNode
	 * @property
	 */
	public $LeftOfNode;
	/**
	 * @var \Avalonia\Controls\RelativePanel+GraphNode
	 * @property
	 */
	public $AboveNode;
	/**
	 * @var \Avalonia\Controls\RelativePanel+GraphNode
	 * @property
	 */
	public $RightOfNode;
	/**
	 * @var \Avalonia\Controls\RelativePanel+GraphNode
	 * @property
	 */
	public $BelowNode;
	/**
	 * @var \Avalonia\Controls\RelativePanel+GraphNode
	 * @property
	 */
	public $AlignHorizontalCenterWith;
	/**
	 * @var \Avalonia\Controls\RelativePanel+GraphNode
	 * @property
	 */
	public $AlignVerticalCenterWith;
	/**
	 * @return \System\Boolean
	 */
	public  function get_Measured(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Measured($value){}
	/**
	 * @return \Avalonia\Layout\Layoutable
	 */
	public  function get_Element(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_HorizontalOffsetFlag(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_HorizontalOffsetFlag($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_VerticalOffsetFlag(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_VerticalOffsetFlag($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_BoundingSize(){}
	/**
	 * @param \Avalonia\Size $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_BoundingSize($value){}
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_OriginDesiredSize(){}
	/**
	 * @param \Avalonia\Size $value
	 * @return \System\Void|void
	 */
	public  function set_OriginDesiredSize($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Left(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Left($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Top(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Top($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Right(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Right($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Bottom(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Bottom($value){}
	/**
	 * @return \System\Collections\Generic\HashSet_1
	 */
	public  function get_OutgoingNodes(){}
	/**
	 * @return \Avalonia\Controls\GraphNode
	 */
	public  function get_AlignLeftWithNode(){}
	/**
	 * @param \Avalonia\Controls\GraphNode $value
	 * @return \System\Void|void
	 */
	public  function set_AlignLeftWithNode($value){}
	/**
	 * @return \Avalonia\Controls\GraphNode
	 */
	public  function get_AlignTopWithNode(){}
	/**
	 * @param \Avalonia\Controls\GraphNode $value
	 * @return \System\Void|void
	 */
	public  function set_AlignTopWithNode($value){}
	/**
	 * @return \Avalonia\Controls\GraphNode
	 */
	public  function get_AlignRightWithNode(){}
	/**
	 * @param \Avalonia\Controls\GraphNode $value
	 * @return \System\Void|void
	 */
	public  function set_AlignRightWithNode($value){}
	/**
	 * @return \Avalonia\Controls\GraphNode
	 */
	public  function get_AlignBottomWithNode(){}
	/**
	 * @param \Avalonia\Controls\GraphNode $value
	 * @return \System\Void|void
	 */
	public  function set_AlignBottomWithNode($value){}
	/**
	 * @return \Avalonia\Controls\GraphNode
	 */
	public  function get_LeftOfNode(){}
	/**
	 * @param \Avalonia\Controls\GraphNode $value
	 * @return \System\Void|void
	 */
	public  function set_LeftOfNode($value){}
	/**
	 * @return \Avalonia\Controls\GraphNode
	 */
	public  function get_AboveNode(){}
	/**
	 * @param \Avalonia\Controls\GraphNode $value
	 * @return \System\Void|void
	 */
	public  function set_AboveNode($value){}
	/**
	 * @return \Avalonia\Controls\GraphNode
	 */
	public  function get_RightOfNode(){}
	/**
	 * @param \Avalonia\Controls\GraphNode $value
	 * @return \System\Void|void
	 */
	public  function set_RightOfNode($value){}
	/**
	 * @return \Avalonia\Controls\GraphNode
	 */
	public  function get_BelowNode(){}
	/**
	 * @param \Avalonia\Controls\GraphNode $value
	 * @return \System\Void|void
	 */
	public  function set_BelowNode($value){}
	/**
	 * @return \Avalonia\Controls\GraphNode
	 */
	public  function get_AlignHorizontalCenterWith(){}
	/**
	 * @param \Avalonia\Controls\GraphNode $value
	 * @return \System\Void|void
	 */
	public  function set_AlignHorizontalCenterWith($value){}
	/**
	 * @return \Avalonia\Controls\GraphNode
	 */
	public  function get_AlignVerticalCenterWith(){}
	/**
	 * @param \Avalonia\Controls\GraphNode $value
	 * @return \System\Void|void
	 */
	public  function set_AlignVerticalCenterWith($value){}
	/**
	 * @param \Avalonia\Size $arrangeSize
	 * @return \System\Void|void
	 */
	public  function Arrange($arrangeSize){}
	/**
	 * @param \System\Boolean $clearPos
	 * @return \System\Void|void
	 */
	public  function Reset($clearPos){}
	/**
	 * @uses GraphNodeMethodsOverride::GetBoundingSize_1 ()
	 * @uses GraphNodeMethodsOverride::GetBoundingSize_2 ($prevNode, $prevSize, $nodes)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetBoundingSize(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
