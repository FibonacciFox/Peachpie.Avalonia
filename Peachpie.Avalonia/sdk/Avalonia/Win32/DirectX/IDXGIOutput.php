<?php
namespace Avalonia\Win32\DirectX;
/**
 */
interface IDXGIOutput
{
	/**
	 */
	public function get_Desc();
	/**
	 * @param \Avalonia\Win32\DirectX\DXGI_FORMAT $EnumFormat
	 * @param \System\UInt16 $Flags
	 * @param \System\UInt16* $pNumModes
	 */
	public function GetDisplayModeList($EnumFormat, $Flags, $pNumModes);
	/**
	 * @param \Avalonia\Win32\DirectX\DXGI_MODE_DESC* $pModeToMatch
	 * @param \Avalonia\Win32\DirectX\DXGI_MODE_DESC* $pClosestMatch
	 * @param \MicroCom\Runtime\IUnknown $pConcernedDevice
	 */
	public function FindClosestMatchingMode($pModeToMatch, $pClosestMatch, $pConcernedDevice);
	/**
	 */
	public function WaitForVBlank();
	/**
	 * @param \MicroCom\Runtime\IUnknown $pDevice
	 * @param \System\Int32|int $Exclusive
	 */
	public function TakeOwnership($pDevice, $Exclusive);
	/**
	 */
	public function ReleaseOwnership();
	/**
	 * @param \System\IntPtr $pGammaCaps
	 */
	public function GetGammaControlCapabilities($pGammaCaps);
	/**
	 * @param \System\Void* $pArray
	 */
	public function SetGammaControl($pArray);
	/**
	 * @param \System\IntPtr $pArray
	 */
	public function GetGammaControl($pArray);
	/**
	 * @param \Avalonia\Win32\DirectX\IDXGISurface $pScanoutSurface
	 */
	public function SetDisplaySurface($pScanoutSurface);
	/**
	 * @param \Avalonia\Win32\DirectX\IDXGISurface $pDestination
	 */
	public function GetDisplaySurfaceData($pDestination);
	/**
	 */
	public function get_FrameStatistics();
}
