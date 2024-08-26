<?php
namespace System\Reflection\Emit;
final class SymbolMethod extends \System\Reflection\MethodInfo implements
	\System\Reflection\ICustomAttributeProvider
{
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
	 * @var \System\Type
	 * @since readonly
	 */
	public $ReflectedType;
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
	 * @var \System\Reflection\MethodAttributes
	 * @since readonly
	 */
	public $Attributes;
	/**
	 * @property
	 * @var \System\Reflection\CallingConventions
	 * @since readonly
	 */
	public $CallingConvention;
	/**
	 * @property
	 * @var \System\RuntimeMethodHandle
	 * @since readonly
	 */
	public $MethodHandle;
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
	 * @var \System\Reflection\MethodImplAttributes
	 * @since readonly
	 */
	public $MethodImplementationFlags;
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
	 * @param \System\Reflection\Emit\ModuleBuilder $mod
	 * @return \System\Int32|int
	 */
	protected function GetToken($mod){}
	/**
	 * @return \System\Reflection\Module
	 */
	public function GetModule(){}
}