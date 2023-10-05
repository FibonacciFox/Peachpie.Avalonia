<?php
namespace Avalonia\Win32\Interop;
/**
 */
class STGMEDIUM extends \System\ValueType
{
	/**
	 * @var \System\Runtime\InteropServices\ComTypes\TYMED
	 * @field
	 */
	public $tymed;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $unionmember;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $pUnkForRelease;
}
