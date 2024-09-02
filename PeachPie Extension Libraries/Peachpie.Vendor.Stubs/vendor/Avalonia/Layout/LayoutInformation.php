<?php
namespace Avalonia\Layout;
class LayoutInformation extends \System\Object
{

	/**
	 * @param \Avalonia\Layout\Layoutable $control
	 * @return \System\Nullable_1[Avalonia\Size]
	 */
	public static function GetPreviousMeasureConstraint($control){}
	/**
	 * @param \Avalonia\Layout\Layoutable $control
	 * @return \System\Nullable_1[Avalonia\Rect]
	 */
	public static function GetPreviousArrangeBounds($control){}
}