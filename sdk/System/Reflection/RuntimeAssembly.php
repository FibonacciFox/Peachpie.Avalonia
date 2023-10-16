<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RuntimeAssemblyMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function GetCodeBase_1($assembly, $retString){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected  function GetCodeBase_2(){}
	/**
	 * @return \System\Reflection\AssemblyName
	 */
	#[MethodOverride] public  function GetName_1($copiedName){}
	/**
	 * @return \System\Reflection\AssemblyName
	 */
	#[MethodOverride] public  function GetName_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function GetType_1($assembly, $name, $throwOnError, $ignoreCase, $type, $keepAlive, $assemblyLoadContext){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_2($name, $throwOnError, $ignoreCase){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_3($name){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_4($name, $throwOnError){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_5(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function GetExportedTypes_1($assembly, $retTypes){}
	/**
	 * @return \System\Type[]
	 */
	#[MethodOverride] public  function GetExportedTypes_2(){}
	/**
	 * @return \System\IO\Stream
	 */
	#[MethodOverride] public  function GetManifestResourceStream_1($type, $name){}
	/**
	 * @return \System\IO\Stream
	 */
	#[MethodOverride] public  function GetManifestResourceStream_2($name){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_1($inherit){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_2($attributeType, $inherit){}
	/**
	 * @return \System\Reflection\RuntimeAssembly
	 */
	#[MethodOverride] protected static function InternalLoad_1($assemblyName, $stackMark, $assemblyLoadContext){}
	/**
	 * @return \System\Reflection\RuntimeAssembly
	 */
	#[MethodOverride] protected static function InternalLoad_2($assemblyName, $stackMark, $assemblyLoadContext, $requestingAssembly, $throwOnFileNotFound){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function InternalLoad_3($pAssemblyNameParts, $requestingAssembly, $stackMark, $throwOnFileNotFound, $assemblyLoadContext, $retAssembly){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function GetModule_1($assembly, $name, $retModule){}
	/**
	 * @return \System\Reflection\Module
	 */
	#[MethodOverride] public  function GetModule_2($name){}
	/**
	 * @return \System\IO\FileStream[]
	 */
	#[MethodOverride] public  function GetFiles_1($getResourceModules){}
	/**
	 * @return \System\IO\FileStream[]
	 */
	#[MethodOverride] public  function GetFiles_2(){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] private static function GetManifestResourceNames_1($assembly){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public  function GetManifestResourceNames_2(){}
	/**
	 * @return \System\Reflection\AssemblyName[]
	 */
	#[MethodOverride] private static function GetReferencedAssemblies_1($assembly){}
	/**
	 * @return \System\Reflection\AssemblyName[]
	 */
	#[MethodOverride] public  function GetReferencedAssemblies_2(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function GetManifestResourceInfo_1($assembly, $resourceName, $assemblyRef, $retFileName){}
	/**
	 * @return \System\Reflection\ManifestResourceInfo
	 */
	#[MethodOverride] public  function GetManifestResourceInfo_2($resourceName){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function GetVersion_1($assembly, $majVer, $minVer, $buildNum, $revNum){}
	/**
	 * @return \System\Version
	 */
	#[MethodOverride] private  function GetVersion_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function GetLocale_1($assembly, $retString){}
	/**
	 * @return \System\Globalization\CultureInfo
	 */
	#[MethodOverride] private  function GetLocale_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function GetSimpleName_1($assembly, $retSimpleName){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected  function GetSimpleName_2(){}
	/**
	 * @return \System\Configuration\Assemblies\AssemblyHashAlgorithm
	 */
	#[MethodOverride] private static function GetHashAlgorithm_1($assembly){}
	/**
	 * @return \System\Configuration\Assemblies\AssemblyHashAlgorithm
	 */
	#[MethodOverride] private  function GetHashAlgorithm_2(){}
	/**
	 * @return \System\Reflection\AssemblyNameFlags
	 */
	#[MethodOverride] private static function GetFlags_1($assembly){}
	/**
	 * @return \System\Reflection\AssemblyNameFlags
	 */
	#[MethodOverride] private  function GetFlags_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function GetPublicKey_1($assembly, $retPublicKey){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] protected  function GetPublicKey_2(){}
	/**
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride] public  function GetSatelliteAssembly_1($culture){}
	/**
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride] public  function GetSatelliteAssembly_2($culture, $version){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function GetModules_1($assembly, $loadIfNotFound, $getResourceModules, $retModuleHandles){}
	/**
	 * @return \System\Reflection\Module[]
	 */
	#[MethodOverride] public  function GetModules_2($getResourceModules){}
	/**
	 * @return \System\Reflection\Module[]
	 */
	#[MethodOverride] public  function GetModules_3(){}
	/**
	 * @return \System\Reflection\Module[]
	 */
	#[MethodOverride] public  function GetLoadedModules_1($getResourceModules){}
	/**
	 * @return \System\Reflection\Module[]
	 */
	#[MethodOverride] public  function GetLoadedModules_2(){}
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
	 * @return \System\Reflection\Module
	 */
	#[MethodOverride] public  function LoadModule_1($moduleName, $rawModule){}
	/**
	 * @return \System\Reflection\Module
	 */
	#[MethodOverride] public  function LoadModule_2($moduleName, $rawModule, $rawSymbolStore){}
}
/**
 */
class RuntimeAssembly extends \System\Reflection\Assembly implements 
	\System\Reflection\ICustomAttributeProvider,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $CodeBase;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $FullName;
	/**
	 * @var \System\Reflection\MethodInfo
	 * @property
	 */
	public readonly $EntryPoint;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\TypeInfo]
	 * @property
	 */
	public readonly $DefinedTypes;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCollectible;
	/**
	 * @var \System\Reflection\Module
	 * @property
	 */
	public readonly $ManifestModule;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $ReflectionOnly;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Location;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $ImageRuntimeVersion;
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
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsDynamic;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Type]
	 * @property
	 */
	public readonly $ExportedTypes;
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
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\Module]
	 * @property
	 */
	public readonly $Modules;
	/**
	 * @var \System\Security\SecurityRuleSet
	 * @property
	 */
	public readonly $SecurityRuleSet;
	/**
	 * @param \System\Reflection\ModuleResolveEventHandler $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function add__ModuleResolve($value){}
	/**
	 * @param \System\Reflection\ModuleResolveEventHandler $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function remove__ModuleResolve($value){}
	/**
	 * @return \System\IntPtr
	 */
	protected  function GetUnderlyingNativeHandle(){}
	/**
	 * @return \System\Object|object
	 */
	protected  function get_SyncRoot(){}
	/**
	 * @uses RuntimeAssemblyMethodsOverride::GetCodeBase_1 ($assembly, $retString)
	 * @uses RuntimeAssemblyMethodsOverride::GetCodeBase_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCodeBase(mixed ...$args){}
	/**
	 * @return \System\Reflection\RuntimeAssembly
	 */
	protected  function GetNativeHandle(){}
	/**
	 * @uses RuntimeAssemblyMethodsOverride::GetName_1 ($copiedName)
	 * @uses RuntimeAssemblyMethodsOverride::GetName_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetName(mixed ...$args){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallAssembly $assembly
	 * @param \System\Runtime\CompilerServices\StringHandleOnStack $retString
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFullName($assembly, $retString){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallAssembly $assembly
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $retMethod
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetEntryPoint($assembly, $retMethod){}
	/**
	 * @uses RuntimeAssemblyMethodsOverride::GetType_1 ($assembly, $name, $throwOnError, $ignoreCase, $type, $keepAlive, $assemblyLoadContext)
	 * @uses RuntimeAssemblyMethodsOverride::GetType_2 ($name, $throwOnError, $ignoreCase)
	 * @uses RuntimeAssemblyMethodsOverride::GetType_3 ($name)
	 * @uses RuntimeAssemblyMethodsOverride::GetType_4 ($name, $throwOnError)
	 * @uses RuntimeAssemblyMethodsOverride::GetType_5 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
	/**
	 * @uses RuntimeAssemblyMethodsOverride::GetExportedTypes_1 ($assembly, $retTypes)
	 * @uses RuntimeAssemblyMethodsOverride::GetExportedTypes_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetExportedTypes(mixed ...$args){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallAssembly $assembly
	 * @return \\BOOL
	 */
	protected static function GetIsCollectible($assembly){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallAssembly $assembly
	 * @param \System\String|string $resourceName
	 * @param \System\UInt32& $length
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetResource($assembly, $resourceName, $length){}
	/**
	 * @uses RuntimeAssemblyMethodsOverride::GetManifestResourceStream_1 ($type, $name)
	 * @uses RuntimeAssemblyMethodsOverride::GetManifestResourceStream_2 ($name)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetManifestResourceStream(mixed ...$args){}
	/**
	 * @uses RuntimeAssemblyMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses RuntimeAssemblyMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
	/**
	 * @uses RuntimeAssemblyMethodsOverride::InternalLoad_1 ($assemblyName, $stackMark, $assemblyLoadContext)
	 * @uses RuntimeAssemblyMethodsOverride::InternalLoad_2 ($assemblyName, $stackMark, $assemblyLoadContext, $requestingAssembly, $throwOnFileNotFound)
	 * @uses RuntimeAssemblyMethodsOverride::InternalLoad_3 ($pAssemblyNameParts, $requestingAssembly, $stackMark, $throwOnFileNotFound, $assemblyLoadContext, $retAssembly)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function InternalLoad(mixed ...$args){}
	/**
	 * @uses RuntimeAssemblyMethodsOverride::GetModule_1 ($assembly, $name, $retModule)
	 * @uses RuntimeAssemblyMethodsOverride::GetModule_2 ($name)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetModule(mixed ...$args){}
	/**
	 * @uses RuntimeAssemblyMethodsOverride::GetFiles_1 ($getResourceModules)
	 * @uses RuntimeAssemblyMethodsOverride::GetFiles_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetFiles(mixed ...$args){}
	/**
	 * @uses RuntimeAssemblyMethodsOverride::GetManifestResourceNames_1 ($assembly)
	 * @uses RuntimeAssemblyMethodsOverride::GetManifestResourceNames_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetManifestResourceNames(mixed ...$args){}
	/**
	 * @uses RuntimeAssemblyMethodsOverride::GetReferencedAssemblies_1 ($assembly)
	 * @uses RuntimeAssemblyMethodsOverride::GetReferencedAssemblies_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetReferencedAssemblies(mixed ...$args){}
	/**
	 * @uses RuntimeAssemblyMethodsOverride::GetManifestResourceInfo_1 ($assembly, $resourceName, $assemblyRef, $retFileName)
	 * @uses RuntimeAssemblyMethodsOverride::GetManifestResourceInfo_2 ($resourceName)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetManifestResourceInfo(mixed ...$args){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallAssembly $assembly
	 * @param \System\Runtime\CompilerServices\StringHandleOnStack $retString
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetLocation($assembly, $retString){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallAssembly $assembly
	 * @param \System\Runtime\CompilerServices\StringHandleOnStack $retString
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetImageRuntimeVersion($assembly, $retString){}
	/**
	 * @uses RuntimeAssemblyMethodsOverride::GetVersion_1 ($assembly, $majVer, $minVer, $buildNum, $revNum)
	 * @uses RuntimeAssemblyMethodsOverride::GetVersion_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetVersion(mixed ...$args){}
	/**
	 * @uses RuntimeAssemblyMethodsOverride::GetLocale_1 ($assembly, $retString)
	 * @uses RuntimeAssemblyMethodsOverride::GetLocale_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetLocale(mixed ...$args){}
	/**
	 * @param \System\Reflection\RuntimeAssembly $assembly
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FCallIsDynamic($assembly){}
	/**
	 * @uses RuntimeAssemblyMethodsOverride::GetSimpleName_1 ($assembly, $retSimpleName)
	 * @uses RuntimeAssemblyMethodsOverride::GetSimpleName_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetSimpleName(mixed ...$args){}
	/**
	 * @uses RuntimeAssemblyMethodsOverride::GetHashAlgorithm_1 ($assembly)
	 * @uses RuntimeAssemblyMethodsOverride::GetHashAlgorithm_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashAlgorithm(mixed ...$args){}
	/**
	 * @uses RuntimeAssemblyMethodsOverride::GetFlags_1 ($assembly)
	 * @uses RuntimeAssemblyMethodsOverride::GetFlags_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetFlags(mixed ...$args){}
	/**
	 * @uses RuntimeAssemblyMethodsOverride::GetPublicKey_1 ($assembly, $retPublicKey)
	 * @uses RuntimeAssemblyMethodsOverride::GetPublicKey_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetPublicKey(mixed ...$args){}
	/**
	 * @uses RuntimeAssemblyMethodsOverride::GetSatelliteAssembly_1 ($culture)
	 * @uses RuntimeAssemblyMethodsOverride::GetSatelliteAssembly_2 ($culture, $version)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetSatelliteAssembly(mixed ...$args){}
	/**
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Version $version
	 * @param \System\Boolean $throwOnFileNotFound
	 * @return \System\Reflection\Assembly
	 */
	protected  function InternalGetSatelliteAssembly($culture, $version, $throwOnFileNotFound){}
	/**
	 * @uses RuntimeAssemblyMethodsOverride::GetModules_1 ($assembly, $loadIfNotFound, $getResourceModules, $retModuleHandles)
	 * @uses RuntimeAssemblyMethodsOverride::GetModules_2 ($getResourceModules)
	 * @uses RuntimeAssemblyMethodsOverride::GetModules_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetModules(mixed ...$args){}
	/**
	 * @param \System\Boolean $loadIfNotFound
	 * @param \System\Boolean $getResourceModules
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetModulesInternal($loadIfNotFound, $getResourceModules){}
	/**
	 * @uses RuntimeAssemblyMethodsOverride::GetLoadedModules_1 ($getResourceModules)
	 * @uses RuntimeAssemblyMethodsOverride::GetLoadedModules_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetLoadedModules(mixed ...$args){}
	/**
	 * @param \System\Reflection\RuntimeAssembly $assembly
	 * @return \System\Reflection\RuntimeModule
	 */
	protected static function GetManifestModule($assembly){}
	/**
	 * @param \System\Reflection\RuntimeAssembly $assembly
	 * @return \System\Int32|int
	 */
	protected static function GetToken($assembly){}
	/**
	 * @param \System\Type $type
	 * @param \System\Collections\Generic\List_1 $types
	 * @param \System\Collections\Generic\List_1 $exceptions
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AddPublicNestedTypes($type, $types, $exceptions){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallAssembly $assembly
	 * @param \System\Reflection\MetadataToken $mdtExternalType
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $type
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetForwardedType($assembly, $mdtExternalType, $type){}
	/**
	 * @uses RuntimeAssemblyMethodsOverride::CreateInstance_1 ($typeName)
	 * @uses RuntimeAssemblyMethodsOverride::CreateInstance_2 ($typeName, $ignoreCase)
	 * @uses RuntimeAssemblyMethodsOverride::CreateInstance_3 ($typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CreateInstance(mixed ...$args){}
	/**
	 * @uses RuntimeAssemblyMethodsOverride::LoadModule_1 ($moduleName, $rawModule)
	 * @uses RuntimeAssemblyMethodsOverride::LoadModule_2 ($moduleName, $rawModule, $rawSymbolStore)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function LoadModule(mixed ...$args){}
}
