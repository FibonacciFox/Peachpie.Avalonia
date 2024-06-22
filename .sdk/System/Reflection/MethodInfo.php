<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MethodInfoOverride {
	/**
	 * @deprecated
	 * @param \System\Type $delegateType
	 * @return \System\Delegate
	 */
	#[MethodOverride]public function CreateDelegate_1 ($delegateType){}
	/**
	 * @deprecated
	 * @param \System\Type $delegateType
	 * @param \System\Object|object $target
	 * @return \System\Delegate
	 */
	#[MethodOverride]public function CreateDelegate_2 ($delegateType, $target){}
	/**
	 * @deprecated
	 * @return \T|object
	 */
	#[MethodOverride]public function CreateDelegate_3 (){}
	/**
	 * @deprecated
	 * @param \System\Object|object $target
	 * @return \T|object
	 */
	#[MethodOverride]public function CreateDelegate_4 ($target){}
}
class MethodInfo extends \System\Reflection\MethodBase implements
	\System\Reflection\ICustomAttributeProvider
{
	use MethodInfoOverride;

	/**
	 * @property
	 * @var \System\Reflection\MemberTypes
	 * @since readonly
	 */
	public $MemberType;
	/**
	 * @property
	 * @var \System\Reflection\ParameterInfo
	 * @since readonly
	 */
	public $ReturnParameter;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $ReturnType;
	/**
	 * @property
	 * @var \System\Reflection\ICustomAttributeProvider
	 * @since readonly
	 */
	public $ReturnTypeCustomAttributes;
	/**
	 * @property
	 * @var \System\Reflection\MethodAttributes
	 * @since readonly
	 */
	public $Attributes;
	/**
	 * @property
	 * @var \System\Reflection\MethodImplAttributes
	 * @since readonly
	 */
	public $MethodImplementationFlags;
	/**
	 * @property
	 * @var \System\Reflection\CallingConventions
	 * @since readonly
	 */
	public $CallingConvention;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsAbstract;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsConstructor;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsFinal;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsHideBySig;
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
	public $IsVirtual;
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
	public $IsConstructedGenericMethod;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsGenericMethod;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsGenericMethodDefinition;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $ContainsGenericParameters;
	/**
	 * @property
	 * @var \System\RuntimeMethodHandle
	 * @since readonly
	 */
	public $MethodHandle;
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
	 * @return \System\Reflection\MethodInfo
	 */
	public function GetGenericMethodDefinition(){}
	/**
	 * @param \System\Type ...$typeArguments
	 * @return \System\Reflection\MethodInfo
	 */
	public function MakeGenericMethod(...$typeArguments){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	abstract public function GetBaseDefinition();
	/**
	 * @uses MethodInfoOverride::CreateDelegate_1 <br>public , args: ($delegateType)<br>
	 * @uses MethodInfoOverride::CreateDelegate_2 <br>public , args: ($delegateType, $target)<br>
	 * @uses MethodInfoOverride::CreateDelegate_3 <br>public , args: ()<br>
	 * @uses MethodInfoOverride::CreateDelegate_4 <br>public , args: ($target)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Delegate|\T|object|mixed|\override
	 */
	#[MethodOverridePublic]function CreateDelegate (\override ...$args){}
}