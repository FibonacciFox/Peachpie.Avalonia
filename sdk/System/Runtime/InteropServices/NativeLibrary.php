<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait NativeLibraryMethodsOverride
{
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function Load_1($libraryPath){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function Load_2($libraryName, $assembly, $searchPath){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryLoad_1($libraryPath, $handle){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryLoad_2($libraryName, $assembly, $searchPath, $handle){}
}
/**
 */
class NativeLibrary extends \System\Object
{
	/**
	 * @param \System\String|string $libraryName
	 * @param \System\Reflection\Assembly $assembly
	 * @param \System\Nullable_1 $searchPath
	 * @param \System\Boolean $throwOnError
	 * @return \System\IntPtr
	 */
	protected static function LoadLibraryByName($libraryName, $assembly, $searchPath, $throwOnError){}
	/**
	 * @param \System\String|string $libraryName
	 * @param \System\Boolean $throwOnError
	 * @return \System\IntPtr
	 */
	protected static function LoadFromPath($libraryName, $throwOnError){}
	/**
	 * @param \System\String|string $libraryName
	 * @param \System\Runtime\CompilerServices\QCallAssembly $callingAssembly
	 * @param \System\Boolean $hasDllImportSearchPathFlag
	 * @param \System\UInt32 $dllImportSearchPathFlag
	 * @param \System\Boolean $throwOnError
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
	 * @param \System\Boolean $throwOnError
	 * @return \System\IntPtr
	 */
	protected static function GetSymbol($handle, $symbolName, $throwOnError){}
	/**
	 * @uses NativeLibraryMethodsOverride::Load_1 ($libraryPath)
	 * @uses NativeLibraryMethodsOverride::Load_2 ($libraryName, $assembly, $searchPath)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Load(mixed ...$args){}
	/**
	 * @uses NativeLibraryMethodsOverride::TryLoad_1 ($libraryPath, $handle)
	 * @uses NativeLibraryMethodsOverride::TryLoad_2 ($libraryName, $assembly, $searchPath, $handle)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryLoad(mixed ...$args){}
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
	 * @param \System\IntPtr& $address
	 * @return \System\Boolean
	 */
	public static function TryGetExport($handle, $name, $address){}
	/**
	 * @param \System\Reflection\Assembly $assembly
	 * @param \System\Runtime\InteropServices\DllImportResolver $resolver
	 * @return \System\Void|void
	 */
	public static function SetDllImportResolver($assembly, $resolver){}
	/**
	 * @param \System\String|string $libraryName
	 * @param \System\Reflection\Assembly $assembly
	 * @param \System\Boolean $hasDllImportSearchPathFlags
	 * @param \System\UInt32 $dllImportSearchPathFlags
	 * @return \System\IntPtr
	 */
	protected static function LoadLibraryCallbackStub($libraryName, $assembly, $hasDllImportSearchPathFlags, $dllImportSearchPathFlags){}
	/**
	 * @return \System\IntPtr
	 */
	public static function GetMainProgramHandle(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
