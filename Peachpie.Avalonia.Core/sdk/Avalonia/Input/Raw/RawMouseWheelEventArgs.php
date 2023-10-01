<?php
namespace Avalonia\Input\Raw;
/**
 */
class RawMouseWheelEventArgs extends \Avalonia\Input\Raw\RawPointerEventArgs
{
	/**
	 * @return \Avalonia\Vector
	 */
	public  function get_Delta(){}
	/**
	 * @param \Avalonia\Vector $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Delta($value){}
}
