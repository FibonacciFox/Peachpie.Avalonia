<?php
namespace Avalonia\Input;
class KeyEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @property
	 * @var \Avalonia\Input\Key
	 */
	public $Key;
	/**
	 * @property
	 * @var \Avalonia\Input\KeyModifiers
	 */
	public $KeyModifiers;
	/**
	 * @property
	 * @var \Avalonia\Input\PhysicalKey
	 */
	public $PhysicalKey;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $KeySymbol;
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