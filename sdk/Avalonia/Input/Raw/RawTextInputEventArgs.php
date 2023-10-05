<?php
namespace Avalonia\Input\Raw;
/**
 */
class RawTextInputEventArgs extends \Avalonia\Input\Raw\RawInputEventArgs
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Text;
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
	 * @return \System\String|string
	 */
	public  function get_Text(){}
}
