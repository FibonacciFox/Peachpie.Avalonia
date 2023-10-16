<?php
namespace System\Resources;
/**
 */
class FileBasedResourceGroveler extends \System\Object implements 
	\System\Resources\IResourceGroveler
{
	/**
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Collections\Generic\Dictionary_2 $localResourceSets
	 * @param \System\Boolean $tryParents
	 * @param \System\Boolean $createIfNotExists
	 * @return \System\Resources\ResourceSet
	 */
	public  function GrovelForResourceSet($culture, $localResourceSets, $tryParents, $createIfNotExists){}
	/**
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\String|string $fileName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FindResourceFile($culture, $fileName){}
	/**
	 * @param \System\String|string $file
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateResourceSet($file){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
