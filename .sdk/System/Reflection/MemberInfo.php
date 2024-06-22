<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MemberInfoOverride {
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $inherit
	 * @return \System\Object
	 */
	#[MethodOverride]public function GetCustomAttributes_1 ($inherit){}
	/**
	 * @deprecated
	 * @param \System\Type $attributeType
	 * @param \System\Boolean|bool $inherit
	 * @return \System\Object
	 */
	#[MethodOverride]public function GetCustomAttributes_2 ($attributeType, $inherit){}
}
class MemberInfo extends \System\Object implements
	\System\Reflection\ICustomAttributeProvider
{
	use MemberInfoOverride;

	/**
	 * @property
	 * @var \System\Reflection\MemberTypes
	 * @since readonly
	 */
	public $MemberType;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $DeclaringType;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $ReflectedType;
	/**
	 * @property
	 * @var \System\Reflection\Module
	 * @since readonly
	 */
	public $Module;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\CustomAttributeData]
	 * @since readonly
	 */
	public $CustomAttributes;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCollectible;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MetadataToken;
	/**
	 * @param \System\Object|object $o
	 * @return \System\Boolean|bool
	 */
	protected function CacheEquals($o){}
	/**
	 * @param \System\Reflection\MemberInfo $other
	 * @return \System\Boolean|bool
	 */
	protected function HasSameMetadataDefinitionAsCore($other){}
	/**
	 * @param \System\Reflection\MemberInfo $other
	 * @return \System\Boolean|bool
	 */
	public function HasSameMetadataDefinitionAs($other){}
	/**
	 * @param \System\Type $attributeType
	 * @param \System\Boolean|bool $inherit
	 * @return \System\Boolean|bool
	 */
	abstract public function IsDefined($attributeType, $inherit);
	/**
	 * @uses MemberInfoOverride::GetCustomAttributes_1 <br>public , args: ($inherit)<br>
	 * @uses MemberInfoOverride::GetCustomAttributes_2 <br>public , args: ($attributeType, $inherit)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|mixed|\override
	 */
	#[MethodOverridePublic]function GetCustomAttributes (\override ...$args){}
	/**
	 * @return \System\Collections\Generic\IList_1[System\Reflection\CustomAttributeData]
	 */
	public function GetCustomAttributesData(){}
	/**
	 * @param \System\Reflection\MemberInfo $left
	 * @param \System\Reflection\MemberInfo $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Reflection\MemberInfo $left
	 * @param \System\Reflection\MemberInfo $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
}