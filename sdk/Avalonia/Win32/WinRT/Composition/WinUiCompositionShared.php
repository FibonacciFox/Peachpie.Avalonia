<?php
namespace Avalonia\Win32\WinRT\Composition;
/**
 */
class WinUiCompositionShared extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @var \System\Version
	 * @field
	 */
	public readonly $MinWinCompositionVersion;
	/**
	 * @var \System\Version
	 * @field
	 */
	public readonly $MinAcrylicVersion;
	/**
	 * @var \System\Version
	 * @field
	 */
	public readonly $MinHostBackdropVersion;
	/**
	 * @var \Avalonia\Win32\WinRT\ICompositor
	 * @property
	 */
	public readonly $Compositor;
	/**
	 * @var \Avalonia\Win32\WinRT\ICompositor5
	 * @property
	 */
	public readonly $Compositor5;
	/**
	 * @var \Avalonia\Win32\WinRT\ICompositorDesktopInterop
	 * @property
	 */
	public readonly $DesktopInterop;
	/**
	 * @var \Avalonia\Win32\WinRT\ICompositionBrush
	 * @property
	 */
	public readonly $BlurBrush;
	/**
	 * @var \Avalonia\Win32\WinRT\ICompositionBrush
	 * @property
	 */
	public readonly $MicaBrushLight;
	/**
	 * @var \Avalonia\Win32\WinRT\ICompositionBrush
	 * @property
	 */
	public readonly $MicaBrushDark;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $SyncRoot;
	/**
	 * @return \Avalonia\Win32\WinRT\ICompositor
	 */
	public  function get_Compositor(){}
	/**
	 * @return \Avalonia\Win32\WinRT\ICompositor5
	 */
	public  function get_Compositor5(){}
	/**
	 * @return \Avalonia\Win32\WinRT\ICompositorDesktopInterop
	 */
	public  function get_DesktopInterop(){}
	/**
	 * @return \Avalonia\Win32\WinRT\ICompositionBrush
	 */
	public  function get_BlurBrush(){}
	/**
	 * @return \Avalonia\Win32\WinRT\ICompositionBrush
	 */
	public  function get_MicaBrushLight(){}
	/**
	 * @return \Avalonia\Win32\WinRT\ICompositionBrush
	 */
	public  function get_MicaBrushDark(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_SyncRoot(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
