<?php
namespace System\Resources;
final class FileBasedResourceGroveler extends \System\Object implements
	\System\Resources\IResourceGroveler
{

	/**
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Collections\Generic\Dictionary_2 $localResourceSets [generic: System\String,System\Resources\ResourceSet]
	 * @param \System\Boolean|bool $tryParents
	 * @param \System\Boolean|bool $createIfNotExists
	 * @return \System\Resources\ResourceSet
	 */
	public function GrovelForResourceSet($culture, $localResourceSets, $tryParents, $createIfNotExists){}
	private function FindResourceFile($culture, $fileName){}
	private function CreateResourceSet($file){}
	/**
	 * @param \System\Resources\ResourceManager+ResourceManagerMediator $mediator
	 */
	public function __construct($mediator){}
}