<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CustomAttributeTypedArgumentOverride {
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $typed
	 * @return \System\String|string
	 */
	#[MethodOverride]protected function ToString_1 ($typed){}
	/**
	 * @param \System\Type $argumentType
	 * @param \System\Object|object $value
	 */
	#[MethodOverride]public function __construct_1 ($argumentType, $value){}
	/**
	 * @param \System\Object|object $value
	 */
	#[MethodOverride]public function __construct_2 ($value){}
}
final class CustomAttributeTypedArgument extends \System\ValueType implements
	\System\IEquatable_1
{
	use CustomAttributeTypedArgumentOverride;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $ArgumentType;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $Value;
	private static function CustomAttributeEncodingToType($encodedType){}
	private static function EncodedValueToRawValue($val, $encodedType){}
	private static function ResolveType($scope, $typeName){}
	/**
	 * @param \System\Reflection\CustomAttributeTypedArgument $left
	 * @param \System\Reflection\CustomAttributeTypedArgument $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Reflection\CustomAttributeTypedArgument $left
	 * @param \System\Reflection\CustomAttributeTypedArgument $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	private static function CanonicalizeValue($value){}
	/**
	 * @uses CustomAttributeTypedArgumentOverride::__construct_1 <br>public , args: ($argumentType, $value)<br>
	 * @uses CustomAttributeTypedArgumentOverride::__construct_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}