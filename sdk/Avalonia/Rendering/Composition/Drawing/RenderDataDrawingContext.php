<?php
namespace Avalonia\Rendering\Composition\Drawing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RenderDataDrawingContextMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function PushClipCore_1($rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function PushClipCore_2($rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_1($source, $rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_2($source, $sourceRect, $destRect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawGeometry_1($brush, $pen, $geometry){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawGeometry_2($brush, $pen, $geometry){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawRectangle_1($brush, $pen, $rect, $radiusX, $radiusY, $boxShadows){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawRectangle_2($brush, $pen, $rrect, $boxShadows){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawRectangle_3($pen, $rect, $cornerRadius){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawEllipse_1($brush, $pen, $center, $radiusX, $radiusY){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawEllipse_2($brush, $pen, $rect){}
	/**
	 * @return \Avalonia\Media\PushedState
	 */
	#[MethodOverride] public  function PushClip_1($clip){}
	/**
	 * @return \Avalonia\Media\PushedState
	 */
	#[MethodOverride] public  function PushClip_2($clip){}
}
/**
 */
class RenderDataDrawingContext extends \Avalonia\Media\DrawingContext implements 
	\System\IDisposable
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_RenderData(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Add($item){}
	/**
	 * @param \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataPushNode $node
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Push($node){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Pop(){}
	/**
	 * @param \System\Object|object $resource
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddResource($resource){}
	/**
	 * @uses RenderDataDrawingContextMethodsOverride::PushClipCore_1 ($rect)
	 * @uses RenderDataDrawingContextMethodsOverride::PushClipCore_2 ($rect)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function PushClipCore(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FlushStack(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Drawing\CompositionRenderData
	 */
	public  function GetRenderResults(){}
	/**
	 * @param \Avalonia\Media\ITileBrush $brush
	 * @param \System\Nullable_1 $rect
	 * @param \System\Boolean $useScalableRasterization
	 * @return \Avalonia\Rendering\Composition\Drawing\ImmediateRenderDataSceneBrushContent
	 */
	public  function GetImmediateSceneBrushContent($brush, $rect, $useScalableRasterization){}
	/**
	 * @return \System\Void|void
	 */
	public  function Reset(){}
	/**
	 * @uses RenderDataDrawingContextMethodsOverride::DrawImage_1 ($source, $rect)
	 * @uses RenderDataDrawingContextMethodsOverride::DrawImage_2 ($source, $sourceRect, $destRect)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawImage(mixed ...$args){}
	/**
	 * @uses RenderDataDrawingContextMethodsOverride::DrawGeometry_1 ($brush, $pen, $geometry)
	 * @uses RenderDataDrawingContextMethodsOverride::DrawGeometry_2 ($brush, $pen, $geometry)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawGeometry(mixed ...$args){}
	/**
	 * @uses RenderDataDrawingContextMethodsOverride::DrawRectangle_1 ($brush, $pen, $rect, $radiusX, $radiusY, $boxShadows)
	 * @uses RenderDataDrawingContextMethodsOverride::DrawRectangle_2 ($brush, $pen, $rrect, $boxShadows)
	 * @uses RenderDataDrawingContextMethodsOverride::DrawRectangle_3 ($pen, $rect, $cornerRadius)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawRectangle(mixed ...$args){}
	/**
	 * @uses RenderDataDrawingContextMethodsOverride::DrawEllipse_1 ($brush, $pen, $center, $radiusX, $radiusY)
	 * @uses RenderDataDrawingContextMethodsOverride::DrawEllipse_2 ($brush, $pen, $rect)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawEllipse(mixed ...$args){}
	/**
	 * @uses RenderDataDrawingContextMethodsOverride::PushClip_1 ($clip)
	 * @uses RenderDataDrawingContextMethodsOverride::PushClip_2 ($clip)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function PushClip(mixed ...$args){}
}
