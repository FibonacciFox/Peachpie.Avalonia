<?php
namespace Avalonia\Win32\Interop;
/**
 */
class NOTIFYICONDATA extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $cbSize;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $hWnd;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $uID;
	/**
	 * @var \Avalonia\Win32\Interop\NIF
	 * @field
	 */
	public $uFlags;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $uCallbackMessage;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $hIcon;
	/**
	 * @var \System\String
	 * @field
	 */
	public $szTip;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $dwState;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $dwStateMask;
	/**
	 * @var \System\String
	 * @field
	 */
	public $szInfo;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $uTimeoutOrVersion;
	/**
	 * @var \System\String
	 * @field
	 */
	public $szInfoTitle;
	/**
	 * @var \Avalonia\Win32\Interop\NIIF
	 * @field
	 */
	public $dwInfoFlags;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
