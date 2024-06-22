<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FieldBuilderOverride {
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
final class FieldBuilder extends \System\Reflection\FieldInfo implements
	\System\Reflection\ICustomAttributeProvider
{
	use FieldBuilderOverride;

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
	 * @var \System\Type
	 * @since readonly
	 */
	public $FieldType;
	/**
	 * @property
	 * @var \System\RuntimeFieldHandle
	 * @since readonly
	 */
	public $FieldHandle;
	/**
	 * @property
	 * @var \System\Reflection\FieldAttributes
	 * @since readonly
	 */
	public $Attributes;
	/**
	 * @property
	 * @var \System\Reflection\MemberTypes
	 * @since readonly
	 */
	public $MemberType;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsInitOnly;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsLiteral;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsNotSerialized;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsPinvokeImpl;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSpecialName;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsStatic;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsAssembly;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsFamily;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsFamilyAndAssembly;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsFamilyOrAssembly;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsPrivate;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsPublic;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSecurityCritical;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSecuritySafeCritical;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSecurityTransparent;
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
	 * @param \System\Byte $data
	 * @param \System\Int32|int $size
	 * @return \System\Void|void
	 */
	protected function SetData($data, $size){}
	/**
	 * @param \System\Int32|int $iOffset
	 * @return \System\Void|void
	 */
	public function SetOffset($iOffset){}
	/**
	 * @param \System\Object|object $defaultValue
	 * @return \System\Void|void
	 */
	public function SetConstant($defaultValue){}
	/**
	 * @uses FieldBuilderOverride::SetCustomAttribute_1 <br>public , args: ($con, $binaryAttribute)<br>
	 * @uses FieldBuilderOverride::SetCustomAttribute_2 <br>public , args: ($customBuilder)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetCustomAttribute (\override ...$args){}
}