<?php
namespace Avalonia\Controls;
/**
 */
class SizeChangedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @return \System\Boolean
	 */
	public  function get_HeightChanged(){}
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_NewSize(){}
	/**
	 * @param \Avalonia\Size $value
	 * @return \System\Void|void
	 */
	public  function set_NewSize($value){}
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_PreviousSize(){}
	/**
	 * @param \Avalonia\Size $value
	 * @return \System\Void|void
	 */
	public  function set_PreviousSize($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_WidthChanged(){}
}
