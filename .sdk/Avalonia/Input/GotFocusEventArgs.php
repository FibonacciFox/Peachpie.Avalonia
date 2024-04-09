<?php
namespace Avalonia\Input;
class GotFocusEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @property
	 * @var \Avalonia\Input\NavigationMethod
	 */
	public $NavigationMethod;
	/**
	 * @property
	 * @var \Avalonia\Input\KeyModifiers
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
	 */
	public function __construct(){}
}