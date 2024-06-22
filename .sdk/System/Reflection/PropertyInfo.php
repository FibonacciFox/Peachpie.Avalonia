<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PropertyInfoOverride {
	/**
	 * @deprecated
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetAccessors_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $nonPublic
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetAccessors_2 ($nonPublic){}
	/**
	 * @deprecated
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetGetMethod_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $nonPublic
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetGetMethod_2 ($nonPublic){}
	/**
	 * @deprecated
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetSetMethod_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $nonPublic
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetSetMethod_2 ($nonPublic){}
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function GetValue_1 ($obj){}
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @param \System\Object $index
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function GetValue_2 ($obj, $index){}
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @param \System\Reflection\BindingFlags $invokeAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Object $index
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function GetValue_3 ($obj, $invokeAttr, $binder, $index, $culture){}
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
	 * @param \System\Object $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetValue_2 ($obj, $value, $index){}
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @param \System\Object|object $value
	 * @param \System\Reflection\BindingFlags $invokeAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Object $index
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetValue_3 ($obj, $value, $invokeAttr, $binder, $index, $culture){}
}
class PropertyInfo extends \System\Reflection\MemberInfo implements
	\System\Reflection\ICustomAttributeProvider
{
	use PropertyInfoOverride;

	/**
	 * @property
	 * @var \System\Reflection\MemberTypes
	 * @since readonly
	 */
	public $MemberType;
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
	public $IsSpecialName;
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
	 * @return \System\Reflection\ParameterInfo[]
	 */
	abstract public function GetIndexParameters();
	/**
	 * @uses PropertyInfoOverride::GetAccessors_1 <br>public , args: ()<br>
	 * @uses PropertyInfoOverride::GetAccessors_2 <br>public , args: ($nonPublic)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\MethodInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetAccessors (\override ...$args){}
	/**
	 * @uses PropertyInfoOverride::GetGetMethod_1 <br>public , args: ()<br>
	 * @uses PropertyInfoOverride::GetGetMethod_2 <br>public , args: ($nonPublic)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\MethodInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetGetMethod (\override ...$args){}
	/**
	 * @uses PropertyInfoOverride::GetSetMethod_1 <br>public , args: ()<br>
	 * @uses PropertyInfoOverride::GetSetMethod_2 <br>public , args: ($nonPublic)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\MethodInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetSetMethod (\override ...$args){}
	/**
	 * @return \System\Type[]
	 */
	public function GetOptionalCustomModifiers(){}
	/**
	 * @return \System\Type[]
	 */
	public function GetRequiredCustomModifiers(){}
	/**
	 * @uses PropertyInfoOverride::GetValue_1 <br>public , args: ($obj)<br>
	 * @uses PropertyInfoOverride::GetValue_2 <br>public , args: ($obj, $index)<br>
	 * @uses PropertyInfoOverride::GetValue_3 <br>public , args: ($obj, $invokeAttr, $binder, $index, $culture)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function GetValue (\override ...$args){}
	/**
	 * @return \System\Object|object
	 */
	public function GetConstantValue(){}
	/**
	 * @return \System\Object|object
	 */
	public function GetRawConstantValue(){}
	/**
	 * @uses PropertyInfoOverride::SetValue_1 <br>public , args: ($obj, $value)<br>
	 * @uses PropertyInfoOverride::SetValue_2 <br>public , args: ($obj, $value, $index)<br>
	 * @uses PropertyInfoOverride::SetValue_3 <br>public , args: ($obj, $value, $invokeAttr, $binder, $index, $culture)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetValue (\override ...$args){}
}