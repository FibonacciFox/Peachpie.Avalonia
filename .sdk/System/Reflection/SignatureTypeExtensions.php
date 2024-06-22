<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SignatureTypeExtensionsOverride {
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @return \System\Type
	 */
	#[MethodOverride]private static function TryMakeArrayType_1 ($type){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @param \System\Int32|int $rank
	 * @return \System\Type
	 */
	#[MethodOverride]private static function TryMakeArrayType_2 ($type, $rank){}
}
class SignatureTypeExtensions extends \System\Object
{
	use SignatureTypeExtensionsOverride;


	/**
	 * @param \System\Type $pattern
	 * @param \System\Reflection\ParameterInfo $parameter
	 * @return \System\Boolean|bool
	 */
	public static function MatchesParameterTypeExactly($pattern, $parameter){}
	/**
	 * @param \System\Reflection\SignatureType $pattern
	 * @param \System\Type $actual
	 * @return \System\Boolean|bool
	 */
	protected static function MatchesExactly($pattern, $actual){}
	/**
	 * @param \System\Reflection\SignatureType $signatureType
	 * @param \System\Reflection\MethodInfo $genericMethod
	 * @return \System\Type
	 */
	protected static function TryResolveAgainstGenericMethod($signatureType, $genericMethod){}
	private static function TryResolve($signatureType, $genericMethodParameters){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses SignatureTypeExtensionsOverride::TryMakeArrayType_1 <br>private , args: ($type)<br>
	 * @uses SignatureTypeExtensionsOverride::TryMakeArrayType_2 <br>private , args: ($type, $rank)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Type|mixed|\override
	 */
	#[MethodOverridePrivate]function TryMakeArrayType (\override ...$args){}
	private static function TryMakeByRefType($type){}
	private static function TryMakePointerType($type){}
	private static function TryMakeGenericType($type, $instantiation){}
}