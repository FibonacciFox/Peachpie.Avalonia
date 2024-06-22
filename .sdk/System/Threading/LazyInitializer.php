<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait LazyInitializerOverride {
	/**
	 * @deprecated
	 * @param \T& $target
	 * @return \T|object
	 */
	#[MethodOverride]public static function EnsureInitialized_1 ($target){}
	/**
	 * @deprecated
	 * @param \T& $target
	 * @param \System\Func_1 $valueFactory [generic: T]
	 * @return \T|object
	 */
	#[MethodOverride]public static function EnsureInitialized_2 ($target, $valueFactory){}
	/**
	 * @deprecated
	 * @param \T& $target
	 * @param \System\Boolean& $initialized
	 * @param \System\Object& $syncLock
	 * @return \T|object
	 */
	#[MethodOverride]public static function EnsureInitialized_3 ($target, $initialized, $syncLock){}
	/**
	 * @deprecated
	 * @param \T& $target
	 * @param \System\Boolean& $initialized
	 * @param \System\Object& $syncLock
	 * @param \System\Func_1 $valueFactory [generic: T]
	 * @return \T|object
	 */
	#[MethodOverride]public static function EnsureInitialized_4 ($target, $initialized, $syncLock, $valueFactory){}
	/**
	 * @deprecated
	 * @param \T& $target
	 * @param \System\Object& $syncLock
	 * @param \System\Func_1 $valueFactory [generic: T]
	 * @return \T|object
	 */
	#[MethodOverride]public static function EnsureInitialized_5 ($target, $syncLock, $valueFactory){}
	/**
	 * @deprecated
	 * @param \T& $target
	 * @return \T|object
	 */
	#[MethodOverride]private static function EnsureInitializedCore_1 ($target){}
	/**
	 * @deprecated
	 * @param \T& $target
	 * @param \System\Func_1 $valueFactory [generic: T]
	 * @return \T|object
	 */
	#[MethodOverride]private static function EnsureInitializedCore_2 ($target, $valueFactory){}
	/**
	 * @deprecated
	 * @param \T& $target
	 * @param \System\Boolean& $initialized
	 * @param \System\Object& $syncLock
	 * @return \T|object
	 */
	#[MethodOverride]private static function EnsureInitializedCore_3 ($target, $initialized, $syncLock){}
	/**
	 * @deprecated
	 * @param \T& $target
	 * @param \System\Boolean& $initialized
	 * @param \System\Object& $syncLock
	 * @param \System\Func_1 $valueFactory [generic: T]
	 * @return \T|object
	 */
	#[MethodOverride]private static function EnsureInitializedCore_4 ($target, $initialized, $syncLock, $valueFactory){}
	/**
	 * @deprecated
	 * @param \T& $target
	 * @param \System\Object& $syncLock
	 * @param \System\Func_1 $valueFactory [generic: T]
	 * @return \T|object
	 */
	#[MethodOverride]private static function EnsureInitializedCore_5 ($target, $syncLock, $valueFactory){}
}
class LazyInitializer extends \System\Object
{
	use LazyInitializerOverride;


	/**
	 * @uses LazyInitializerOverride::EnsureInitialized_1 <br>public , args: ($target)<br>
	 * @uses LazyInitializerOverride::EnsureInitialized_2 <br>public , args: ($target, $valueFactory)<br>
	 * @uses LazyInitializerOverride::EnsureInitialized_3 <br>public , args: ($target, $initialized, $syncLock)<br>
	 * @uses LazyInitializerOverride::EnsureInitialized_4 <br>public , args: ($target, $initialized, $syncLock, $valueFactory)<br>
	 * @uses LazyInitializerOverride::EnsureInitialized_5 <br>public , args: ($target, $syncLock, $valueFactory)<br>
	 * @var mixed|\override ...$args
	 * @return \T|object|mixed|\override
	 */
	#[MethodOverridePublic]function EnsureInitialized (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses LazyInitializerOverride::EnsureInitializedCore_1 <br>private , args: ($target)<br>
	 * @uses LazyInitializerOverride::EnsureInitializedCore_2 <br>private , args: ($target, $valueFactory)<br>
	 * @uses LazyInitializerOverride::EnsureInitializedCore_3 <br>private , args: ($target, $initialized, $syncLock)<br>
	 * @uses LazyInitializerOverride::EnsureInitializedCore_4 <br>private , args: ($target, $initialized, $syncLock, $valueFactory)<br>
	 * @uses LazyInitializerOverride::EnsureInitializedCore_5 <br>private , args: ($target, $syncLock, $valueFactory)<br>
	 * @var mixed|\override ...$args
	 * @return \T|object|mixed|\override
	 */
	#[MethodOverridePrivate]function EnsureInitializedCore (\override ...$args){}
	private static function EnsureLockInitialized($syncLock){}
}