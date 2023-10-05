<?php
namespace Avalonia\Win32\DirectX;
/**
 */
class DXGI_SURFACE_DESC extends \System\ValueType
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
	 * @var \Avalonia\Win32\DirectX\DXGI_FORMAT
	 * @field
	 */
	public $Format;
	/**
	 * @var \Avalonia\Win32\DirectX\DXGI_SAMPLE_DESC
	 * @field
	 */
	public $SampleDesc;
}
