<?php
namespace Avalonia\Input;
class TappedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @property
	 * @var \Avalonia\Input\IPointer
	 * @since readonly
	 */
	public $Pointer;
	/**
	 * @property
	 * @var \Avalonia\Input\KeyModifiers
	 * @since readonly
	 */
	public $KeyModifiers;
	/**
	 * @property
	 * @var \System\UInt64
	 * @since readonly
	 */
	public $Timestamp;
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
	 * @param \Avalonia\Visual $relativeTo
	 * @return \Avalonia\Point
	 */
	public function GetPosition($relativeTo){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEvent $routedEvent
	 * @param \Avalonia\Input\PointerEventArgs $lastPointerEventArgs
	 */
	public function __construct($routedEvent, $lastPointerEventArgs){}
}