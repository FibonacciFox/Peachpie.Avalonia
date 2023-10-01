<?php
namespace Avalonia\Win32\DirectX;
/**
 */
interface IDXGIDevice
{
	/**
	 */
	public function get_Adapter();
	/**
	 * @param \Avalonia\Win32\DirectX\DXGI_SURFACE_DESC* $pDesc
	 * @param \System\UInt16 $NumSurfaces
	 * @param \System\UInt32 $Usage
	 * @param \System\Void** $pSharedResource
	 */
	public function CreateSurface($pDesc, $NumSurfaces, $Usage, $pSharedResource);
	/**
	 * @param \MicroCom\Runtime\IUnknown $ppResources
	 * @param \Avalonia\Win32\DirectX\DXGI_RESIDENCY* $pResidencyStatus
	 * @param \System\UInt16 $NumResources
	 */
	public function QueryResourceResidency($ppResources, $pResidencyStatus, $NumResources);
	/**
	 * @param \System\Int32|int $Priority
	 */
	public function SetGPUThreadPriority($Priority);
	/**
	 */
	public function get_GPUThreadPriority();
}
