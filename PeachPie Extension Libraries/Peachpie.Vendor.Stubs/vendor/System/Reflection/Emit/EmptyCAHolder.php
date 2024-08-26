<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EmptyCAHolderOverride {
	/**
	 * @deprecated
	 * @param \System\Type $attributeType
	 * @param \System\Boolean|bool $inherit
	 * @return \System\Object
	 */
	#[MethodOverride]private function GetCustomAttributes_1 ($attributeType, $inherit){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $inherit
	 * @return \System\Object
	 */
	#[MethodOverride]private function GetCustomAttributes_2 ($inherit){}
}
final class EmptyCAHolder extends \System\Object implements
	\System\Reflection\ICustomAttributeProvider
{
	use EmptyCAHolderOverride;

	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses EmptyCAHolderOverride::GetCustomAttributes_1 <br>private , args: ($attributeType, $inherit)<br>
	 * @uses EmptyCAHolderOverride::GetCustomAttributes_2 <br>private , args: ($inherit)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|mixed|\override
	 */
	#[MethodOverridePrivate]function GetCustomAttributes (\override ...$args){}
	private function IsDefined($attributeType, $inherit){}
}