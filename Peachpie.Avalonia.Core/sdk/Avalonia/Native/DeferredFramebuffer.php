<?php
namespace Avalonia\Native;
/**
 */
class DeferredFramebuffer extends \System\Object implements 
	\Avalonia\Platform\ILockedFramebuffer,
	\System\IDisposable
{
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Address(){}
	/**
	 * @param \System\IntPtr $value
	 * @return \System\Void|void
	 */
	public  function set_Address($value){}
	/**
	 * @return \Avalonia\PixelSize
	 */
	public  function get_Size(){}
	/**
	 * @param \Avalonia\PixelSize $value
	 * @return \System\Void|void
	 */
	public  function set_Size($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Height(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Height($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_RowBytes(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_RowBytes($value){}
	/**
	 * @return \Avalonia\Vector
	 */
	public  function get_Dpi(){}
	/**
	 * @param \Avalonia\Vector $value
	 * @return \System\Void|void
	 */
	public  function set_Dpi($value){}
	/**
	 * @return \Avalonia\Platform\PixelFormat
	 */
	public  function get_Format(){}
	/**
	 * @param \Avalonia\Platform\PixelFormat $value
	 * @return \System\Void|void
	 */
	public  function set_Format($value){}
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
