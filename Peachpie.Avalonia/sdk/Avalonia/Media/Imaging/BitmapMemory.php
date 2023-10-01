<?php
namespace Avalonia\Media\Imaging;
/**
 */
class BitmapMemory extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReleaseUnmanagedResources(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Address(){}
	/**
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Address($value){}
	/**
	 * @return \Avalonia\PixelSize
	 */
	public  function get_Size(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_RowBytes(){}
	/**
	 * @return \Avalonia\Platform\PixelFormat
	 */
	public  function get_Format(){}
	/**
	 * @param \System\IntPtr $buffer
	 * @param \System\Int32|int $rowBytes
	 * @return \System\Void|void
	 */
	public  function CopyToRgba($buffer, $rowBytes){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
