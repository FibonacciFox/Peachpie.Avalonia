<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AssemblyMethodsOverride
{
	/**
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride] public static function Load_1($assemblyString){}
	/**
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride] public static function Load_2($assemblyRef){}
	/**
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride] public static function Load_3($rawAssembly){}
	/**
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride] public static function Load_4($rawAssembly, $rawSymbolStore){}
	/**
	 * @return \System\Reflection\RuntimeAssembly
	 */
	#[MethodOverride] protected static function GetExecutingAssembly_1($stackMark){}
	/**
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride] public static function GetExecutingAssembly_2(){}
	/**
	 * @return \System\IO\Stream
	 */
	#[MethodOverride] public  function GetManifestResourceStream_1($name){}
	/**
	 * @return \System\IO\Stream
	 */
	#[MethodOverride] public  function GetManifestResourceStream_2($type, $name){}
	/**
	 * @return \System\Reflection\AssemblyName
	 */
	#[MethodOverride] public  function GetName_1(){}
	/**
	 * @return \System\Reflection\AssemblyName
	 */
	#[MethodOverride] public  function GetName_2($copiedName){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_1($name){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_2($name, $throwOnError){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_3($name, $throwOnError, $ignoreCase){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_4(){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_1($inherit){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_2($attributeType, $inherit){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function CreateInstance_1($typeName){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function CreateInstance_2($typeName, $ignoreCase){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function CreateInstance_3($typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes){}
	/**
	 * @return \System\Reflection\Module[]
	 */
	#[MethodOverride] public  function GetModules_1(){}
	/**
	 * @return \System\Reflection\Module[]
	 */
	#[MethodOverride] public  function GetModules_2($getResourceModules){}
	/**
	 * @return \System\Reflection\Module[]
	 */
	#[MethodOverride] public  function GetLoadedModules_1(){}
	/**
	 * @return \System\Reflection\Module[]
	 */
	#[MethodOverride] public  function GetLoadedModules_2($getResourceModules){}
	/**
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride] public  function GetSatelliteAssembly_1($culture){}
	/**
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride] public  function GetSatelliteAssembly_2($culture, $version){}
	/**
	 * @return \System\IO\FileStream[]
	 */
	#[MethodOverride] public  function GetFiles_1(){}
	/**
	 * @return \System\IO\FileStream[]
	 */
	#[MethodOverride] public  function GetFiles_2($getResourceModules){}
	/**
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride] public static function LoadFrom_1($assemblyFile){}
	/**
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride] public static function LoadFrom_2($assemblyFile, $hashValue, $hashAlgorithm){}
	/**
	 * @return \System\Reflection\Module
	 */
	#[MethodOverride] public  function LoadModule_1($moduleName, $rawModule){}
	/**
	 * @return \System\Reflection\Module
	 */
	#[MethodOverride] public  function LoadModule_2($moduleName, $rawModule, $rawSymbolStore){}
	/**
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride] public static function ReflectionOnlyLoad_1($rawAssembly){}
	/**
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride] public static function ReflectionOnlyLoad_2($assemblyString){}
}
/**
 */
class Assembly extends \System\Object implements 
	\System\Reflection\ICustomAttributeProvider,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\TypeInfo]
	 * @property
	 */
	public readonly $DefinedTypes;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Type]
	 * @property
	 */
	public readonly $ExportedTypes;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $CodeBase;
	/**
	 * @var \System\Reflection\MethodInfo
	 * @property
	 */
	public readonly $EntryPoint;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $FullName;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $ImageRuntimeVersion;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsDynamic;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Location;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $ReflectionOnly;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCollectible;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsFullyTrusted;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\CustomAttributeData]
	 * @property
	 */
	public readonly $CustomAttributes;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $EscapedCodeBase;
	/**
	 * @var \System\Reflection\Module
	 * @property
	 */
	public readonly $ManifestModule;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\Module]
	 * @property
	 */
	public readonly $Modules;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $GlobalAssemblyCache;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $HostContext;
	/**
	 * @var \System\Security\SecurityRuleSet
	 * @property
	 */
	public readonly $SecurityRuleSet;
	/**
	 * @uses AssemblyMethodsOverride::Load_1 ($assemblyString)
	 * @uses AssemblyMethodsOverride::Load_2 ($assemblyRef)
	 * @uses AssemblyMethodsOverride::Load_3 ($rawAssembly)
	 * @uses AssemblyMethodsOverride::Load_4 ($rawAssembly, $rawSymbolStore)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Load(mixed ...$args){}
	/**
	 * @param \System\String|string $partialName
	 * @return \System\Reflection\Assembly
	 */
	public static function LoadWithPartialName($partialName){}
	/**
	 * @param \System\Runtime\CompilerServices\StackCrawlMarkHandle $stackMark
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $retAssembly
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetExecutingAssemblyNative($stackMark, $retAssembly){}
	/**
	 * @uses AssemblyMethodsOverride::GetExecutingAssembly_1 ($stackMark)
	 * @uses AssemblyMethodsOverride::GetExecutingAssembly_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetExecutingAssembly(mixed ...$args){}
	/**
	 * @return \System\Reflection\Assembly
	 */
	public static function GetCallingAssembly(){}
	/**
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $retAssembly
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetEntryAssemblyNative($retAssembly){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetEntryAssemblyInternal(){}
	/**
	 * @return \System\UInt32
	 */
	protected static function GetAssemblyCount(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_DefinedTypes(){}
	/**
	 * @return \System\Type[]
	 */
	public  function GetTypes(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_ExportedTypes(){}
	/**
	 * @return \System\Type[]
	 */
	public  function GetExportedTypes(){}
	/**
	 * @return \System\Type[]
	 */
	public  function GetForwardedTypes(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_CodeBase(){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	public  function get_EntryPoint(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_FullName(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_ImageRuntimeVersion(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsDynamic(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Location(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ReflectionOnly(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCollectible(){}
	/**
	 * @param \System\String|string $resourceName
	 * @return \System\Reflection\ManifestResourceInfo
	 */
	public  function GetManifestResourceInfo($resourceName){}
	/**
	 * @return \System\String[]
	 */
	public  function GetManifestResourceNames(){}
	/**
	 * @uses AssemblyMethodsOverride::GetManifestResourceStream_1 ($name)
	 * @uses AssemblyMethodsOverride::GetManifestResourceStream_2 ($type, $name)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetManifestResourceStream(mixed ...$args){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsFullyTrusted(){}
	/**
	 * @uses AssemblyMethodsOverride::GetName_1 ()
	 * @uses AssemblyMethodsOverride::GetName_2 ($copiedName)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetName(mixed ...$args){}
	/**
	 * @uses AssemblyMethodsOverride::GetType_1 ($name)
	 * @uses AssemblyMethodsOverride::GetType_2 ($name, $throwOnError)
	 * @uses AssemblyMethodsOverride::GetType_3 ($name, $throwOnError, $ignoreCase)
	 * @uses AssemblyMethodsOverride::GetType_4 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
	/**
	 * @param \System\Type $attributeType
	 * @param \System\Boolean $inherit
	 * @return \System\Boolean
	 */
	public  function IsDefined($attributeType, $inherit){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_CustomAttributes(){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	public  function GetCustomAttributesData(){}
	/**
	 * @uses AssemblyMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses AssemblyMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
	/**
	 * @return \System\String|string
	 */
	public  function get_EscapedCodeBase(){}
	/**
	 * @uses AssemblyMethodsOverride::CreateInstance_1 ($typeName)
	 * @uses AssemblyMethodsOverride::CreateInstance_2 ($typeName, $ignoreCase)
	 * @uses AssemblyMethodsOverride::CreateInstance_3 ($typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CreateInstance(mixed ...$args){}
	/**
	 * @param \System\Reflection\ModuleResolveEventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_ModuleResolve($value){}
	/**
	 * @param \System\Reflection\ModuleResolveEventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_ModuleResolve($value){}
	/**
	 * @return \System\Reflection\Module
	 */
	public  function get_ManifestModule(){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Reflection\Module
	 */
	public  function GetModule($name){}
	/**
	 * @uses AssemblyMethodsOverride::GetModules_1 ()
	 * @uses AssemblyMethodsOverride::GetModules_2 ($getResourceModules)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetModules(mixed ...$args){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_Modules(){}
	/**
	 * @uses AssemblyMethodsOverride::GetLoadedModules_1 ()
	 * @uses AssemblyMethodsOverride::GetLoadedModules_2 ($getResourceModules)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetLoadedModules(mixed ...$args){}
	/**
	 * @return \System\Reflection\AssemblyName[]
	 */
	public  function GetReferencedAssemblies(){}
	/**
	 * @uses AssemblyMethodsOverride::GetSatelliteAssembly_1 ($culture)
	 * @uses AssemblyMethodsOverride::GetSatelliteAssembly_2 ($culture, $version)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetSatelliteAssembly(mixed ...$args){}
	/**
	 * @param \System\String|string $name
	 * @return \System\IO\FileStream
	 */
	public  function GetFile($name){}
	/**
	 * @uses AssemblyMethodsOverride::GetFiles_1 ()
	 * @uses AssemblyMethodsOverride::GetFiles_2 ($getResourceModules)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetFiles(mixed ...$args){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public  function GetObjectData($info, $context){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_GlobalAssemblyCache(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_HostContext(){}
	/**
	 * @param \System\Object|object $o
	 * @return \System\Boolean
	 */
	public  function Equals($o){}
	/**
	 * @param \System\Reflection\Assembly $left
	 * @param \System\Reflection\Assembly $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Reflection\Assembly $left
	 * @param \System\Reflection\Assembly $right
	 * @return \System\Boolean
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
	/**
	 * @param \System\Object|object $sender
	 * @param \System\ResolveEventArgs $args
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function LoadFromResolveHandler($sender, $args){}
	/**
	 * @uses AssemblyMethodsOverride::LoadFrom_1 ($assemblyFile)
	 * @uses AssemblyMethodsOverride::LoadFrom_2 ($assemblyFile, $hashValue, $hashAlgorithm)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function LoadFrom(mixed ...$args){}
	/**
	 * @param \System\String|string $assemblyFile
	 * @return \System\Reflection\Assembly
	 */
	public static function UnsafeLoadFrom($assemblyFile){}
	/**
	 * @uses AssemblyMethodsOverride::LoadModule_1 ($moduleName, $rawModule)
	 * @uses AssemblyMethodsOverride::LoadModule_2 ($moduleName, $rawModule, $rawSymbolStore)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function LoadModule(mixed ...$args){}
	/**
	 * @uses AssemblyMethodsOverride::ReflectionOnlyLoad_1 ($rawAssembly)
	 * @uses AssemblyMethodsOverride::ReflectionOnlyLoad_2 ($assemblyString)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ReflectionOnlyLoad(mixed ...$args){}
	/**
	 * @param \System\String|string $assemblyFile
	 * @return \System\Reflection\Assembly
	 */
	public static function ReflectionOnlyLoadFrom($assemblyFile){}
	/**
	 * @return \System\Security\SecurityRuleSet
	 */
	public  function get_SecurityRuleSet(){}
}
