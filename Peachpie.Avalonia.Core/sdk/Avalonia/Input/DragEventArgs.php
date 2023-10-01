<?php
namespace Avalonia\Input;
/**
 */
class DragEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
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
