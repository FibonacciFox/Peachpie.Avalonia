<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RuntimeModuleOverride {
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\String|string $className
	 * @param \System\Boolean|bool $throwOnError
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $type
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $keepAlive
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function GetType_1 ($module, $className, $throwOnError, $ignoreCase, $type, $keepAlive){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Runtime\CompilerServices\StringHandleOnStack $retString
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function GetFullyQualifiedName_1 ($module, $retString){}
	/**
	 * @deprecated
	 * @return \System\String|string
	 */
	#[MethodOverride]protected function GetFullyQualifiedName_2 (){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeModule $module
	 * @return \System\RuntimeType
	 */
	#[MethodOverride]private static function GetTypes_1 ($module){}
}
final class RuntimeModule extends \System\Reflection\Module implements
	\System\Reflection\ICustomAttributeProvider,
	\System\Runtime\Serialization\ISerializable
{
	use RuntimeModuleOverride;

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MDStreamVersion;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $FullyQualifiedName;
	/**
	 * @property
	 * @var \System\Guid
	 * @since readonly
	 */
	public $ModuleVersionId;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MetadataToken;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $ScopeName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Reflection\Assembly
	 * @since readonly
	 */
	public $Assembly;
	/**
	 * @property
	 * @var \System\ModuleHandle
	 * @since readonly
	 */
	public $ModuleHandle;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\CustomAttributeData]
	 * @since readonly
	 */
	public $CustomAttributes;
	private static function GetScopeName($module, $retString){}
	/**
	 * @uses RuntimeModuleOverride::GetFullyQualifiedName_1 <br>private , args: ($module, $retString)<br>
	 * @uses RuntimeModuleOverride::GetFullyQualifiedName_2 <br>protected , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\String|string|mixed|\override
	 */
	#[MethodOverrideProtected]function GetFullyQualifiedName (\override ...$args){}
	/**
	 * @return \System\RuntimeType[]
	 */
	protected function GetDefinedTypes(){}
	private static function ConvertToTypeHandleArray($genericArguments){}
	private function ResolveLiteralField($metadataToken, $genericTypeArguments, $genericMethodArguments){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Reflection\CallingConventions $callConvention
	 * @param \System\Type $types
	 * @param \System\Reflection\ParameterModifier $modifiers
	 * @return \System\Reflection\MethodInfo
	 */
	protected function GetMethodInternal($name, $bindingAttr, $binder, $callConvention, $types, $modifiers){}
	/**
	 * @return \System\Reflection\RuntimeAssembly
	 */
	protected function GetRuntimeAssembly(){}
	/**
	 * @return \System\IntPtr
	 */
	protected function GetUnderlyingNativeHandle(){}
}