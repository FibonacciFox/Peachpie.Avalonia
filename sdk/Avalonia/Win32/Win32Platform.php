<?php
namespace Avalonia\Win32;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Win32PlatformMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Initialize_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Initialize_2($options){}
	/**
	 * @return \Avalonia\Platform\IWindowIconImpl
	 */
	#[MethodOverride] public  function LoadIcon_1($fileName){}
	/**
	 * @return \Avalonia\Platform\IWindowIconImpl
	 */
	#[MethodOverride] public  function LoadIcon_2($stream){}
	/**
	 * @return \Avalonia\Platform\IWindowIconImpl
	 */
	#[MethodOverride] public  function LoadIcon_3($bitmap){}
}
/**
 */
class Win32Platform extends \System\Object implements 
	\Avalonia\Platform\IWindowingPlatform,
	\Avalonia\Platform\IPlatformIconLoader,
	\Avalonia\Platform\IPlatformLifetimeEventsImpl
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $TIMERID_DISPATCHER;
	/**
	 * @var \System\Version
	 * @property
	 */
	public readonly $WindowsVersion;
	/**
	 * @var \Avalonia\Win32PlatformOptions
	 * @property
	 */
	public readonly $Options;
	/**
	 * @return \Avalonia\Win32\Win32Platform
	 */
	protected static function get_Instance(){}
	/**
	 * @return \Avalonia\Platform\IPlatformSettings
	 */
	protected static function get_PlatformSettings(){}
	/**
	 * @return \System\IntPtr
	 */
	protected  function get_Handle(){}
	/**
	 * @return \System\Version
	 */
	public static function get_WindowsVersion(){}
	/**
	 * @return \System\Boolean
	 */
	protected static function get_UseOverlayPopups(){}
	/**
	 * @return \Avalonia\Win32PlatformOptions
	 */
	public static function get_Options(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Compositor
	 */
	protected static function get_Compositor(){}
	/**
	 * @uses Win32PlatformMethodsOverride::Initialize_1 ()
	 * @uses Win32PlatformMethodsOverride::Initialize_2 ($options)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Initialize(mixed ...$args){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_ShutdownRequested($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_ShutdownRequested($value){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\UInt32 $msg
	 * @param \System\IntPtr $wParam
	 * @param \System\IntPtr $lParam
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WndProc($hWnd, $msg, $wParam, $lParam){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateMessageWindow(){}
	/**
	 * @return \Avalonia\Platform\ITrayIconImpl
	 */
	public  function CreateTrayIcon(){}
	/**
	 * @return \Avalonia\Platform\IWindowImpl
	 */
	public  function CreateWindow(){}
	/**
	 * @return \Avalonia\Platform\IWindowImpl
	 */
	public  function CreateEmbeddableWindow(){}
	/**
	 * @uses Win32PlatformMethodsOverride::LoadIcon_1 ($fileName)
	 * @uses Win32PlatformMethodsOverride::LoadIcon_2 ($stream)
	 * @uses Win32PlatformMethodsOverride::LoadIcon_3 ($bitmap)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function LoadIcon(mixed ...$args){}
	/**
	 * @param \System\IO\Stream $stream
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateIconImpl($stream){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetDpiAwareness(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
