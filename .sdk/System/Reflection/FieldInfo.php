<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FieldInfoOverride {
	/**
	 * @deprecated
	 * @param \System\RuntimeFieldHandle $handle
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride]public static function GetFieldFromHandle_1 ($handle){}
	/**
	 * @deprecated
	 * @param \System\RuntimeFieldHandle $handle
	 * @param \System\RuntimeTypeHandle $declaringType
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride]public static function GetFieldFromHandle_2 ($handle, $declaringType){}
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetValue_1 ($obj, $value){}
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @param \System\Object|object $value
	 * @param \System\Reflection\BindingFlags $invokeAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetValue_2 ($obj, $value, $invokeAttr, $binder, $culture){}
}
class FieldInfo extends \System\Reflection\MemberInfo implements
	\System\Reflection\ICustomAttributeProvider
{
	use FieldInfoOverride;

	/**
	 * @property
	 * @var \System\Reflection\MemberTypes
	 * @since readonly
	 */
	public $MemberType;
	/**
	 * @property
	 * @var \System\Reflection\FieldAttributes
	 * @since readonly
	 */
	public $Attributes;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $FieldType;
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
	 * @var \System\RuntimeFieldHandle
	 * @since readonly
	 */
	public $FieldHandle;
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
	 * @uses FieldInfoOverride::GetFieldFromHandle_1 <br>public , args: ($handle)<br>
	 * @uses FieldInfoOverride::GetFieldFromHandle_2 <br>public , args: ($handle, $declaringType)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\FieldInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetFieldFromHandle (\override ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Object|object
	 */
	abstract public function GetValue($obj);
	/**
	 * @uses FieldInfoOverride::SetValue_1 <br>public , args: ($obj, $value)<br>
	 * @uses FieldInfoOverride::SetValue_2 <br>public , args: ($obj, $value, $invokeAttr, $binder, $culture)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetValue (\override ...$args){}
	/**
	 * @param \System\TypedReference &$obj
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public function SetValueDirect(&$obj, $value){}
	/**
	 * @param \System\TypedReference &$obj
	 * @return \System\Object|object
	 */
	public function GetValueDirect(&$obj){}
	/**
	 * @return \System\Object|object
	 */
	public function GetRawConstantValue(){}
	/**
	 * @return \System\Type[]
	 */
	public function GetOptionalCustomModifiers(){}
	/**
	 * @return \System\Type[]
	 */
	public function GetRequiredCustomModifiers(){}
}