<?php
namespace Avalonia\Controls\Primitives;
/**
 * @method \System\Void|void add_HorizontalSnapPointsChanged($value) [modifier: public]
 * @method \System\Void|void remove_HorizontalSnapPointsChanged($value) [modifier: public]
 * @method \System\Void|void add_VerticalSnapPointsChanged($value) [modifier: public]
 * @method \System\Void|void remove_VerticalSnapPointsChanged($value) [modifier: public]
*/
interface IScrollSnapPointsInfo
{


	/**
	 * @param \Avalonia\Layout\Orientation $orientation
	 * @param \Avalonia\Controls\Primitives\SnapPointsAlignment $snapPointsAlignment
	 * @return \System\Collections\Generic\IReadOnlyList_1[System\Double]
	 */
	public function GetIrregularSnapPoints($orientation, $snapPointsAlignment);
	/**
	 * @param \Avalonia\Layout\Orientation $orientation
	 * @param \Avalonia\Controls\Primitives\SnapPointsAlignment $snapPointsAlignment
	 * @param \System\Double& &$offset
	 * @return \System\Double|double
	 */
	public function GetRegularSnapPoints($orientation, $snapPointsAlignment, &$offset);
}