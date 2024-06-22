<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DynamicMethodOverride {
	/**
	 * @deprecated
	 * @return \System\Reflection\Emit\ILGenerator
	 */
	#[MethodOverride]public function GetILGenerator_1 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $streamSize
	 * @return \System\Reflection\Emit\ILGenerator
	 */
	#[MethodOverride]public function GetILGenerator_2 ($streamSize){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Type $returnType
	 * @param \System\Type $parameterTypes
	 */
	#[MethodOverride]public function __construct_1 ($name, $returnType, $parameterTypes){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Type $returnType
	 * @param \System\Type $parameterTypes
	 * @param \System\Boolean|bool $restrictedSkipVisibility
	 */
	#[MethodOverride]public function __construct_2 ($name, $returnType, $parameterTypes, $restrictedSkipVisibility){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Type $returnType
	 * @param \System\Type $parameterTypes
	 * @param \System\Reflection\Module $m
	 */
	#[MethodOverride]public function __construct_3 ($name, $returnType, $parameterTypes, $m){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Type $returnType
	 * @param \System\Type $parameterTypes
	 * @param \System\Reflection\Module $m
	 * @param \System\Boolean|bool $skipVisibility
	 */
	#[MethodOverride]public function __construct_4 ($name, $returnType, $parameterTypes, $m, $skipVisibility){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\MethodAttributes $attributes
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @param \System\Type $returnType
	 * @param \System\Type $parameterTypes
	 * @param \System\Reflection\Module $m
	 * @param \System\Boolean|bool $skipVisibility
	 */
	#[MethodOverride]public function __construct_5 ($name, $attributes, $callingConvention, $returnType, $parameterTypes, $m, $skipVisibility){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Type $returnType
	 * @param \System\Type $parameterTypes
	 * @param \System\Type $owner
	 */
	#[MethodOverride]public function __construct_6 ($name, $returnType, $parameterTypes, $owner){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Type $returnType
	 * @param \System\Type $parameterTypes
	 * @param \System\Type $owner
	 * @param \System\Boolean|bool $skipVisibility
	 */
	#[MethodOverride]public function __construct_7 ($name, $returnType, $parameterTypes, $owner, $skipVisibility){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\MethodAttributes $attributes
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @param \System\Type $returnType
	 * @param \System\Type $parameterTypes
	 * @param \System\Type $owner
	 * @param \System\Boolean|bool $skipVisibility
	 */
	#[MethodOverride]public function __construct_8 ($name, $attributes, $callingConvention, $returnType, $parameterTypes, $owner, $skipVisibility){}
}
final class DynamicMethod extends \System\Reflection\MethodInfo implements
	\System\Reflection\ICustomAttributeProvider
{
	use DynamicMethodOverride;

	/**
	 * @field
	 * @var \System\IRuntimeMethodInfo
	 */
	protected $m_methodHandle;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $m_skipVisibility;
	/**
	 * @field
	 * @var \System\RuntimeType
	 */
	protected $m_typeOwner;
	/**
	 * @field
	 * @var \System\Reflection\Emit\DynamicResolver
	 */
	protected $m_resolver;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $m_restrictedSkipVisibility;
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
	 * @var \System\RuntimeMethodHandle
	 * @since readonly
	 */
	public $MethodHandle;
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
	 * @var \System\Type
	 * @since readonly
	 */
	public $ReturnType;
	/**
	 * @property
	 * @var \System\Reflection\ParameterInfo
	 * @since readonly
	 */
	public $ReturnParameter;
	/**
	 * @property
	 * @var \System\Reflection\ICustomAttributeProvider
	 * @since readonly
	 */
	public $ReturnTypeCustomAttributes;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $InitLocals;
	/**
	 * @property
	 * @var \System\Reflection\MemberTypes
	 * @since readonly
	 */
	public $MemberType;
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
	private static function CheckConsistency($attributes, $callingConvention){}
	private static function GetDynamicMethodsModule(){}
	private function Init($name, $attributes, $callingConvention, $returnType, $signature, $owner, $m, $skipVisibility, $transparentMethod){}
	/**
	 * @return \System\RuntimeMethodHandle
	 */
	protected function GetMethodDescriptor(){}
	private static function InvokeWithManyArguments($mi, $argCount, $obj, $invokeAttr, $binder, $parameters, $culture){}
	/**
	 * @param \System\Int32|int $position
	 * @param \System\Reflection\ParameterAttributes $attributes
	 * @param \System\String|string $parameterName
	 * @return \System\Reflection\Emit\ParameterBuilder
	 */
	public function DefineParameter($position, $attributes, $parameterName){}
	/**
	 * @return \System\Reflection\Emit\DynamicILInfo
	 */
	public function GetDynamicILInfo(){}
	/**
	 * @uses DynamicMethodOverride::GetILGenerator_1 <br>public , args: ()<br>
	 * @uses DynamicMethodOverride::GetILGenerator_2 <br>public , args: ($streamSize)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\Emit\ILGenerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetILGenerator (\override ...$args){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	protected function GetMethodInfo(){}
	/**
	 * @uses DynamicMethodOverride::__construct_1 <br>public , args: ($name, $returnType, $parameterTypes)<br>
	 * @uses DynamicMethodOverride::__construct_2 <br>public , args: ($name, $returnType, $parameterTypes, $restrictedSkipVisibility)<br>
	 * @uses DynamicMethodOverride::__construct_3 <br>public , args: ($name, $returnType, $parameterTypes, $m)<br>
	 * @uses DynamicMethodOverride::__construct_4 <br>public , args: ($name, $returnType, $parameterTypes, $m, $skipVisibility)<br>
	 * @uses DynamicMethodOverride::__construct_5 <br>public , args: ($name, $attributes, $callingConvention, $returnType, $parameterTypes, $m, $skipVisibility)<br>
	 * @uses DynamicMethodOverride::__construct_6 <br>public , args: ($name, $returnType, $parameterTypes, $owner)<br>
	 * @uses DynamicMethodOverride::__construct_7 <br>public , args: ($name, $returnType, $parameterTypes, $owner, $skipVisibility)<br>
	 * @uses DynamicMethodOverride::__construct_8 <br>public , args: ($name, $attributes, $callingConvention, $returnType, $parameterTypes, $owner, $skipVisibility)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}