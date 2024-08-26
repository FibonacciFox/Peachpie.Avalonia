<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PropertyBuilderOverride {
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
final class PropertyBuilder extends \System\Reflection\PropertyInfo implements
	\System\Reflection\ICustomAttributeProvider
{
	use PropertyBuilderOverride;
	/**
	 * @property
	 * @var \System\Reflection\Module
	 * @since readonly
	 */
	public $Module;
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
	 * @var \System\Reflection\MemberTypes
	 * @since readonly
	 */
	public $MemberType;
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
	 * @param \System\Object|object $defaultValue
	 * @return \System\Void|void
	 */
	public function SetConstant($defaultValue){}
	private function SetMethodSemantics($mdBuilder, $semantics){}
	/**
	 * @param \System\Reflection\Emit\MethodBuilder $mdBuilder
	 * @return \System\Void|void
	 */
	public function SetGetMethod($mdBuilder){}
	/**
	 * @param \System\Reflection\Emit\MethodBuilder $mdBuilder
	 * @return \System\Void|void
	 */
	public function SetSetMethod($mdBuilder){}
	/**
	 * @param \System\Reflection\Emit\MethodBuilder $mdBuilder
	 * @return \System\Void|void
	 */
	public function AddOtherMethod($mdBuilder){}
	/**
	 * @uses PropertyBuilderOverride::SetCustomAttribute_1 <br>public , args: ($con, $binaryAttribute)<br>
	 * @uses PropertyBuilderOverride::SetCustomAttribute_2 <br>public , args: ($customBuilder)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetCustomAttribute (\override ...$args){}
}