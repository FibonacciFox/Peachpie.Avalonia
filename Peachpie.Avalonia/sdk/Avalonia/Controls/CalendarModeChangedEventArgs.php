<?php
namespace Avalonia\Controls;
/**
 */
class CalendarModeChangedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @return \Avalonia\Controls\CalendarMode
	 */
	public  function get_OldMode(){}
	/**
	 * @param \Avalonia\Controls\CalendarMode $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_OldMode($value){}
	/**
	 * @return \Avalonia\Controls\CalendarMode
	 */
	public  function get_NewMode(){}
	/**
	 * @param \Avalonia\Controls\CalendarMode $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_NewMode($value){}
}
