<?php
namespace Avalonia\Native;
/**
 */
class UnixLoader extends \System\Object implements 
	\Avalonia\Native\IDynLoader
{
	/**
	 * @param \System\IntPtr $buf
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function uname($buf){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DlErrorString(){}
	/**
	 * @param \System\String|string $dll
	 * @return \System\IntPtr
	 */
	public  function LoadLibrary($dll){}
	/**
	 * @param \System\IntPtr $dll
	 * @param \System\String|string $proc
	 * @param \System\Boolean $optional
	 * @return \System\IntPtr
	 */
	public  function GetProcAddress($dll, $proc, $optional){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
