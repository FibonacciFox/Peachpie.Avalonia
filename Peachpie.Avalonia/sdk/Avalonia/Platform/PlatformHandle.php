<?php
namespace Avalonia\Platform;
/**
 */
class PlatformHandle extends \System\Object implements 
	\Avalonia\Platform\IPlatformHandle
{
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Handle(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_HandleDescriptor(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
