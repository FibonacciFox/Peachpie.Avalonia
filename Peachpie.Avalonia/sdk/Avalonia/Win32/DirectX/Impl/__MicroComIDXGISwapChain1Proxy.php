<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDXGISwapChain1ProxyMethodsOverride
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
class __MicroComIDXGISwapChain1Proxy extends \Avalonia\Win32\DirectX\Impl\__MicroComIDXGISwapChainProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\DirectX\IDXGIObject,
	\Avalonia\Win32\DirectX\IDXGIDeviceSubObject,
	\Avalonia\Win32\DirectX\IDXGISwapChain,
	\Avalonia\Win32\DirectX\IDXGISwapChain1
{
	/**
	 * @return \Avalonia\Win32\DirectX\DXGI_SWAP_CHAIN_DESC1
	 */
	public  function get_Desc1(){}
	/**
	 * @return \Avalonia\Win32\DirectX\DXGI_SWAP_CHAIN_FULLSCREEN_DESC
	 */
	public  function get_FullscreenDesc(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Hwnd(){}
	/**
	 * @param \System\Guid* $refiid
	 * @return \System\Void*
	 */
	public  function GetCoreWindow($refiid){}
	/**
	 * @param \System\UInt16 $SyncInterval
	 * @param \System\UInt16 $PresentFlags
	 * @param \Avalonia\Win32\DirectX\DXGI_PRESENT_PARAMETERS* $pPresentParameters
	 * @return \System\Void|void
	 */
	public  function Present1($SyncInterval, $PresentFlags, $pPresentParameters){}
	/**
	 * @return \System\Int32|int
	 */
	public  function IsTemporaryMonoSupported(){}
	/**
	 * @return \Avalonia\Win32\DirectX\IDXGIOutput
	 */
	public  function get_RestrictToOutput(){}
	/**
	 * @param \Avalonia\Win32\DirectX\DXGI_RGBA* $pColor
	 * @return \System\Void|void
	 */
	public  function SetBackgroundColor($pColor){}
	/**
	 * @return \Avalonia\Win32\DirectX\DXGI_RGBA
	 */
	public  function get_BackgroundColor(){}
	/**
	 * @param \Avalonia\Win32\DirectX\DXGI_MODE_ROTATION $Rotation
	 * @return \System\Void|void
	 */
	public  function SetRotation($Rotation){}
	/**
	 * @return \Avalonia\Win32\DirectX\DXGI_MODE_ROTATION
	 */
	public  function get_Rotation(){}
	/**
	 * @uses __MicroComIDXGISwapChain1ProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIDXGISwapChain1ProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIDXGISwapChain1ProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIDXGISwapChain1ProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
