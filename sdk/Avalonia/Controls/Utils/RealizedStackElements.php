<?php
namespace Avalonia\Controls\Utils;
/**
 */
class RealizedStackElements extends \System\Object
{
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_FirstIndex(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_LastIndex(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_Elements(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_SizeU(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_StartU(){}
	/**
	 * @param \System\Int32|int $index
	 * @param \Avalonia\Controls\Control $element
	 * @param \System\Double|double $u
	 * @param \System\Double|double $sizeU
	 * @return \System\Void|void
	 */
	public  function Add($index, $element, $u, $sizeU){}
	/**
	 * @param \System\Int32|int $index
	 * @return \Avalonia\Controls\Control
	 */
	public  function GetElement($index){}
	/**
	 * @param \System\Double|double $viewportStartU
	 * @param \System\Double|double $viewportEndU
	 * @param \System\Int32|int $itemCount
	 * @param \System\Double& $estimatedElementSizeU
	 * @return \System\ValueTuple_2
	 */
	public  function GetOrEstimateAnchorElementForViewport($viewportStartU, $viewportEndU, $itemCount, $estimatedElementSizeU){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Double|double
	 */
	public  function GetElementU($index){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Double& $estimatedElementSizeU
	 * @return \System\Double|double
	 */
	public  function GetOrEstimateElementU($index, $estimatedElementSizeU){}
	/**
	 * @return \System\Double|double
	 */
	public  function EstimateElementSizeU(){}
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @return \System\Int32|int
	 */
	public  function GetIndex($element){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @param \System\Action_3 $updateElementIndex
	 * @return \System\Void|void
	 */
	public  function ItemsInserted($index, $count, $updateElementIndex){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @param \System\Action_3 $updateElementIndex
	 * @param \System\Action_1 $recycleElement
	 * @return \System\Void|void
	 */
	public  function ItemsRemoved($index, $count, $updateElementIndex, $recycleElement){}
	/**
	 * @param \System\Action_1 $recycleElement
	 * @return \System\Void|void
	 */
	public  function ItemsReset($recycleElement){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Action_2 $recycleElement
	 * @return \System\Void|void
	 */
	public  function RecycleElementsBefore($index, $recycleElement){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Action_2 $recycleElement
	 * @return \System\Void|void
	 */
	public  function RecycleElementsAfter($index, $recycleElement){}
	/**
	 * @param \System\Action_2 $recycleElement
	 * @return \System\Void|void
	 */
	public  function RecycleAllElements($recycleElement){}
	/**
	 * @return \System\Void|void
	 */
	public  function ResetForReuse(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
