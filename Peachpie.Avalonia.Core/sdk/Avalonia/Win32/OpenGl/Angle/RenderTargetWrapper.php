<?php
namespace Avalonia\Win32\OpenGl\Angle;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RenderTargetWrapperMethodsOverride
{
	/**
	 * @return \Avalonia\OpenGL\Surfaces\IGlPlatformSurfaceRenderingSession
	 */
	#[MethodOverride] public  function BeginDraw_1(){}
	/**
	 * @return \Avalonia\OpenGL\Surfaces\IGlPlatformSurfaceRenderingSession
	 */
	#[MethodOverride] protected  function BeginDraw_2($surface, $size, $scaling, $onFinish, $isYFlipped){}
}
/**
 */
class RenderTargetWrapper extends \Avalonia\OpenGL\Egl\EglPlatformSurfaceRenderTargetBase implements 
	\Avalonia\OpenGL\Surfaces\IGlPlatformSurfaceRenderTargetWithCorruptionInfo,
	\Avalonia\OpenGL\Surfaces\IGlPlatformSurfaceRenderTarget,
	\System\IDisposable
{
	/**
	 * @uses RenderTargetWrapperMethodsOverride::BeginDraw_1 ()
	 * @uses RenderTargetWrapperMethodsOverride::BeginDraw_2 ($surface, $size, $scaling, $onFinish, $isYFlipped)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function BeginDraw(mixed ...$args){}
}
