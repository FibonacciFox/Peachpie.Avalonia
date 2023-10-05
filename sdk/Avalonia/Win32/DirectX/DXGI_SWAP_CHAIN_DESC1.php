<?php
namespace Avalonia\Win32\DirectX;
/**
 */
class DXGI_SWAP_CHAIN_DESC1 extends \System\ValueType
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
	 * @var \System\Int32
	 * @field
	 */
	public $Stereo;
	/**
	 * @var \Avalonia\Win32\DirectX\DXGI_SAMPLE_DESC
	 * @field
	 */
	public $SampleDesc;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $BufferUsage;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $BufferCount;
	/**
	 * @var \Avalonia\Win32\DirectX\DXGI_SCALING
	 * @field
	 */
	public $Scaling;
	/**
	 * @var \Avalonia\Win32\DirectX\DXGI_SWAP_EFFECT
	 * @field
	 */
	public $SwapEffect;
	/**
	 * @var \Avalonia\Win32\DirectX\DXGI_ALPHA_MODE
	 * @field
	 */
	public $AlphaMode;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $Flags;
}
