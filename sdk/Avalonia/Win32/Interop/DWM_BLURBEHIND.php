<?php
namespace Avalonia\Win32\Interop;
/**
 */
class DWM_BLURBEHIND extends \System\ValueType
{
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+DWM_BB
	 * @field
	 */
	public $dwFlags;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $fEnable;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $hRgnBlur;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $fTransitionOnMaximized;
}
