<?php
namespace Avalonia\Win32;
/**
 */
class SavedWindowInfo extends \System\ValueType
{
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+WindowStyles
	 * @property
	 */
	public $Style;
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+WindowStyles
	 * @property
	 */
	public $ExStyle;
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+RECT
	 * @property
	 */
	public $WindowRect;
	/**
	 * @return \Avalonia\Win32\Interop\WindowStyles
	 */
	public  function get_Style(){}
	/**
	 * @param \Avalonia\Win32\Interop\WindowStyles $value
	 * @return \System\Void|void
	 */
	public  function set_Style($value){}
	/**
	 * @return \Avalonia\Win32\Interop\WindowStyles
	 */
	public  function get_ExStyle(){}
	/**
	 * @param \Avalonia\Win32\Interop\WindowStyles $value
	 * @return \System\Void|void
	 */
	public  function set_ExStyle($value){}
	/**
	 * @return \Avalonia\Win32\Interop\RECT
	 */
	public  function get_WindowRect(){}
	/**
	 * @param \Avalonia\Win32\Interop\RECT $value
	 * @return \System\Void|void
	 */
	public  function set_WindowRect($value){}
}
