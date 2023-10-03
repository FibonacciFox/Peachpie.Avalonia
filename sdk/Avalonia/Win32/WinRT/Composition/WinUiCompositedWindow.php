<?php
namespace Avalonia\Win32\WinRT\Composition;
/**
 */
class WinUiCompositedWindow extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @return \Avalonia\OpenGL\Egl\IEglWindowGlPlatformSurfaceInfo
	 */
	public  function get_WindowInfo(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \Avalonia\Win32\WinRT\ICompositionSurface $surface
	 * @return \System\Void|void
	 */
	public  function SetSurface($surface){}
	/**
	 * @param \Avalonia\Win32\WinRT\BlurEffect $blurEffect
	 * @return \System\Void|void
	 */
	public  function SetBlur($blurEffect){}
	/**
	 * @return \System\IDisposable
	 */
	public  function BeginTransaction(){}
	/**
	 * @param \Avalonia\PixelSize $size
	 * @return \System\Void|void
	 */
	public  function ResizeIfNeeded($size){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
