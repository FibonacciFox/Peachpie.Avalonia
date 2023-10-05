<?php
namespace Avalonia\Win32\Interop;
/**
 */
class POINTER_INFO extends \System\ValueType
{
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+PointerInputType
	 * @field
	 */
	public $pointerType;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $pointerId;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $frameId;
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+PointerFlags
	 * @field
	 */
	public $pointerFlags;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $sourceDevice;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $hwndTarget;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $ptPixelLocationX;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $ptPixelLocationY;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $ptHimetricLocationX;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $ptHimetricLocationY;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $ptPixelLocationRawX;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $ptPixelLocationRawY;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $ptHimetricLocationRawX;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $ptHimetricLocationRawY;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $dwTime;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $historyCount;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $inputData;
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+ModifierKeys
	 * @field
	 */
	public $dwKeyStates;
	/**
	 * @var \System\UInt64
	 * @field
	 */
	public $PerformanceCount;
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+PointerButtonChangeType
	 * @field
	 */
	public $ButtonChangeType;
}
