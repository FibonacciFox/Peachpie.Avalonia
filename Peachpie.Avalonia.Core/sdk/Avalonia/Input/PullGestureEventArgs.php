<?php
namespace Avalonia\Input;
/**
 */
class PullGestureEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
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
	 * @return \Avalonia\Input\PullDirection
	 */
	public  function get_PullDirection(){}
	/**
	 * @return \System\Int32|int
	 */
	protected static function GetNextFreeId(){}
}
