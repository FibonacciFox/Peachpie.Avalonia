<?php
namespace Avalonia\Input;
/**
 */
class KeyEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @var \Avalonia\Input\Key
	 * @property
	 */
	public $Key;
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
	 * @return \Avalonia\Input\Key
	 */
	public  function get_Key(){}
	/**
	 * @param \Avalonia\Input\Key $value
	 * @return \System\Void|void
	 */
	public  function set_Key($value){}
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
