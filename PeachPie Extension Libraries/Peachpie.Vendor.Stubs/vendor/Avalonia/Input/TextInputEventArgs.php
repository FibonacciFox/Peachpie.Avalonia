<?php
namespace Avalonia\Input;
class TextInputEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Text;
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