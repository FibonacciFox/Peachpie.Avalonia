<?php
namespace Avalonia\Win32\DirectX;
/**
 */
class DXGI_SWAP_CHAIN_DESC extends \System\ValueType
{
	/**
	 * @var \Avalonia\Win32\DirectX\DXGI_MODE_DESC
	 * @field
	 */
	public $BufferDesc;
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
	 * @var \System\UInt16
	 * @field
	 */
	public $BufferCount;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $OutputWindow;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Windowed;
	/**
	 * @var \Avalonia\Win32\DirectX\DXGI_SWAP_EFFECT
	 * @field
	 */
	public $SwapEffect;
	/**
	 * @var \System\UInt16
	 * @field
	 */
	public $Flags;
}
