<?php
namespace Avalonia\X11;
/**
 */
class XWindowChanges extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $x;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $y;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $width;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $height;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $border_width;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $sibling;
	/**
	 * @var \Avalonia\X11\StackMode
	 * @field
	 */
	protected $stack_mode;
}
