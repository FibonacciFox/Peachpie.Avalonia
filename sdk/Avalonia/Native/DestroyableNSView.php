<?php
namespace Avalonia\Native;
/**
 */
class DestroyableNSView extends \System\Object implements 
	\Avalonia\Controls\Platform\INativeControlHostDestroyableControlHandle,
	\Avalonia\Platform\IPlatformHandle
{
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $Handle;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $HandleDescriptor;
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Handle(){}
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
