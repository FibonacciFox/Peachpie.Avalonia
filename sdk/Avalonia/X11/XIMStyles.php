<?php
namespace Avalonia\X11;
/**
 */
class XIMStyles extends \System\ValueType
{
	/**
	 * @var \System\UInt16
	 * @field
	 */
	public $count_styles;
	/**
	 * @var \System\IntPtr*
	 * @field
	 */
	public $supported_styles;
}
