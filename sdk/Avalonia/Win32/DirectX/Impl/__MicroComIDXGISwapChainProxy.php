<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDXGISwapChainProxyMethodsOverride
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
class __MicroComIDXGISwapChainProxy extends \Avalonia\Win32\DirectX\Impl\__MicroComIDXGIDeviceSubObjectProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\DirectX\IDXGIObject,
	\Avalonia\Win32\DirectX\IDXGIDeviceSubObject,
	\Avalonia\Win32\DirectX\IDXGISwapChain
{
	/**
	 * @param \System\UInt16 $SyncInterval
	 * @param \System\UInt16 $Flags
	 * @return \System\Void|void
	 */
	public  function Present($SyncInterval, $Flags){}
	/**
	 * @param \System\UInt16 $Buffer
	 * @param \System\Guid* $riid
	 * @return \System\Void*
	 */
	public  function GetBuffer($Buffer, $riid){}
	/**
	 * @param \System\Int32|int $Fullscreen
	 * @param \Avalonia\Win32\DirectX\IDXGIOutput $pTarget
	 * @return \System\Void|void
	 */
	public  function SetFullscreenState($Fullscreen, $pTarget){}
	/**
	 * @param \System\Int32* $pFullscreen
	 * @return \Avalonia\Win32\DirectX\IDXGIOutput
	 */
	public  function GetFullscreenState($pFullscreen){}
	/**
	 * @return \Avalonia\Win32\DirectX\DXGI_SWAP_CHAIN_DESC
	 */
	public  function get_Desc(){}
	/**
	 * @param \System\UInt16 $BufferCount
	 * @param \System\UInt16 $Width
	 * @param \System\UInt16 $Height
	 * @param \Avalonia\Win32\DirectX\DXGI_FORMAT $NewFormat
	 * @param \System\UInt16 $SwapChainFlags
	 * @return \System\Void|void
	 */
	public  function ResizeBuffers($BufferCount, $Width, $Height, $NewFormat, $SwapChainFlags){}
	/**
	 * @param \Avalonia\Win32\DirectX\DXGI_MODE_DESC* $pNewTargetParameters
	 * @return \System\Void|void
	 */
	public  function ResizeTarget($pNewTargetParameters){}
	/**
	 * @return \Avalonia\Win32\DirectX\IDXGIOutput
	 */
	public  function get_ContainingOutput(){}
	/**
	 * @return \Avalonia\Win32\DirectX\DXGI_FRAME_STATISTICS
	 */
	public  function get_FrameStatistics(){}
	/**
	 * @return \System\UInt16
	 */
	public  function get_LastPresentCount(){}
	/**
	 * @uses __MicroComIDXGISwapChainProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIDXGISwapChainProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIDXGISwapChainProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIDXGISwapChainProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
