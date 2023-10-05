<?php
namespace Avalonia\Win32\DirectX;
/**
 */
class D3D11_TEXTURE2D_DESC extends \System\ValueType
{
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $Width;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $Height;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $MipLevels;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $ArraySize;
	/**
	 * @var \Avalonia\Win32\DirectX\DXGI_FORMAT
	 * @field
	 */
	public $Format;
	/**
	 * @var \Avalonia\Win32\DirectX\DXGI_SAMPLE_DESC
	 * @field
	 */
	public $SampleDesc;
	/**
	 * @var \Avalonia\Win32\DirectX\D3D11_USAGE
	 * @field
	 */
	public $Usage;
	/**
	 * @var \Avalonia\Win32\DirectX\D3D11_BIND_FLAG
	 * @field
	 */
	public $BindFlags;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $CPUAccessFlags;
	/**
	 * @var \Avalonia\Win32\DirectX\D3D11_RESOURCE_MISC_FLAG
	 * @field
	 */
	public $MiscFlags;
}
