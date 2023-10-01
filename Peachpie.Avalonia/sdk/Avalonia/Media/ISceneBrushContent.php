<?php
namespace Avalonia\Media;
/**
 */
interface ISceneBrushContent
{
	/**
	 */
	public function get_Brush();
	/**
	 */
	public function get_Rect();
	/**
	 * @param \Avalonia\Platform\IDrawingContextImpl $context
	 * @param \System\Nullable_1 $transform
	 */
	public function Render($context, $transform);
	/**
	 */
	protected function get_UseScalableRasterization();
}
