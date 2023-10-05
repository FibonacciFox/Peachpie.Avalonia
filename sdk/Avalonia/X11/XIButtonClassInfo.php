<?php
namespace Avalonia\X11;
/**
 */
class XIButtonClassInfo extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Type;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Sourceid;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $NumButtons;
	/**
	 * @var \System\IntPtr*
	 * @field
	 */
	public $Labels;
	/**
	 * @var \Avalonia\X11\XIButtonState
	 * @field
	 */
	public $State;
}
