<?php
namespace Avalonia\Native\Interop;
/**
 */
class AvnScreen extends \System\ValueType
{
	/**
	 * @var \Avalonia\Native\Interop\AvnRect
	 * @field
	 */
	public $Bounds;
	/**
	 * @var \Avalonia\Native\Interop\AvnRect
	 * @field
	 */
	public $WorkingArea;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $Scaling;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $IsPrimary;
}
