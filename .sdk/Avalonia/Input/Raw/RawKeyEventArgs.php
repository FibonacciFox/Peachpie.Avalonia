<?php
namespace Avalonia\Input\Raw;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TextSelectionOverride {
	/**
	 * @param \Avalonia\Input\IKeyboardDevice $device
	 * @param \System\UInt64 $timestamp
	 * @param \Avalonia\Input\IInputRoot $root
	 * @param \Avalonia\Input\Raw\RawKeyEventType $type
	 * @param \Avalonia\Input\Key $key
	 * @param \Avalonia\Input\RawInputModifiers $modifiers
	 */
	#[MethodOverride]public function __construct_1 ($device, $timestamp, $root, $type, $key, $modifiers){}
	/**
	 * @param \Avalonia\Input\IInputDevice $device
	 * @param \System\UInt64 $timestamp
	 * @param \Avalonia\Input\IInputRoot $root
	 * @param \Avalonia\Input\Raw\RawKeyEventType $type
	 * @param \Avalonia\Input\Key $key
	 * @param \Avalonia\Input\RawInputModifiers $modifiers
	 * @param \Avalonia\Input\PhysicalKey $physicalKey
	 * @param \System\String|string $keySymbol
	 */
	#[MethodOverride]public function __construct_2 ($device, $timestamp, $root, $type, $key, $modifiers, $physicalKey, $keySymbol){}
}
class RawKeyEventArgs extends \Avalonia\Input\Raw\RawInputEventArgs
{
	use TextSelectionOverride;
	/**
	 * @property
	 * @var \Avalonia\Input\Key
	 */
	public $Key;
	/**
	 * @property
	 * @var \Avalonia\Input\RawInputModifiers
	 */
	public $Modifiers;
	/**
	 * @property
	 * @var \Avalonia\Input\Raw\RawKeyEventType
	 */
	public $Type;
	/**
	 * @property
	 * @var \Avalonia\Input\PhysicalKey
	 */
	public $PhysicalKey;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $KeySymbol;
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
	 * @uses RawKeyEventArgsOverride::__construct_1 <br>public , args: ($device, $timestamp, $root, $type, $key, $modifiers)<br>
	 * @uses RawKeyEventArgsOverride::__construct_2 <br>public , args: ($device, $timestamp, $root, $type, $key, $modifiers, $physicalKey, $keySymbol)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}