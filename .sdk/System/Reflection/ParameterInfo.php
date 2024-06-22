<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ParameterInfoOverride {
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
class ParameterInfo extends \System\Object implements
	\System\Reflection\ICustomAttributeProvider,
	\System\Runtime\Serialization\IObjectReference
{
	use ParameterInfoOverride;

	/**
	 * @field
	 * @var \System\Reflection\ParameterAttributes
	 */
	protected $AttrsImpl;
	/**
	 * @field
	 * @var \System\Type
	 */
	protected $ClassImpl;
	/**
	 * @field
	 * @var \System\Object|object
	 */
	protected $DefaultValueImpl;
	/**
	 * @field
	 * @var \System\Reflection\MemberInfo
	 */
	protected $MemberImpl;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $NameImpl;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $PositionImpl;
	/**
	 * @property
	 * @var \System\Reflection\ParameterAttributes
	 * @since readonly
	 */
	public $Attributes;
	/**
	 * @property
	 * @var \System\Reflection\MemberInfo
	 * @since readonly
	 */
	public $Member;
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
	public $ParameterType;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Position;
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
	public $IsLcid;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsOptional;
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
	public $IsRetval;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $DefaultValue;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $RawDefaultValue;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasDefaultValue;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\CustomAttributeData]
	 * @since readonly
	 */
	public $CustomAttributes;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MetadataToken;
	/**
	 * @param \System\Type $attributeType
	 * @param \System\Boolean|bool $inherit
	 * @return \System\Boolean|bool
	 */
	public function IsDefined($attributeType, $inherit){}
	/**
	 * @return \System\Collections\Generic\IList_1[System\Reflection\CustomAttributeData]
	 */
	public function GetCustomAttributesData(){}
	/**
	 * @uses ParameterInfoOverride::GetCustomAttributes_1 <br>public , args: ($inherit)<br>
	 * @uses ParameterInfoOverride::GetCustomAttributes_2 <br>public , args: ($attributeType, $inherit)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|mixed|\override
	 */
	#[MethodOverridePublic]function GetCustomAttributes (\override ...$args){}
	/**
	 * @return \System\Type[]
	 */
	public function GetOptionalCustomModifiers(){}
	/**
	 * @return \System\Type[]
	 */
	public function GetRequiredCustomModifiers(){}
	/**
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Object|object
	 */
	public function GetRealObject($context){}
}