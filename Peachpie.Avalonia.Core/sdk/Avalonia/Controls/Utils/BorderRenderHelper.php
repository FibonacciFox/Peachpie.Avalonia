<?php
namespace Avalonia\Controls\Utils;
/**
 */
class BorderRenderHelper extends \System\Object
{
	/**
	 * @param \Avalonia\Size $finalSize
	 * @param \Avalonia\Thickness $borderThickness
	 * @param \Avalonia\CornerRadius $cornerRadius
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Update($finalSize, $borderThickness, $cornerRadius){}
	/**
	 * @param \Avalonia\Media\DrawingContext $context
	 * @param \Avalonia\Size $finalSize
	 * @param \Avalonia\Thickness $borderThickness
	 * @param \Avalonia\CornerRadius $cornerRadius
	 * @param \Avalonia\Media\IBrush $background
	 * @param \Avalonia\Media\IBrush $borderBrush
	 * @param \Avalonia\Media\BoxShadows $boxShadows
	 * @param \System\Double|double $borderDashOffset
	 * @param \Avalonia\Media\PenLineCap $borderLineCap
	 * @param \Avalonia\Media\PenLineJoin $borderLineJoin
	 * @param \Avalonia\Collections\AvaloniaList_1 $borderDashArray
	 * @return \System\Void|void
	 */
	public  function Render($context, $finalSize, $borderThickness, $cornerRadius, $background, $borderBrush, $boxShadows, $borderDashOffset, $borderLineCap, $borderLineJoin, $borderDashArray){}
	/**
	 * @param \Avalonia\Media\DrawingContext $context
	 * @param \Avalonia\Media\IBrush $background
	 * @param \Avalonia\Media\IBrush $borderBrush
	 * @param \Avalonia\Media\BoxShadows $boxShadows
	 * @param \System\Double|double $borderDashOffset
	 * @param \Avalonia\Media\PenLineCap $borderLineCap
	 * @param \Avalonia\Media\PenLineJoin $borderLineJoin
	 * @param \Avalonia\Collections\AvaloniaList_1 $borderDashArray
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RenderCore($context, $background, $borderBrush, $boxShadows, $borderDashOffset, $borderLineCap, $borderLineJoin, $borderDashArray){}
	/**
	 * @param \Avalonia\Media\StreamGeometryContext $context
	 * @param \Avalonia\Rect $boundRect
	 * @param \Avalonia\Controls\Utils\BorderGeometryKeypoints $keypoints
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateGeometry($context, $boundRect, $keypoints){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
