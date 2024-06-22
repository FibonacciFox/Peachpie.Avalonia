<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MethodBaseOverride {
	/**
	 * @deprecated
	 * @param \System\RuntimeMethodHandle $handle
	 * @return \System\Reflection\MethodBase
	 */
	#[MethodOverride]public static function GetMethodFromHandle_1 ($handle){}
	/**
	 * @deprecated
	 * @param \System\RuntimeMethodHandle $handle
	 * @param \System\RuntimeTypeHandle $declaringType
	 * @return \System\Reflection\MethodBase
	 */
	#[MethodOverride]public static function GetMethodFromHandle_2 ($handle, $declaringType){}
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @param \System\Object $parameters
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function Invoke_1 ($obj, $parameters){}
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @param \System\Reflection\BindingFlags $invokeAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Object $parameters
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function Invoke_2 ($obj, $invokeAttr, $binder, $parameters, $culture){}
}
class MethodBase extends \System\Reflection\MemberInfo implements
	\System\Reflection\ICustomAttributeProvider
{
	use MethodBaseOverride;

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
	 * @var \System\Reflection\MemberTypes
	 * @since readonly
	 */
	public $MemberType;
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
	 * @uses MethodBaseOverride::GetMethodFromHandle_1 <br>public , args: ($handle)<br>
	 * @uses MethodBaseOverride::GetMethodFromHandle_2 <br>public , args: ($handle, $declaringType)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\MethodBase|mixed|\override
	 */
	#[MethodOverridePublic]function GetMethodFromHandle (\override ...$args){}
	/**
	 * @return \System\Reflection\MethodBase
	 */
	public static function GetCurrentMethod(){}
	private function GetMethodDesc(){}
	/**
	 * @return \System\Reflection\ParameterInfo[]
	 */
	protected function GetParametersNoCopy(){}
	/**
	 * @return \System\Type[]
	 */
	protected function GetParameterTypes(){}
	/**
	 * @return \System\Reflection\ParameterInfo[]
	 */
	abstract public function GetParameters();
	/**
	 * @return \System\Reflection\MethodImplAttributes
	 */
	abstract public function GetMethodImplementationFlags();
	/**
	 * @return \System\Reflection\MethodBody
	 */
	public function GetMethodBody(){}
	/**
	 * @return \System\Type[]
	 */
	public function GetGenericArguments(){}
	/**
	 * @uses MethodBaseOverride::Invoke_1 <br>public , args: ($obj, $parameters)<br>
	 * @uses MethodBaseOverride::Invoke_2 <br>public , args: ($obj, $invokeAttr, $binder, $parameters, $culture)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function Invoke (\override ...$args){}
	/**
	 * @param \System\Text\ValueStringBuilder& $sbParamList
	 * @param \System\Type $parameterTypes
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @return \System\Void|void
	 */
	protected static function AppendParameters($sbParamList, $parameterTypes, $callingConvention){}
	/**
	 * @param \System\Object|object $target
	 * @return \System\Void|void
	 */
	protected function ValidateInvokeTarget($target){}
	/**
	 * @param \System\Span_1 $copyOfParameters [generic: System\Object]
	 * @param \System\IntPtr* $byrefParameters
	 * @param \System\Span_1 $shouldCopyBack [generic: System\Reflection\ParameterCopyBackAction]
	 * @param \System\ReadOnlySpan_1 $parameters [generic: System\Object]
	 * @param \System\RuntimeType $sigTypes
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Reflection\BindingFlags $invokeAttr
	 * @return \System\Void|void
	 */
	protected function CheckArguments($copyOfParameters, $byrefParameters, $shouldCopyBack, $parameters, $sigTypes, $binder, $culture, $invokeAttr){}
}