<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvaloniaNativeFactory
{
	/**
	 * @param \Avalonia\Native\Interop\IAvnGCHandleDeallocatorCallback $deallocator
	 * @param \Avalonia\Native\Interop\IAvnApplicationEvents $appCb
	 * @param \Avalonia\Native\Interop\IAvnDispatcher $dispatcher
	 */
	public function Initialize($deallocator, $appCb, $dispatcher);
	/**
	 */
	public function get_MacOptions();
	/**
	 * @param \Avalonia\Native\Interop\IAvnWindowEvents $cb
	 */
	public function CreateWindow($cb);
	/**
	 * @param \Avalonia\Native\Interop\IAvnWindowEvents $cb
	 */
	public function CreatePopup($cb);
	/**
	 */
	public function CreatePlatformThreadingInterface();
	/**
	 */
	public function CreateSystemDialogs();
	/**
	 */
	public function CreateScreens();
	/**
	 */
	public function CreateClipboard();
	/**
	 */
	public function CreateDndClipboard();
	/**
	 */
	public function CreateCursorFactory();
	/**
	 */
	public function ObtainGlDisplay();
	/**
	 */
	public function ObtainMetalDisplay();
	/**
	 * @param \Avalonia\Native\Interop\IAvnMenu $menu
	 */
	public function SetAppMenu($menu);
	/**
	 * @param \Avalonia\Native\Interop\IAvnMenu $menu
	 */
	public function SetServicesMenu($menu);
	/**
	 * @param \Avalonia\Native\Interop\IAvnMenuEvents $cb
	 */
	public function CreateMenu($cb);
	/**
	 */
	public function CreateMenuItem();
	/**
	 */
	public function CreateMenuItemSeparator();
	/**
	 */
	public function CreateTrayIcon();
	/**
	 */
	public function CreateApplicationCommands();
	/**
	 */
	public function CreatePlatformSettings();
	/**
	 */
	public function CreatePlatformBehaviorInhibition();
}
