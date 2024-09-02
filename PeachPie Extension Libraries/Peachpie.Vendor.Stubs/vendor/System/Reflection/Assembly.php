<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AssemblyOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $assemblyString
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride]public static function Load_1 ($assemblyString){}
	/**
	 * @deprecated
	 * @param \System\Reflection\AssemblyName $assemblyRef
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride]public static function Load_2 ($assemblyRef){}
	/**
	 * @deprecated
	 * @param \System\Byte $rawAssembly
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride]public static function Load_3 ($rawAssembly){}
	/**
	 * @deprecated
	 * @param \System\Byte $rawAssembly
	 * @param \System\Byte $rawSymbolStore
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride]public static function Load_4 ($rawAssembly, $rawSymbolStore){}
	/**
	 * @deprecated
	 * @param \System\Threading\StackCrawlMark& $stackMark
	 * @return \System\Reflection\RuntimeAssembly
	 */
	#[MethodOverride]protected static function GetExecutingAssembly_1 ($stackMark){}
	/**
	 * @deprecated
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride]public static function GetExecutingAssembly_2 (){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @return \System\IO\Stream
	 */
	#[MethodOverride]public function GetManifestResourceStream_1 ($name){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @param \System\String|string $name
	 * @return \System\IO\Stream
	 */
	#[MethodOverride]public function GetManifestResourceStream_2 ($type, $name){}
	/**
	 * @deprecated
	 * @return \System\Reflection\AssemblyName
	 */
	#[MethodOverride]public function GetName_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $copiedName
	 * @return \System\Reflection\AssemblyName
	 */
	#[MethodOverride]public function GetName_2 ($copiedName){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $inherit
	 * @return \System\Object
	 */
	#[MethodOverride]public function GetCustomAttributes_1 ($inherit){}
	/**
	 * @deprecated
	 * @param \System\Type $attributeType
	 * @param \System\Boolean|bool $inherit
	 * @return \System\Object
	 */
	#[MethodOverride]public function GetCustomAttributes_2 ($attributeType, $inherit){}
	/**
	 * @deprecated
	 * @param \System\String|string $typeName
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function CreateInstance_1 ($typeName){}
	/**
	 * @deprecated
	 * @param \System\String|string $typeName
	 * @param \System\Boolean|bool $ignoreCase
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function CreateInstance_2 ($typeName, $ignoreCase){}
	/**
	 * @deprecated
	 * @param \System\String|string $typeName
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Object $args
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Object $activationAttributes
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function CreateInstance_3 ($typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes){}
	/**
	 * @deprecated
	 * @return \System\Reflection\Module
	 */
	#[MethodOverride]public function GetModules_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $getResourceModules
	 * @return \System\Reflection\Module
	 */
	#[MethodOverride]public function GetModules_2 ($getResourceModules){}
	/**
	 * @deprecated
	 * @return \System\Reflection\Module
	 */
	#[MethodOverride]public function GetLoadedModules_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $getResourceModules
	 * @return \System\Reflection\Module
	 */
	#[MethodOverride]public function GetLoadedModules_2 ($getResourceModules){}
	/**
	 * @deprecated
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride]public function GetSatelliteAssembly_1 ($culture){}
	/**
	 * @deprecated
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Version $version
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride]public function GetSatelliteAssembly_2 ($culture, $version){}
	/**
	 * @deprecated
	 * @return \System\IO\FileStream
	 */
	#[MethodOverride]public function GetFiles_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $getResourceModules
	 * @return \System\IO\FileStream
	 */
	#[MethodOverride]public function GetFiles_2 ($getResourceModules){}
	/**
	 * @deprecated
	 * @param \System\String|string $assemblyFile
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride]public static function LoadFrom_1 ($assemblyFile){}
	/**
	 * @deprecated
	 * @param \System\String|string $assemblyFile
	 * @param \System\Byte $hashValue
	 * @param \System\Configuration\Assemblies\AssemblyHashAlgorithm $hashAlgorithm
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride]public static function LoadFrom_2 ($assemblyFile, $hashValue, $hashAlgorithm){}
	/**
	 * @deprecated
	 * @param \System\String|string $moduleName
	 * @param \System\Byte $rawModule
	 * @return \System\Reflection\Module
	 */
	#[MethodOverride]public function LoadModule_1 ($moduleName, $rawModule){}
	/**
	 * @deprecated
	 * @param \System\String|string $moduleName
	 * @param \System\Byte $rawModule
	 * @param \System\Byte $rawSymbolStore
	 * @return \System\Reflection\Module
	 */
	#[MethodOverride]public function LoadModule_2 ($moduleName, $rawModule, $rawSymbolStore){}
	/**
	 * @deprecated
	 * @param \System\Byte $rawAssembly
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride]public static function ReflectionOnlyLoad_1 ($rawAssembly){}
	/**
	 * @deprecated
	 * @param \System\String|string $assemblyString
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride]public static function ReflectionOnlyLoad_2 ($assemblyString){}
}
class Assembly extends \System\Object implements
	\System\Reflection\ICustomAttributeProvider,
	\System\Runtime\Serialization\ISerializable
{
	use AssemblyOverride;
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
	public $CodeBase;
	/**
	 * @property
	 * @var \System\Reflection\MethodInfo
	 * @since readonly
	 */
	public $EntryPoint;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $FullName;
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
	public $IsDynamic;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Location;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $ReflectionOnly;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCollectible;
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
	 * @var \System\Reflection\Module
	 * @since readonly
	 */
	public $ManifestModule;
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
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $HostContext;
	/**
	 * @property
	 * @var \System\Security\SecurityRuleSet
	 * @since readonly
	 */
	public $SecurityRuleSet;
	/**
	 * @uses AssemblyOverride::Load_1 <br>public , args: ($assemblyString)<br>
	 * @uses AssemblyOverride::Load_2 <br>public , args: ($assemblyRef)<br>
	 * @uses AssemblyOverride::Load_3 <br>public , args: ($rawAssembly)<br>
	 * @uses AssemblyOverride::Load_4 <br>public , args: ($rawAssembly, $rawSymbolStore)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\Assembly|mixed|\override
	 */
	#[MethodOverridePublic]function Load (\override ...$args){}
	/**
	 * @param \System\String|string $partialName
	 * @return \System\Reflection\Assembly
	 */
	public static function LoadWithPartialName($partialName){}
	private static function GetExecutingAssemblyNative($stackMark, $retAssembly){}
	/**
	 * @uses AssemblyOverride::GetExecutingAssembly_1 <br>protected , args: ($stackMark)<br>
	 * @uses AssemblyOverride::GetExecutingAssembly_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\RuntimeAssembly|\System\Reflection\Assembly|mixed|\override
	 */
	#[MethodOverridePublic]function GetExecutingAssembly (\override ...$args){}
	/**
	 * @return \System\Reflection\Assembly
	 */
	public static function GetCallingAssembly(){}
	private static function GetEntryAssemblyNative($retAssembly){}
	private static function GetEntryAssemblyInternal(){}
	/**
	 * @return \System\UInt32
	 */
	protected static function GetAssemblyCount(){}
	/**
	 * @return \System\Type[]
	 */
	public function GetTypes(){}
	/**
	 * @return \System\Type[]
	 */
	public function GetExportedTypes(){}
	/**
	 * @return \System\Type[]
	 */
	public function GetForwardedTypes(){}
	/**
	 * @param \System\String|string $resourceName
	 * @return \System\Reflection\ManifestResourceInfo
	 */
	public function GetManifestResourceInfo($resourceName){}
	/**
	 * @return \System\String[]|array
	 */
	public function GetManifestResourceNames(){}
	/**
	 * @uses AssemblyOverride::GetManifestResourceStream_1 <br>public , args: ($name)<br>
	 * @uses AssemblyOverride::GetManifestResourceStream_2 <br>public , args: ($type, $name)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IO\Stream|mixed|\override
	 */
	#[MethodOverridePublic]function GetManifestResourceStream (\override ...$args){}
	/**
	 * @uses AssemblyOverride::GetName_1 <br>public , args: ()<br>
	 * @uses AssemblyOverride::GetName_2 <br>public , args: ($copiedName)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\AssemblyName|mixed|\override
	 */
	#[MethodOverridePublic]function GetName (\override ...$args){}
	/**
	 * @param \System\Type $attributeType
	 * @param \System\Boolean|bool $inherit
	 * @return \System\Boolean|bool
	 */
	public function IsDefined($attributeType, $inherit){}
	/**
	 * @return \System\Collections\Generic\IList_1[System\Reflection\CustomAttributeData]
	 */
	public function GetCustomAttributesData(){}
	/**
	 * @uses AssemblyOverride::GetCustomAttributes_1 <br>public , args: ($inherit)<br>
	 * @uses AssemblyOverride::GetCustomAttributes_2 <br>public , args: ($attributeType, $inherit)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|mixed|\override
	 */
	#[MethodOverridePublic]function GetCustomAttributes (\override ...$args){}
	/**
	 * @uses AssemblyOverride::CreateInstance_1 <br>public , args: ($typeName)<br>
	 * @uses AssemblyOverride::CreateInstance_2 <br>public , args: ($typeName, $ignoreCase)<br>
	 * @uses AssemblyOverride::CreateInstance_3 <br>public , args: ($typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function CreateInstance (\override ...$args){}
	/**
	 * @param \System\Reflection\ModuleResolveEventHandler $value
	 * @return \System\Void|void
	 */
	public function add_ModuleResolve($value){}
	/**
	 * @param \System\Reflection\ModuleResolveEventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_ModuleResolve($value){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Reflection\Module
	 */
	public function GetModule($name){}
	/**
	 * @uses AssemblyOverride::GetModules_1 <br>public , args: ()<br>
	 * @uses AssemblyOverride::GetModules_2 <br>public , args: ($getResourceModules)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\Module|mixed|\override
	 */
	#[MethodOverridePublic]function GetModules (\override ...$args){}
	/**
	 * @uses AssemblyOverride::GetLoadedModules_1 <br>public , args: ()<br>
	 * @uses AssemblyOverride::GetLoadedModules_2 <br>public , args: ($getResourceModules)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\Module|mixed|\override
	 */
	#[MethodOverridePublic]function GetLoadedModules (\override ...$args){}
	/**
	 * @return \System\Reflection\AssemblyName[]
	 */
	public function GetReferencedAssemblies(){}
	/**
	 * @uses AssemblyOverride::GetSatelliteAssembly_1 <br>public , args: ($culture)<br>
	 * @uses AssemblyOverride::GetSatelliteAssembly_2 <br>public , args: ($culture, $version)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\Assembly|mixed|\override
	 */
	#[MethodOverridePublic]function GetSatelliteAssembly (\override ...$args){}
	/**
	 * @param \System\String|string $name
	 * @return \System\IO\FileStream
	 */
	public function GetFile($name){}
	/**
	 * @uses AssemblyOverride::GetFiles_1 <br>public , args: ()<br>
	 * @uses AssemblyOverride::GetFiles_2 <br>public , args: ($getResourceModules)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IO\FileStream|mixed|\override
	 */
	#[MethodOverridePublic]function GetFiles (\override ...$args){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public function GetObjectData($info, $context){}
	/**
	 * @param \System\Reflection\Assembly $left
	 * @param \System\Reflection\Assembly $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Reflection\Assembly $left
	 * @param \System\Reflection\Assembly $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\String|string $assemblyName
	 * @param \System\String|string $typeName
	 * @return \System\String|string
	 */
	public static function CreateQualifiedName($assemblyName, $typeName){}
	/**
	 * @param \System\Type $type
	 * @return \System\Reflection\Assembly
	 */
	public static function GetAssembly($type){}
	/**
	 * @return \System\Reflection\Assembly
	 */
	public static function GetEntryAssembly(){}
	/**
	 * @param \System\String|string $path
	 * @return \System\Reflection\Assembly
	 */
	public static function LoadFile($path){}
	private static function LoadFromResolveHandler($sender, $args){}
	/**
	 * @uses AssemblyOverride::LoadFrom_1 <br>public , args: ($assemblyFile)<br>
	 * @uses AssemblyOverride::LoadFrom_2 <br>public , args: ($assemblyFile, $hashValue, $hashAlgorithm)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\Assembly|mixed|\override
	 */
	#[MethodOverridePublic]function LoadFrom (\override ...$args){}
	/**
	 * @param \System\String|string $assemblyFile
	 * @return \System\Reflection\Assembly
	 */
	public static function UnsafeLoadFrom($assemblyFile){}
	/**
	 * @uses AssemblyOverride::LoadModule_1 <br>public , args: ($moduleName, $rawModule)<br>
	 * @uses AssemblyOverride::LoadModule_2 <br>public , args: ($moduleName, $rawModule, $rawSymbolStore)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\Module|mixed|\override
	 */
	#[MethodOverridePublic]function LoadModule (\override ...$args){}
	/**
	 * @uses AssemblyOverride::ReflectionOnlyLoad_1 <br>public , args: ($rawAssembly)<br>
	 * @uses AssemblyOverride::ReflectionOnlyLoad_2 <br>public , args: ($assemblyString)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\Assembly|mixed|\override
	 */
	#[MethodOverridePublic]function ReflectionOnlyLoad (\override ...$args){}
	/**
	 * @param \System\String|string $assemblyFile
	 * @return \System\Reflection\Assembly
	 */
	public static function ReflectionOnlyLoadFrom($assemblyFile){}
}