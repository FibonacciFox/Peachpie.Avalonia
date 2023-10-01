<?php
namespace Avalonia\Rendering\Composition\Drawing;
/**
 */
class CompositionRenderDataSceneBrushContent extends \System\Object implements 
	\Avalonia\Media\ISceneBrushContent,
	\Avalonia\Media\IImmutableBrush,
	\Avalonia\Media\IBrush,
	\System\IDisposable
{
	/**
	 * @return \Avalonia\Rendering\Composition\Drawing\CompositionRenderData
	 */
	public  function get_RenderData(){}
	/**
	 * @return \Avalonia\Media\ITileBrush
	 */
	public  function get_Brush(){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_Rect(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Opacity(){}
	/**
	 * @return \Avalonia\Media\ITransform
	 */
	public  function get_Transform(){}
	/**
	 * @return \Avalonia\RelativePoint
	 */
	public  function get_TransformOrigin(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \Avalonia\Platform\IDrawingContextImpl $context
	 * @param \System\Nullable_1 $transform
	 * @return \System\Void|void
	 */
	public  function Render($context, $transform){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_UseScalableRasterization(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
