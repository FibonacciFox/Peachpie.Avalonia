<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EventInfoOverride {
	/**
	 * @deprecated
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetOtherMethods_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $nonPublic
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetOtherMethods_2 ($nonPublic){}
	/**
	 * @deprecated
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetAddMethod_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $nonPublic
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetAddMethod_2 ($nonPublic){}
	/**
	 * @deprecated
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetRemoveMethod_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $nonPublic
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetRemoveMethod_2 ($nonPublic){}
	/**
	 * @deprecated
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetRaiseMethod_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $nonPublic
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public function GetRaiseMethod_2 ($nonPublic){}
}
class EventInfo extends \System\Reflection\MemberInfo implements
	\System\Reflection\ICustomAttributeProvider
{
	use EventInfoOverride;

	/**
	 * @property
	 * @var \System\Reflection\MemberTypes
	 * @since readonly
	 */
	public $MemberType;
	/**
	 * @property
	 * @var \System\Reflection\EventAttributes
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
	 * @var \System\Reflection\MethodInfo
	 * @since readonly
	 */
	public $AddMethod;
	/**
	 * @property
	 * @var \System\Reflection\MethodInfo
	 * @since readonly
	 */
	public $RemoveMethod;
	/**
	 * @property
	 * @var \System\Reflection\MethodInfo
	 * @since readonly
	 */
	public $RaiseMethod;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsMulticast;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $EventHandlerType;
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
	 * @uses EventInfoOverride::GetOtherMethods_1 <br>public , args: ()<br>
	 * @uses EventInfoOverride::GetOtherMethods_2 <br>public , args: ($nonPublic)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\MethodInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetOtherMethods (\override ...$args){}
	/**
	 * @uses EventInfoOverride::GetAddMethod_1 <br>public , args: ()<br>
	 * @uses EventInfoOverride::GetAddMethod_2 <br>public , args: ($nonPublic)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\MethodInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetAddMethod (\override ...$args){}
	/**
	 * @uses EventInfoOverride::GetRemoveMethod_1 <br>public , args: ()<br>
	 * @uses EventInfoOverride::GetRemoveMethod_2 <br>public , args: ($nonPublic)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\MethodInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetRemoveMethod (\override ...$args){}
	/**
	 * @uses EventInfoOverride::GetRaiseMethod_1 <br>public , args: ()<br>
	 * @uses EventInfoOverride::GetRaiseMethod_2 <br>public , args: ($nonPublic)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\MethodInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetRaiseMethod (\override ...$args){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\Delegate $handler
	 * @return \System\Void|void
	 */
	public function AddEventHandler($target, $handler){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\Delegate $handler
	 * @return \System\Void|void
	 */
	public function RemoveEventHandler($target, $handler){}
}