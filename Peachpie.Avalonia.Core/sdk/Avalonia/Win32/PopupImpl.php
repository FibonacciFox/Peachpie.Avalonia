<?php
namespace Avalonia\Win32;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PopupImplMethodsOverride
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
class PopupImpl extends \Avalonia\Win32\WindowImpl implements 
	\Avalonia\Platform\IWindowImpl,
	\Avalonia\Platform\IWindowBaseImpl,
	\Avalonia\Platform\ITopLevelImpl,
	\Avalonia\Platform\IOptionalFeatureProvider,
	\System\IDisposable,
	\Avalonia\OpenGL\Egl\IEglWindowGlPlatformSurfaceInfo,
	\Avalonia\Platform\IPopupImpl
{
	/**
	 * @param \Avalonia\Platform\IWindowBaseImpl $parent
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SaveParentHandle($parent){}
	/**
	 * @param \Avalonia\PixelPoint $position
	 * @param \Avalonia\Size $size
	 * @param \System\Double|double $scaling
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MoveResize($position, $size, $scaling){}
	/**
	 * @param \System\IntPtr $hwnd
	 * @param \System\Boolean $enabled
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EnableBoxShadow($hwnd, $enabled){}
	/**
	 * @param \System\Boolean $enabled
	 * @return \System\Void|void
	 */
	public  function SetWindowManagerAddShadowHint($enabled){}
	/**
	 * @return \Avalonia\Controls\Primitives\PopupPositioning\IPopupPositioner
	 */
	public  function get_PopupPositioner(){}
	/**
	 * @uses PopupImplMethodsOverride::get_Handle_1 ()
	 * @uses PopupImplMethodsOverride::get_Handle_2 ()
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
