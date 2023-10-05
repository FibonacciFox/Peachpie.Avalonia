<?php
namespace Avalonia\Input;
/**
 */
class PointerReleasedEventArgs extends \Avalonia\Input\PointerEventArgs
{
	/**
	 * @var \Avalonia\Input\MouseButton
	 * @property
	 */
	public readonly $InitialPressMouseButton;
	/**
	 * @var \Avalonia\Input\IPointer
	 * @property
	 */
	public readonly $Pointer;
	/**
	 * @var \System\UInt64
	 * @property
	 */
	public readonly $Timestamp;
	/**
	 * @var \Avalonia\Input\KeyModifiers
	 * @property
	 */
	public readonly $KeyModifiers;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Handled;
	/**
	 * @var \Avalonia\Interactivity\RoutedEvent
	 * @property
	 */
	public $RoutedEvent;
	/**
	 * @var \Avalonia\Interactivity\RoutingStrategies
	 * @property
	 */
	public $Route;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Source;
	/**
	 * @return \Avalonia\Input\MouseButton
	 */
	public  function get_InitialPressMouseButton(){}
	/**
	 * @param \Avalonia\Visual $relativeTo
	 * @return \Avalonia\Point
	 */
	public  function GetPosition($relativeTo){}
}
