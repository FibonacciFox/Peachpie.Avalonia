<?php
namespace Avalonia\Win32\DirectX;
/**
 */
interface IDXGISwapChain
{
	/**
	 * @param \System\UInt16 $SyncInterval
	 * @param \System\UInt16 $Flags
	 */
	public function Present($SyncInterval, $Flags);
	/**
	 * @param \System\UInt16 $Buffer
	 * @param \System\Guid* $riid
	 */
	public function GetBuffer($Buffer, $riid);
	/**
	 * @param \System\Int32|int $Fullscreen
	 * @param \Avalonia\Win32\DirectX\IDXGIOutput $pTarget
	 */
	public function SetFullscreenState($Fullscreen, $pTarget);
	/**
	 * @param \System\Int32* $pFullscreen
	 */
	public function GetFullscreenState($pFullscreen);
	/**
	 */
	public function get_Desc();
	/**
	 * @param \System\UInt16 $BufferCount
	 * @param \System\UInt16 $Width
	 * @param \System\UInt16 $Height
	 * @param \Avalonia\Win32\DirectX\DXGI_FORMAT $NewFormat
	 * @param \System\UInt16 $SwapChainFlags
	 */
	public function ResizeBuffers($BufferCount, $Width, $Height, $NewFormat, $SwapChainFlags);
	/**
	 * @param \Avalonia\Win32\DirectX\DXGI_MODE_DESC* $pNewTargetParameters
	 */
	public function ResizeTarget($pNewTargetParameters);
	/**
	 */
	public function get_ContainingOutput();
	/**
	 */
	public function get_FrameStatistics();
	/**
	 */
	public function get_LastPresentCount();
}
