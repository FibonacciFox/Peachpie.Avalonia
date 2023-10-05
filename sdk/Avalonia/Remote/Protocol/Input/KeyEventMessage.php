<?php
namespace Avalonia\Remote\Protocol\Input;
/**
 */
class KeyEventMessage extends \Avalonia\Remote\Protocol\Input\InputEventMessageBase
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsDown;
	/**
	 * @var \Avalonia\Remote\Protocol\Input\Key
	 * @property
	 */
	public $Key;
	/**
	 * @var \Avalonia\Remote\Protocol\Input\InputModifiers[]
	 * @property
	 */
	public $Modifiers;
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsDown(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsDown($value){}
	/**
	 * @return \Avalonia\Remote\Protocol\Input\Key
	 */
	public  function get_Key(){}
	/**
	 * @param \Avalonia\Remote\Protocol\Input\Key $value
	 * @return \System\Void|void
	 */
	public  function set_Key($value){}
}
