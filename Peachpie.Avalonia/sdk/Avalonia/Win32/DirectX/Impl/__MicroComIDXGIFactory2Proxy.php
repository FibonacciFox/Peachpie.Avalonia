<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDXGIFactory2ProxyMethodsOverride
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
class __MicroComIDXGIFactory2Proxy extends \Avalonia\Win32\DirectX\Impl\__MicroComIDXGIFactory1Proxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\DirectX\IDXGIObject,
	\Avalonia\Win32\DirectX\IDXGIFactory,
	\Avalonia\Win32\DirectX\IDXGIFactory1,
	\Avalonia\Win32\DirectX\IDXGIFactory2
{
	/**
	 * @return \System\Int32|int
	 */
	public  function IsWindowedStereoEnabled(){}
	/**
	 * @param \MicroCom\Runtime\IUnknown $pDevice
	 * @param \System\IntPtr $hWnd
	 * @param \Avalonia\Win32\DirectX\DXGI_SWAP_CHAIN_DESC1* $pDesc
	 * @param \Avalonia\Win32\DirectX\DXGI_SWAP_CHAIN_FULLSCREEN_DESC* $pFullscreenDesc
	 * @param \Avalonia\Win32\DirectX\IDXGIOutput $pRestrictToOutput
	 * @return \Avalonia\Win32\DirectX\IDXGISwapChain1
	 */
	public  function CreateSwapChainForHwnd($pDevice, $hWnd, $pDesc, $pFullscreenDesc, $pRestrictToOutput){}
	/**
	 * @param \MicroCom\Runtime\IUnknown $pDevice
	 * @param \MicroCom\Runtime\IUnknown $pWindow
	 * @param \Avalonia\Win32\DirectX\DXGI_SWAP_CHAIN_DESC1* $pDesc
	 * @param \Avalonia\Win32\DirectX\IDXGIOutput $pRestrictToOutput
	 * @return \Avalonia\Win32\DirectX\IDXGISwapChain1
	 */
	public  function CreateSwapChainForCoreWindow($pDevice, $pWindow, $pDesc, $pRestrictToOutput){}
	/**
	 * @param \System\IntPtr $hResource
	 * @param \System\UInt64* $pLuid
	 * @return \System\Void|void
	 */
	public  function GetSharedResourceAdapterLuid($hResource, $pLuid){}
	/**
	 * @param \System\IntPtr $WindowHandle
	 * @param \System\UInt16 $wMsg
	 * @return \System\Int32|int
	 */
	public  function RegisterStereoStatusWindow($WindowHandle, $wMsg){}
	/**
	 * @param \System\IntPtr $hEvent
	 * @return \System\Int32|int
	 */
	public  function RegisterStereoStatusEvent($hEvent){}
	/**
	 * @param \System\Int32|int $dwCookie
	 * @return \System\Void|void
	 */
	public  function UnregisterStereoStatus($dwCookie){}
	/**
	 * @param \System\IntPtr $WindowHandle
	 * @param \System\UInt16 $wMsg
	 * @return \System\Int32|int
	 */
	public  function RegisterOcclusionStatusWindow($WindowHandle, $wMsg){}
	/**
	 * @param \System\IntPtr $hEvent
	 * @return \System\Int32|int
	 */
	public  function RegisterOcclusionStatusEvent($hEvent){}
	/**
	 * @param \System\Int32|int $dwCookie
	 * @return \System\Void|void
	 */
	public  function UnregisterOcclusionStatus($dwCookie){}
	/**
	 * @param \MicroCom\Runtime\IUnknown $pDevice
	 * @param \Avalonia\Win32\DirectX\DXGI_SWAP_CHAIN_DESC1* $pDesc
	 * @param \Avalonia\Win32\DirectX\IDXGIOutput $pRestrictToOutput
	 * @return \Avalonia\Win32\DirectX\IDXGISwapChain1
	 */
	public  function CreateSwapChainForComposition($pDevice, $pDesc, $pRestrictToOutput){}
	/**
	 * @uses __MicroComIDXGIFactory2ProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIDXGIFactory2ProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIDXGIFactory2ProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIDXGIFactory2ProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
