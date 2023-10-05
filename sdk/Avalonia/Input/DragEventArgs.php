<?php
namespace Avalonia\Input;
/**
 */
class DragEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @var \Avalonia\Input\DragDropEffects
	 * @property
	 */
	public $DragEffects;
	/**
	 * @var \Avalonia\Input\IDataObject
	 * @property
	 */
	public readonly $Data;
	/**
	 * @var \Avalonia\Input\KeyModifiers
	 * @property
	 */
	public readonly $KeyModifiers;
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
	 * @return \Avalonia\Input\DragDropEffects
	 */
	public  function get_DragEffects(){}
	/**
	 * @param \Avalonia\Input\DragDropEffects $value
	 * @return \System\Void|void
	 */
	public  function set_DragEffects($value){}
	/**
	 * @return \Avalonia\Input\IDataObject
	 */
	public  function get_Data(){}
	/**
	 * @return \Avalonia\Input\KeyModifiers
	 */
	public  function get_KeyModifiers(){}
	/**
	 * @param \Avalonia\Visual $relativeTo
	 * @return \Avalonia\Point
	 */
	public  function GetPosition($relativeTo){}
}
