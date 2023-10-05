<?php
namespace Avalonia\Win32\DirectX;
/**
 */
class DXGI_OUTPUT_DESC extends \System\ValueType
{
	/**
	 * @var \Avalonia\Win32\DirectX\DXGI_OUTPUT_DESC+<DeviceName>e__FixedBuffer
	 * @field
	 */
	protected $DeviceName;
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+RECT
	 * @field
	 */
	protected $DesktopCoordinates;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $AttachedToDesktop;
	/**
	 * @var \Avalonia\Win32\DirectX\DXGI_MODE_ROTATION
	 * @field
	 */
	protected $Rotation;
	/**
	 * @var \Avalonia\Win32\DirectX\HANDLE
	 * @field
	 */
	protected $Monitor;
}
