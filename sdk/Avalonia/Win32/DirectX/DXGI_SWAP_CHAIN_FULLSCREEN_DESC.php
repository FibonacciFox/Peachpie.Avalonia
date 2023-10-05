<?php
namespace Avalonia\Win32\DirectX;
/**
 */
class DXGI_SWAP_CHAIN_FULLSCREEN_DESC extends \System\ValueType
{
	/**
	 * @var \Avalonia\Win32\DirectX\DXGI_RATIONAL
	 * @field
	 */
	public $RefreshRate;
	/**
	 * @var \Avalonia\Win32\DirectX\DXGI_MODE_SCANLINE_ORDER
	 * @field
	 */
	public $ScanlineOrdering;
	/**
	 * @var \Avalonia\Win32\DirectX\DXGI_MODE_SCALING
	 * @field
	 */
	public $Scaling;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Windowed;
}
