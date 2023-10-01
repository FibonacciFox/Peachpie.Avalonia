<?php
namespace Avalonia\Win32\WinRT\Composition;
/**
 */
class WinUiCompositionShared extends \System\Object implements 
	\System\IDisposable
{
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
