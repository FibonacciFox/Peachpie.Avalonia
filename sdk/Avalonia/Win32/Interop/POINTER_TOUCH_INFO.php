<?php
namespace Avalonia\Win32\Interop;
/**
 */
class POINTER_TOUCH_INFO extends \System\ValueType
{
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+POINTER_INFO
	 * @field
	 */
	public $pointerInfo;
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+TouchFlags
	 * @field
	 */
	public $touchFlags;
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+TouchMask
	 * @field
	 */
	public $touchMask;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $rcContactLeft;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $rcContactTop;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $rcContactRight;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $rcContactBottom;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $rcContactRawLeft;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $rcContactRawTop;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $rcContactRawRight;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $rcContactRawBottom;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $orientation;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $pressure;
}
