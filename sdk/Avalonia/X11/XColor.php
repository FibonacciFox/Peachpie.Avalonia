<?php
namespace Avalonia\X11;
/**
 */
class XColor extends \System\ValueType
{
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $pixel;
	/**
	 * @var \System\UInt16
	 * @field
	 */
	protected $red;
	/**
	 * @var \System\UInt16
	 * @field
	 */
	protected $green;
	/**
	 * @var \System\UInt16
	 * @field
	 */
	protected $blue;
	/**
	 * @var \System\Byte
	 * @field
	 */
	protected $flags;
	/**
	 * @var \System\Byte
	 * @field
	 */
	protected $pad;
}
