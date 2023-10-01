<?php
namespace Avalonia\Win32;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EmbeddedWindowImplMethodsOverride
{
	/**
	 * @return \Avalonia\Platform\IPlatformHandle
	 */
	#[MethodOverride] public  function get_Handle_1(){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] private  function get_Handle_2(){}
}
/**
 */
class EmbeddedWindowImpl extends \Avalonia\Win32\WindowImpl implements 
	\Avalonia\Platform\IWindowImpl,
	\Avalonia\Platform\IWindowBaseImpl,
	\Avalonia\Platform\ITopLevelImpl,
	\Avalonia\Platform\IOptionalFeatureProvider,
	\System\IDisposable,
	\Avalonia\OpenGL\Egl\IEglWindowGlPlatformSurfaceInfo
{
	/**
	 * @uses EmbeddedWindowImplMethodsOverride::get_Handle_1 ()
	 * @uses EmbeddedWindowImplMethodsOverride::get_Handle_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Handle(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Size(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Scaling(){}
}
