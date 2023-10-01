<?php
namespace Avalonia\Layout;
/**
 */
class LayoutInformation extends \System\Object
{
	/**
	 * @param \Avalonia\Layout\Layoutable $control
	 * @return \System\Nullable_1
	 */
	public static function GetPreviousMeasureConstraint($control){}
	/**
	 * @param \Avalonia\Layout\Layoutable $control
	 * @return \System\Nullable_1
	 */
	public static function GetPreviousArrangeBounds($control){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
