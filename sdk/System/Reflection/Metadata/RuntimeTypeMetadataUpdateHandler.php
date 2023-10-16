<?php
namespace System\Reflection\Metadata;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RuntimeTypeMetadataUpdateHandlerMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function ClearCache_1($types){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function ClearCache_2($type){}
}
/**
 */
class RuntimeTypeMetadataUpdateHandler extends \System\Object
{
	/**
	 * @uses RuntimeTypeMetadataUpdateHandlerMethodsOverride::ClearCache_1 ($types)
	 * @uses RuntimeTypeMetadataUpdateHandlerMethodsOverride::ClearCache_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ClearCache(mixed ...$args){}
	/**
	 * @param \System\Reflection\Assembly $assembly
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SkipAssembly($assembly){}
	/**
	 * @param \System\Type[] $types
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RequiresClearingAllTypes($types){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
