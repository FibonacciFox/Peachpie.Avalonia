<?php
namespace Avalonia\Win32\Interop;
/**
 */
class TOUCHINPUT extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $X;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Y;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $Source;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $Id;
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+TouchInputFlags
	 * @field
	 */
	public $Flags;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Mask;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $Time;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $ExtraInfo;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $CxContact;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $CyContact;
}
