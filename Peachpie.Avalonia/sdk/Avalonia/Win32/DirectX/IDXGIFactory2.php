<?php
namespace Avalonia\Win32\DirectX;
/**
 */
interface IDXGIFactory2
{
	/**
	 */
	public function IsWindowedStereoEnabled();
	/**
	 * @param \MicroCom\Runtime\IUnknown $pDevice
	 * @param \System\IntPtr $hWnd
	 * @param \Avalonia\Win32\DirectX\DXGI_SWAP_CHAIN_DESC1* $pDesc
	 * @param \Avalonia\Win32\DirectX\DXGI_SWAP_CHAIN_FULLSCREEN_DESC* $pFullscreenDesc
	 * @param \Avalonia\Win32\DirectX\IDXGIOutput $pRestrictToOutput
	 */
	public function CreateSwapChainForHwnd($pDevice, $hWnd, $pDesc, $pFullscreenDesc, $pRestrictToOutput);
	/**
	 * @param \MicroCom\Runtime\IUnknown $pDevice
	 * @param \MicroCom\Runtime\IUnknown $pWindow
	 * @param \Avalonia\Win32\DirectX\DXGI_SWAP_CHAIN_DESC1* $pDesc
	 * @param \Avalonia\Win32\DirectX\IDXGIOutput $pRestrictToOutput
	 */
	public function CreateSwapChainForCoreWindow($pDevice, $pWindow, $pDesc, $pRestrictToOutput);
	/**
	 * @param \System\IntPtr $hResource
	 * @param \System\UInt64* $pLuid
	 */
	public function GetSharedResourceAdapterLuid($hResource, $pLuid);
	/**
	 * @param \System\IntPtr $WindowHandle
	 * @param \System\UInt16 $wMsg
	 */
	public function RegisterStereoStatusWindow($WindowHandle, $wMsg);
	/**
	 * @param \System\IntPtr $hEvent
	 */
	public function RegisterStereoStatusEvent($hEvent);
	/**
	 * @param \System\Int32|int $dwCookie
	 */
	public function UnregisterStereoStatus($dwCookie);
	/**
	 * @param \System\IntPtr $WindowHandle
	 * @param \System\UInt16 $wMsg
	 */
	public function RegisterOcclusionStatusWindow($WindowHandle, $wMsg);
	/**
	 * @param \System\IntPtr $hEvent
	 */
	public function RegisterOcclusionStatusEvent($hEvent);
	/**
	 * @param \System\Int32|int $dwCookie
	 */
	public function UnregisterOcclusionStatus($dwCookie);
	/**
	 * @param \MicroCom\Runtime\IUnknown $pDevice
	 * @param \Avalonia\Win32\DirectX\DXGI_SWAP_CHAIN_DESC1* $pDesc
	 * @param \Avalonia\Win32\DirectX\IDXGIOutput $pRestrictToOutput
	 */
	public function CreateSwapChainForComposition($pDevice, $pDesc, $pRestrictToOutput);
}
