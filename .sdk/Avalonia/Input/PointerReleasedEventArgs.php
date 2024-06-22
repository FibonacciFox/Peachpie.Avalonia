<?php
namespace Avalonia\Input;
class PointerReleasedEventArgs extends \Avalonia\Input\PointerEventArgs
{

	/**
	 * @property
	 * @var \Avalonia\Input\MouseButton
	 * @since readonly
	 */
	public $InitialPressMouseButton;
	/**
	 * @property
	 * @var \Avalonia\Input\IPointer
	 * @since readonly
	 */
	public $Pointer;
	/**
	 * @property
	 * @var \System\UInt64
	 * @since readonly
	 */
	public $Timestamp;
	/**
	 * @property
	 * @var \Avalonia\Input\KeyModifiers
	 * @since readonly
	 */
	public $KeyModifiers;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Handled;
	/**
	 * @property
	 * @var \Avalonia\Interactivity\RoutedEvent
	 */
	public $RoutedEvent;
	/**
	 * @property
	 * @var \Avalonia\Interactivity\RoutingStrategies
	 */
	public $Route;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Source;
	/**
	 * @param \System\Object|object $source
	 * @param \Avalonia\Input\IPointer $pointer
	 * @param \Avalonia\Visual $rootVisual
	 * @param \Avalonia\Point $rootVisualPosition
	 * @param \System\UInt64 $timestamp
	 * @param \Avalonia\Input\PointerPointProperties $properties
	 * @param \Avalonia\Input\KeyModifiers $modifiers
	 * @param \Avalonia\Input\MouseButton $initialPressMouseButton
	 */
	public function __construct($source, $pointer, $rootVisual, $rootVisualPosition, $timestamp, $properties, $modifiers, $initialPressMouseButton){}
}