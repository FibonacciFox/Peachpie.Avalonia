<?php
namespace System\Runtime\Loader;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AssemblyLoadContextMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function LoadFromStream_1($ptrNativeAssemblyBinder, $ptrAssemblyArray, $iAssemblyArrayLen, $ptrSymbols, $iSymbolArrayLen, $retAssembly){}
	/**
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride] public  function LoadFromStream_2($assembly){}
	/**
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride] public  function LoadFromStream_3($assembly, $assemblySymbols){}
	/**
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride] private static function ResolveSatelliteAssembly_1($gchManagedAssemblyLoadContext, $assemblyName){}
	/**
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride] private  function ResolveSatelliteAssembly_2($assemblyName){}
	/**
	 * @return \System\Runtime\Loader\ContextualReflectionScope
	 */
	#[MethodOverride] public  function EnterContextualReflection_1(){}
	/**
	 * @return \System\Runtime\Loader\ContextualReflectionScope
	 */
	#[MethodOverride] public static function EnterContextualReflection_2($activating){}
}
/**
 */
class AssemblyLoadContext extends \System\Object
{
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\Assembly]
	 * @property
	 */
	public readonly $Assemblies;
	/**
	 * @var \System\Runtime\Loader\AssemblyLoadContext
	 * @property
	 */
	public readonly $Default;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCollectible;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Runtime\Loader\AssemblyLoadContext]
	 * @property
	 */
	public readonly $All;
	/**
	 * @var \System\Runtime\Loader\AssemblyLoadContext
	 * @property
	 */
	public readonly $CurrentContextualReflectionContext;
	/**
	 * @param \System\IntPtr $ptrAssemblyLoadContext
	 * @param \System\Boolean $fRepresentsTPALoadContext
	 * @param \System\Boolean $isCollectible
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InitializeAssemblyLoadContext($ptrAssemblyLoadContext, $fRepresentsTPALoadContext, $isCollectible){}
	/**
	 * @param \System\IntPtr $ptrNativeAssemblyBinder
	 * @param \System\IntPtr $ptrAssemblyLoadContextStrong
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PrepareForAssemblyLoadContextRelease($ptrNativeAssemblyBinder, $ptrAssemblyLoadContextStrong){}
	/**
	 * @uses AssemblyLoadContextMethodsOverride::LoadFromStream_1 ($ptrNativeAssemblyBinder, $ptrAssemblyArray, $iAssemblyArrayLen, $ptrSymbols, $iSymbolArrayLen, $retAssembly)
	 * @uses AssemblyLoadContextMethodsOverride::LoadFromStream_2 ($assembly)
	 * @uses AssemblyLoadContextMethodsOverride::LoadFromStream_3 ($assembly, $assemblySymbols)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function LoadFromStream(mixed ...$args){}
	/**
	 * @param \System\String|string $directoryPath
	 * @return \System\Void|void
	 */
	protected static function InternalSetProfileRoot($directoryPath){}
	/**
	 * @param \System\String|string $profile
	 * @param \System\IntPtr $ptrNativeAssemblyBinder
	 * @return \System\Void|void
	 */
	protected static function InternalStartProfile($profile, $ptrNativeAssemblyBinder){}
	/**
	 * @param \System\IntPtr $ptrNativeAssemblyBinder
	 * @param \System\String|string $ilPath
	 * @param \System\String|string $niPath
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $retAssembly
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function LoadFromPath($ptrNativeAssemblyBinder, $ilPath, $niPath, $retAssembly){}
	/**
	 * @return \System\Reflection\Assembly[]
	 */
	protected static function GetLoadedAssemblies(){}
	/**
	 * @return \System\Boolean
	 */
	protected static function IsTracingEnabled(){}
	/**
	 * @param \System\String|string $assemblyName
	 * @param \System\String|string $handlerName
	 * @param \System\String|string $alcName
	 * @param \System\String|string $resultAssemblyName
	 * @param \System\String|string $resultAssemblyPath
	 * @return \System\Boolean
	 */
	protected static function TraceResolvingHandlerInvoked($assemblyName, $handlerName, $alcName, $resultAssemblyName, $resultAssemblyPath){}
	/**
	 * @param \System\String|string $assemblyName
	 * @param \System\String|string $handlerName
	 * @param \System\String|string $resultAssemblyName
	 * @param \System\String|string $resultAssemblyPath
	 * @return \System\Boolean
	 */
	protected static function TraceAssemblyResolveHandlerInvoked($assemblyName, $handlerName, $resultAssemblyName, $resultAssemblyPath){}
	/**
	 * @param \System\String|string $assemblyName
	 * @param \System\Boolean $isTrackedAssembly
	 * @param \System\String|string $requestingAssemblyPath
	 * @param \System\String|string $requestedAssemblyPath
	 * @return \System\Boolean
	 */
	protected static function TraceAssemblyLoadFromResolveHandlerInvoked($assemblyName, $isTrackedAssembly, $requestingAssemblyPath, $requestedAssemblyPath){}
	/**
	 * @param \System\String|string $filePath
	 * @param \System\Int32|int $hResult
	 * @return \System\Boolean
	 */
	protected static function TraceSatelliteSubdirectoryPathProbed($filePath, $hResult){}
	/**
	 * @param \System\String|string $assemblyPath
	 * @param \System\String|string $nativeImagePath
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalLoadFromPath($assemblyPath, $nativeImagePath){}
	/**
	 * @param \System\ReadOnlySpan_1 $arrAssembly
	 * @param \System\ReadOnlySpan_1 $arrSymbols
	 * @return \System\Reflection\Assembly
	 */
	protected  function InternalLoad($arrAssembly, $arrSymbols){}
	/**
	 * @param \System\IntPtr $ptrNativeAssemblyBinder
	 * @param \System\IntPtr $hModule
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $retAssembly
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function LoadFromInMemoryModuleInternal($ptrNativeAssemblyBinder, $hModule, $retAssembly){}
	/**
	 * @param \System\IntPtr $moduleHandle
	 * @return \System\Reflection\Assembly
	 */
	protected  function LoadFromInMemoryModule($moduleHandle){}
	/**
	 * @uses AssemblyLoadContextMethodsOverride::ResolveSatelliteAssembly_1 ($gchManagedAssemblyLoadContext, $assemblyName)
	 * @uses AssemblyLoadContextMethodsOverride::ResolveSatelliteAssembly_2 ($assemblyName)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ResolveSatelliteAssembly(mixed ...$args){}
	/**
	 * @param \System\String|string $unmanagedDllName
	 * @param \System\IntPtr $gchManagedAssemblyLoadContext
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ResolveUnmanagedDll($unmanagedDllName, $gchManagedAssemblyLoadContext){}
	/**
	 * @param \System\String|string $unmanagedDllName
	 * @param \System\Reflection\Assembly $assembly
	 * @param \System\IntPtr $gchManagedAssemblyLoadContext
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ResolveUnmanagedDllUsingEvent($unmanagedDllName, $assembly, $gchManagedAssemblyLoadContext){}
	/**
	 * @param \System\IntPtr $gchManagedAssemblyLoadContext
	 * @param \System\Reflection\AssemblyName $assemblyName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ResolveUsingResolvingEvent($gchManagedAssemblyLoadContext, $assemblyName){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallAssembly $assembly
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetLoadContextForAssembly($assembly){}
	/**
	 * @param \System\Reflection\Assembly $assembly
	 * @return \System\Runtime\Loader\AssemblyLoadContext
	 */
	public static function GetLoadContext($assembly){}
	/**
	 * @param \System\String|string $directoryPath
	 * @return \System\Void|void
	 */
	public  function SetProfileOptimizationRoot($directoryPath){}
	/**
	 * @param \System\String|string $profile
	 * @return \System\Void|void
	 */
	public  function StartProfileOptimization($profile){}
	/**
	 * @param \System\Reflection\Assembly $asm
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetRuntimeAssembly($asm){}
	/**
	 * @param \System\Guid& $activityId
	 * @param \System\Guid& $relatedActivityId
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function StartAssemblyLoad($activityId, $relatedActivityId){}
	/**
	 * @param \System\Guid& $activityId
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function StopAssemblyLoad($activityId){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InitializeDefaultContext(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_AllContexts(){}
	/**
	 * @param \System\Func_3 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function add__resolvingUnmanagedDll($value){}
	/**
	 * @param \System\Func_3 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function remove__resolvingUnmanagedDll($value){}
	/**
	 * @param \System\Func_3 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function add__resolving($value){}
	/**
	 * @param \System\Func_3 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function remove__resolving($value){}
	/**
	 * @param \System\Action_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function add__unloading($value){}
	/**
	 * @param \System\Action_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function remove__unloading($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RaiseUnloadEvent(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitiateUnload(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_Assemblies(){}
	/**
	 * @param \System\Func_3 $value
	 * @return \System\Void|void
	 */
	public  function add_ResolvingUnmanagedDll($value){}
	/**
	 * @param \System\Func_3 $value
	 * @return \System\Void|void
	 */
	public  function remove_ResolvingUnmanagedDll($value){}
	/**
	 * @param \System\Func_3 $value
	 * @return \System\Void|void
	 */
	public  function add_Resolving($value){}
	/**
	 * @param \System\Func_3 $value
	 * @return \System\Void|void
	 */
	public  function remove_Resolving($value){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function add_Unloading($value){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_Unloading($value){}
	/**
	 * @param \System\AssemblyLoadEventHandler $value
	 * @return \System\Void|void
	 */
	protected static function add_AssemblyLoad($value){}
	/**
	 * @param \System\AssemblyLoadEventHandler $value
	 * @return \System\Void|void
	 */
	protected static function remove_AssemblyLoad($value){}
	/**
	 * @param \System\ResolveEventHandler $value
	 * @return \System\Void|void
	 */
	protected static function add_TypeResolve($value){}
	/**
	 * @param \System\ResolveEventHandler $value
	 * @return \System\Void|void
	 */
	protected static function remove_TypeResolve($value){}
	/**
	 * @param \System\ResolveEventHandler $value
	 * @return \System\Void|void
	 */
	protected static function add_ResourceResolve($value){}
	/**
	 * @param \System\ResolveEventHandler $value
	 * @return \System\Void|void
	 */
	protected static function remove_ResourceResolve($value){}
	/**
	 * @param \System\ResolveEventHandler $value
	 * @return \System\Void|void
	 */
	protected static function add_AssemblyResolve($value){}
	/**
	 * @param \System\ResolveEventHandler $value
	 * @return \System\Void|void
	 */
	protected static function remove_AssemblyResolve($value){}
	/**
	 * @return \System\Runtime\Loader\AssemblyLoadContext
	 */
	public static function get_Default(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCollectible(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function get_All(){}
	/**
	 * @param \System\String|string $assemblyPath
	 * @return \System\Reflection\AssemblyName
	 */
	public static function GetAssemblyName($assemblyPath){}
	/**
	 * @param \System\Reflection\AssemblyName $assemblyName
	 * @return \System\Reflection\Assembly
	 */
	protected  function Load($assemblyName){}
	/**
	 * @param \System\Reflection\AssemblyName $assemblyName
	 * @return \System\Reflection\Assembly
	 */
	public  function LoadFromAssemblyName($assemblyName){}
	/**
	 * @param \System\String|string $assemblyPath
	 * @return \System\Reflection\Assembly
	 */
	public  function LoadFromAssemblyPath($assemblyPath){}
	/**
	 * @param \System\String|string $nativeImagePath
	 * @param \System\String|string $assemblyPath
	 * @return \System\Reflection\Assembly
	 */
	public  function LoadFromNativeImagePath($nativeImagePath, $assemblyPath){}
	/**
	 * @param \System\String|string $unmanagedDllPath
	 * @return \System\IntPtr
	 */
	protected  function LoadUnmanagedDllFromPath($unmanagedDllPath){}
	/**
	 * @param \System\String|string $unmanagedDllName
	 * @return \System\IntPtr
	 */
	protected  function LoadUnmanagedDll($unmanagedDllName){}
	/**
	 * @return \System\Void|void
	 */
	public  function Unload(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function OnProcessExit(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function VerifyIsAlive(){}
	/**
	 * @return \System\Runtime\Loader\AssemblyLoadContext
	 */
	public static function get_CurrentContextualReflectionContext(){}
	/**
	 * @param \System\Runtime\Loader\AssemblyLoadContext $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetCurrentContextualReflectionContext($value){}
	/**
	 * @uses AssemblyLoadContextMethodsOverride::EnterContextualReflection_1 ()
	 * @uses AssemblyLoadContextMethodsOverride::EnterContextualReflection_2 ($activating)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function EnterContextualReflection(mixed ...$args){}
	/**
	 * @param \System\IntPtr $gchManagedAssemblyLoadContext
	 * @param \System\Reflection\AssemblyName $assemblyName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Resolve($gchManagedAssemblyLoadContext, $assemblyName){}
	/**
	 * @param \System\Reflection\AssemblyName $assemblyName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetFirstResolvedAssemblyFromResolvingEvent($assemblyName){}
	/**
	 * @param \System\Reflection\Assembly $assembly
	 * @param \System\String|string $requestedSimpleName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidateAssemblyNameWithSimpleName($assembly, $requestedSimpleName){}
	/**
	 * @param \System\Reflection\AssemblyName $assemblyName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ResolveUsingLoad($assemblyName){}
	/**
	 * @param \System\Reflection\AssemblyName $assemblyName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ResolveUsingEvent($assemblyName){}
	/**
	 * @param \System\Reflection\RuntimeAssembly $assembly
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function OnAssemblyLoad($assembly){}
	/**
	 * @param \System\Reflection\RuntimeAssembly $assembly
	 * @param \System\String|string $resourceName
	 * @return \System\Reflection\RuntimeAssembly
	 */
	protected static function OnResourceResolve($assembly, $resourceName){}
	/**
	 * @param \System\Reflection\RuntimeAssembly $assembly
	 * @param \System\String|string $typeName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function OnTypeResolve($assembly, $typeName){}
	/**
	 * @param \System\Reflection\RuntimeAssembly $assembly
	 * @param \System\String|string $assemblyFullName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function OnAssemblyResolve($assembly, $assemblyFullName){}
	/**
	 * @param \System\ResolveEventHandler $eventHandler
	 * @param \System\Reflection\RuntimeAssembly $assembly
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InvokeResolveEvent($eventHandler, $assembly, $name){}
	/**
	 * @param \System\Reflection\Assembly $assembly
	 * @param \System\String|string $unmanagedDllName
	 * @return \System\IntPtr
	 */
	protected  function GetResolvedUnmanagedDll($assembly, $unmanagedDllName){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
