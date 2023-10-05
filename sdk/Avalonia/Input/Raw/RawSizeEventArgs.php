<?php
namespace Avalonia\Input\Raw;
/**
 */
class RawSizeEventArgs extends \System\EventArgs
{
	/**
	 * @var \Avalonia\Size
	 * @property
	 */
	public $Size;
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_Size(){}
	/**
	 * @param \Avalonia\Size $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Size($value){}
}
