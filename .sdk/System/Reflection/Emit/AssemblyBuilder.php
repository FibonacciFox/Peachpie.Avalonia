<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AssemblyBuilderOverride {
	/**
	 * @deprecated
	 * @param \System\Reflection\AssemblyName $name
	 * @param \System\Reflection\Emit\AssemblyBuilderAccess $access
	 * @return \System\Reflection\Emit\AssemblyBuilder
	 */
	#[MethodOverride]public static function DefineDynamicAssembly_1 ($name, $access){}
	/**
	 * @deprecated
	 * @param \System\Reflection\AssemblyName $name
	 * @param \System\Reflection\Emit\AssemblyBuilderAccess $access
	 * @param \System\Collections\Generic\IEnumerable_1 $assemblyAttributes [generic: System\Reflection\Emit\CustomAttributeBuilder]
	 * @return \System\Reflection\Emit\AssemblyBuilder
	 */
	#[MethodOverride]public static function DefineDynamicAssembly_2 ($name, $access, $assemblyAttributes){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $assemblyLoadContext
	 * @param \System\Reflection\NativeAssemblyNameParts* $pAssemblyName
	 * @param \System\Configuration\Assemblies\AssemblyHashAlgorithm $hashAlgId
	 * @param \System\Reflection\Emit\AssemblyBuilderAccess $access
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $retAssembly
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function CreateDynamicAssembly_1 ($assemblyLoadContext, $pAssemblyName, $hashAlgId, $access, $retAssembly){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Loader\AssemblyLoadContext $assemblyLoadContext
	 * @param \System\Reflection\AssemblyName $name
	 * @param \System\Reflection\Emit\AssemblyBuilderAccess $access
	 * @return \System\Reflection\RuntimeAssembly
	 */
	#[MethodOverride]private static function CreateDynamicAssembly_2 ($assemblyLoadContext, $name, $access){}
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
final class AssemblyBuilder extends \System\Reflection\Assembly implements
	\System\Reflection\ICustomAttributeProvider,
	\System\Runtime\Serialization\ISerializable
{
	use AssemblyBuilderOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\AssemblyBuilderAccess
	 */
	protected $_access;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $FullName;
	/**
	 * @property
	 * @var \System\Reflection\Module
	 * @since readonly
	 */
	public $ManifestModule;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $ReflectionOnly;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $HostContext;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCollectible;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $CodeBase;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Location;
	/**
	 * @property
	 * @var \System\Reflection\MethodInfo
	 * @since readonly
	 */
	public $EntryPoint;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsDynamic;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\TypeInfo]
	 * @since readonly
	 */
	public $DefinedTypes;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Type]
	 * @since readonly
	 */
	public $ExportedTypes;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $ImageRuntimeVersion;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsFullyTrusted;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\CustomAttributeData]
	 * @since readonly
	 */
	public $CustomAttributes;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $EscapedCodeBase;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\Module]
	 * @since readonly
	 */
	public $Modules;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $GlobalAssemblyCache;
	/**
	 * @property
	 * @var \System\Security\SecurityRuleSet
	 * @since readonly
	 */
	public $SecurityRuleSet;
	/**
	 * @uses AssemblyBuilderOverride::DefineDynamicAssembly_1 <br>public , args: ($name, $access)<br>
	 * @uses AssemblyBuilderOverride::DefineDynamicAssembly_2 <br>public , args: ($name, $access, $assemblyAttributes)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\Emit\AssemblyBuilder|mixed|\override
	 */
	#[MethodOverridePublic]function DefineDynamicAssembly (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses AssemblyBuilderOverride::CreateDynamicAssembly_1 <br>private , args: ($assemblyLoadContext, $pAssemblyName, $hashAlgId, $access, $retAssembly)<br>
	 * @uses AssemblyBuilderOverride::CreateDynamicAssembly_2 <br>private , args: ($assemblyLoadContext, $name, $access)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\Reflection\RuntimeAssembly|mixed|\override
	 */
	#[MethodOverridePrivate]function CreateDynamicAssembly (\override ...$args){}
	/**
	 * @param \System\Reflection\AssemblyName $name
	 * @param \System\Reflection\Emit\AssemblyBuilderAccess $access
	 * @param \System\Reflection\Assembly $callingAssembly
	 * @param \System\Runtime\Loader\AssemblyLoadContext $assemblyLoadContext
	 * @param \System\Collections\Generic\IEnumerable_1 $assemblyAttributes [generic: System\Reflection\Emit\CustomAttributeBuilder]
	 * @return \System\Reflection\Emit\AssemblyBuilder
	 */
	protected static function InternalDefineDynamicAssembly($name, $access, $callingAssembly, $assemblyLoadContext, $assemblyAttributes){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Reflection\Emit\ModuleBuilder
	 */
	public function DefineDynamicModule($name){}
	private function DefineDynamicModuleInternalNoLock($name){}
	/**
	 * @param \System\String|string $strTypeName
	 * @param \System\Reflection\Emit\TypeBuilder $enclosingType
	 * @return \System\Void|void
	 */
	protected function CheckTypeNameConflict($strTypeName, $enclosingType){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Reflection\Emit\ModuleBuilder
	 */
	public function GetDynamicModule($name){}
	private function GetDynamicModuleNoLock($name){}
	/**
	 * @uses AssemblyBuilderOverride::SetCustomAttribute_1 <br>public , args: ($con, $binaryAttribute)<br>
	 * @uses AssemblyBuilderOverride::SetCustomAttribute_2 <br>public , args: ($customBuilder)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetCustomAttribute (\override ...$args){}
}