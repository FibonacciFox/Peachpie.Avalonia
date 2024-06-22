<?php
namespace Avalonia\Layout;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait LayoutHelperOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Layout\Layoutable $control
	 * @param \Avalonia\Size $availableSize
	 * @param \Avalonia\Thickness $padding
	 * @param \Avalonia\Thickness $borderThickness
	 * @return \Avalonia\Size
	 */
	#[MethodOverride]public static function MeasureChild_1 ($control, $availableSize, $padding, $borderThickness){}
	/**
	 * @deprecated
	 * @param \Avalonia\Layout\Layoutable $control
	 * @param \Avalonia\Size $availableSize
	 * @param \Avalonia\Thickness $padding
	 * @return \Avalonia\Size
	 */
	#[MethodOverride]public static function MeasureChild_2 ($control, $availableSize, $padding){}
	/**
	 * @deprecated
	 * @param \Avalonia\Layout\Layoutable $child
	 * @param \Avalonia\Size $availableSize
	 * @param \Avalonia\Thickness $padding
	 * @param \Avalonia\Thickness $borderThickness
	 * @return \Avalonia\Size
	 */
	#[MethodOverride]public static function ArrangeChild_1 ($child, $availableSize, $padding, $borderThickness){}
	/**
	 * @deprecated
	 * @param \Avalonia\Layout\Layoutable $child
	 * @param \Avalonia\Size $availableSize
	 * @param \Avalonia\Thickness $padding
	 * @return \Avalonia\Size
	 */
	#[MethodOverride]public static function ArrangeChild_2 ($child, $availableSize, $padding){}
}
class LayoutHelper extends \System\Object
{
	use LayoutHelperOverride;

	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $LayoutEpsilon;
	/**
	 * @param \Avalonia\Layout\Layoutable $control
	 * @param \Avalonia\Size $constraints
	 * @return \Avalonia\Size
	 */
	public static function ApplyLayoutConstraints($control, $constraints){}
	/**
	 * @uses LayoutHelperOverride::MeasureChild_1 <br>public , args: ($control, $availableSize, $padding, $borderThickness)<br>
	 * @uses LayoutHelperOverride::MeasureChild_2 <br>public , args: ($control, $availableSize, $padding)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Size|mixed|\override
	 */
	#[MethodOverridePublic]function MeasureChild (\override ...$args){}
	/**
	 * @uses LayoutHelperOverride::ArrangeChild_1 <br>public , args: ($child, $availableSize, $padding, $borderThickness)<br>
	 * @uses LayoutHelperOverride::ArrangeChild_2 <br>public , args: ($child, $availableSize, $padding)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Size|mixed|\override
	 */
	#[MethodOverridePublic]function ArrangeChild (\override ...$args){}
	private static function ArrangeChildInternal($child, $availableSize, $padding){}
	private static function IsParentLayoutRounded($child, &$scale){}
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
}