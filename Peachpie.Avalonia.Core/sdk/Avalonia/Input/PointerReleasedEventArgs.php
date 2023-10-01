<?php
namespace Avalonia\Input;
/**
 */
class PointerReleasedEventArgs extends \Avalonia\Input\PointerEventArgs
{
	/**
	 * @return \Avalonia\Input\MouseButton
	 */
	public  function get_InitialPressMouseButton(){}
	/**
	 * @param \Avalonia\Visual $relativeTo
	 * @return \Avalonia\Point
	 */
	public  function GetPosition($relativeTo){}
}
