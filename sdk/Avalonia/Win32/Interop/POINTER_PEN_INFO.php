<?php
namespace Avalonia\Win32\Interop;
/**
 */
class POINTER_PEN_INFO extends \System\ValueType
{
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+POINTER_INFO
	 * @field
	 */
	public $pointerInfo;
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+PenFlags
	 * @field
	 */
	public $penFlags;
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+PenMask
	 * @field
	 */
	public $penMask;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $pressure;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $rotation;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $tiltX;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $tiltY;
}
