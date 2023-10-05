<?php
namespace Avalonia\Win32\Interop;
/**
 */
class ICONINFO extends \System\ValueType
{
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $IsIcon;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $xHotspot;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $yHotspot;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $MaskBitmap;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $ColorBitmap;
}
