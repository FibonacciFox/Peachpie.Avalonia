<?php
namespace Avalonia\Compatibility;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait NativeLibraryExMethodsOverride
{
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function Load_1($dll, $assembly){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function Load_2($dll){}
}
/**
 */
class NativeLibraryEx extends \System\Object
{
	/**
	 * @uses NativeLibraryExMethodsOverride::Load_1 ($dll, $assembly)
	 * @uses NativeLibraryExMethodsOverride::Load_2 ($dll)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Load(mixed ...$args){}
	/**
	 * @param \System\IntPtr $handle
	 * @param \System\String|string $name
	 * @param \System\IntPtr& $address
	 * @return \System\Boolean
	 */
	public static function TryGetExport($handle, $name, $address){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
