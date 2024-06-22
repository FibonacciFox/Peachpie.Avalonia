<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ParameterBuilderOverride {
	/**
	 * @deprecated
	 * @param \System\Reflection\ConstructorInfo $con
	 * @param \System\Byte $binaryAttribute
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetCustomAttribute_1 ($con, $binaryAttribute){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\CustomAttributeBuilder $customBuilder
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetCustomAttribute_2 ($customBuilder){}
}
class ParameterBuilder extends \System\Object
{
	use ParameterBuilderOverride;

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Position;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Attributes;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsIn;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsOut;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsOptional;
	/**
	 * @param \System\Object|object $defaultValue
	 * @return \System\Void|void
	 */
	public function SetConstant($defaultValue){}
	/**
	 * @uses ParameterBuilderOverride::SetCustomAttribute_1 <br>public , args: ($con, $binaryAttribute)<br>
	 * @uses ParameterBuilderOverride::SetCustomAttribute_2 <br>public , args: ($customBuilder)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetCustomAttribute (\override ...$args){}
}