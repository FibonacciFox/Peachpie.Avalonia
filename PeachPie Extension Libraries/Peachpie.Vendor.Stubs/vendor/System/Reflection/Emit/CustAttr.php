<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TypeBuilderOverride {
	/**
	 * @param \System\Reflection\ConstructorInfo $con
	 * @param \System\Byte $binaryAttribute
	 */
	#[MethodOverride]public function __construct_1 ($con, $binaryAttribute){}
	/**
	 * @param \System\Reflection\Emit\CustomAttributeBuilder $customBuilder
	 */
	#[MethodOverride]public function __construct_2 ($customBuilder){}
}
final class CustAttr extends \System\Object
{
	use TypeBuilderOverride;

	/**
	 * @param \System\Reflection\Emit\ModuleBuilder $module
	 * @param \System\Int32|int $token
	 * @return \System\Void|void
	 */
	public function Bake($module, $token){}
	/**
	 * @uses CustAttrOverride::__construct_1 <br>public , args: ($con, $binaryAttribute)<br>
	 * @uses CustAttrOverride::__construct_2 <br>public , args: ($customBuilder)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}