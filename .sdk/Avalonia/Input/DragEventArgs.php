<?php
namespace Avalonia\Input;
class DragEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @property
	 * @var \Avalonia\Input\DragDropEffects
	 */
	public $DragEffects;
	/**
	 * @property
	 * @var \Avalonia\Input\IDataObject
	 * @since readonly
	 */
	public $Data;
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
	 * @param \Avalonia\Visual $relativeTo
	 * @return \Avalonia\Point
	 */
	public function GetPosition($relativeTo){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEvent_1 $routedEvent [generic: Avalonia\Input\DragEventArgs]
	 * @param \Avalonia\Input\IDataObject $data
	 * @param \Avalonia\Interactivity\Interactive $target
	 * @param \Avalonia\Point $targetLocation
	 * @param \Avalonia\Input\KeyModifiers $keyModifiers
	 */
	public function __construct($routedEvent, $data, $target, $targetLocation, $keyModifiers){}
}