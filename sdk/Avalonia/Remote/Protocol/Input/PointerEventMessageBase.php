<?php
namespace Avalonia\Remote\Protocol\Input;
/**
 */
class PointerEventMessageBase extends \Avalonia\Remote\Protocol\Input\InputEventMessageBase
{
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
	 * @return \System\Double|double
	 */
	public  function get_X(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_X($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Y(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Y($value){}
}
