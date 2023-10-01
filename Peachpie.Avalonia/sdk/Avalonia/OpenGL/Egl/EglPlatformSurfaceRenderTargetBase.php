<?php
namespace Avalonia\OpenGL\Egl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EglPlatformSurfaceRenderTargetBaseMethodsOverride
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
class EglPlatformSurfaceRenderTargetBase extends \System\Object implements 
	\Avalonia\OpenGL\Surfaces\IGlPlatformSurfaceRenderTargetWithCorruptionInfo,
	\Avalonia\OpenGL\Surfaces\IGlPlatformSurfaceRenderTarget,
	\System\IDisposable
{
	/**
	 * @return \Avalonia\OpenGL\Egl\EglContext
	 */
	protected  function get_Context(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @uses EglPlatformSurfaceRenderTargetBaseMethodsOverride::BeginDraw_1 ()
	 * @uses EglPlatformSurfaceRenderTargetBaseMethodsOverride::BeginDraw_2 ($surface, $size, $scaling, $onFinish, $isYFlipped)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function BeginDraw(mixed ...$args){}
	/**
	 * @return \Avalonia\OpenGL\Surfaces\IGlPlatformSurfaceRenderingSession
	 */
	public  function BeginDrawCore(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCorrupted(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
