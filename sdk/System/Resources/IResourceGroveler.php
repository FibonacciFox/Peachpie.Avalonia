<?php
namespace System\Resources;
/**
 */
interface IResourceGroveler
{
	/**
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Collections\Generic\Dictionary_2 $localResourceSets
	 * @param \System\Boolean $tryParents
	 * @param \System\Boolean $createIfNotExists
	 */
	public function GrovelForResourceSet($culture, $localResourceSets, $tryParents, $createIfNotExists);
}
