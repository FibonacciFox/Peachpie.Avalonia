<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AppDomainMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function ExecuteAssembly_1($assemblyFile){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function ExecuteAssembly_2($assemblyFile, $args){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function ExecuteAssembly_3($assemblyFile, $args, $hashValue, $hashAlgorithm){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function ExecuteAssembly_4($assembly, $args){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function ExecuteAssemblyByName_1($assemblyName, $args){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function ExecuteAssemblyByName_2($assemblyName){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function ExecuteAssemblyByName_3($assemblyName, $args){}
	/**
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride] public  function Load_1($rawAssembly){}
	/**
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride] public  function Load_2($rawAssembly, $rawSymbolStore){}
	/**
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride] public  function Load_3($assemblyRef){}
	/**
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride] public  function Load_4($assemblyString){}
	/**
	 * @return \System\Runtime\Remoting\ObjectHandle
	 */
	#[MethodOverride] public  function CreateInstance_1($assemblyName, $typeName){}
	/**
	 * @return \System\Runtime\Remoting\ObjectHandle
	 */
	#[MethodOverride] public  function CreateInstance_2($assemblyName, $typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes){}
	/**
	 * @return \System\Runtime\Remoting\ObjectHandle
	 */
	#[MethodOverride] public  function CreateInstance_3($assemblyName, $typeName, $activationAttributes){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function CreateInstanceAndUnwrap_1($assemblyName, $typeName){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function CreateInstanceAndUnwrap_2($assemblyName, $typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function CreateInstanceAndUnwrap_3($assemblyName, $typeName, $activationAttributes){}
	/**
	 * @return \System\Runtime\Remoting\ObjectHandle
	 */
	#[MethodOverride] public  function CreateInstanceFrom_1($assemblyFile, $typeName){}
	/**
	 * @return \System\Runtime\Remoting\ObjectHandle
	 */
	#[MethodOverride] public  function CreateInstanceFrom_2($assemblyFile, $typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes){}
	/**
	 * @return \System\Runtime\Remoting\ObjectHandle
	 */
	#[MethodOverride] public  function CreateInstanceFrom_3($assemblyFile, $typeName, $activationAttributes){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function CreateInstanceFromAndUnwrap_1($assemblyFile, $typeName){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function CreateInstanceFromAndUnwrap_2($assemblyFile, $typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function CreateInstanceFromAndUnwrap_3($assemblyFile, $typeName, $activationAttributes){}
	/**
	 * @return \System\MarshalByRefObject
	 */
	#[MethodOverride] protected  function MemberwiseClone_1($cloneIdentity){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected  function MemberwiseClone_2(){}
}
/**
 */
class AppDomain extends \System\MarshalByRefObject
{
	/**
	 * @var \System\AppDomain
	 * @property
	 */
	public readonly $CurrentDomain;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $BaseDirectory;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $RelativeSearchPath;
	/**
	 * @var \System\AppDomainSetup
	 * @property
	 */
	public readonly $SetupInformation;
	/**
	 * @var \System\Security\PermissionSet
	 * @property
	 */
	public readonly $PermissionSet;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $DynamicDirectory;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $FriendlyName;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Id;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsFullyTrusted;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsHomogenous;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $MonitoringIsEnabled;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $MonitoringSurvivedMemorySize;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $MonitoringSurvivedProcessMemorySize;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $MonitoringTotalAllocatedMemorySize;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $ShadowCopyFiles;
	/**
	 * @var \System\TimeSpan
	 * @property
	 */
	public readonly $MonitoringTotalProcessorTime;
	/**
	 * @return \System\AppDomain
	 */
	public static function get_CurrentDomain(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_BaseDirectory(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_RelativeSearchPath(){}
	/**
	 * @return \System\AppDomainSetup
	 */
	public  function get_SetupInformation(){}
	/**
	 * @return \System\Security\PermissionSet
	 */
	public  function get_PermissionSet(){}
	/**
	 * @param \System\UnhandledExceptionEventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_UnhandledException($value){}
	/**
	 * @param \System\UnhandledExceptionEventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_UnhandledException($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_DynamicDirectory(){}
	/**
	 * @param \System\String|string $path
	 * @return \System\Void|void
	 */
	public  function SetDynamicBase($path){}
	/**
	 * @return \System\String|string
	 */
	public  function get_FriendlyName(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Id(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsFullyTrusted(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsHomogenous(){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_DomainUnload($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_DomainUnload($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_FirstChanceException($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_FirstChanceException($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_ProcessExit($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_ProcessExit($value){}
	/**
	 * @param \System\String|string $assemblyName
	 * @return \System\String|string
	 */
	public  function ApplyPolicy($assemblyName){}
	/**
	 * @param \System\String|string $friendlyName
	 * @return \System\AppDomain
	 */
	public static function CreateDomain($friendlyName){}
	/**
	 * @uses AppDomainMethodsOverride::ExecuteAssembly_1 ($assemblyFile)
	 * @uses AppDomainMethodsOverride::ExecuteAssembly_2 ($assemblyFile, $args)
	 * @uses AppDomainMethodsOverride::ExecuteAssembly_3 ($assemblyFile, $args, $hashValue, $hashAlgorithm)
	 * @uses AppDomainMethodsOverride::ExecuteAssembly_4 ($assembly, $args)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ExecuteAssembly(mixed ...$args){}
	/**
	 * @uses AppDomainMethodsOverride::ExecuteAssemblyByName_1 ($assemblyName, $args)
	 * @uses AppDomainMethodsOverride::ExecuteAssemblyByName_2 ($assemblyName)
	 * @uses AppDomainMethodsOverride::ExecuteAssemblyByName_3 ($assemblyName, $args)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ExecuteAssemblyByName(mixed ...$args){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Object|object
	 */
	public  function GetData($name){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Object|object $data
	 * @return \System\Void|void
	 */
	public  function SetData($name, $data){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Nullable_1
	 */
	public  function IsCompatibilitySwitchSet($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function IsDefaultAppDomain(){}
	/**
	 * @return \System\Boolean
	 */
	public  function IsFinalizingForUnload(){}
	/**
	 * @param \System\AppDomain $domain
	 * @return \System\Void|void
	 */
	public static function Unload($domain){}
	/**
	 * @uses AppDomainMethodsOverride::Load_1 ($rawAssembly)
	 * @uses AppDomainMethodsOverride::Load_2 ($rawAssembly, $rawSymbolStore)
	 * @uses AppDomainMethodsOverride::Load_3 ($assemblyRef)
	 * @uses AppDomainMethodsOverride::Load_4 ($assemblyString)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Load(mixed ...$args){}
	/**
	 * @return \System\Reflection\Assembly[]
	 */
	public  function ReflectionOnlyGetAssemblies(){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_MonitoringIsEnabled(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public static function set_MonitoringIsEnabled($value){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_MonitoringSurvivedMemorySize(){}
	/**
	 * @return \System\Int64|int
	 */
	public static function get_MonitoringSurvivedProcessMemorySize(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_MonitoringTotalAllocatedMemorySize(){}
	/**
	 * @return \System\Int32|int
	 */
	public static function GetCurrentThreadId(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ShadowCopyFiles(){}
	/**
	 * @param \System\String|string $path
	 * @return \System\Void|void
	 */
	public  function AppendPrivatePath($path){}
	/**
	 * @return \System\Void|void
	 */
	public  function ClearPrivatePath(){}
	/**
	 * @return \System\Void|void
	 */
	public  function ClearShadowCopyPath(){}
	/**
	 * @param \System\String|string $path
	 * @return \System\Void|void
	 */
	public  function SetCachePath($path){}
	/**
	 * @return \System\Void|void
	 */
	public  function SetShadowCopyFiles(){}
	/**
	 * @param \System\String|string $path
	 * @return \System\Void|void
	 */
	public  function SetShadowCopyPath($path){}
	/**
	 * @return \System\Reflection\Assembly[]
	 */
	public  function GetAssemblies(){}
	/**
	 * @param \System\AssemblyLoadEventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_AssemblyLoad($value){}
	/**
	 * @param \System\AssemblyLoadEventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_AssemblyLoad($value){}
	/**
	 * @param \System\ResolveEventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_AssemblyResolve($value){}
	/**
	 * @param \System\ResolveEventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_AssemblyResolve($value){}
	/**
	 * @param \System\ResolveEventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_ReflectionOnlyAssemblyResolve($value){}
	/**
	 * @param \System\ResolveEventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_ReflectionOnlyAssemblyResolve($value){}
	/**
	 * @param \System\ResolveEventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_TypeResolve($value){}
	/**
	 * @param \System\ResolveEventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_TypeResolve($value){}
	/**
	 * @param \System\ResolveEventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_ResourceResolve($value){}
	/**
	 * @param \System\ResolveEventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_ResourceResolve($value){}
	/**
	 * @param \System\Security\Principal\PrincipalPolicy $policy
	 * @return \System\Void|void
	 */
	public  function SetPrincipalPolicy($policy){}
	/**
	 * @param \System\Security\Principal\IPrincipal $principal
	 * @return \System\Void|void
	 */
	public  function SetThreadPrincipal($principal){}
	/**
	 * @uses AppDomainMethodsOverride::CreateInstance_1 ($assemblyName, $typeName)
	 * @uses AppDomainMethodsOverride::CreateInstance_2 ($assemblyName, $typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes)
	 * @uses AppDomainMethodsOverride::CreateInstance_3 ($assemblyName, $typeName, $activationAttributes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CreateInstance(mixed ...$args){}
	/**
	 * @uses AppDomainMethodsOverride::CreateInstanceAndUnwrap_1 ($assemblyName, $typeName)
	 * @uses AppDomainMethodsOverride::CreateInstanceAndUnwrap_2 ($assemblyName, $typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes)
	 * @uses AppDomainMethodsOverride::CreateInstanceAndUnwrap_3 ($assemblyName, $typeName, $activationAttributes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CreateInstanceAndUnwrap(mixed ...$args){}
	/**
	 * @uses AppDomainMethodsOverride::CreateInstanceFrom_1 ($assemblyFile, $typeName)
	 * @uses AppDomainMethodsOverride::CreateInstanceFrom_2 ($assemblyFile, $typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes)
	 * @uses AppDomainMethodsOverride::CreateInstanceFrom_3 ($assemblyFile, $typeName, $activationAttributes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CreateInstanceFrom(mixed ...$args){}
	/**
	 * @uses AppDomainMethodsOverride::CreateInstanceFromAndUnwrap_1 ($assemblyFile, $typeName)
	 * @uses AppDomainMethodsOverride::CreateInstanceFromAndUnwrap_2 ($assemblyFile, $typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes)
	 * @uses AppDomainMethodsOverride::CreateInstanceFromAndUnwrap_3 ($assemblyFile, $typeName, $activationAttributes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CreateInstanceFromAndUnwrap(mixed ...$args){}
	/**
	 * @return \System\Security\Principal\IPrincipal
	 */
	protected  function GetThreadPrincipal(){}
	/**
	 * @return \System\TimeSpan
	 */
	public  function get_MonitoringTotalProcessorTime(){}
	/**
	 * @uses AppDomainMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses AppDomainMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
