<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DrawingGroupDrawingContextMethodsOverride
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
class DrawingGroupDrawingContext extends \Avalonia\Media\DrawingContext implements 
	\System\IDisposable
{
	/**
	 * @uses DrawingGroupDrawingContextMethodsOverride::PushClipCore_1 ($rect)
	 * @uses DrawingGroupDrawingContextMethodsOverride::PushClipCore_2 ($rect)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function PushClipCore(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Pop(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PushNewDrawingGroup(){}
	/**
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Media\Geometry $geometry
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddNewGeometryDrawing($brush, $pen, $geometry){}
	/**
	 * @param \Avalonia\Media\Drawing $newDrawing
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddDrawing($newDrawing){}
	/**
	 * @uses DrawingGroupDrawingContextMethodsOverride::DrawImage_1 ($source, $rect)
	 * @uses DrawingGroupDrawingContextMethodsOverride::DrawImage_2 ($source, $sourceRect, $destRect)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawImage(mixed ...$args){}
	/**
	 * @uses DrawingGroupDrawingContextMethodsOverride::DrawGeometry_1 ($brush, $pen, $geometry)
	 * @uses DrawingGroupDrawingContextMethodsOverride::DrawGeometry_2 ($brush, $pen, $geometry)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawGeometry(mixed ...$args){}
	/**
	 * @uses DrawingGroupDrawingContextMethodsOverride::DrawRectangle_1 ($brush, $pen, $rect, $radiusX, $radiusY, $boxShadows)
	 * @uses DrawingGroupDrawingContextMethodsOverride::DrawRectangle_2 ($brush, $pen, $rrect, $boxShadows)
	 * @uses DrawingGroupDrawingContextMethodsOverride::DrawRectangle_3 ($pen, $rect, $cornerRadius)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawRectangle(mixed ...$args){}
	/**
	 * @uses DrawingGroupDrawingContextMethodsOverride::DrawEllipse_1 ($brush, $pen, $center, $radiusX, $radiusY)
	 * @uses DrawingGroupDrawingContextMethodsOverride::DrawEllipse_2 ($brush, $pen, $rect)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawEllipse(mixed ...$args){}
	/**
	 * @uses DrawingGroupDrawingContextMethodsOverride::PushClip_1 ($clip)
	 * @uses DrawingGroupDrawingContextMethodsOverride::PushClip_2 ($clip)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function PushClip(mixed ...$args){}
}
