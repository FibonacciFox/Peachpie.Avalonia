<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CustomAttributeNamedArgumentOverride {
	/**
	 * @param \System\Reflection\MemberInfo $memberInfo
	 * @param \System\Object|object $value
	 */
	#[MethodOverride]public function __construct_1 ($memberInfo, $value){}
	/**
	 * @param \System\Reflection\MemberInfo $memberInfo
	 * @param \System\Reflection\CustomAttributeTypedArgument $typedArgument
	 */
	#[MethodOverride]public function __construct_2 ($memberInfo, $typedArgument){}
}
final class CustomAttributeNamedArgument extends \System\ValueType implements
	\System\IEquatable_1
{
	use CustomAttributeNamedArgumentOverride;

	/**
	 * @property
	 * @var \System\Reflection\MemberInfo
	 * @since readonly
	 */
	public $MemberInfo;
	/**
	 * @property
	 * @var \System\Reflection\CustomAttributeTypedArgument
	 * @since readonly
	 */
	public $TypedValue;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $MemberName;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsField;
	/**
	 * @param \System\Reflection\CustomAttributeNamedArgument $left
	 * @param \System\Reflection\CustomAttributeNamedArgument $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Reflection\CustomAttributeNamedArgument $left
	 * @param \System\Reflection\CustomAttributeNamedArgument $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses CustomAttributeNamedArgumentOverride::__construct_1 <br>public , args: ($memberInfo, $value)<br>
	 * @uses CustomAttributeNamedArgumentOverride::__construct_2 <br>public , args: ($memberInfo, $typedArgument)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}