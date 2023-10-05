<?php
namespace Avalonia\OpenGL\Egl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RenderTargetMethodsOverride
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
class RenderTarget extends \Avalonia\OpenGL\Egl\EglPlatformSurfaceRenderTargetBase implements 
	\Avalonia\OpenGL\Surfaces\IGlPlatformSurfaceRenderTargetWithCorruptionInfo,
	\Avalonia\OpenGL\Surfaces\IGlPlatformSurfaceRenderTarget,
	\System\IDisposable
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCorrupted;
	/**
	 * @uses RenderTargetMethodsOverride::BeginDraw_1 ()
	 * @uses RenderTargetMethodsOverride::BeginDraw_2 ($surface, $size, $scaling, $onFinish, $isYFlipped)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function BeginDraw(mixed ...$args){}
}
