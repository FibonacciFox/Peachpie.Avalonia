<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait NativeLibraryOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $libraryPath
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function Load_1 ($libraryPath){}
	/**
	 * @deprecated
	 * @param \System\String|string $libraryName
	 * @param \System\Reflection\Assembly $assembly
	 * @param \System\Nullable_1 $searchPath [generic: System\Runtime\InteropServices\DllImportSearchPath]
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function Load_2 ($libraryName, $assembly, $searchPath){}
	/**
	 * @deprecated
	 * @param \System\String|string $libraryPath
	 * @param \System\IntPtr& &$handle
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryLoad_1 ($libraryPath, &$handle){}
	/**
	 * @deprecated
	 * @param \System\String|string $libraryName
	 * @param \System\Reflection\Assembly $assembly
	 * @param \System\Nullable_1 $searchPath [generic: System\Runtime\InteropServices\DllImportSearchPath]
	 * @param \System\IntPtr& &$handle
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryLoad_2 ($libraryName, $assembly, $searchPath, &$handle){}
}
class NativeLibrary extends \System\Object
{
	use NativeLibraryOverride;


	/**
	 * @param \System\String|string $libraryName
	 * @param \System\Reflection\Assembly $assembly
	 * @param \System\Nullable_1 $searchPath [generic: System\Runtime\InteropServices\DllImportSearchPath]
	 * @param \System\Boolean|bool $throwOnError
	 * @return \System\IntPtr
	 */
	protected static function LoadLibraryByName($libraryName, $assembly, $searchPath, $throwOnError){}
	/**
	 * @param \System\String|string $libraryName
	 * @param \System\Boolean|bool $throwOnError
	 * @return \System\IntPtr
	 */
	protected static function LoadFromPath($libraryName, $throwOnError){}
	/**
	 * @param \System\String|string $libraryName
	 * @param \System\Runtime\CompilerServices\QCallAssembly $callingAssembly
	 * @param \System\Boolean|bool $hasDllImportSearchPathFlag
	 * @param \System\UInt32 $dllImportSearchPathFlag
	 * @param \System\Boolean|bool $throwOnError
	 * @return \System\IntPtr
	 */
	protected static function LoadByName($libraryName, $callingAssembly, $hasDllImportSearchPathFlag, $dllImportSearchPathFlag, $throwOnError){}
	/**
	 * @param \System\IntPtr $handle
	 * @return \System\Void|void
	 */
	protected static function FreeLib($handle){}
	/**
	 * @param \System\IntPtr $handle
	 * @param \System\String|string $symbolName
	 * @param \System\Boolean|bool $throwOnError
	 * @return \System\IntPtr
	 */
	protected static function GetSymbol($handle, $symbolName, $throwOnError){}
	/**
	 * @uses NativeLibraryOverride::Load_1 <br>public , args: ($libraryPath)<br>
	 * @uses NativeLibraryOverride::Load_2 <br>public , args: ($libraryName, $assembly, $searchPath)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IntPtr|mixed|\override
	 */
	#[MethodOverridePublic]function Load (\override ...$args){}
	/**
	 * @uses NativeLibraryOverride::TryLoad_1 <br>public , args: ($libraryPath, &$handle)<br>
	 * @uses NativeLibraryOverride::TryLoad_2 <br>public , args: ($libraryName, $assembly, $searchPath, &$handle)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryLoad (\override ...$args){}
	/**
	 * @param \System\IntPtr $handle
	 * @return \System\Void|void
	 */
	public static function Free($handle){}
	/**
	 * @param \System\IntPtr $handle
	 * @param \System\String|string $name
	 * @return \System\IntPtr
	 */
	public static function GetExport($handle, $name){}
	/**
	 * @param \System\IntPtr $handle
	 * @param \System\String|string $name
	 * @param \System\IntPtr& &$address
	 * @return \System\Boolean|bool
	 */
	public static function TryGetExport($handle, $name, &$address){}
	/**
	 * @param \System\Reflection\Assembly $assembly
	 * @param \System\Runtime\InteropServices\DllImportResolver $resolver
	 * @return \System\Void|void
	 */
	public static function SetDllImportResolver($assembly, $resolver){}
	/**
	 * @param \System\String|string $libraryName
	 * @param \System\Reflection\Assembly $assembly
	 * @param \System\Boolean|bool $hasDllImportSearchPathFlags
	 * @param \System\UInt32 $dllImportSearchPathFlags
	 * @return \System\IntPtr
	 */
	protected static function LoadLibraryCallbackStub($libraryName, $assembly, $hasDllImportSearchPathFlags, $dllImportSearchPathFlags){}
	/**
	 * @return \System\IntPtr
	 */
	public static function GetMainProgramHandle(){}
}