<?php
namespace Avalonia\Input\Raw;
class RawInputEventArgs extends \System\EventArgs
{

	/**
	 * @property
	 * @var \Avalonia\Input\IInputDevice
	 * @since readonly
	 */
	public $Device;
	/**
	 * @property
	 * @var \Avalonia\Input\IInputRoot
	 * @since readonly
	 */
	public $Root;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Handled;
	/**
	 * @property
	 * @var \System\UInt64
	 */
	public $Timestamp;
	/**
	 * @param \Avalonia\Input\IInputDevice $device
	 * @param \System\UInt64 $timestamp
	 * @param \Avalonia\Input\IInputRoot $root
	 */
	public function __construct($device, $timestamp, $root){}
}