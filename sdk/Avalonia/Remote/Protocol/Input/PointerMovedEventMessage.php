<?php
namespace Avalonia\Remote\Protocol\Input;
/**
 */
class PointerMovedEventMessage extends \Avalonia\Remote\Protocol\Input\PointerEventMessageBase
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
}
