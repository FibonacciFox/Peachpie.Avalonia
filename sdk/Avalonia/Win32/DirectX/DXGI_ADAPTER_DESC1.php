<?php
namespace Avalonia\Win32\DirectX;
/**
 */
class DXGI_ADAPTER_DESC1 extends \System\ValueType
{
	/**
	 * @var \Avalonia\Win32\DirectX\DXGI_ADAPTER_DESC1+<Description>e__FixedBuffer
	 * @field
	 */
	public $Description;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $VendorId;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $DeviceId;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $SubSysId;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $Revision;
	/**
	 * @var \System\UIntPtr
	 * @field
	 */
	public $DedicatedVideoMemory;
	/**
	 * @var \System\UIntPtr
	 * @field
	 */
	public $DedicatedSystemMemory;
	/**
	 * @var \System\UIntPtr
	 * @field
	 */
	public $SharedSystemMemory;
	/**
	 * @var \System\UInt64
	 * @field
	 */
	public $AdapterLuid;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $Flags;
}
