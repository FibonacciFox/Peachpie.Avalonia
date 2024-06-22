<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RuntimePropertyInfoOverride {
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $raw
	 * @return \System\Object|object
	 */
	#[MethodOverride]protected function GetConstantValue_1 ($raw){}
}
final class RuntimePropertyInfo extends \System\Reflection\PropertyInfo implements
	\System\Reflection\ICustomAttributeProvider
{
	use RuntimePropertyInfoOverride;

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
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MetadataToken;
	/**
	 * @property
	 * @var \System\Reflection\Module
	 * @since readonly
	 */
	public $Module;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCollectible;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $PropertyType;
	/**
	 * @property
	 * @var \System\Reflection\PropertyAttributes
	 * @since readonly
	 */
	public $Attributes;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CanRead;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CanWrite;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSpecialName;
	/**
	 * @property
	 * @var \System\Reflection\MethodInfo
	 * @since readonly
	 */
	public $GetMethod;
	/**
	 * @property
	 * @var \System\Reflection\MethodInfo
	 * @since readonly
	 */
	public $SetMethod;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\CustomAttributeData]
	 * @since readonly
	 */
	public $CustomAttributes;
	/**
	 * @param \System\Reflection\RuntimePropertyInfo $target
	 * @return \System\Boolean|bool
	 */
	protected function EqualsSig($target){}
	/**
	 * @return \System\Reflection\RuntimeModule
	 */
	protected function GetRuntimeModule(){}
	/**
	 * @return \System\Reflection\ParameterInfo[]
	 */
	protected function GetIndexParametersNoCopy(){}
}