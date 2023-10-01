<?php
namespace Avalonia\Input;
/**
 */
class ScrollGestureEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Id(){}
	/**
	 * @return \Avalonia\Vector
	 */
	public  function get_Delta(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ShouldEndScrollGesture(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_ShouldEndScrollGesture($value){}
	/**
	 * @return \System\Int32|int
	 */
	public static function GetNextFreeId(){}
}
