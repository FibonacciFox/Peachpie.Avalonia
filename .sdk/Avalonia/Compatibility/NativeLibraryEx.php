<?php
namespace Avalonia\Compatibility;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait NativeLibraryExOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $dll
	 * @param \System\Reflection\Assembly $assembly
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function Load_1 ($dll, $assembly){}
	/**
	 * @deprecated
	 * @param \System\String|string $dll
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function Load_2 ($dll){}
}
class NativeLibraryEx extends \System\Object
{
	use NativeLibraryExOverride;

	/**
	 * @uses NativeLibraryExOverride::Load_1 <br>public , args: ($dll, $assembly)<br>
	 * @uses NativeLibraryExOverride::Load_2 <br>public , args: ($dll)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IntPtr|mixed|\override
	 */
	#[MethodOverridePublic]function Load (\override ...$args){}
	/**
	 * @param \System\IntPtr $handle
	 * @param \System\String|string $name
	 * @param \System\IntPtr& &$address
	 * @return \System\Boolean|bool
	 */
	public static function TryGetExport($handle, $name, &$address){}
	/**
	 */
	public function __construct(){}
}