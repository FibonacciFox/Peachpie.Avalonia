<?php
namespace Avalonia\X11;
/**
 */
class XKeyBoardState extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $key_click_percent;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $bell_percent;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $bell_pitch;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $bell_duration;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $led_mask;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $global_auto_repeat;
	/**
	 * @var \Avalonia\X11\XKeyBoardState+AutoRepeats
	 * @field
	 */
	public $auto_repeats;
}
