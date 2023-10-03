<?php
namespace Avalonia\Win32\DirectX;
/**
 */
interface IDXGISwapChain1
{
	/**
	 */
	public function get_Desc1();
	/**
	 */
	public function get_FullscreenDesc();
	/**
	 */
	public function get_Hwnd();
	/**
	 * @param \System\Guid* $refiid
	 */
	public function GetCoreWindow($refiid);
	/**
	 * @param \System\UInt16 $SyncInterval
	 * @param \System\UInt16 $PresentFlags
	 * @param \Avalonia\Win32\DirectX\DXGI_PRESENT_PARAMETERS* $pPresentParameters
	 */
	public function Present1($SyncInterval, $PresentFlags, $pPresentParameters);
	/**
	 */
	public function IsTemporaryMonoSupported();
	/**
	 */
	public function get_RestrictToOutput();
	/**
	 * @param \Avalonia\Win32\DirectX\DXGI_RGBA* $pColor
	 */
	public function SetBackgroundColor($pColor);
	/**
	 */
	public function get_BackgroundColor();
	/**
	 * @param \Avalonia\Win32\DirectX\DXGI_MODE_ROTATION $Rotation
	 */
	public function SetRotation($Rotation);
	/**
	 */
	public function get_Rotation();
}
