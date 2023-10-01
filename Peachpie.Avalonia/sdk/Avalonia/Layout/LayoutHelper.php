<?php
namespace Avalonia\Layout;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait LayoutHelperMethodsOverride
{
	/**
	 * @return \Avalonia\Size
	 */
	#[MethodOverride] public static function MeasureChild_1($control, $availableSize, $padding, $borderThickness){}
	/**
	 * @return \Avalonia\Size
	 */
	#[MethodOverride] public static function MeasureChild_2($control, $availableSize, $padding){}
	/**
	 * @return \Avalonia\Size
	 */
	#[MethodOverride] public static function ArrangeChild_1($child, $availableSize, $padding, $borderThickness){}
	/**
	 * @return \Avalonia\Size
	 */
	#[MethodOverride] public static function ArrangeChild_2($child, $availableSize, $padding){}
}
/**
 */
class LayoutHelper extends \System\Object
{
	/**
	 * @return \System\Double|double
	 */
	public static function get_LayoutEpsilon(){}
	/**
	 * @param \Avalonia\Layout\Layoutable $control
	 * @param \Avalonia\Size $constraints
	 * @return \Avalonia\Size
	 */
	public static function ApplyLayoutConstraints($control, $constraints){}
	/**
	 * @uses LayoutHelperMethodsOverride::MeasureChild_1 ($control, $availableSize, $padding, $borderThickness)
	 * @uses LayoutHelperMethodsOverride::MeasureChild_2 ($control, $availableSize, $padding)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MeasureChild(mixed ...$args){}
	/**
	 * @uses LayoutHelperMethodsOverride::ArrangeChild_1 ($child, $availableSize, $padding, $borderThickness)
	 * @uses LayoutHelperMethodsOverride::ArrangeChild_2 ($child, $availableSize, $padding)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ArrangeChild(mixed ...$args){}
	/**
	 * @param \Avalonia\Layout\Layoutable $child
	 * @param \Avalonia\Size $availableSize
	 * @param \Avalonia\Thickness $padding
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ArrangeChildInternal($child, $availableSize, $padding){}
	/**
	 * @param \Avalonia\Layout\Layoutable $child
	 * @param \System\Double& $scale
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsParentLayoutRounded($child, $scale){}
	/**
	 * @param \Avalonia\Layout\Layoutable $control
	 * @return \System\Void|void
	 */
	public static function InvalidateSelfAndChildrenMeasure($control){}
	/**
	 * @param \Avalonia\Layout\Layoutable $control
	 * @return \System\Double|double
	 */
	public static function GetLayoutScale($control){}
	/**
	 * @param \Avalonia\Size $size
	 * @param \System\Double|double $dpiScaleX
	 * @param \System\Double|double $dpiScaleY
	 * @return \Avalonia\Size
	 */
	public static function RoundLayoutSizeUp($size, $dpiScaleX, $dpiScaleY){}
	/**
	 * @param \Avalonia\Thickness $thickness
	 * @param \System\Double|double $dpiScaleX
	 * @param \System\Double|double $dpiScaleY
	 * @return \Avalonia\Thickness
	 */
	public static function RoundLayoutThickness($thickness, $dpiScaleX, $dpiScaleY){}
	/**
	 * @param \System\Double|double $value
	 * @param \System\Double|double $dpiScale
	 * @return \System\Double|double
	 */
	public static function RoundLayoutValue($value, $dpiScale){}
	/**
	 * @param \System\Double|double $value
	 * @param \System\Double|double $dpiScale
	 * @return \System\Double|double
	 */
	public static function RoundLayoutValueUp($value, $dpiScale){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
