<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CustomAttributeDataOverride {
	/**
	 * @deprecated
	 * @param \System\Reflection\MemberInfo $target
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride]public static function GetCustomAttributes_1 ($target){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Module $target
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride]public static function GetCustomAttributes_2 ($target){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Assembly $target
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride]public static function GetCustomAttributes_3 ($target){}
	/**
	 * @deprecated
	 * @param \System\Reflection\ParameterInfo $target
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride]public static function GetCustomAttributes_4 ($target){}
}
class CustomAttributeData extends \System\Object
{
	use CustomAttributeDataOverride;

	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $AttributeType;
	/**
	 * @property
	 * @var \System\Reflection\ConstructorInfo
	 * @since readonly
	 */
	public $Constructor;
	/**
	 * @property
	 * @var \System\Collections\Generic\IList_1[System\Reflection\CustomAttributeTypedArgument]
	 * @since readonly
	 */
	public $ConstructorArguments;
	/**
	 * @property
	 * @var \System\Collections\Generic\IList_1[System\Reflection\CustomAttributeNamedArgument]
	 * @since readonly
	 */
	public $NamedArguments;
	/**
	 * @uses CustomAttributeDataOverride::GetCustomAttributes_1 <br>public , args: ($target)<br>
	 * @uses CustomAttributeDataOverride::GetCustomAttributes_2 <br>public , args: ($target)<br>
	 * @uses CustomAttributeDataOverride::GetCustomAttributes_3 <br>public , args: ($target)<br>
	 * @uses CustomAttributeDataOverride::GetCustomAttributes_4 <br>public , args: ($target)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IList_1|mixed|\override
	 */
	#[MethodOverridePublic]function GetCustomAttributes (\override ...$args){}
}