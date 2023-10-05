<?php
namespace Avalonia\Win32;
/**
 */
class CursorImpl extends \System\Object implements 
	\Avalonia\Platform\ICursorImpl,
	\System\IDisposable,
	\Avalonia\Platform\IPlatformHandle
{
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public $Handle;
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
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
