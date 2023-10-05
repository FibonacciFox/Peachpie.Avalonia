<?php
namespace Avalonia\Win32\Interop;
/**
 */
class TRACKMOUSEEVENT extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $cbSize;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $dwFlags;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $hwndTrack;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $dwHoverTime;
}
