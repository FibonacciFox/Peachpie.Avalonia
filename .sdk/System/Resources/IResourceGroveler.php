<?php
namespace System\Resources;
interface IResourceGroveler
{


	/**
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Collections\Generic\Dictionary_2 $localResourceSets [generic: System\String,System\Resources\ResourceSet]
	 * @param \System\Boolean|bool $tryParents
	 * @param \System\Boolean|bool $createIfNotExists
	 * @return \System\Resources\ResourceSet
	 */
	public function GrovelForResourceSet($culture, $localResourceSets, $tryParents, $createIfNotExists);
}