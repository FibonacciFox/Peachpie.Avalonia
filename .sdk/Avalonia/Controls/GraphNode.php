<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait GraphNodeOverride {
	/**
	 * @deprecated
	 * @return \Avalonia\Size
	 */
	#[MethodOverride]public function GetBoundingSize_1 (){}
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\RelativePanel+GraphNode $prevNode
	 * @param \Avalonia\Size $prevSize
	 * @param \System\Collections\Generic\IEnumerable_1 $nodes [generic: Avalonia\Controls\RelativePanel+GraphNode]
	 * @return \Avalonia\Size
	 */
	#[MethodOverride]private static function GetBoundingSize_2 ($prevNode, $prevSize, $nodes){}
}
class GraphNode extends \System\Object
{
	use GraphNodeOverride;

	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Measured;
	/**
	 * @property
	 * @var \Avalonia\Layout\Layoutable
	 * @since readonly
	 */
	public $Element;
	/**
	 * @property
	 * @var \Avalonia\Size
	 */
	public $OriginDesiredSize;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Left;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Top;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Right;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Bottom;
	/**
	 * @property
	 * @var \System\Collections\Generic\HashSet_1[Avalonia\Controls\RelativePanel+GraphNode]
	 * @since readonly
	 */
	public $OutgoingNodes;
	/**
	 * @property
	 * @var \Avalonia\Controls\RelativePanel+GraphNode
	 */
	public $AlignLeftWithNode;
	/**
	 * @property
	 * @var \Avalonia\Controls\RelativePanel+GraphNode
	 */
	public $AlignTopWithNode;
	/**
	 * @property
	 * @var \Avalonia\Controls\RelativePanel+GraphNode
	 */
	public $AlignRightWithNode;
	/**
	 * @property
	 * @var \Avalonia\Controls\RelativePanel+GraphNode
	 */
	public $AlignBottomWithNode;
	/**
	 * @property
	 * @var \Avalonia\Controls\RelativePanel+GraphNode
	 */
	public $LeftOfNode;
	/**
	 * @property
	 * @var \Avalonia\Controls\RelativePanel+GraphNode
	 */
	public $AboveNode;
	/**
	 * @property
	 * @var \Avalonia\Controls\RelativePanel+GraphNode
	 */
	public $RightOfNode;
	/**
	 * @property
	 * @var \Avalonia\Controls\RelativePanel+GraphNode
	 */
	public $BelowNode;
	/**
	 * @property
	 * @var \Avalonia\Controls\RelativePanel+GraphNode
	 */
	public $AlignHorizontalCenterWith;
	/**
	 * @property
	 * @var \Avalonia\Controls\RelativePanel+GraphNode
	 */
	public $AlignVerticalCenterWith;
	/**
	 * @param \Avalonia\Size $arrangeSize
	 * @return \System\Void|void
	 */
	public function Arrange($arrangeSize){}
	/**
	 * @param \System\Boolean|bool $clearPos
	 * @return \System\Void|void
	 */
	public function Reset($clearPos){}
	/**
	 * @uses GraphNodeOverride::GetBoundingSize_1 <br>public , args: ()<br>
	 * @uses GraphNodeOverride::GetBoundingSize_2 <br>private , args: ($prevNode, $prevSize, $nodes)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Size|mixed|\override
	 */
	#[MethodOverridePublic]function GetBoundingSize (\override ...$args){}
	/**
	 * @param \Avalonia\Layout\Layoutable $element
	 */
	public function __construct($element){}
}