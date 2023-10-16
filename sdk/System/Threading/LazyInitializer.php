<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait LazyInitializerMethodsOverride
{
	/**
	 * @return \System\Threading\T
	 */
	#[MethodOverride] public static function EnsureInitialized_1($target){}
	/**
	 * @return \System\Threading\T
	 */
	#[MethodOverride] public static function EnsureInitialized_2($target, $valueFactory){}
	/**
	 * @return \System\Threading\T
	 */
	#[MethodOverride] public static function EnsureInitialized_3($target, $initialized, $syncLock){}
	/**
	 * @return \System\Threading\T
	 */
	#[MethodOverride] public static function EnsureInitialized_4($target, $initialized, $syncLock, $valueFactory){}
	/**
	 * @return \System\Threading\T
	 */
	#[MethodOverride] public static function EnsureInitialized_5($target, $syncLock, $valueFactory){}
	/**
	 * @return \System\Threading\T
	 */
	#[MethodOverride] private static function EnsureInitializedCore_1($target){}
	/**
	 * @return \System\Threading\T
	 */
	#[MethodOverride] private static function EnsureInitializedCore_2($target, $valueFactory){}
	/**
	 * @return \System\Threading\T
	 */
	#[MethodOverride] private static function EnsureInitializedCore_3($target, $initialized, $syncLock){}
	/**
	 * @return \System\Threading\T
	 */
	#[MethodOverride] private static function EnsureInitializedCore_4($target, $initialized, $syncLock, $valueFactory){}
	/**
	 * @return \System\Threading\T
	 */
	#[MethodOverride] private static function EnsureInitializedCore_5($target, $syncLock, $valueFactory){}
}
/**
 */
class LazyInitializer extends \System\Object
{
	/**
	 * @uses LazyInitializerMethodsOverride::EnsureInitialized_1 ($target)
	 * @uses LazyInitializerMethodsOverride::EnsureInitialized_2 ($target, $valueFactory)
	 * @uses LazyInitializerMethodsOverride::EnsureInitialized_3 ($target, $initialized, $syncLock)
	 * @uses LazyInitializerMethodsOverride::EnsureInitialized_4 ($target, $initialized, $syncLock, $valueFactory)
	 * @uses LazyInitializerMethodsOverride::EnsureInitialized_5 ($target, $syncLock, $valueFactory)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function EnsureInitialized(mixed ...$args){}
	/**
	 * @uses LazyInitializerMethodsOverride::EnsureInitializedCore_1 ($target)
	 * @uses LazyInitializerMethodsOverride::EnsureInitializedCore_2 ($target, $valueFactory)
	 * @uses LazyInitializerMethodsOverride::EnsureInitializedCore_3 ($target, $initialized, $syncLock)
	 * @uses LazyInitializerMethodsOverride::EnsureInitializedCore_4 ($target, $initialized, $syncLock, $valueFactory)
	 * @uses LazyInitializerMethodsOverride::EnsureInitializedCore_5 ($target, $syncLock, $valueFactory)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function EnsureInitializedCore(mixed ...$args){}
	/**
	 * @param \System\Object& $syncLock
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EnsureLockInitialized($syncLock){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
