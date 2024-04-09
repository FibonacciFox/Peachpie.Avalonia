<?php
namespace Avalonia\Input\Raw;
class RawTextInputEventArgs extends \Avalonia\Input\Raw\RawInputEventArgs
{
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Text;
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
	 * @param \Avalonia\Input\IKeyboardDevice $device
	 * @param \System\UInt64 $timestamp
	 * @param \Avalonia\Input\IInputRoot $root
	 * @param \System\String|string $text
	 */
	public function __construct($device, $timestamp, $root, $text){}
}