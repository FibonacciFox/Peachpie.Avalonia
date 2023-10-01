<?php
namespace Avalonia\Controls\Primitives;
/**
 */
class ScrollEventArgs extends \System\EventArgs
{
	/**
	 * @return \System\Double|double
	 */
	public  function get_NewValue(){}
	/**
	 * @param \System\Double|double $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_NewValue($value){}
	/**
	 * @return \Avalonia\Controls\Primitives\ScrollEventType
	 */
	public  function get_ScrollEventType(){}
	/**
	 * @param \Avalonia\Controls\Primitives\ScrollEventType $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_ScrollEventType($value){}
}
