<?php
namespace Avalonia\Native;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait WindowImplMethodsOverride
{
	/**
	 * @return \Avalonia\Native\Interop\IAvnWindow
	 */
	#[MethodOverride] public  function get_Native_1(){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnWindowBase
	 */
	#[MethodOverride] public  function get_Native_2(){}
}
/**
 */
class WindowImpl extends \Avalonia\Native\WindowBaseImpl implements 
	\Avalonia\Platform\IWindowBaseImpl,
	\Avalonia\Platform\ITopLevelImpl,
	\Avalonia\Platform\IOptionalFeatureProvider,
	\System\IDisposable,
	\Avalonia\Controls\Platform\Surfaces\IFramebufferPlatformSurface,
	\Avalonia\Platform\IWindowImpl
{
	/**
	 * @uses WindowImplMethodsOverride::get_Native_1 ()
	 * @uses WindowImplMethodsOverride::get_Native_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Native(mixed ...$args){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function CanResize($value){}
	/**
	 * @param \Avalonia\Controls\SystemDecorations $enabled
	 * @return \System\Void|void
	 */
	public  function SetSystemDecorations($enabled){}
	/**
	 * @param \Avalonia\Media\Color $color
	 * @return \System\Void|void
	 */
	public  function SetTitleBarColor($color){}
	/**
	 * @param \System\String|string $title
	 * @return \System\Void|void
	 */
	public  function SetTitle($title){}
	/**
	 * @return \Avalonia\Controls\WindowState
	 */
	public  function get_WindowState(){}
	/**
	 * @param \Avalonia\Controls\WindowState $value
	 * @return \System\Void|void
	 */
	public  function set_WindowState($value){}
	/**
	 * @return \System\Action_1
	 */
	public  function get_WindowStateChanged(){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function set_WindowStateChanged($value){}
	/**
	 * @return \System\Action_1
	 */
	public  function get_ExtendClientAreaToDecorationsChanged(){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function set_ExtendClientAreaToDecorationsChanged($value){}
	/**
	 * @return \Avalonia\Thickness
	 */
	public  function get_ExtendedMargins(){}
	/**
	 * @param \Avalonia\Thickness $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_ExtendedMargins($value){}
	/**
	 * @return \Avalonia\Thickness
	 */
	public  function get_OffScreenMargin(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsClientAreaExtendedToDecorations(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InvalidateExtendedMargins(){}
	/**
	 * @param \System\Boolean $extendIntoClientAreaHint
	 * @return \System\Void|void
	 */
	public  function SetExtendClientAreaToDecorationsHint($extendIntoClientAreaHint){}
	/**
	 * @param \Avalonia\Platform\ExtendClientAreaChromeHints $hints
	 * @return \System\Void|void
	 */
	public  function SetExtendClientAreaChromeHints($hints){}
	/**
	 * @param \System\Double|double $titleBarHeight
	 * @return \System\Void|void
	 */
	public  function SetExtendClientAreaTitleBarHeightHint($titleBarHeight){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_NeedsManagedDecorations(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function ShowTaskbarIcon($value){}
	/**
	 * @param \Avalonia\Platform\IWindowIconImpl $icon
	 * @return \System\Void|void
	 */
	public  function SetIcon($icon){}
	/**
	 * @return \System\Func_2
	 */
	public  function get_Closing(){}
	/**
	 * @param \System\Func_2 $value
	 * @return \System\Void|void
	 */
	public  function set_Closing($value){}
	/**
	 * @param \Avalonia\PixelPoint $point
	 * @return \System\Void|void
	 */
	public  function Move($point){}
	/**
	 * @return \System\Action
	 */
	public  function get_GotInputWhenDisabled(){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function set_GotInputWhenDisabled($value){}
	/**
	 * @param \Avalonia\Platform\IWindowImpl $parent
	 * @return \System\Void|void
	 */
	public  function SetParent($parent){}
	/**
	 * @param \System\Boolean $enable
	 * @return \System\Void|void
	 */
	public  function SetEnabled($enable){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateFramebufferRenderTarget(){}
}
