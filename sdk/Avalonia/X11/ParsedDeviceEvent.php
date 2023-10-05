<?php
namespace Avalonia\X11;
/**
 */
class ParsedDeviceEvent extends \System\Object
{
	/**
	 * @var \Avalonia\X11\XiEventType
	 * @property
	 */
	public readonly $Type;
	/**
	 * @var \Avalonia\Input\RawInputModifiers
	 * @property
	 */
	public readonly $Modifiers;
	/**
	 * @var \System\UInt64
	 * @property
	 */
	public readonly $Timestamp;
	/**
	 * @var \Avalonia\Point
	 * @property
	 */
	public readonly $Position;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Button;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Detail;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Emulated;
	/**
	 * @var \System\Collections\Generic\Dictionary_2[System\Int32,System\Double]
	 * @property
	 */
	public readonly $Valuators;
	/**
	 * @return \Avalonia\X11\XiEventType
	 */
	public  function get_Type(){}
	/**
	 * @return \Avalonia\Input\RawInputModifiers
	 */
	public  function get_Modifiers(){}
	/**
	 * @return \System\UInt64
	 */
	public  function get_Timestamp(){}
	/**
	 * @return \Avalonia\Point
	 */
	public  function get_Position(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Button(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Button($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Detail(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Detail($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Emulated(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Emulated($value){}
	/**
	 * @return \System\Collections\Generic\Dictionary_2
	 */
	public  function get_Valuators(){}
	/**
	 * @param \System\Int32|int $len
	 * @param \System\Byte* $buttons
	 * @return \Avalonia\Input\RawInputModifiers
	 */
	public static function ParseButtonState($len, $buttons){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
