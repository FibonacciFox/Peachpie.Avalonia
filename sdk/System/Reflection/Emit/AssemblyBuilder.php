<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AssemblyBuilderMethodsOverride
{
	/**
	 * @return \System\Reflection\Emit\AssemblyBuilder
	 */
	#[MethodOverride] public static function DefineDynamicAssembly_1($name, $access){}
	/**
	 * @return \System\Reflection\Emit\AssemblyBuilder
	 */
	#[MethodOverride] public static function DefineDynamicAssembly_2($name, $access, $assemblyAttributes){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function CreateDynamicAssembly_1($assemblyLoadContext, $pAssemblyName, $hashAlgId, $access, $retAssembly){}
	/**
	 * @return \System\Reflection\RuntimeAssembly
	 */
	#[MethodOverride] private static function CreateDynamicAssembly_2($assemblyLoadContext, $name, $access){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_1($inherit){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_2($attributeType, $inherit){}
	/**
	 * @return \System\Reflection\AssemblyName
	 */
	#[MethodOverride] public  function GetName_1($copiedName){}
	/**
	 * @return \System\Reflection\AssemblyName
	 */
	#[MethodOverride] public  function GetName_2(){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_1($name, $throwOnError, $ignoreCase){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_2($name){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_3($name, $throwOnError){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_4(){}
	/**
	 * @return \System\Reflection\Module[]
	 */
	#[MethodOverride] public  function GetModules_1($getResourceModules){}
	/**
	 * @return \System\Reflection\Module[]
	 */
	#[MethodOverride] public  function GetModules_2(){}
	/**
	 * @return \System\Reflection\Module[]
	 */
	#[MethodOverride] public  function GetLoadedModules_1($getResourceModules){}
	/**
	 * @return \System\Reflection\Module[]
	 */
	#[MethodOverride] public  function GetLoadedModules_2(){}
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
	#[MethodOverride] public  function SetCustomAttribute_1($con, $binaryAttribute){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCustomAttribute_2($customBuilder){}
	/**
	 * @return \System\IO\FileStream[]
	 */
	#[MethodOverride] public  function GetFiles_1($getResourceModules){}
	/**
	 * @return \System\IO\FileStream[]
	 */
	#[MethodOverride] public  function GetFiles_2(){}
	/**
	 * @return \System\IO\Stream
	 */
	#[MethodOverride] public  function GetManifestResourceStream_1($name){}
	/**
	 * @return \System\IO\Stream
	 */
	#[MethodOverride] public  function GetManifestResourceStream_2($type, $name){}
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
class AssemblyBuilder extends \System\Reflection\Assembly implements 
	\System\Reflection\ICustomAttributeProvider,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\Reflection\Emit\AssemblyBuilderAccess
	 * @field
	 */
	protected readonly $_access;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $FullName;
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
	 * @var \System\Int64
	 * @property
	 */
	public readonly $HostContext;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCollectible;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $CodeBase;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Location;
	/**
	 * @var \System\Reflection\MethodInfo
	 * @property
	 */
	public readonly $EntryPoint;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsDynamic;
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
	public readonly $ImageRuntimeVersion;
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
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $GlobalAssemblyCache;
	/**
	 * @var \System\Security\SecurityRuleSet
	 * @property
	 */
	public readonly $SecurityRuleSet;
	/**
	 * @return \System\Object|object
	 */
	protected  function get_SyncRoot(){}
	/**
	 * @return \System\Reflection\RuntimeAssembly
	 */
	protected  function get_InternalAssembly(){}
	/**
	 * @uses AssemblyBuilderMethodsOverride::DefineDynamicAssembly_1 ($name, $access)
	 * @uses AssemblyBuilderMethodsOverride::DefineDynamicAssembly_2 ($name, $access, $assemblyAttributes)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function DefineDynamicAssembly(mixed ...$args){}
	/**
	 * @uses AssemblyBuilderMethodsOverride::CreateDynamicAssembly_1 ($assemblyLoadContext, $pAssemblyName, $hashAlgId, $access, $retAssembly)
	 * @uses AssemblyBuilderMethodsOverride::CreateDynamicAssembly_2 ($assemblyLoadContext, $name, $access)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateDynamicAssembly(mixed ...$args){}
	/**
	 * @param \System\Reflection\AssemblyName $name
	 * @param \System\Reflection\Emit\AssemblyBuilderAccess $access
	 * @param \System\Reflection\Assembly $callingAssembly
	 * @param \System\Runtime\Loader\AssemblyLoadContext $assemblyLoadContext
	 * @param \System\Collections\Generic\IEnumerable_1 $assemblyAttributes
	 * @return \System\Reflection\Emit\AssemblyBuilder
	 */
	protected static function InternalDefineDynamicAssembly($name, $access, $callingAssembly, $assemblyLoadContext, $assemblyAttributes){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Reflection\Emit\ModuleBuilder
	 */
	public  function DefineDynamicModule($name){}
	/**
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DefineDynamicModuleInternalNoLock($name){}
	/**
	 * @param \System\String|string $strTypeName
	 * @param \System\Reflection\Emit\TypeBuilder $enclosingType
	 * @return \System\Void|void
	 */
	protected  function CheckTypeNameConflict($strTypeName, $enclosingType){}
	/**
	 * @uses AssemblyBuilderMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses AssemblyBuilderMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
	/**
	 * @uses AssemblyBuilderMethodsOverride::GetName_1 ($copiedName)
	 * @uses AssemblyBuilderMethodsOverride::GetName_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetName(mixed ...$args){}
	/**
	 * @uses AssemblyBuilderMethodsOverride::GetType_1 ($name, $throwOnError, $ignoreCase)
	 * @uses AssemblyBuilderMethodsOverride::GetType_2 ($name)
	 * @uses AssemblyBuilderMethodsOverride::GetType_3 ($name, $throwOnError)
	 * @uses AssemblyBuilderMethodsOverride::GetType_4 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
	/**
	 * @uses AssemblyBuilderMethodsOverride::GetModules_1 ($getResourceModules)
	 * @uses AssemblyBuilderMethodsOverride::GetModules_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetModules(mixed ...$args){}
	/**
	 * @uses AssemblyBuilderMethodsOverride::GetLoadedModules_1 ($getResourceModules)
	 * @uses AssemblyBuilderMethodsOverride::GetLoadedModules_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetLoadedModules(mixed ...$args){}
	/**
	 * @uses AssemblyBuilderMethodsOverride::GetSatelliteAssembly_1 ($culture)
	 * @uses AssemblyBuilderMethodsOverride::GetSatelliteAssembly_2 ($culture, $version)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetSatelliteAssembly(mixed ...$args){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Reflection\Emit\ModuleBuilder
	 */
	public  function GetDynamicModule($name){}
	/**
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetDynamicModuleNoLock($name){}
	/**
	 * @uses AssemblyBuilderMethodsOverride::SetCustomAttribute_1 ($con, $binaryAttribute)
	 * @uses AssemblyBuilderMethodsOverride::SetCustomAttribute_2 ($customBuilder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCustomAttribute(mixed ...$args){}
	/**
	 * @uses AssemblyBuilderMethodsOverride::GetFiles_1 ($getResourceModules)
	 * @uses AssemblyBuilderMethodsOverride::GetFiles_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetFiles(mixed ...$args){}
	/**
	 * @uses AssemblyBuilderMethodsOverride::GetManifestResourceStream_1 ($name)
	 * @uses AssemblyBuilderMethodsOverride::GetManifestResourceStream_2 ($type, $name)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetManifestResourceStream(mixed ...$args){}
	/**
	 * @uses AssemblyBuilderMethodsOverride::CreateInstance_1 ($typeName)
	 * @uses AssemblyBuilderMethodsOverride::CreateInstance_2 ($typeName, $ignoreCase)
	 * @uses AssemblyBuilderMethodsOverride::CreateInstance_3 ($typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CreateInstance(mixed ...$args){}
	/**
	 * @uses AssemblyBuilderMethodsOverride::LoadModule_1 ($moduleName, $rawModule)
	 * @uses AssemblyBuilderMethodsOverride::LoadModule_2 ($moduleName, $rawModule, $rawSymbolStore)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function LoadModule(mixed ...$args){}
}
