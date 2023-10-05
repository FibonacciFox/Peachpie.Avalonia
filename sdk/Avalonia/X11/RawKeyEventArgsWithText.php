<?php
namespace Avalonia\X11;
/**
 */
class RawKeyEventArgsWithText extends \Avalonia\Input\Raw\RawKeyEventArgs
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Text;
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
	 * @return \System\String|string
	 */
	public  function get_Text(){}
}
