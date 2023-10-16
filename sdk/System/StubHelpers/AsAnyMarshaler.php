<?php
namespace System\StubHelpers;
/**
 */
class AsAnyMarshaler extends \System\ValueType
{
	/**
	 * @param \System\Int32|int $dwFlags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsIn($dwFlags){}
	/**
	 * @param \System\Int32|int $dwFlags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsOut($dwFlags){}
	/**
	 * @param \System\Int32|int $dwFlags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsAnsi($dwFlags){}
	/**
	 * @param \System\Int32|int $dwFlags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsThrowOn($dwFlags){}
	/**
	 * @param \System\Int32|int $dwFlags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsBestFit($dwFlags){}
	/**
	 * @param \System\Object|object $pManagedHome
	 * @param \System\Int32|int $dwFlags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ConvertArrayToNative($pManagedHome, $dwFlags){}
	/**
	 * @param \System\String|string $pManagedHome
	 * @param \System\Int32|int $dwFlags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ConvertStringToNative($pManagedHome, $dwFlags){}
	/**
	 * @param \System\Text\StringBuilder $pManagedHome
	 * @param \System\Int32|int $dwFlags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ConvertStringBuilderToNative($pManagedHome, $dwFlags){}
	/**
	 * @param \System\Object|object $pManagedHome
	 * @param \System\Int32|int $dwFlags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ConvertLayoutToNative($pManagedHome, $dwFlags){}
	/**
	 * @param \System\Object|object $pManagedHome
	 * @param \System\Int32|int $dwFlags
	 * @return \System\IntPtr
	 */
	protected  function ConvertToNative($pManagedHome, $dwFlags){}
	/**
	 * @param \System\Object|object $pManagedHome
	 * @param \System\IntPtr $pNativeHome
	 * @return \System\Void|void
	 */
	protected  function ConvertToManaged($pManagedHome, $pNativeHome){}
	/**
	 * @param \System\IntPtr $pNativeHome
	 * @return \System\Void|void
	 */
	protected  function ClearNative($pNativeHome){}
}
