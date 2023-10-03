<?php
namespace Avalonia\X11;
/**
 */
class CursorImpl extends \System\Object implements 
	\Avalonia\Platform\ICursorImpl,
	\System\IDisposable
{
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Handle(){}
	/**
	 * @param \System\IntPtr $value
	 * @return \System\Void|void
	 */
	protected  function set_Handle($value){}
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
