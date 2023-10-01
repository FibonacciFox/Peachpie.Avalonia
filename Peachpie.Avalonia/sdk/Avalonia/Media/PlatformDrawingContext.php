<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PlatformDrawingContextMethodsOverride
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
	#[MethodOverride] public  function DrawRectangle_1($material, $rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawRectangle_2($brush, $pen, $rect, $radiusX, $radiusY, $boxShadows){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawRectangle_3($brush, $pen, $rrect, $boxShadows){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawRectangle_4($pen, $rect, $cornerRadius){}
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
class PlatformDrawingContext extends \Avalonia\Media\DrawingContext implements 
	\System\IDisposable
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_TransformStackPool(){}
	/**
	 * @return \Avalonia\Media\RenderOptions
	 */
	public  function get_RenderOptions(){}
	/**
	 * @param \Avalonia\Media\RenderOptions $value
	 * @return \System\Void|void
	 */
	public  function set_RenderOptions($value){}
	/**
	 * @uses PlatformDrawingContextMethodsOverride::PushClipCore_1 ($rect)
	 * @uses PlatformDrawingContextMethodsOverride::PushClipCore_2 ($rect)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function PushClipCore(mixed ...$args){}
	/**
	 * @uses PlatformDrawingContextMethodsOverride::DrawRectangle_1 ($material, $rect)
	 * @uses PlatformDrawingContextMethodsOverride::DrawRectangle_2 ($brush, $pen, $rect, $radiusX, $radiusY, $boxShadows)
	 * @uses PlatformDrawingContextMethodsOverride::DrawRectangle_3 ($brush, $pen, $rrect, $boxShadows)
	 * @uses PlatformDrawingContextMethodsOverride::DrawRectangle_4 ($pen, $rect, $cornerRadius)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawRectangle(mixed ...$args){}
	/**
	 * @uses PlatformDrawingContextMethodsOverride::DrawImage_1 ($source, $rect)
	 * @uses PlatformDrawingContextMethodsOverride::DrawImage_2 ($source, $sourceRect, $destRect)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawImage(mixed ...$args){}
	/**
	 * @uses PlatformDrawingContextMethodsOverride::DrawGeometry_1 ($brush, $pen, $geometry)
	 * @uses PlatformDrawingContextMethodsOverride::DrawGeometry_2 ($brush, $pen, $geometry)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawGeometry(mixed ...$args){}
	/**
	 * @uses PlatformDrawingContextMethodsOverride::DrawEllipse_1 ($brush, $pen, $center, $radiusX, $radiusY)
	 * @uses PlatformDrawingContextMethodsOverride::DrawEllipse_2 ($brush, $pen, $rect)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawEllipse(mixed ...$args){}
	/**
	 * @uses PlatformDrawingContextMethodsOverride::PushClip_1 ($clip)
	 * @uses PlatformDrawingContextMethodsOverride::PushClip_2 ($clip)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function PushClip(mixed ...$args){}
}
