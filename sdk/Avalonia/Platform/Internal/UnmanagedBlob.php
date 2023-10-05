<?php
namespace Avalonia\Platform\Internal;
/**
 */
class UnmanagedBlob extends \System\Object
{
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $Address;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Size;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsDisposed;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DoDispose(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Address(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Size(){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Size($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsDisposed(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_IsDisposed($value){}
	/**
	 * @param \System\IntPtr $addr
	 * @param \System\IntPtr $length
	 * @param \System\Int32|int $prot
	 * @param \System\Int32|int $flags
	 * @param \System\Int32|int $fd
	 * @param \System\IntPtr $offset
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function mmap($addr, $length, $prot, $flags, $fd, $offset){}
	/**
	 * @param \System\IntPtr $addr
	 * @param \System\IntPtr $length
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function munmap($addr, $length){}
	/**
	 * @param \System\Int32|int $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function sysconf($name){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_UseMmap(){}
	/**
	 * @param \System\Int32|int $size
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Alloc($size){}
	/**
	 * @param \System\IntPtr $ptr
	 * @param \System\Int32|int $len
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Free($ptr, $len){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
