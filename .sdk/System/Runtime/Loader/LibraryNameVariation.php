<?php
namespace System\Runtime\Loader;
final class LibraryNameVariation extends \System\ValueType
{
	/**
	 * @field
	 * @var \System\String|string
	 */
	public $Prefix;
	/**
	 * @field
	 * @var \System\String|string
	 */
	public $Suffix;
	/**
	 * @param \System\String|string $libName
	 * @param \System\Boolean|bool $isRelativePath
	 * @return \System\Collections\Generic\IEnumerable_1[System\Runtime\Loader\LibraryNameVariation]
	 */
	protected static function DetermineLibraryNameVariations($libName, $isRelativePath){}
	/**
	 * @param \System\String|string $prefix
	 * @param \System\String|string $suffix
	 */
	public function __construct($prefix, $suffix){}
}