<?php
namespace Avalonia\Input;
/**
 */
class GotFocusEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @var \Avalonia\Input\NavigationMethod
	 * @property
	 */
	public $NavigationMethod;
	/**
	 * @var \Avalonia\Input\KeyModifiers
	 * @property
	 */
	public $KeyModifiers;
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
	 * @return \Avalonia\Input\NavigationMethod
	 */
	public  function get_NavigationMethod(){}
	/**
	 * @param \Avalonia\Input\NavigationMethod $value
	 * @return \System\Void|void
	 */
	public  function set_NavigationMethod($value){}
	/**
	 * @return \Avalonia\Input\KeyModifiers
	 */
	public  function get_KeyModifiers(){}
	/**
	 * @param \Avalonia\Input\KeyModifiers $value
	 * @return \System\Void|void
	 */
	public  function set_KeyModifiers($value){}
}
