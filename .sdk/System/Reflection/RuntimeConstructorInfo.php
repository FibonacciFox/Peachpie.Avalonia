<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RuntimeConstructorInfoOverride {
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeConstructorInfo $ci
	 * @param \System\Int32|int $argCount
	 * @param \System\Object|object $obj
	 * @param \System\Reflection\BindingFlags $invokeAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Object $parameters
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function InvokeWithManyArguments_1 ($ci, $argCount, $obj, $invokeAttr, $binder, $parameters, $culture){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeConstructorInfo $ci
	 * @param \System\Int32|int $argCount
	 * @param \System\Reflection\BindingFlags $invokeAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Object $parameters
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Object|object
	 */
	#[MethodOverride]private static function InvokeWithManyArguments_2 ($ci, $argCount, $invokeAttr, $binder, $parameters, $culture){}
}
final class RuntimeConstructorInfo extends \System\Reflection\ConstructorInfo implements
	\System\Reflection\ICustomAttributeProvider,
	\System\IRuntimeMethodInfo
{
	use RuntimeConstructorInfoOverride;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
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
	public $DeclaringType;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $ReflectedType;
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
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $ContainsGenericParameters;
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
	private function get_Value(){}
	/**
	 * @return \System\RuntimeType
	 */
	protected function GetRuntimeType(){}
	/**
	 * @return \System\Reflection\RuntimeModule
	 */
	protected function GetRuntimeModule(){}
	private function InvokeClassConstructor(){}
	private static function ComputeAndUpdateInvocationFlags($constructorInfo, $flagsToUpdate){}
	/**
	 * @param \System\Type $declaringType
	 * @param \System\Boolean|bool $isVarArg
	 * @return \System\Void|void
	 */
	protected static function CheckCanCreateInstance($declaringType, $isVarArg){}
	/**
	 * @return \System\Void|void
	 */
	protected function ThrowNoInvokeException(){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses RuntimeConstructorInfoOverride::InvokeWithManyArguments_1 <br>private , args: ($ci, $argCount, $obj, $invokeAttr, $binder, $parameters, $culture)<br>
	 * @uses RuntimeConstructorInfoOverride::InvokeWithManyArguments_2 <br>private , args: ($ci, $argCount, $invokeAttr, $binder, $parameters, $culture)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\Object|object|mixed|\override
	 */
	#[MethodOverridePrivate]function InvokeWithManyArguments (\override ...$args){}
}