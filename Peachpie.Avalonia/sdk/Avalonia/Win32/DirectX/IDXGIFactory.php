<?php
namespace Avalonia\Win32\DirectX;
/**
 */
interface IDXGIFactory
{
	/**
	 * @param \System\UInt16 $Adapter
	 * @param \System\Void* $ppAdapter
	 */
	public function EnumAdapters($Adapter, $ppAdapter);
	/**
	 * @param \System\IntPtr $WindowHandle
	 * @param \System\UInt16 $Flags
	 */
	public function MakeWindowAssociation($WindowHandle, $Flags);
	/**
	 */
	public function get_WindowAssociation();
	/**
	 * @param \MicroCom\Runtime\IUnknown $pDevice
	 * @param \Avalonia\Win32\DirectX\DXGI_SWAP_CHAIN_DESC* $pDesc
	 */
	public function CreateSwapChain($pDevice, $pDesc);
	/**
	 * @param \System\Void* $Module
	 */
	public function CreateSoftwareAdapter($Module);
}
