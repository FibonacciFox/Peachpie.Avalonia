<?php
namespace Avalonia\Input;
class PointerCaptureLostEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @property
	 * @var \Avalonia\Input\IPointer
	 * @since readonly
	 */
	public $Pointer;
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
	 */
	public function __construct($source, $pointer){}
}