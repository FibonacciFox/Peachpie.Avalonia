<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EventBuilderOverride {
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
final class EventBuilder extends \System\Object
{
	use EventBuilderOverride;


	private function SetMethodSemantics($mdBuilder, $semantics){}
	/**
	 * @param \System\Reflection\Emit\MethodBuilder $mdBuilder
	 * @return \System\Void|void
	 */
	public function SetAddOnMethod($mdBuilder){}
	/**
	 * @param \System\Reflection\Emit\MethodBuilder $mdBuilder
	 * @return \System\Void|void
	 */
	public function SetRemoveOnMethod($mdBuilder){}
	/**
	 * @param \System\Reflection\Emit\MethodBuilder $mdBuilder
	 * @return \System\Void|void
	 */
	public function SetRaiseMethod($mdBuilder){}
	/**
	 * @param \System\Reflection\Emit\MethodBuilder $mdBuilder
	 * @return \System\Void|void
	 */
	public function AddOtherMethod($mdBuilder){}
	/**
	 * @uses EventBuilderOverride::SetCustomAttribute_1 <br>public , args: ($con, $binaryAttribute)<br>
	 * @uses EventBuilderOverride::SetCustomAttribute_2 <br>public , args: ($customBuilder)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetCustomAttribute (\override ...$args){}
}