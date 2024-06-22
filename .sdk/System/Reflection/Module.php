<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ModuleOverride {
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
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetMethod_1 ($name){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Type $types
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetMethod_2 ($name, $types){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Reflection\CallingConventions $callConvention
	 * @param \System\Type $types
	 * @param \System\Reflection\ParameterModifier $modifiers
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetMethod_3 ($name, $bindingAttr, $binder, $callConvention, $types, $modifiers){}
	/**
	 * @deprecated
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetMethods_1 (){}
	/**
	 * @deprecated
	 * @param \System\Reflection\BindingFlags $bindingFlags
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetMethods_2 ($bindingFlags){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride]public function GetField_1 ($name){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride]public function GetField_2 ($name, $bindingAttr){}
	/**
	 * @deprecated
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride]public function GetFields_1 (){}
	/**
	 * @deprecated
	 * @param \System\Reflection\BindingFlags $bindingFlags
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride]public function GetFields_2 ($bindingFlags){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $metadataToken
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride]public function ResolveField_1 ($metadataToken){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $metadataToken
	 * @param \System\Type $genericTypeArguments
	 * @param \System\Type $genericMethodArguments
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride]public function ResolveField_2 ($metadataToken, $genericTypeArguments, $genericMethodArguments){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $metadataToken
	 * @return \System\Reflection\MemberInfo
	 */
	#[MethodOverride]public function ResolveMember_1 ($metadataToken){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $metadataToken
	 * @param \System\Type $genericTypeArguments
	 * @param \System\Type $genericMethodArguments
	 * @return \System\Reflection\MemberInfo
	 */
	#[MethodOverride]public function ResolveMember_2 ($metadataToken, $genericTypeArguments, $genericMethodArguments){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $metadataToken
	 * @return \System\Reflection\MethodBase
	 */
	#[MethodOverride]public function ResolveMethod_1 ($metadataToken){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $metadataToken
	 * @param \System\Type $genericTypeArguments
	 * @param \System\Type $genericMethodArguments
	 * @return \System\Reflection\MethodBase
	 */
	#[MethodOverride]public function ResolveMethod_2 ($metadataToken, $genericTypeArguments, $genericMethodArguments){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $metadataToken
	 * @return \System\Type
	 */
	#[MethodOverride]public function ResolveType_1 ($metadataToken){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $metadataToken
	 * @param \System\Type $genericTypeArguments
	 * @param \System\Type $genericMethodArguments
	 * @return \System\Type
	 */
	#[MethodOverride]public function ResolveType_2 ($metadataToken, $genericTypeArguments, $genericMethodArguments){}
}
class Module extends \System\Object implements
	\System\Reflection\ICustomAttributeProvider,
	\System\Runtime\Serialization\ISerializable
{
	use ModuleOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\TypeFilter
	 */
	public static $FilterTypeName;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\TypeFilter
	 */
	public static $FilterTypeNameIgnoreCase;
	/**
	 * @property
	 * @var \System\Reflection\Assembly
	 * @since readonly
	 */
	public $Assembly;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $FullyQualifiedName;
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
	public $MDStreamVersion;
	/**
	 * @property
	 * @var \System\Guid
	 * @since readonly
	 */
	public $ModuleVersionId;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $ScopeName;
	/**
	 * @property
	 * @var \System\ModuleHandle
	 * @since readonly
	 */
	public $ModuleHandle;
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
	 * @return \System\ModuleHandle
	 */
	protected function GetModuleHandleImpl(){}
	/**
	 * @param \System\Reflection\PortableExecutableKinds& &$peKind
	 * @param \System\Reflection\ImageFileMachine& &$machine
	 * @return \System\Void|void
	 */
	public function GetPEKind(&$peKind, &$machine){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function IsResource(){}
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
	 * @uses ModuleOverride::GetCustomAttributes_1 <br>public , args: ($inherit)<br>
	 * @uses ModuleOverride::GetCustomAttributes_2 <br>public , args: ($attributeType, $inherit)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|mixed|\override
	 */
	#[MethodOverridePublic]function GetCustomAttributes (\override ...$args){}
	/**
	 * @uses ModuleOverride::GetMethod_1 <br>public , args: ($name)<br>
	 * @uses ModuleOverride::GetMethod_2 <br>public , args: ($name, $types)<br>
	 * @uses ModuleOverride::GetMethod_3 <br>public , args: ($name, $bindingAttr, $binder, $callConvention, $types, $modifiers)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\MethodInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetMethod (\override ...$args){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Reflection\CallingConventions $callConvention
	 * @param \System\Type $types
	 * @param \System\Reflection\ParameterModifier $modifiers
	 * @return \System\Reflection\MethodInfo
	 */
	protected function GetMethodImpl($name, $bindingAttr, $binder, $callConvention, $types, $modifiers){}
	/**
	 * @uses ModuleOverride::GetMethods_1 <br>public , args: ()<br>
	 * @uses ModuleOverride::GetMethods_2 <br>public , args: ($bindingFlags)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\MethodInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetMethods (\override ...$args){}
	/**
	 * @uses ModuleOverride::GetField_1 <br>public , args: ($name)<br>
	 * @uses ModuleOverride::GetField_2 <br>public , args: ($name, $bindingAttr)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\FieldInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetField (\override ...$args){}
	/**
	 * @uses ModuleOverride::GetFields_1 <br>public , args: ()<br>
	 * @uses ModuleOverride::GetFields_2 <br>public , args: ($bindingFlags)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\FieldInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetFields (\override ...$args){}
	/**
	 * @return \System\Type[]
	 */
	public function GetTypes(){}
	/**
	 * @param \System\Reflection\TypeFilter $filter
	 * @param \System\Object|object $filterCriteria
	 * @return \System\Type[]
	 */
	public function FindTypes($filter, $filterCriteria){}
	/**
	 * @uses ModuleOverride::ResolveField_1 <br>public , args: ($metadataToken)<br>
	 * @uses ModuleOverride::ResolveField_2 <br>public , args: ($metadataToken, $genericTypeArguments, $genericMethodArguments)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\FieldInfo|mixed|\override
	 */
	#[MethodOverridePublic]function ResolveField (\override ...$args){}
	/**
	 * @uses ModuleOverride::ResolveMember_1 <br>public , args: ($metadataToken)<br>
	 * @uses ModuleOverride::ResolveMember_2 <br>public , args: ($metadataToken, $genericTypeArguments, $genericMethodArguments)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\MemberInfo|mixed|\override
	 */
	#[MethodOverridePublic]function ResolveMember (\override ...$args){}
	/**
	 * @uses ModuleOverride::ResolveMethod_1 <br>public , args: ($metadataToken)<br>
	 * @uses ModuleOverride::ResolveMethod_2 <br>public , args: ($metadataToken, $genericTypeArguments, $genericMethodArguments)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\MethodBase|mixed|\override
	 */
	#[MethodOverridePublic]function ResolveMethod (\override ...$args){}
	/**
	 * @param \System\Int32|int $metadataToken
	 * @return \System\Byte[]
	 */
	public function ResolveSignature($metadataToken){}
	/**
	 * @param \System\Int32|int $metadataToken
	 * @return \System\String|string
	 */
	public function ResolveString($metadataToken){}
	/**
	 * @uses ModuleOverride::ResolveType_1 <br>public , args: ($metadataToken)<br>
	 * @uses ModuleOverride::ResolveType_2 <br>public , args: ($metadataToken, $genericTypeArguments, $genericMethodArguments)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Type|mixed|\override
	 */
	#[MethodOverridePublic]function ResolveType (\override ...$args){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public function GetObjectData($info, $context){}
	/**
	 * @param \System\Reflection\Module $left
	 * @param \System\Reflection\Module $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Reflection\Module $left
	 * @param \System\Reflection\Module $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	private static function FilterTypeNameImpl($cls, $filterCriteria, $comparison){}
}