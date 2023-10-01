<?php
namespace Avalonia\Native;
/**
 */
class AvaloniaNativeCursor extends \System\Object implements 
	\Avalonia\Platform\ICursorImpl,
	\System\IDisposable
{
	/**
	 * @return \Avalonia\Native\Interop\IAvnCursor
	 */
	public  function get_Cursor(){}
	/**
	 * @param \Avalonia\Native\Interop\IAvnCursor $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Cursor($value){}
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
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
