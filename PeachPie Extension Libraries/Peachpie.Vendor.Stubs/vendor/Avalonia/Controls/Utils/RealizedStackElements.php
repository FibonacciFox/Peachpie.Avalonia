<?php
namespace Avalonia\Controls\Utils;
class RealizedStackElements extends \System\Object
{
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $FirstIndex;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $LastIndex;
	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Controls\Control]
	 * @since readonly
	 */
	public $Elements;
	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\Double]
	 * @since readonly
	 */
	public $SizeU;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $StartU;
	/**
	 * @param \System\Int32|int $index
	 * @param \Avalonia\Controls\Control $element
	 * @param \System\Double|double $u
	 * @param \System\Double|double $sizeU
	 * @return \System\Void|void
	 */
	public function Add($index, $element, $u, $sizeU){}
	/**
	 * @param \System\Int32|int $index
	 * @return \Avalonia\Controls\Control
	 */
	public function GetElement($index){}
	/**
	 * @param \System\Double|double $viewportStartU
	 * @param \System\Double|double $viewportEndU
	 * @param \System\Int32|int $itemCount
	 * @param \System\Double& $estimatedElementSizeU
	 * @return \System\ValueTuple_2[System\Int32,System\Double]
	 */
	public function GetOrEstimateAnchorElementForViewport($viewportStartU, $viewportEndU, $itemCount, $estimatedElementSizeU){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Double|double
	 */
	public function GetElementU($index){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Double& $estimatedElementSizeU
	 * @return \System\Double|double
	 */
	public function GetOrEstimateElementU($index, $estimatedElementSizeU){}
	/**
	 * @return \System\Double|double
	 */
	public function EstimateElementSizeU(){}
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @return \System\Int32|int
	 */
	public function GetIndex($element){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @param \System\Action_3 $updateElementIndex [generic: Avalonia\Controls\Control,System\Int32,System\Int32]
	 * @return \System\Void|void
	 */
	public function ItemsInserted($index, $count, $updateElementIndex){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @param \System\Action_3 $updateElementIndex [generic: Avalonia\Controls\Control,System\Int32,System\Int32]
	 * @param \System\Action_1 $recycleElement [generic: Avalonia\Controls\Control]
	 * @return \System\Void|void
	 */
	public function ItemsRemoved($index, $count, $updateElementIndex, $recycleElement){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @param \System\Action_1 $recycleElement [generic: Avalonia\Controls\Control]
	 * @return \System\Void|void
	 */
	public function ItemsReplaced($index, $count, $recycleElement){}
	/**
	 * @param \System\Action_1 $recycleElement [generic: Avalonia\Controls\Control]
	 * @return \System\Void|void
	 */
	public function ItemsReset($recycleElement){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Action_2 $recycleElement [generic: Avalonia\Controls\Control,System\Int32]
	 * @return \System\Void|void
	 */
	public function RecycleElementsBefore($index, $recycleElement){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Action_2 $recycleElement [generic: Avalonia\Controls\Control,System\Int32]
	 * @return \System\Void|void
	 */
	public function RecycleElementsAfter($index, $recycleElement){}
	/**
	 * @param \System\Action_2 $recycleElement [generic: Avalonia\Controls\Control,System\Int32]
	 * @return \System\Void|void
	 */
	public function RecycleAllElements($recycleElement){}
	/**
	 * @return \System\Void|void
	 */
	public function ResetForReuse(){}
	/**
	 */
	public function __construct(){}
}