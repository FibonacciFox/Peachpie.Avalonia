<?php
namespace Avalonia\Input\Raw;
/**
 */
class RawInputEventArgs extends \System\EventArgs
{
	/**
	 * @return \Avalonia\Input\IInputDevice
	 */
	public  function get_Device(){}
	/**
	 * @return \Avalonia\Input\IInputRoot
	 */
	public  function get_Root(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Handled(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Handled($value){}
	/**
	 * @return \System\UInt64
	 */
	public  function get_Timestamp(){}
	/**
	 * @param \System\UInt64 $value
	 * @return \System\Void|void
	 */
	public  function set_Timestamp($value){}
}
