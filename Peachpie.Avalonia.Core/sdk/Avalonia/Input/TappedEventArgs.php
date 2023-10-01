<?php
namespace Avalonia\Input;
/**
 */
class TappedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @return \Avalonia\Input\IPointer
	 */
	public  function get_Pointer(){}
	/**
	 * @return \Avalonia\Input\KeyModifiers
	 */
	public  function get_KeyModifiers(){}
	/**
	 * @return \System\UInt64
	 */
	public  function get_Timestamp(){}
	/**
	 * @param \Avalonia\Visual $relativeTo
	 * @return \Avalonia\Point
	 */
	public  function GetPosition($relativeTo){}
}
