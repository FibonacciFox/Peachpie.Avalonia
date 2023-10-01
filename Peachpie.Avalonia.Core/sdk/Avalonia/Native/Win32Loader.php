<?php
namespace Avalonia\Native;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Win32LoaderMethodsOverride
{
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] private static function GetProcAddress_1($hModule, $procName){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] private  function GetProcAddress_2($dll, $proc, $optional){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] private static function LoadLibrary_1($lpszLib){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] private  function LoadLibrary_2($dll){}
}
/**
 */
class Win32Loader extends \System\Object implements 
	\Avalonia\Native\IDynLoader
{
	/**
	 * @uses Win32LoaderMethodsOverride::GetProcAddress_1 ($hModule, $procName)
	 * @uses Win32LoaderMethodsOverride::GetProcAddress_2 ($dll, $proc, $optional)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetProcAddress(mixed ...$args){}
	/**
	 * @uses Win32LoaderMethodsOverride::LoadLibrary_1 ($lpszLib)
	 * @uses Win32LoaderMethodsOverride::LoadLibrary_2 ($dll)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function LoadLibrary(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
