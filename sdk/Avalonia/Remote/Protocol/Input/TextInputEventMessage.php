<?php
namespace Avalonia\Remote\Protocol\Input;
/**
 */
class TextInputEventMessage extends \Avalonia\Remote\Protocol\Input\InputEventMessageBase
{
	/**
	 * @var \System\String
	 * @property
	 */
	public $Text;
	/**
	 * @var \Avalonia\Remote\Protocol\Input\InputModifiers[]
	 * @property
	 */
	public $Modifiers;
	/**
	 * @return \System\String|string
	 */
	public  function get_Text(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Text($value){}
}
