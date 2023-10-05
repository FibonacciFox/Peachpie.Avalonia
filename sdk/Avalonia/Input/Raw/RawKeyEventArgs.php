<?php
namespace Avalonia\Input\Raw;
/**
 */
class RawKeyEventArgs extends \Avalonia\Input\Raw\RawInputEventArgs
{
	/**
	 * @var \Avalonia\Input\Key
	 * @property
	 */
	public $Key;
	/**
	 * @var \Avalonia\Input\RawInputModifiers
	 * @property
	 */
	public $Modifiers;
	/**
	 * @var \Avalonia\Input\Raw\RawKeyEventType
	 * @property
	 */
	public $Type;
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
	 * @return \Avalonia\Input\Key
	 */
	public  function get_Key(){}
	/**
	 * @param \Avalonia\Input\Key $value
	 * @return \System\Void|void
	 */
	public  function set_Key($value){}
	/**
	 * @return \Avalonia\Input\RawInputModifiers
	 */
	public  function get_Modifiers(){}
	/**
	 * @param \Avalonia\Input\RawInputModifiers $value
	 * @return \System\Void|void
	 */
	public  function set_Modifiers($value){}
	/**
	 * @return \Avalonia\Input\Raw\RawKeyEventType
	 */
	public  function get_Type(){}
	/**
	 * @param \Avalonia\Input\Raw\RawKeyEventType $value
	 * @return \System\Void|void
	 */
	public  function set_Type($value){}
}
