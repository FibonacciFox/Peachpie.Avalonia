<?php
namespace Avalonia\X11;
/**
 */
class XIEventMask extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Deviceid;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $MaskLen;
	/**
	 * @var \System\Int32*
	 * @field
	 */
	public $Mask;
}
