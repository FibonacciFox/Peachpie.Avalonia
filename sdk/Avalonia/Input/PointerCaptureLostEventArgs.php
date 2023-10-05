<?php
namespace Avalonia\Input;
/**
 */
class PointerCaptureLostEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @var \Avalonia\Input\IPointer
	 * @property
	 */
	public readonly $Pointer;
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
	 * @return \Avalonia\Input\IPointer
	 */
	public  function get_Pointer(){}
}
