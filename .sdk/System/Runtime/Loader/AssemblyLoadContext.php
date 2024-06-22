<?php
namespace System\Runtime\Loader;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AssemblyLoadContextOverride {
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptrNativeAssemblyBinder
	 * @param \System\IntPtr $ptrAssemblyArray
	 * @param \System\Int32|int $iAssemblyArrayLen
	 * @param \System\IntPtr $ptrSymbols
	 * @param \System\Int32|int $iSymbolArrayLen
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $retAssembly
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function LoadFromStream_1 ($ptrNativeAssemblyBinder, $ptrAssemblyArray, $iAssemblyArrayLen, $ptrSymbols, $iSymbolArrayLen, $retAssembly){}
	/**
	 * @deprecated
	 * @param \System\IO\Stream $assembly
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride]public function LoadFromStream_2 ($assembly){}
	/**
	 * @deprecated
	 * @param \System\IO\Stream $assembly
	 * @param \System\IO\Stream $assemblySymbols
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride]public function LoadFromStream_3 ($assembly, $assemblySymbols){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $gchManagedAssemblyLoadContext
	 * @param \System\Reflection\AssemblyName $assemblyName
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride]private static function ResolveSatelliteAssembly_1 ($gchManagedAssemblyLoadContext, $assemblyName){}
	/**
	 * @deprecated
	 * @param \System\Reflection\AssemblyName $assemblyName
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride]private function ResolveSatelliteAssembly_2 ($assemblyName){}
	/**
	 * @deprecated
	 * @return \System\Runtime\Loader\AssemblyLoadContext
	 */
	#[MethodOverride]public function EnterContextualReflection_1 (){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Assembly $activating
	 * @return \System\Runtime\Loader\AssemblyLoadContext
	 */
	#[MethodOverride]public static function EnterContextualReflection_2 ($activating){}
}
class AssemblyLoadContext extends \System\Object
{
	use AssemblyLoadContextOverride;

	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\Assembly]
	 * @since readonly
	 */
	public $Assemblies;
	/**
	 * @property
	 * @var \System\Runtime\Loader\AssemblyLoadContext
	 * @since readonly
	 */
	public $Default;
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
	public $Name;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Runtime\Loader\AssemblyLoadContext]
	 * @since readonly
	 */
	public $All;
	/**
	 * @property
	 * @var \System\Runtime\Loader\AssemblyLoadContext
	 * @since readonly
	 */
	public $CurrentContextualReflectionContext;
	private static function InitializeAssemblyLoadContext($ptrAssemblyLoadContext, $fRepresentsTPALoadContext, $isCollectible){}
	private static function PrepareForAssemblyLoadContextRelease($ptrNativeAssemblyBinder, $ptrAssemblyLoadContextStrong){}
	/**
	 * @uses AssemblyLoadContextOverride::LoadFromStream_1 <br>private , args: ($ptrNativeAssemblyBinder, $ptrAssemblyArray, $iAssemblyArrayLen, $ptrSymbols, $iSymbolArrayLen, $retAssembly)<br>
	 * @uses AssemblyLoadContextOverride::LoadFromStream_2 <br>public , args: ($assembly)<br>
	 * @uses AssemblyLoadContextOverride::LoadFromStream_3 <br>public , args: ($assembly, $assemblySymbols)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\Reflection\Assembly|mixed|\override
	 */
	#[MethodOverridePublic]function LoadFromStream (\override ...$args){}
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
	private static function LoadFromPath($ptrNativeAssemblyBinder, $ilPath, $niPath, $retAssembly){}
	/**
	 * @return \System\Reflection\Assembly[]
	 */
	protected static function GetLoadedAssemblies(){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected static function IsTracingEnabled(){}
	/**
	 * @param \System\String|string $assemblyName
	 * @param \System\String|string $handlerName
	 * @param \System\String|string $alcName
	 * @param \System\String|string $resultAssemblyName
	 * @param \System\String|string $resultAssemblyPath
	 * @return \System\Boolean|bool
	 */
	protected static function TraceResolvingHandlerInvoked($assemblyName, $handlerName, $alcName, $resultAssemblyName, $resultAssemblyPath){}
	/**
	 * @param \System\String|string $assemblyName
	 * @param \System\String|string $handlerName
	 * @param \System\String|string $resultAssemblyName
	 * @param \System\String|string $resultAssemblyPath
	 * @return \System\Boolean|bool
	 */
	protected static function TraceAssemblyResolveHandlerInvoked($assemblyName, $handlerName, $resultAssemblyName, $resultAssemblyPath){}
	/**
	 * @param \System\String|string $assemblyName
	 * @param \System\Boolean|bool $isTrackedAssembly
	 * @param \System\String|string $requestingAssemblyPath
	 * @param \System\String|string $requestedAssemblyPath
	 * @return \System\Boolean|bool
	 */
	protected static function TraceAssemblyLoadFromResolveHandlerInvoked($assemblyName, $isTrackedAssembly, $requestingAssemblyPath, $requestedAssemblyPath){}
	/**
	 * @param \System\String|string $filePath
	 * @param \System\Int32|int $hResult
	 * @return \System\Boolean|bool
	 */
	protected static function TraceSatelliteSubdirectoryPathProbed($filePath, $hResult){}
	private function InternalLoadFromPath($assemblyPath, $nativeImagePath){}
	/**
	 * @param \System\ReadOnlySpan_1 $arrAssembly [generic: System\Byte]
	 * @param \System\ReadOnlySpan_1 $arrSymbols [generic: System\Byte]
	 * @return \System\Reflection\Assembly
	 */
	protected function InternalLoad($arrAssembly, $arrSymbols){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses AssemblyLoadContextOverride::ResolveSatelliteAssembly_1 <br>private , args: ($gchManagedAssemblyLoadContext, $assemblyName)<br>
	 * @uses AssemblyLoadContextOverride::ResolveSatelliteAssembly_2 <br>private , args: ($assemblyName)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\Assembly|mixed|\override
	 */
	#[MethodOverridePrivate]function ResolveSatelliteAssembly (\override ...$args){}
	private static function ResolveUnmanagedDll($unmanagedDllName, $gchManagedAssemblyLoadContext){}
	private static function ResolveUnmanagedDllUsingEvent($unmanagedDllName, $assembly, $gchManagedAssemblyLoadContext){}
	private static function ResolveUsingResolvingEvent($gchManagedAssemblyLoadContext, $assemblyName){}
	private static function GetLoadContextForAssembly($assembly){}
	/**
	 * @param \System\Reflection\Assembly $assembly
	 * @return \System\Runtime\Loader\AssemblyLoadContext
	 */
	public static function GetLoadContext($assembly){}
	/**
	 * @param \System\String|string $directoryPath
	 * @return \System\Void|void
	 */
	public function SetProfileOptimizationRoot($directoryPath){}
	/**
	 * @param \System\String|string $profile
	 * @return \System\Void|void
	 */
	public function StartProfileOptimization($profile){}
	private static function GetRuntimeAssembly($asm){}
	private static function StartAssemblyLoad($activityId, $relatedActivityId){}
	private static function StopAssemblyLoad($activityId){}
	private static function InitializeDefaultContext(){}
	private function add__resolvingUnmanagedDll($value){}
	private function remove__resolvingUnmanagedDll($value){}
	private function add__resolving($value){}
	private function remove__resolving($value){}
	private function add__unloading($value){}
	private function remove__unloading($value){}
	private function RaiseUnloadEvent(){}
	private function InitiateUnload(){}
	/**
	 * @param \System\Func_3 $value [generic: System\Reflection\Assembly,System\String,System\IntPtr]
	 * @return \System\Void|void
	 */
	public function add_ResolvingUnmanagedDll($value){}
	/**
	 * @param \System\Func_3 $value [generic: System\Reflection\Assembly,System\String,System\IntPtr]
	 * @return \System\Void|void
	 */
	public function remove_ResolvingUnmanagedDll($value){}
	/**
	 * @param \System\Func_3 $value [generic: System\Runtime\Loader\AssemblyLoadContext,System\Reflection\AssemblyName,System\Reflection\Assembly]
	 * @return \System\Void|void
	 */
	public function add_Resolving($value){}
	/**
	 * @param \System\Func_3 $value [generic: System\Runtime\Loader\AssemblyLoadContext,System\Reflection\AssemblyName,System\Reflection\Assembly]
	 * @return \System\Void|void
	 */
	public function remove_Resolving($value){}
	/**
	 * @param \System\Action_1 $value [generic: System\Runtime\Loader\AssemblyLoadContext]
	 * @return \System\Void|void
	 */
	public function add_Unloading($value){}
	/**
	 * @param \System\Action_1 $value [generic: System\Runtime\Loader\AssemblyLoadContext]
	 * @return \System\Void|void
	 */
	public function remove_Unloading($value){}
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
	 * @param \System\String|string $assemblyPath
	 * @return \System\Reflection\AssemblyName
	 */
	public static function GetAssemblyName($assemblyPath){}
	/**
	 * @param \System\Reflection\AssemblyName $assemblyName
	 * @return \System\Reflection\Assembly
	 */
	protected function Load($assemblyName){}
	/**
	 * @param \System\Reflection\AssemblyName $assemblyName
	 * @return \System\Reflection\Assembly
	 */
	public function LoadFromAssemblyName($assemblyName){}
	/**
	 * @param \System\String|string $assemblyPath
	 * @return \System\Reflection\Assembly
	 */
	public function LoadFromAssemblyPath($assemblyPath){}
	/**
	 * @param \System\String|string $nativeImagePath
	 * @param \System\String|string $assemblyPath
	 * @return \System\Reflection\Assembly
	 */
	public function LoadFromNativeImagePath($nativeImagePath, $assemblyPath){}
	/**
	 * @param \System\String|string $unmanagedDllPath
	 * @return \System\IntPtr
	 */
	protected function LoadUnmanagedDllFromPath($unmanagedDllPath){}
	/**
	 * @param \System\String|string $unmanagedDllName
	 * @return \System\IntPtr
	 */
	protected function LoadUnmanagedDll($unmanagedDllName){}
	/**
	 * @return \System\Void|void
	 */
	public function Unload(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function OnProcessExit(){}
	private function VerifyIsAlive(){}
	private static function SetCurrentContextualReflectionContext($value){}
	/**
	 * @uses AssemblyLoadContextOverride::EnterContextualReflection_1 <br>public , args: ()<br>
	 * @uses AssemblyLoadContextOverride::EnterContextualReflection_2 <br>public , args: ($activating)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Loader\AssemblyLoadContext|mixed|\override
	 */
	#[MethodOverridePublic]function EnterContextualReflection (\override ...$args){}
	private static function Resolve($gchManagedAssemblyLoadContext, $assemblyName){}
	private function GetFirstResolvedAssemblyFromResolvingEvent($assemblyName){}
	private static function ValidateAssemblyNameWithSimpleName($assembly, $requestedSimpleName){}
	private function ResolveUsingLoad($assemblyName){}
	private function ResolveUsingEvent($assemblyName){}
	private static function OnAssemblyLoad($assembly){}
	/**
	 * @param \System\Reflection\RuntimeAssembly $assembly
	 * @param \System\String|string $resourceName
	 * @return \System\Reflection\RuntimeAssembly
	 */
	protected static function OnResourceResolve($assembly, $resourceName){}
	private static function OnTypeResolve($assembly, $typeName){}
	private static function OnAssemblyResolve($assembly, $assemblyFullName){}
	private static function InvokeResolveEvent($eventHandler, $assembly, $name){}
	/**
	 * @param \System\Reflection\Assembly $assembly
	 * @param \System\String|string $unmanagedDllName
	 * @return \System\IntPtr
	 */
	protected function GetResolvedUnmanagedDll($assembly, $unmanagedDllName){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Boolean|bool $isCollectible
	 */
	public function __construct($name, $isCollectible){}
}