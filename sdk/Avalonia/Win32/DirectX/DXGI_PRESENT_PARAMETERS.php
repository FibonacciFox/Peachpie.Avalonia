<?php
namespace Avalonia\Win32\DirectX;
/**
 */
class DXGI_PRESENT_PARAMETERS extends \System\ValueType
{
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $DirtyRectsCount;
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+RECT*
	 * @field
	 */
	public $pDirtyRects;
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+RECT*
	 * @field
	 */
	public $pScrollRect;
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+POINT*
	 * @field
	 */
	public $pScrollOffset;
}
