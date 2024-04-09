<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AppDomainOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $assemblyFile
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function ExecuteAssembly_1 ($assemblyFile){}
	/**
	 * @deprecated
	 * @param \System\String|string $assemblyFile
	 * @param \System\String $args
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function ExecuteAssembly_2 ($assemblyFile, $args){}
	/**
	 * @deprecated
	 * @param \System\String|string $assemblyFile
	 * @param \System\String $args
	 * @param \System\Byte $hashValue
	 * @param \System\Configuration\Assemblies\AssemblyHashAlgorithm $hashAlgorithm
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function ExecuteAssembly_3 ($assemblyFile, $args, $hashValue, $hashAlgorithm){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Assembly $assembly
	 * @param \System\String $args
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function ExecuteAssembly_4 ($assembly, $args){}
	/**
	 * @deprecated
	 * @param \System\Reflection\AssemblyName $assemblyName
	 * @param \System\String ...$args
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function ExecuteAssemblyByName_1 ($assemblyName, ...$args){}
	/**
	 * @deprecated
	 * @param \System\String|string $assemblyName
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function ExecuteAssemblyByName_2 ($assemblyName){}
	/**
	 * @deprecated
	 * @param \System\String|string $assemblyName
	 * @param \System\String ...$args
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function ExecuteAssemblyByName_3 ($assemblyName, ...$args){}
	/**
	 * @deprecated
	 * @param \System\Byte $rawAssembly
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride]public function Load_1 ($rawAssembly){}
	/**
	 * @deprecated
	 * @param \System\Byte $rawAssembly
	 * @param \System\Byte $rawSymbolStore
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride]public function Load_2 ($rawAssembly, $rawSymbolStore){}
	/**
	 * @deprecated
	 * @param \System\Reflection\AssemblyName $assemblyRef
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride]public function Load_3 ($assemblyRef){}
	/**
	 * @deprecated
	 * @param \System\String|string $assemblyString
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride]public function Load_4 ($assemblyString){}
	/**
	 * @deprecated
	 * @param \System\String|string $assemblyName
	 * @param \System\String|string $typeName
	 * @return \System\Runtime\Remoting\ObjectHandle
	 */
	#[MethodOverride]public function CreateInstance_1 ($assemblyName, $typeName){}
	/**
	 * @deprecated
	 * @param \System\String|string $assemblyName
	 * @param \System\String|string $typeName
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Object $args
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Object $activationAttributes
	 * @return \System\Runtime\Remoting\ObjectHandle
	 */
	#[MethodOverride]public function CreateInstance_2 ($assemblyName, $typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes){}
	/**
	 * @deprecated
	 * @param \System\String|string $assemblyName
	 * @param \System\String|string $typeName
	 * @param \System\Object $activationAttributes
	 * @return \System\Runtime\Remoting\ObjectHandle
	 */
	#[MethodOverride]public function CreateInstance_3 ($assemblyName, $typeName, $activationAttributes){}
	/**
	 * @deprecated
	 * @param \System\String|string $assemblyName
	 * @param \System\String|string $typeName
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function CreateInstanceAndUnwrap_1 ($assemblyName, $typeName){}
	/**
	 * @deprecated
	 * @param \System\String|string $assemblyName
	 * @param \System\String|string $typeName
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Object $args
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Object $activationAttributes
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function CreateInstanceAndUnwrap_2 ($assemblyName, $typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes){}
	/**
	 * @deprecated
	 * @param \System\String|string $assemblyName
	 * @param \System\String|string $typeName
	 * @param \System\Object $activationAttributes
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function CreateInstanceAndUnwrap_3 ($assemblyName, $typeName, $activationAttributes){}
	/**
	 * @deprecated
	 * @param \System\String|string $assemblyFile
	 * @param \System\String|string $typeName
	 * @return \System\Runtime\Remoting\ObjectHandle
	 */
	#[MethodOverride]public function CreateInstanceFrom_1 ($assemblyFile, $typeName){}
	/**
	 * @deprecated
	 * @param \System\String|string $assemblyFile
	 * @param \System\String|string $typeName
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Object $args
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Object $activationAttributes
	 * @return \System\Runtime\Remoting\ObjectHandle
	 */
	#[MethodOverride]public function CreateInstanceFrom_2 ($assemblyFile, $typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes){}
	/**
	 * @deprecated
	 * @param \System\String|string $assemblyFile
	 * @param \System\String|string $typeName
	 * @param \System\Object $activationAttributes
	 * @return \System\Runtime\Remoting\ObjectHandle
	 */
	#[MethodOverride]public function CreateInstanceFrom_3 ($assemblyFile, $typeName, $activationAttributes){}
	/**
	 * @deprecated
	 * @param \System\String|string $assemblyFile
	 * @param \System\String|string $typeName
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function CreateInstanceFromAndUnwrap_1 ($assemblyFile, $typeName){}
	/**
	 * @deprecated
	 * @param \System\String|string $assemblyFile
	 * @param \System\String|string $typeName
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Object $args
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Object $activationAttributes
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function CreateInstanceFromAndUnwrap_2 ($assemblyFile, $typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes){}
	/**
	 * @deprecated
	 * @param \System\String|string $assemblyFile
	 * @param \System\String|string $typeName
	 * @param \System\Object $activationAttributes
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function CreateInstanceFromAndUnwrap_3 ($assemblyFile, $typeName, $activationAttributes){}
}
final class AppDomain extends \System\MarshalByRefObject
{
	use AppDomainOverride;
	/**
	 * @property
	 * @var \System\AppDomain
	 * @since readonly
	 */
	public $CurrentDomain;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $BaseDirectory;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $RelativeSearchPath;
	/**
	 * @property
	 * @var \System\AppDomainSetup
	 * @since readonly
	 */
	public $SetupInformation;
	/**
	 * @property
	 * @var \System\Security\PermissionSet
	 * @since readonly
	 */
	public $PermissionSet;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $DynamicDirectory;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $FriendlyName;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Id;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsFullyTrusted;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsHomogenous;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $MonitoringIsEnabled;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $MonitoringSurvivedMemorySize;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $MonitoringSurvivedProcessMemorySize;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $MonitoringTotalAllocatedMemorySize;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $ShadowCopyFiles;
	/**
	 * @property
	 * @var \System\TimeSpan
	 * @since readonly
	 */
	public $MonitoringTotalProcessorTime;
	/**
	 * @param \System\UnhandledExceptionEventHandler $value
	 * @return \System\Void|void
	 */
	public function add_UnhandledException($value){}
	/**
	 * @param \System\UnhandledExceptionEventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_UnhandledException($value){}
	/**
	 * @param \System\String|string $path
	 * @return \System\Void|void
	 */
	public function SetDynamicBase($path){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_DomainUnload($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_DomainUnload($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\Runtime\ExceptionServices\FirstChanceExceptionEventArgs]
	 * @return \System\Void|void
	 */
	public function add_FirstChanceException($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\Runtime\ExceptionServices\FirstChanceExceptionEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_FirstChanceException($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_ProcessExit($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_ProcessExit($value){}
	/**
	 * @param \System\String|string $assemblyName
	 * @return \System\String|string
	 */
	public function ApplyPolicy($assemblyName){}
	/**
	 * @param \System\String|string $friendlyName
	 * @return \System\AppDomain
	 */
	public static function CreateDomain($friendlyName){}
	/**
	 * @uses AppDomainOverride::ExecuteAssembly_1 <br>public , args: ($assemblyFile)<br>
	 * @uses AppDomainOverride::ExecuteAssembly_2 <br>public , args: ($assemblyFile, $args)<br>
	 * @uses AppDomainOverride::ExecuteAssembly_3 <br>public , args: ($assemblyFile, $args, $hashValue, $hashAlgorithm)<br>
	 * @uses AppDomainOverride::ExecuteAssembly_4 <br>private , args: ($assembly, $args)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function ExecuteAssembly (\override ...$args){}
	/**
	 * @uses AppDomainOverride::ExecuteAssemblyByName_1 <br>public , args: ($assemblyName, ...$args)<br>
	 * @uses AppDomainOverride::ExecuteAssemblyByName_2 <br>public , args: ($assemblyName)<br>
	 * @uses AppDomainOverride::ExecuteAssemblyByName_3 <br>public , args: ($assemblyName, ...$args)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function ExecuteAssemblyByName (\override ...$args){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Object|object
	 */
	public function GetData($name){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Object|object $data
	 * @return \System\Void|void
	 */
	public function SetData($name, $data){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Nullable_1[System\Boolean]
	 */
	public function IsCompatibilitySwitchSet($value){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function IsDefaultAppDomain(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function IsFinalizingForUnload(){}
	/**
	 * @param \System\AppDomain $domain
	 * @return \System\Void|void
	 */
	public static function Unload($domain){}
	/**
	 * @uses AppDomainOverride::Load_1 <br>public , args: ($rawAssembly)<br>
	 * @uses AppDomainOverride::Load_2 <br>public , args: ($rawAssembly, $rawSymbolStore)<br>
	 * @uses AppDomainOverride::Load_3 <br>public , args: ($assemblyRef)<br>
	 * @uses AppDomainOverride::Load_4 <br>public , args: ($assemblyString)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\Assembly|mixed|\override
	 */
	#[MethodOverridePublic]function Load (\override ...$args){}
	/**
	 * @return \System\Reflection\Assembly[]
	 */
	public function ReflectionOnlyGetAssemblies(){}
	/**
	 * @return \System\Int32|int
	 */
	public static function GetCurrentThreadId(){}
	/**
	 * @param \System\String|string $path
	 * @return \System\Void|void
	 */
	public function AppendPrivatePath($path){}
	/**
	 * @return \System\Void|void
	 */
	public function ClearPrivatePath(){}
	/**
	 * @return \System\Void|void
	 */
	public function ClearShadowCopyPath(){}
	/**
	 * @param \System\String|string $path
	 * @return \System\Void|void
	 */
	public function SetCachePath($path){}
	/**
	 * @return \System\Void|void
	 */
	public function SetShadowCopyFiles(){}
	/**
	 * @param \System\String|string $path
	 * @return \System\Void|void
	 */
	public function SetShadowCopyPath($path){}
	/**
	 * @return \System\Reflection\Assembly[]
	 */
	public function GetAssemblies(){}
	/**
	 * @param \System\AssemblyLoadEventHandler $value
	 * @return \System\Void|void
	 */
	public function add_AssemblyLoad($value){}
	/**
	 * @param \System\AssemblyLoadEventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_AssemblyLoad($value){}
	/**
	 * @param \System\ResolveEventHandler $value
	 * @return \System\Void|void
	 */
	public function add_AssemblyResolve($value){}
	/**
	 * @param \System\ResolveEventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_AssemblyResolve($value){}
	/**
	 * @param \System\ResolveEventHandler $value
	 * @return \System\Void|void
	 */
	public function add_ReflectionOnlyAssemblyResolve($value){}
	/**
	 * @param \System\ResolveEventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_ReflectionOnlyAssemblyResolve($value){}
	/**
	 * @param \System\ResolveEventHandler $value
	 * @return \System\Void|void
	 */
	public function add_TypeResolve($value){}
	/**
	 * @param \System\ResolveEventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_TypeResolve($value){}
	/**
	 * @param \System\ResolveEventHandler $value
	 * @return \System\Void|void
	 */
	public function add_ResourceResolve($value){}
	/**
	 * @param \System\ResolveEventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_ResourceResolve($value){}
	/**
	 * @param \System\Security\Principal\PrincipalPolicy $policy
	 * @return \System\Void|void
	 */
	public function SetPrincipalPolicy($policy){}
	/**
	 * @param \System\Security\Principal\IPrincipal $principal
	 * @return \System\Void|void
	 */
	public function SetThreadPrincipal($principal){}
	/**
	 * @uses AppDomainOverride::CreateInstance_1 <br>public , args: ($assemblyName, $typeName)<br>
	 * @uses AppDomainOverride::CreateInstance_2 <br>public , args: ($assemblyName, $typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes)<br>
	 * @uses AppDomainOverride::CreateInstance_3 <br>public , args: ($assemblyName, $typeName, $activationAttributes)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Remoting\ObjectHandle|mixed|\override
	 */
	#[MethodOverridePublic]function CreateInstance (\override ...$args){}
	/**
	 * @uses AppDomainOverride::CreateInstanceAndUnwrap_1 <br>public , args: ($assemblyName, $typeName)<br>
	 * @uses AppDomainOverride::CreateInstanceAndUnwrap_2 <br>public , args: ($assemblyName, $typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes)<br>
	 * @uses AppDomainOverride::CreateInstanceAndUnwrap_3 <br>public , args: ($assemblyName, $typeName, $activationAttributes)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function CreateInstanceAndUnwrap (\override ...$args){}
	/**
	 * @uses AppDomainOverride::CreateInstanceFrom_1 <br>public , args: ($assemblyFile, $typeName)<br>
	 * @uses AppDomainOverride::CreateInstanceFrom_2 <br>public , args: ($assemblyFile, $typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes)<br>
	 * @uses AppDomainOverride::CreateInstanceFrom_3 <br>public , args: ($assemblyFile, $typeName, $activationAttributes)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Remoting\ObjectHandle|mixed|\override
	 */
	#[MethodOverridePublic]function CreateInstanceFrom (\override ...$args){}
	/**
	 * @uses AppDomainOverride::CreateInstanceFromAndUnwrap_1 <br>public , args: ($assemblyFile, $typeName)<br>
	 * @uses AppDomainOverride::CreateInstanceFromAndUnwrap_2 <br>public , args: ($assemblyFile, $typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes)<br>
	 * @uses AppDomainOverride::CreateInstanceFromAndUnwrap_3 <br>public , args: ($assemblyFile, $typeName, $activationAttributes)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function CreateInstanceFromAndUnwrap (\override ...$args){}
	/**
	 * @return \System\Security\Principal\IPrincipal
	 */
	protected function GetThreadPrincipal(){}
}