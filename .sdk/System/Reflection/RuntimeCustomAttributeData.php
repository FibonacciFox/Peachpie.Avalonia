<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RuntimeCustomAttributeDataOverride {
	/**
	 * @deprecated
	 * @param \System\RuntimeType $target
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride]protected static function GetCustomAttributesInternal_1 ($target){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeFieldInfo $target
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride]protected static function GetCustomAttributesInternal_2 ($target){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeMethodInfo $target
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride]protected static function GetCustomAttributesInternal_3 ($target){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeConstructorInfo $target
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride]protected static function GetCustomAttributesInternal_4 ($target){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeEventInfo $target
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride]protected static function GetCustomAttributesInternal_5 ($target){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimePropertyInfo $target
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride]protected static function GetCustomAttributesInternal_6 ($target){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeModule $target
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride]protected static function GetCustomAttributesInternal_7 ($target){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeAssembly $target
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride]protected static function GetCustomAttributesInternal_8 ($target){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeParameterInfo $target
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride]protected static function GetCustomAttributesInternal_9 ($target){}
	/**
	 * @deprecated
	 * @param \System\Runtime\InteropServices\DllImportAttribute $dllImport
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Init_1 ($dllImport){}
	/**
	 * @deprecated
	 * @param \System\Runtime\InteropServices\FieldOffsetAttribute $fieldOffset
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Init_2 ($fieldOffset){}
	/**
	 * @deprecated
	 * @param \System\Runtime\InteropServices\MarshalAsAttribute $marshalAs
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Init_3 ($marshalAs){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\TypeForwardedToAttribute $forwardedTo
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Init_4 ($forwardedTo){}
	/**
	 * @deprecated
	 * @param \System\Object|object $pca
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Init_5 ($pca){}
}
final class RuntimeCustomAttributeData extends \System\Reflection\CustomAttributeData
{
	use RuntimeCustomAttributeDataOverride;

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
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $AttributeType;
	/**
	 * @uses RuntimeCustomAttributeDataOverride::GetCustomAttributesInternal_1 <br>protected , args: ($target)<br>
	 * @uses RuntimeCustomAttributeDataOverride::GetCustomAttributesInternal_2 <br>protected , args: ($target)<br>
	 * @uses RuntimeCustomAttributeDataOverride::GetCustomAttributesInternal_3 <br>protected , args: ($target)<br>
	 * @uses RuntimeCustomAttributeDataOverride::GetCustomAttributesInternal_4 <br>protected , args: ($target)<br>
	 * @uses RuntimeCustomAttributeDataOverride::GetCustomAttributesInternal_5 <br>protected , args: ($target)<br>
	 * @uses RuntimeCustomAttributeDataOverride::GetCustomAttributesInternal_6 <br>protected , args: ($target)<br>
	 * @uses RuntimeCustomAttributeDataOverride::GetCustomAttributesInternal_7 <br>protected , args: ($target)<br>
	 * @uses RuntimeCustomAttributeDataOverride::GetCustomAttributesInternal_8 <br>protected , args: ($target)<br>
	 * @uses RuntimeCustomAttributeDataOverride::GetCustomAttributesInternal_9 <br>protected , args: ($target)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IList_1|mixed|\override
	 */
	#[MethodOverrideProtected]function GetCustomAttributesInternal (\override ...$args){}
	private static function GetCombinedList($customAttributes, $pseudoAttributes){}
	private static function TypeToCustomAttributeEncoding($type){}
	private static function InitCustomAttributeType($parameterType){}
	private static function GetCustomAttributes($module, $tkTarget){}
	/**
	 * @param \System\Reflection\RuntimeModule $module
	 * @param \System\Int32|int $targetToken
	 * @return \System\Reflection\CustomAttributeRecord[]
	 */
	protected static function GetCustomAttributeRecords($module, $targetToken){}
	/**
	 * @param \System\Collections\Generic\IList_1 $attrs [generic: System\Reflection\CustomAttributeData]
	 * @param \System\Type $caType
	 * @param \System\Int32|int $parameter
	 * @return \System\Reflection\CustomAttributeTypedArgument
	 */
	protected static function Filter($attrs, $caType, $parameter){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses RuntimeCustomAttributeDataOverride::Init_1 <br>private , args: ($dllImport)<br>
	 * @uses RuntimeCustomAttributeDataOverride::Init_2 <br>private , args: ($fieldOffset)<br>
	 * @uses RuntimeCustomAttributeDataOverride::Init_3 <br>private , args: ($marshalAs)<br>
	 * @uses RuntimeCustomAttributeDataOverride::Init_4 <br>private , args: ($forwardedTo)<br>
	 * @uses RuntimeCustomAttributeDataOverride::Init_5 <br>private , args: ($pca)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function Init (\override ...$args){}
}