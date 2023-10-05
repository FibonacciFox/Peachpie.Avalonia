<?php
namespace Avalonia\Input\TextInput;
/**
 */
class TextInputMethodClientRequestedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @var \Avalonia\Input\TextInput\TextInputMethodClient
	 * @property
	 */
	public $Client;
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
	 * @return \Avalonia\Input\TextInput\TextInputMethodClient
	 */
	public  function get_Client(){}
	/**
	 * @param \Avalonia\Input\TextInput\TextInputMethodClient $value
	 * @return \System\Void|void
	 */
	public  function set_Client($value){}
}
