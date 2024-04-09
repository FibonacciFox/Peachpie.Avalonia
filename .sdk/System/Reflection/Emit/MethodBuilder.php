<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MethodBuilderOverride {
	/**
	 * @deprecated
	 * @return \System\Reflection\Emit\ILGenerator
	 */
	#[MethodOverride]public function GetILGenerator_1 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $size
	 * @return \System\Reflection\Emit\ILGenerator
	 */
	#[MethodOverride]public function GetILGenerator_2 ($size){}
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
final class MethodBuilder extends \System\Reflection\MethodInfo implements
	\System\Reflection\ICustomAttributeProvider
{
	use MethodBuilderOverride;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $m_strName;
	/**
	 * @field
	 * @var \System\Reflection\Emit\TypeBuilder
	 */
	protected $m_containingType;
	/**
	 * @field
	 * @var \System\Reflection\Emit\LocalSymInfo
	 */
	protected $m_localSymInfo;
	/**
	 * @field
	 * @var \System\Reflection\Emit\ILGenerator
	 */
	protected $m_ilGenerator;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $m_bIsBaked;
	/**
	 * @field
	 * @var \System\Type[]
	 */
	protected $m_parameterTypes;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $m_canBeRuntimeImpl;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $m_isDllImport;
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
	public $DeclaringType;
	/**
	 * @property
	 * @var \System\Reflection\ICustomAttributeProvider
	 * @since readonly
	 */
	public $ReturnTypeCustomAttributes;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $ReflectedType;
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
	public $IsGenericMethod;
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
	 * @param \System\Reflection\Emit\ILGenerator $il
	 * @return \System\Void|void
	 */
	protected function CreateMethodBodyHelper($il){}
	/**
	 * @return \System\Void|void
	 */
	protected function ReleaseBakedStructures(){}
	/**
	 * @param \System\Reflection\MethodBase $method
	 * @return \System\Type
	 */
	protected static function GetMethodBaseReturnType($method){}
	/**
	 * @param \System\Int32|int $token
	 * @return \System\Void|void
	 */
	protected function SetToken($token){}
	/**
	 * @return \System\Byte[]
	 */
	protected function GetBody(){}
	/**
	 * @return \System\Int32[]|array
	 */
	protected function GetTokenFixups(){}
	/**
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	protected function GetMethodSignature(){}
	/**
	 * @param \System\Int32& &$signatureLength
	 * @return \System\Byte[]
	 */
	protected function GetLocalSignature(&$signatureLength){}
	/**
	 * @return \System\Int32|int
	 */
	protected function GetMaxStack(){}
	/**
	 * @return \System\Reflection\Emit\ExceptionHandler[]
	 */
	protected function GetExceptionHandlers(){}
	/**
	 * @param \System\Reflection\Emit\__ExceptionInfo $excp
	 * @return \System\Int32|int
	 */
	protected static function CalculateNumberOfExceptions($excp){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected function IsTypeCreated(){}
	/**
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	protected function GetTypeBuilder(){}
	/**
	 * @return \System\Reflection\Emit\ModuleBuilder
	 */
	protected function GetModuleBuilder(){}
	/**
	 * @param \System\String ...$names
	 * @return \System\Reflection\Emit\GenericTypeParameterBuilder[]
	 */
	public function DefineGenericParameters(...$names){}
	/**
	 * @return \System\Void|void
	 */
	protected function ThrowIfGeneric(){}
	private function GetToken(){}
	private function GetTokenNoLock(){}
	/**
	 * @param \System\Type ...$parameterTypes
	 * @return \System\Void|void
	 */
	public function SetParameters(...$parameterTypes){}
	/**
	 * @param \System\Type $returnType
	 * @return \System\Void|void
	 */
	public function SetReturnType($returnType){}
	/**
	 * @param \System\Type $returnType
	 * @param \System\Type $returnTypeRequiredCustomModifiers
	 * @param \System\Type $returnTypeOptionalCustomModifiers
	 * @param \System\Type $parameterTypes
	 * @param \System\Type $parameterTypeRequiredCustomModifiers [generic: ][]
	 * @param \System\Type $parameterTypeOptionalCustomModifiers [generic: ][]
	 * @return \System\Void|void
	 */
	public function SetSignature($returnType, $returnTypeRequiredCustomModifiers, $returnTypeOptionalCustomModifiers, $parameterTypes, $parameterTypeRequiredCustomModifiers, $parameterTypeOptionalCustomModifiers){}
	/**
	 * @param \System\Int32|int $position
	 * @param \System\Reflection\ParameterAttributes $attributes
	 * @param \System\String|string $strParamName
	 * @return \System\Reflection\Emit\ParameterBuilder
	 */
	public function DefineParameter($position, $attributes, $strParamName){}
	/**
	 * @param \System\Reflection\MethodImplAttributes $attributes
	 * @return \System\Void|void
	 */
	public function SetImplementationFlags($attributes){}
	/**
	 * @uses MethodBuilderOverride::GetILGenerator_1 <br>public , args: ()<br>
	 * @uses MethodBuilderOverride::GetILGenerator_2 <br>public , args: ($size)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\Emit\ILGenerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetILGenerator (\override ...$args){}
	private function ThrowIfShouldNotHaveBody(){}
	/**
	 * @return \System\Reflection\Module
	 */
	protected function GetModule(){}
	/**
	 * @uses MethodBuilderOverride::SetCustomAttribute_1 <br>public , args: ($con, $binaryAttribute)<br>
	 * @uses MethodBuilderOverride::SetCustomAttribute_2 <br>public , args: ($customBuilder)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetCustomAttribute (\override ...$args){}
	private static function IsKnownCA($con){}
	private function ParseCA($con){}
}