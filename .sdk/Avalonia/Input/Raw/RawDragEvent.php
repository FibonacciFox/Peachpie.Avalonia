<?php
namespace Avalonia\Input\Raw;
class RawDragEvent extends \Avalonia\Input\Raw\RawInputEventArgs
{
	/**
	 * @property
	 * @var \Avalonia\Point
	 */
	public $Location;
	/**
	 * @property
	 * @var \Avalonia\Input\IDataObject
	 * @since readonly
	 */
	public $Data;
	/**
	 * @property
	 * @var \Avalonia\Input\DragDropEffects
	 */
	public $Effects;
	/**
	 * @property
	 * @var \Avalonia\Input\Raw\RawDragEventType
	 * @since readonly
	 */
	public $Type;
	/**
	 * @property
	 * @var \Avalonia\Input\KeyModifiers
	 * @since readonly
	 */
	public $KeyModifiers;
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
	 * @param \Avalonia\Input\Raw\IDragDropDevice $inputDevice
	 * @param \Avalonia\Input\Raw\RawDragEventType $type
	 * @param \Avalonia\Input\IInputRoot $root
	 * @param \Avalonia\Point $location
	 * @param \Avalonia\Input\IDataObject $data
	 * @param \Avalonia\Input\DragDropEffects $effects
	 * @param \Avalonia\Input\RawInputModifiers $modifiers
	 */
	public function __construct($inputDevice, $type, $root, $location, $data, $effects, $modifiers){}
}