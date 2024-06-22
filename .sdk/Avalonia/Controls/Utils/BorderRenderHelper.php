<?php
namespace Avalonia\Controls\Utils;
class BorderRenderHelper extends \System\Object
{


	private function Update($finalSize, $borderThickness, $cornerRadius){}
	/**
	 * @param \Avalonia\Media\DrawingContext $context
	 * @param \Avalonia\Size $finalSize
	 * @param \Avalonia\Thickness $borderThickness
	 * @param \Avalonia\CornerRadius $cornerRadius
	 * @param \Avalonia\Media\IBrush $background
	 * @param \Avalonia\Media\IBrush $borderBrush
	 * @param \Avalonia\Media\BoxShadows $boxShadows
	 * @return \System\Void|void
	 */
	public function Render($context, $finalSize, $borderThickness, $cornerRadius, $background, $borderBrush, $boxShadows){}
	private function RenderCore($context, $background, $borderBrush, $boxShadows){}
	private static function CreateGeometry($context, $boundRect, $keypoints){}
	/**
	 */
	public function __construct(){}
}