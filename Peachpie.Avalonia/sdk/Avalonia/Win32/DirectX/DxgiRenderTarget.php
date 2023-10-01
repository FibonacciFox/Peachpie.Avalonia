<?php
namespace Avalonia\Win32\DirectX;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DxgiRenderTargetMethodsOverride
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
class DxgiRenderTarget extends \Avalonia\OpenGL\Egl\EglPlatformSurfaceRenderTargetBase implements 
	\Avalonia\OpenGL\Surfaces\IGlPlatformSurfaceRenderTargetWithCorruptionInfo,
	\Avalonia\OpenGL\Surfaces\IGlPlatformSurfaceRenderTarget,
	\System\IDisposable
{
	/**
	 * @param \Avalonia\Win32\Interop\RECT& $l
	 * @param \Avalonia\Win32\Interop\RECT& $r
	 * @return \System\Boolean
	 */
	protected static function RectsEqual($l, $r){}
	/**
	 * @uses DxgiRenderTargetMethodsOverride::BeginDraw_1 ()
	 * @uses DxgiRenderTargetMethodsOverride::BeginDraw_2 ($surface, $size, $scaling, $onFinish, $isYFlipped)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function BeginDraw(mixed ...$args){}
}
