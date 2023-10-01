<?php
namespace Avalonia\Rendering\Composition\Drawing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ImmediateRenderDataSceneBrushContentMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Render_1($context){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Render_2($context, $transform){}
}
/**
 */
class ImmediateRenderDataSceneBrushContent extends \System\Object implements 
	\Avalonia\Media\ISceneBrushContent,
	\Avalonia\Media\IImmutableBrush,
	\Avalonia\Media\IBrush,
	\System\IDisposable
{
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
	 * @uses ImmediateRenderDataSceneBrushContentMethodsOverride::Render_1 ($context)
	 * @uses ImmediateRenderDataSceneBrushContentMethodsOverride::Render_2 ($context, $transform)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Render(mixed ...$args){}
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
