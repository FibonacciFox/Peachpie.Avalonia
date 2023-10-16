<?php
namespace System\Resources;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ResourceManagerMethodsOverride
{
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetString_1($name){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetString_2($name, $culture){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetObject_1($name){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetObject_2($name, $culture){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function GetObject_3($name, $culture, $wrapUnmanagedMemStream){}
	/**
	 * @return \System\IO\UnmanagedMemoryStream
	 */
	#[MethodOverride] public  function GetStream_1($name){}
	/**
	 * @return \System\IO\UnmanagedMemoryStream
	 */
	#[MethodOverride] public  function GetStream_2($name, $culture){}
}
/**
 */
class ResourceManager extends \System\Object
{
	/**
	 * @var \System\String
	 * @field
	 */
	protected $BaseNameField;
	/**
	 * @var \System\Reflection\Assembly
	 * @field
	 */
	protected $MainAssembly;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public readonly $MagicNumber;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public readonly $HeaderVersionNumber;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $BaseName;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IgnoreCase;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $ResourceSetType;
	/**
	 * @var \System\Resources\UltimateResourceFallbackLocation
	 * @property
	 */
	protected $FallbackLocation;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CommonAssemblyInit(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_BaseName(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IgnoreCase(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IgnoreCase($value){}
	/**
	 * @return \System\Type
	 */
	public  function get_ResourceSetType(){}
	/**
	 * @return \System\Resources\UltimateResourceFallbackLocation
	 */
	protected  function get_FallbackLocation(){}
	/**
	 * @param \System\Resources\UltimateResourceFallbackLocation $value
	 * @return \System\Void|void
	 */
	protected  function set_FallbackLocation($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function ReleaseAllResources(){}
	/**
	 * @param \System\String|string $baseName
	 * @param \System\String|string $resourceDir
	 * @param \System\Type $usingResourceSet
	 * @return \System\Resources\ResourceManager
	 */
	public static function CreateFileBasedResourceManager($baseName, $resourceDir, $usingResourceSet){}
	/**
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\String|string
	 */
	protected  function GetResourceFileName($culture){}
	/**
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Resources\ResourceSet
	 */
	protected  function GetFirstResourceSet($culture){}
	/**
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Boolean $createIfNotExists
	 * @param \System\Boolean $tryParents
	 * @return \System\Resources\ResourceSet
	 */
	public  function GetResourceSet($culture, $createIfNotExists, $tryParents){}
	/**
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Boolean $createIfNotExists
	 * @param \System\Boolean $tryParents
	 * @return \System\Resources\ResourceSet
	 */
	protected  function InternalGetResourceSet($culture, $createIfNotExists, $tryParents){}
	/**
	 * @param \System\Collections\Generic\Dictionary_2 $localResourceSets
	 * @param \System\String|string $cultureName
	 * @param \System\Resources\ResourceSet& $rs
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AddResourceSet($localResourceSets, $cultureName, $rs){}
	/**
	 * @param \System\Reflection\Assembly $a
	 * @return \System\Version
	 */
	protected static function GetSatelliteContractVersion($a){}
	/**
	 * @param \System\Reflection\Assembly $a
	 * @return \System\Globalization\CultureInfo
	 */
	protected static function GetNeutralResourcesLanguage($a){}
	/**
	 * @param \System\String|string $asmTypeName
	 * @param \System\String|string $defaultTypeName
	 * @return \System\Boolean
	 */
	protected static function IsDefaultType($asmTypeName, $defaultTypeName){}
	/**
	 * @uses ResourceManagerMethodsOverride::GetString_1 ($name)
	 * @uses ResourceManagerMethodsOverride::GetString_2 ($name, $culture)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetString(mixed ...$args){}
	/**
	 * @uses ResourceManagerMethodsOverride::GetObject_1 ($name)
	 * @uses ResourceManagerMethodsOverride::GetObject_2 ($name, $culture)
	 * @uses ResourceManagerMethodsOverride::GetObject_3 ($name, $culture, $wrapUnmanagedMemStream)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetObject(mixed ...$args){}
	/**
	 * @uses ResourceManagerMethodsOverride::GetStream_1 ($name)
	 * @uses ResourceManagerMethodsOverride::GetStream_2 ($name, $culture)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetStream(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
