<?php
namespace Avalonia\Win32\WinRT\Composition;
/**
 */
class WinUiCompositorConnection extends \System\Object implements 
	\Avalonia\Rendering\IRenderTimer
{
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function add_Tick($value){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_Tick($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_RunsInBackground(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryCreateAndRegisterCore(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RunLoop(){}
	/**
	 * @return \System\Boolean
	 */
	public static function IsSupported(){}
	/**
	 * @return \System\Boolean
	 */
	public static function TryCreateAndRegister(){}
	/**
	 * @param \Avalonia\OpenGL\Egl\IEglWindowGlPlatformSurfaceInfo $info
	 * @return \Avalonia\Win32\WinRT\Composition\WinUiCompositedWindowSurface
	 */
	public  function CreateSurface($info){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
