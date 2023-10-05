<?php
namespace Avalonia\Remote\Protocol\Input;
/**
 */
class ScrollEventMessage extends \Avalonia\Remote\Protocol\Input\PointerEventMessageBase
{
	/**
	 * @var \System\Double
	 * @property
	 */
	public $DeltaX;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $DeltaY;
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
	public  function get_DeltaX(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_DeltaX($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_DeltaY(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_DeltaY($value){}
}
