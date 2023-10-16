<?php
namespace System\Resources;
/**
 */
class ManifestBasedResourceGroveler extends \System\Object implements 
	\System\Resources\IResourceGroveler
{
	/**
	 * @param \System\Reflection\Assembly $mainAssembly
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Version $version
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalGetSatelliteAssembly($mainAssembly, $culture, $version){}
	/**
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Collections\Generic\Dictionary_2 $localResourceSets
	 * @param \System\Boolean $tryParents
	 * @param \System\Boolean $createIfNotExists
	 * @return \System\Resources\ResourceSet
	 */
	public  function GrovelForResourceSet($culture, $localResourceSets, $tryParents, $createIfNotExists){}
	/**
	 * @param \System\Globalization\CultureInfo $lookForCulture
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UltimateFallbackFixup($lookForCulture){}
	/**
	 * @param \System\Reflection\Assembly $a
	 * @param \System\Resources\UltimateResourceFallbackLocation& $fallbackLocation
	 * @return \System\Globalization\CultureInfo
	 */
	protected static function GetNeutralResourcesLanguage($a, $fallbackLocation){}
	/**
	 * @param \System\IO\Stream $store
	 * @param \System\Reflection\Assembly $assembly
	 * @return \System\Resources\ResourceSet
	 */
	protected  function CreateResourceSet($store, $assembly){}
	/**
	 * @param \System\IO\Stream $store
	 * @param \System\String|string $readerTypeName
	 * @param \System\String|string $resSetTypeName
	 * @param \System\Resources\ResourceManagerMediator $mediator
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalGetResourceSetFromSerializedData($store, $readerTypeName, $resSetTypeName, $mediator){}
	/**
	 * @param \System\Reflection\Assembly $satellite
	 * @param \System\String|string $fileName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetManifestResourceStream($satellite, $fileName){}
	/**
	 * @param \System\Reflection\Assembly $satellite
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CaseInsensitiveManifestResourceStreamLookup($satellite, $name){}
	/**
	 * @param \System\Globalization\CultureInfo $lookForCulture
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetSatelliteAssembly($lookForCulture){}
	/**
	 * @param \System\String|string $readerTypeName
	 * @param \System\String|string $resSetTypeName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CanUseDefaultResourceClasses($readerTypeName, $resSetTypeName){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function HandleSatelliteMissing(){}
	/**
	 * @param \System\Reflection\Assembly $assembly
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetManifestResourceNamesList($assembly){}
	/**
	 * @param \System\String|string $fileName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function HandleResourceStreamMissing($fileName){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
