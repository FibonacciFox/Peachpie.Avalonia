<?php
namespace Avalonia\Input\Raw;
/**
 */
class RawInputEventArgs extends \System\EventArgs
{
	/**
	 * @var \Avalonia\Input\IInputDevice
	 * @property
	 */
	public readonly $Device;
	/**
	 * @var \Avalonia\Input\IInputRoot
	 * @property
	 */
	public readonly $Root;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Handled;
	/**
	 * @var \System\UInt64
	 * @property
	 */
	public $Timestamp;
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
