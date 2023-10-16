<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SignatureTypeExtensionsMethodsOverride
{
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] private static function TryMakeArrayType_1($type){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] private static function TryMakeArrayType_2($type, $rank){}
}
/**
 */
class SignatureTypeExtensions extends \System\Object
{
	/**
	 * @param \System\Type $pattern
	 * @param \System\Reflection\ParameterInfo $parameter
	 * @return \System\Boolean
	 */
	public static function MatchesParameterTypeExactly($pattern, $parameter){}
	/**
	 * @param \System\Reflection\SignatureType $pattern
	 * @param \System\Type $actual
	 * @return \System\Boolean
	 */
	protected static function MatchesExactly($pattern, $actual){}
	/**
	 * @param \System\Reflection\SignatureType $signatureType
	 * @param \System\Reflection\MethodInfo $genericMethod
	 * @return \System\Type
	 */
	protected static function TryResolveAgainstGenericMethod($signatureType, $genericMethod){}
	/**
	 * @param \System\Reflection\SignatureType $signatureType
	 * @param \System\Type[] $genericMethodParameters
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryResolve($signatureType, $genericMethodParameters){}
	/**
	 * @uses SignatureTypeExtensionsMethodsOverride::TryMakeArrayType_1 ($type)
	 * @uses SignatureTypeExtensionsMethodsOverride::TryMakeArrayType_2 ($type, $rank)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryMakeArrayType(mixed ...$args){}
	/**
	 * @param \System\Type $type
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryMakeByRefType($type){}
	/**
	 * @param \System\Type $type
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryMakePointerType($type){}
	/**
	 * @param \System\Type $type
	 * @param \System\Type[] $instantiation
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryMakeGenericType($type, $instantiation){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
