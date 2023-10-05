<?php
namespace Avalonia\X11;
/**
 */
class AvaloniaX11Platform extends \System\Object implements 
	\Avalonia\Platform\IWindowingPlatform
{
	/**
	 * @var \System\Collections\Generic\Dictionary_2[System\IntPtr,Avalonia\X11\X11PlatformThreading+EventHandler]
	 * @field
	 */
	public $Windows;
	/**
	 * @var \Avalonia\X11\XI2Manager
	 * @field
	 */
	public $XI2;
	/**
	 * @var \Avalonia\Input\KeyboardDevice
	 * @property
	 */
	public readonly $KeyboardDevice;
	/**
	 * @var \Avalonia\X11\X11Info
	 * @property
	 */
	public $Info;
	/**
	 * @var \Avalonia\X11\IX11Screens
	 * @property
	 */
	public $X11Screens;
	/**
	 * @var \Avalonia\Rendering\Composition\Compositor
	 * @property
	 */
	public $Compositor;
	/**
	 * @var \Avalonia\Platform\IScreenImpl
	 * @property
	 */
	public $Screens;
	/**
	 * @var \Avalonia\X11PlatformOptions
	 * @property
	 */
	public $Options;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public $OrphanedWindow;
	/**
	 * @var \Avalonia\X11\X11Globals
	 * @property
	 */
	public $Globals;
	/**
	 * @var \Avalonia\ManualRawEventGrouperDispatchQueue
	 * @property
	 */
	public readonly $EventGrouperDispatchQueue;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public $DeferredDisplay;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public $Display;
	/**
	 * @return \Avalonia\Input\KeyboardDevice
	 */
	public  function get_KeyboardDevice(){}
	/**
	 * @return \Avalonia\X11\X11Info
	 */
	public  function get_Info(){}
	/**
	 * @param \Avalonia\X11\X11Info $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Info($value){}
	/**
	 * @return \Avalonia\X11\IX11Screens
	 */
	public  function get_X11Screens(){}
	/**
	 * @param \Avalonia\X11\IX11Screens $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_X11Screens($value){}
	/**
	 * @return \Avalonia\Rendering\Composition\Compositor
	 */
	public  function get_Compositor(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Compositor($value){}
	/**
	 * @return \Avalonia\Platform\IScreenImpl
	 */
	public  function get_Screens(){}
	/**
	 * @param \Avalonia\Platform\IScreenImpl $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Screens($value){}
	/**
	 * @return \Avalonia\X11PlatformOptions
	 */
	public  function get_Options(){}
	/**
	 * @param \Avalonia\X11PlatformOptions $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Options($value){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_OrphanedWindow(){}
	/**
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_OrphanedWindow($value){}
	/**
	 * @return \Avalonia\X11\X11Globals
	 */
	public  function get_Globals(){}
	/**
	 * @param \Avalonia\X11\X11Globals $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Globals($value){}
	/**
	 * @return \Avalonia\ManualRawEventGrouperDispatchQueue
	 */
	public  function get_EventGrouperDispatchQueue(){}
	/**
	 * @param \Avalonia\X11PlatformOptions $options
	 * @return \System\Void|void
	 */
	public  function Initialize($options){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_DeferredDisplay(){}
	/**
	 * @param \System\IntPtr $value
	 * @return \System\Void|void
	 */
	public  function set_DeferredDisplay($value){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Display(){}
	/**
	 * @param \System\IntPtr $value
	 * @return \System\Void|void
	 */
	public  function set_Display($value){}
	/**
	 * @param \Avalonia\Platform\IWindowIconImpl $icon
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function X11IconConverter($icon){}
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
	 * @param \Avalonia\X11PlatformOptions $options
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EnableIme($options){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ShouldUseXim(){}
	/**
	 * @param \Avalonia\X11PlatformOptions $opts
	 * @param \Avalonia\X11\X11Info $info
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InitializeGraphics($opts, $info){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
