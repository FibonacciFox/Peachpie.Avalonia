<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RuntimeAssemblyOverride {
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallAssembly $assembly
	 * @param \System\Runtime\CompilerServices\StringHandleOnStack $retString
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function GetCodeBase_1 ($assembly, $retString){}
	/**
	 * @deprecated
	 * @return \System\String|string
	 */
	#[MethodOverride]protected function GetCodeBase_2 (){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallAssembly $assembly
	 * @param \System\String|string $name
	 * @param \System\Boolean|bool $throwOnError
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $type
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $keepAlive
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $assemblyLoadContext
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function GetType_1 ($assembly, $name, $throwOnError, $ignoreCase, $type, $keepAlive, $assemblyLoadContext){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallAssembly $assembly
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $retTypes
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function GetExportedTypes_1 ($assembly, $retTypes){}
	/**
	 * @deprecated
	 * @param \System\String|string $assemblyName
	 * @param \System\Threading\StackCrawlMark& $stackMark
	 * @param \System\Runtime\Loader\AssemblyLoadContext $assemblyLoadContext
	 * @return \System\Reflection\RuntimeAssembly
	 */
	#[MethodOverride]protected static function InternalLoad_1 ($assemblyName, $stackMark, $assemblyLoadContext){}
	/**
	 * @deprecated
	 * @param \System\Reflection\AssemblyName $assemblyName
	 * @param \System\Threading\StackCrawlMark& $stackMark
	 * @param \System\Runtime\Loader\AssemblyLoadContext $assemblyLoadContext
	 * @param \System\Reflection\RuntimeAssembly $requestingAssembly
	 * @param \System\Boolean|bool $throwOnFileNotFound
	 * @return \System\Reflection\RuntimeAssembly
	 */
	#[MethodOverride]protected static function InternalLoad_2 ($assemblyName, $stackMark, $assemblyLoadContext, $requestingAssembly, $throwOnFileNotFound){}
	/**
	 * @deprecated
	 * @param \System\Reflection\NativeAssemblyNameParts* $pAssemblyNameParts
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $requestingAssembly
	 * @param \System\Runtime\CompilerServices\StackCrawlMarkHandle $stackMark
	 * @param \System\Boolean|bool $throwOnFileNotFound
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $assemblyLoadContext
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $retAssembly
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function InternalLoad_3 ($pAssemblyNameParts, $requestingAssembly, $stackMark, $throwOnFileNotFound, $assemblyLoadContext, $retAssembly){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallAssembly $assembly
	 * @param \System\String|string $name
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $retModule
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function GetModule_1 ($assembly, $name, $retModule){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeAssembly $assembly
	 * @return \System\String
	 */
	#[MethodOverride]private static function GetManifestResourceNames_1 ($assembly){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeAssembly $assembly
	 * @return \System\Reflection\AssemblyName
	 */
	#[MethodOverride]private static function GetReferencedAssemblies_1 ($assembly){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallAssembly $assembly
	 * @param \System\String|string $resourceName
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $assemblyRef
	 * @param \System\Runtime\CompilerServices\StringHandleOnStack $retFileName
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function GetManifestResourceInfo_1 ($assembly, $resourceName, $assemblyRef, $retFileName){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallAssembly $assembly
	 * @param \System\Int32& &$majVer
	 * @param \System\Int32& &$minVer
	 * @param \System\Int32& &$buildNum
	 * @param \System\Int32& &$revNum
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function GetVersion_1 ($assembly, &$majVer, &$minVer, &$buildNum, &$revNum){}
	/**
	 * @deprecated
	 * @return \System\Version
	 */
	#[MethodOverride]private function GetVersion_2 (){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallAssembly $assembly
	 * @param \System\Runtime\CompilerServices\StringHandleOnStack $retString
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function GetLocale_1 ($assembly, $retString){}
	/**
	 * @deprecated
	 * @return \System\Globalization\CultureInfo
	 */
	#[MethodOverride]private function GetLocale_2 (){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallAssembly $assembly
	 * @param \System\Runtime\CompilerServices\StringHandleOnStack $retSimpleName
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function GetSimpleName_1 ($assembly, $retSimpleName){}
	/**
	 * @deprecated
	 * @return \System\String|string
	 */
	#[MethodOverride]protected function GetSimpleName_2 (){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallAssembly $assembly
	 * @return \System\Configuration\Assemblies\AssemblyHashAlgorithm
	 */
	#[MethodOverride]private static function GetHashAlgorithm_1 ($assembly){}
	/**
	 * @deprecated
	 * @return \System\Configuration\Assemblies\AssemblyHashAlgorithm
	 */
	#[MethodOverride]private function GetHashAlgorithm_2 (){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallAssembly $assembly
	 * @return \System\Reflection\AssemblyNameFlags
	 */
	#[MethodOverride]private static function GetFlags_1 ($assembly){}
	/**
	 * @deprecated
	 * @return \System\Reflection\AssemblyNameFlags
	 */
	#[MethodOverride]private function GetFlags_2 (){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallAssembly $assembly
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $retPublicKey
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function GetPublicKey_1 ($assembly, $retPublicKey){}
	/**
	 * @deprecated
	 * @return \System\Byte
	 */
	#[MethodOverride]protected function GetPublicKey_2 (){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallAssembly $assembly
	 * @param \System\Boolean|bool $loadIfNotFound
	 * @param \System\Boolean|bool $getResourceModules
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $retModuleHandles
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function GetModules_1 ($assembly, $loadIfNotFound, $getResourceModules, $retModuleHandles){}
}
final class RuntimeAssembly extends \System\Reflection\Assembly implements
	\System\Reflection\ICustomAttributeProvider,
	\System\Runtime\Serialization\ISerializable
{
	use RuntimeAssemblyOverride;

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
	public $FullName;
	/**
	 * @property
	 * @var \System\Reflection\MethodInfo
	 * @since readonly
	 */
	public $EntryPoint;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\TypeInfo]
	 * @since readonly
	 */
	public $DefinedTypes;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCollectible;
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
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Location;
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
	public $GlobalAssemblyCache;
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
	public $IsDynamic;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Type]
	 * @since readonly
	 */
	public $ExportedTypes;
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
	 * @var \System\Security\SecurityRuleSet
	 * @since readonly
	 */
	public $SecurityRuleSet;
	private function add__ModuleResolve($value){}
	private function remove__ModuleResolve($value){}
	/**
	 * @return \System\IntPtr
	 */
	protected function GetUnderlyingNativeHandle(){}
	/**
	 * @uses RuntimeAssemblyOverride::GetCodeBase_1 <br>private , args: ($assembly, $retString)<br>
	 * @uses RuntimeAssemblyOverride::GetCodeBase_2 <br>protected , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|\System\String|string|mixed|\override
	 */
	#[MethodOverrideProtected]function GetCodeBase (\override ...$args){}
	/**
	 * @return \System\Reflection\RuntimeAssembly
	 */
	protected function GetNativeHandle(){}
	private static function GetFullName($assembly, $retString){}
	private static function GetEntryPoint($assembly, $retMethod){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallAssembly $assembly
	 * @return \Interop+BOOL
	 */
	protected static function GetIsCollectible($assembly){}
	private static function GetResource($assembly, $resourceName, &$length){}
	/**
	 * @uses RuntimeAssemblyOverride::InternalLoad_1 <br>protected , args: ($assemblyName, $stackMark, $assemblyLoadContext)<br>
	 * @uses RuntimeAssemblyOverride::InternalLoad_2 <br>protected , args: ($assemblyName, $stackMark, $assemblyLoadContext, $requestingAssembly, $throwOnFileNotFound)<br>
	 * @uses RuntimeAssemblyOverride::InternalLoad_3 <br>private , args: ($pAssemblyNameParts, $requestingAssembly, $stackMark, $throwOnFileNotFound, $assemblyLoadContext, $retAssembly)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\RuntimeAssembly|\System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function InternalLoad (\override ...$args){}
	private static function GetLocation($assembly, $retString){}
	private static function GetImageRuntimeVersion($assembly, $retString){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses RuntimeAssemblyOverride::GetVersion_1 <br>private , args: ($assembly, &$majVer, &$minVer, &$buildNum, &$revNum)<br>
	 * @uses RuntimeAssemblyOverride::GetVersion_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\Version|mixed|\override
	 */
	#[MethodOverridePrivate]function GetVersion (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses RuntimeAssemblyOverride::GetLocale_1 <br>private , args: ($assembly, $retString)<br>
	 * @uses RuntimeAssemblyOverride::GetLocale_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\Globalization\CultureInfo|mixed|\override
	 */
	#[MethodOverridePrivate]function GetLocale (\override ...$args){}
	private static function FCallIsDynamic($assembly){}
	/**
	 * @uses RuntimeAssemblyOverride::GetSimpleName_1 <br>private , args: ($assembly, $retSimpleName)<br>
	 * @uses RuntimeAssemblyOverride::GetSimpleName_2 <br>protected , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\String|string|mixed|\override
	 */
	#[MethodOverrideProtected]function GetSimpleName (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses RuntimeAssemblyOverride::GetHashAlgorithm_1 <br>private , args: ($assembly)<br>
	 * @uses RuntimeAssemblyOverride::GetHashAlgorithm_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Configuration\Assemblies\AssemblyHashAlgorithm|mixed|\override
	 */
	#[MethodOverridePrivate]function GetHashAlgorithm (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses RuntimeAssemblyOverride::GetFlags_1 <br>private , args: ($assembly)<br>
	 * @uses RuntimeAssemblyOverride::GetFlags_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\AssemblyNameFlags|mixed|\override
	 */
	#[MethodOverridePrivate]function GetFlags (\override ...$args){}
	/**
	 * @uses RuntimeAssemblyOverride::GetPublicKey_1 <br>private , args: ($assembly, $retPublicKey)<br>
	 * @uses RuntimeAssemblyOverride::GetPublicKey_2 <br>protected , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\Byte|mixed|\override
	 */
	#[MethodOverrideProtected]function GetPublicKey (\override ...$args){}
	/**
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Version $version
	 * @param \System\Boolean|bool $throwOnFileNotFound
	 * @return \System\Reflection\Assembly
	 */
	protected function InternalGetSatelliteAssembly($culture, $version, $throwOnFileNotFound){}
	private function GetModulesInternal($loadIfNotFound, $getResourceModules){}
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
	private static function AddPublicNestedTypes($type, $types, $exceptions){}
	private static function GetForwardedType($assembly, $mdtExternalType, $type){}
}