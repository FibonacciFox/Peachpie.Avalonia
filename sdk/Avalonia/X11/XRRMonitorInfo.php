<?php
namespace Avalonia\X11;
/**
 */
class XRRMonitorInfo extends \System\ValueType
{
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $Name;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Primary;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Automatic;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $NOutput;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $X;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Y;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Width;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Height;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $MWidth;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $MHeight;
	/**
	 * @var \System\IntPtr*
	 * @field
	 */
	public $Outputs;
}
