<?php
namespace System\Resources;
final class ManifestBasedResourceGroveler extends \System\Object implements
	\System\Resources\IResourceGroveler
{

	private static function InternalGetSatelliteAssembly($mainAssembly, $culture, $version){}
	/**
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Collections\Generic\Dictionary_2 $localResourceSets [generic: System\String,System\Resources\ResourceSet]
	 * @param \System\Boolean|bool $tryParents
	 * @param \System\Boolean|bool $createIfNotExists
	 * @return \System\Resources\ResourceSet
	 */
	public function GrovelForResourceSet($culture, $localResourceSets, $tryParents, $createIfNotExists){}
	private function UltimateFallbackFixup($lookForCulture){}
	/**
	 * @param \System\Reflection\Assembly $a
	 * @param \System\Resources\UltimateResourceFallbackLocation& &$fallbackLocation
	 * @return \System\Globalization\CultureInfo
	 */
	protected static function GetNeutralResourcesLanguage($a, &$fallbackLocation){}
	/**
	 * @param \System\IO\Stream $store
	 * @param \System\Reflection\Assembly $assembly
	 * @return \System\Resources\ResourceSet
	 */
	protected function CreateResourceSet($store, $assembly){}
	private static function InternalGetResourceSetFromSerializedData($store, $readerTypeName, $resSetTypeName, $mediator){}
	private function GetManifestResourceStream($satellite, $fileName){}
	private function CaseInsensitiveManifestResourceStreamLookup($satellite, $name){}
	private function GetSatelliteAssembly($lookForCulture){}
	private function CanUseDefaultResourceClasses($readerTypeName, $resSetTypeName){}
	private function HandleSatelliteMissing(){}
	private static function GetManifestResourceNamesList($assembly){}
	private function HandleResourceStreamMissing($fileName){}
	/**
	 * @param \System\Resources\ResourceManager+ResourceManagerMediator $mediator
	 */
	public function __construct($mediator){}
}