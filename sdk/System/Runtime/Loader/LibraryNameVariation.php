<?php
namespace System\Runtime\Loader;
/**
 */
class LibraryNameVariation extends \System\ValueType
{
	/**
	 * @var \System\String
	 * @field
	 */
	public $Prefix;
	/**
	 * @var \System\String
	 * @field
	 */
	public $Suffix;
	/**
	 * @param \System\String|string $libName
	 * @param \System\Boolean $isRelativePath
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	protected static function DetermineLibraryNameVariations($libName, $isRelativePath){}
}
