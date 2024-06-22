<?php
namespace Avalonia\Rendering\Composition\Drawing;
class RenderDataDrawingContext extends \Avalonia\Media\DrawingContext implements
	\System\IDisposable
{


	private function Add($item){}
	private function Push($node){}
	private function Pop(){}
	private function AddResource($resource){}
	private function FlushStack(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Drawing\CompositionRenderData
	 */
	public function GetRenderResults(){}
	/**
	 * @param \Avalonia\Media\ITileBrush $brush
	 * @param \System\Nullable_1 $rect [generic: Avalonia\Rect]
	 * @param \System\Boolean|bool $useScalableRasterization
	 * @return \Avalonia\Rendering\Composition\Drawing\ImmediateRenderDataSceneBrushContent
	 */
	public function GetImmediateSceneBrushContent($brush, $rect, $useScalableRasterization){}
	/**
	 * @return \System\Void|void
	 */
	public function Reset(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 */
	public function __construct($compositor){}
}