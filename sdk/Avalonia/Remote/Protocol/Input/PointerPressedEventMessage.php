<?php
namespace Avalonia\Remote\Protocol\Input;
/**
 */
class PointerPressedEventMessage extends \Avalonia\Remote\Protocol\Input\PointerEventMessageBase
{
	/**
	 * @var \Avalonia\Remote\Protocol\Input\MouseButton
	 * @property
	 */
	public $Button;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $X;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Y;
	/**
	 * @var \Avalonia\Remote\Protocol\Input\InputModifiers[]
	 * @property
	 */
	public $Modifiers;
	/**
	 * @return \Avalonia\Remote\Protocol\Input\MouseButton
	 */
	public  function get_Button(){}
	/**
	 * @param \Avalonia\Remote\Protocol\Input\MouseButton $value
	 * @return \System\Void|void
	 */
	public  function set_Button($value){}
}
