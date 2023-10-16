<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RuntimeCustomAttributeDataMethodsOverride
{
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride] protected static function GetCustomAttributesInternal_1($target){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride] protected static function GetCustomAttributesInternal_2($target){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride] protected static function GetCustomAttributesInternal_3($target){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride] protected static function GetCustomAttributesInternal_4($target){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride] protected static function GetCustomAttributesInternal_5($target){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride] protected static function GetCustomAttributesInternal_6($target){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride] protected static function GetCustomAttributesInternal_7($target){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride] protected static function GetCustomAttributesInternal_8($target){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride] protected static function GetCustomAttributesInternal_9($target){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Init_1($dllImport){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Init_2($fieldOffset){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Init_3($marshalAs){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Init_4($forwardedTo){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Init_5($pca){}
}
/**
 */
class RuntimeCustomAttributeData extends \System\Reflection\CustomAttributeData
{
	/**
	 * @var \System\Reflection\ConstructorInfo
	 * @property
	 */
	public readonly $Constructor;
	/**
	 * @var \System\Collections\Generic\IList_1[System\Reflection\CustomAttributeTypedArgument]
	 * @property
	 */
	public readonly $ConstructorArguments;
	/**
	 * @var \System\Collections\Generic\IList_1[System\Reflection\CustomAttributeNamedArgument]
	 * @property
	 */
	public readonly $NamedArguments;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $AttributeType;
	/**
	 * @uses RuntimeCustomAttributeDataMethodsOverride::GetCustomAttributesInternal_1 ($target)
	 * @uses RuntimeCustomAttributeDataMethodsOverride::GetCustomAttributesInternal_2 ($target)
	 * @uses RuntimeCustomAttributeDataMethodsOverride::GetCustomAttributesInternal_3 ($target)
	 * @uses RuntimeCustomAttributeDataMethodsOverride::GetCustomAttributesInternal_4 ($target)
	 * @uses RuntimeCustomAttributeDataMethodsOverride::GetCustomAttributesInternal_5 ($target)
	 * @uses RuntimeCustomAttributeDataMethodsOverride::GetCustomAttributesInternal_6 ($target)
	 * @uses RuntimeCustomAttributeDataMethodsOverride::GetCustomAttributesInternal_7 ($target)
	 * @uses RuntimeCustomAttributeDataMethodsOverride::GetCustomAttributesInternal_8 ($target)
	 * @uses RuntimeCustomAttributeDataMethodsOverride::GetCustomAttributesInternal_9 ($target)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetCustomAttributesInternal(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IList_1 $customAttributes
	 * @param \System\ListBuilder_1& $pseudoAttributes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCombinedList($customAttributes, $pseudoAttributes){}
	/**
	 * @param \System\RuntimeType $type
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TypeToCustomAttributeEncoding($type){}
	/**
	 * @param \System\RuntimeType $parameterType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InitCustomAttributeType($parameterType){}
	/**
	 * @param \System\Reflection\RuntimeModule $module
	 * @param \System\Int32|int $tkTarget
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCustomAttributes($module, $tkTarget){}
	/**
	 * @param \System\Reflection\RuntimeModule $module
	 * @param \System\Int32|int $targetToken
	 * @return \System\Reflection\CustomAttributeRecord[]
	 */
	protected static function GetCustomAttributeRecords($module, $targetToken){}
	/**
	 * @param \System\Collections\Generic\IList_1 $attrs
	 * @param \System\Type $caType
	 * @param \System\Int32|int $parameter
	 * @return \System\Reflection\CustomAttributeTypedArgument
	 */
	protected static function Filter($attrs, $caType, $parameter){}
	/**
	 * @uses RuntimeCustomAttributeDataMethodsOverride::Init_1 ($dllImport)
	 * @uses RuntimeCustomAttributeDataMethodsOverride::Init_2 ($fieldOffset)
	 * @uses RuntimeCustomAttributeDataMethodsOverride::Init_3 ($marshalAs)
	 * @uses RuntimeCustomAttributeDataMethodsOverride::Init_4 ($forwardedTo)
	 * @uses RuntimeCustomAttributeDataMethodsOverride::Init_5 ($pca)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Init(mixed ...$args){}
}
