<?php
namespace Avalonia\Native;
/**
 */
class OsXImports extends \System\Object
{
	/**
	 * @param \System\String|string $path
	 * @param \System\Int32|int $flags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function dlopen($path, $flags){}
	/**
	 * @param \System\IntPtr $handle
	 * @param \System\String|string $symbol
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function dlsym($handle, $symbol){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function dlerror(){}
	/**
	 * @return \System\Void|void
	 */
	public static function Init(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
