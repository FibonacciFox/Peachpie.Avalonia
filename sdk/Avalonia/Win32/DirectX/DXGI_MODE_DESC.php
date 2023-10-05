<?php
namespace Avalonia\Win32\DirectX;
/**
 */
class DXGI_MODE_DESC extends \System\ValueType
{
	/**
	 * @var \System\UInt16
	 * @field
	 */
	public $Width;
	/**
	 * @var \System\UInt16
	 * @field
	 */
	public $Height;
	/**
	 * @var \Avalonia\Win32\DirectX\DXGI_RATIONAL
	 * @field
	 */
	public $RefreshRate;
	/**
	 * @var \Avalonia\Win32\DirectX\DXGI_FORMAT
	 * @field
	 */
	public $Format;
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
}
