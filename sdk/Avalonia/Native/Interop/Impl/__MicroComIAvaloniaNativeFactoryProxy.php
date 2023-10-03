<?php
namespace Avalonia\Native\Interop\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIAvaloniaNativeFactoryProxyMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function QueryInterface_1($guid, $ppv){}
	/**
	 * @return \MicroCom\Runtime\T
	 */
	#[MethodOverride] public  function QueryInterface_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_1($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
}
/**
 */
class __MicroComIAvaloniaNativeFactoryProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Native\Interop\IAvaloniaNativeFactory
{
	/**
	 * @param \Avalonia\Native\Interop\IAvnGCHandleDeallocatorCallback $deallocator
	 * @param \Avalonia\Native\Interop\IAvnApplicationEvents $appCb
	 * @param \Avalonia\Native\Interop\IAvnDispatcher $dispatcher
	 * @return \System\Void|void
	 */
	public  function Initialize($deallocator, $appCb, $dispatcher){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnMacOptions
	 */
	public  function get_MacOptions(){}
	/**
	 * @param \Avalonia\Native\Interop\IAvnWindowEvents $cb
	 * @return \Avalonia\Native\Interop\IAvnWindow
	 */
	public  function CreateWindow($cb){}
	/**
	 * @param \Avalonia\Native\Interop\IAvnWindowEvents $cb
	 * @return \Avalonia\Native\Interop\IAvnPopup
	 */
	public  function CreatePopup($cb){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnPlatformThreadingInterface
	 */
	public  function CreatePlatformThreadingInterface(){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnSystemDialogs
	 */
	public  function CreateSystemDialogs(){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnScreens
	 */
	public  function CreateScreens(){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnClipboard
	 */
	public  function CreateClipboard(){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnClipboard
	 */
	public  function CreateDndClipboard(){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnCursorFactory
	 */
	public  function CreateCursorFactory(){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnGlDisplay
	 */
	public  function ObtainGlDisplay(){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnMetalDisplay
	 */
	public  function ObtainMetalDisplay(){}
	/**
	 * @param \Avalonia\Native\Interop\IAvnMenu $menu
	 * @return \System\Void|void
	 */
	public  function SetAppMenu($menu){}
	/**
	 * @param \Avalonia\Native\Interop\IAvnMenu $menu
	 * @return \System\Void|void
	 */
	public  function SetServicesMenu($menu){}
	/**
	 * @param \Avalonia\Native\Interop\IAvnMenuEvents $cb
	 * @return \Avalonia\Native\Interop\IAvnMenu
	 */
	public  function CreateMenu($cb){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnMenuItem
	 */
	public  function CreateMenuItem(){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnMenuItem
	 */
	public  function CreateMenuItemSeparator(){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnTrayIcon
	 */
	public  function CreateTrayIcon(){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnApplicationCommands
	 */
	public  function CreateApplicationCommands(){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnPlatformSettings
	 */
	public  function CreatePlatformSettings(){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnPlatformBehaviorInhibition
	 */
	public  function CreatePlatformBehaviorInhibition(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIAvaloniaNativeFactoryProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIAvaloniaNativeFactoryProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIAvaloniaNativeFactoryProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIAvaloniaNativeFactoryProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
