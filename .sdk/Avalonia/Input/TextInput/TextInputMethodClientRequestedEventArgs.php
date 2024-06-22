<?php
namespace Avalonia\Input\TextInput;
class TextInputMethodClientRequestedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{

	/**
	 * @property
	 * @var \Avalonia\Input\TextInput\TextInputMethodClient
	 */
	public $Client;
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