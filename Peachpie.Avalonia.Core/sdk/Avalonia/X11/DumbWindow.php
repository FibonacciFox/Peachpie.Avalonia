<?php
namespace Avalonia\X11;
/**
 */
class DumbWindow extends \System\Object implements 
	\Avalonia\Controls\Platform\INativeControlHostDestroyableControlHandle,
	\Avalonia\Platform\IPlatformHandle
{
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Handle(){}
	/**
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Handle($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_HandleDescriptor(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Destroy(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
