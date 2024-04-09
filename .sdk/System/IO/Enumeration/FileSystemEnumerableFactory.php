<?php
namespace System\IO\Enumeration;
class FileSystemEnumerableFactory extends \System\Object
{

	/**
	 * @param \System\String& $directory
	 * @param \System\String& $expression
	 * @param \System\IO\MatchType $matchType
	 * @return \System\Boolean|bool
	 */
	protected static function NormalizeInputs($directory, $expression, $matchType){}
	private static function MatchesPattern($expression, $name, $options){}
	/**
	 * @param \System\String|string $directory
	 * @param \System\String|string $expression
	 * @param \System\IO\EnumerationOptions $options
	 * @return \System\Collections\Generic\IEnumerable_1[System\String]
	 */
	protected static function UserFiles($directory, $expression, $options){}
	/**
	 * @param \System\String|string $directory
	 * @param \System\String|string $expression
	 * @param \System\IO\EnumerationOptions $options
	 * @return \System\Collections\Generic\IEnumerable_1[System\String]
	 */
	protected static function UserDirectories($directory, $expression, $options){}
	/**
	 * @param \System\String|string $directory
	 * @param \System\String|string $expression
	 * @param \System\IO\EnumerationOptions $options
	 * @return \System\Collections\Generic\IEnumerable_1[System\String]
	 */
	protected static function UserEntries($directory, $expression, $options){}
	/**
	 * @param \System\String|string $directory
	 * @param \System\String|string $expression
	 * @param \System\IO\EnumerationOptions $options
	 * @param \System\Boolean|bool $isNormalized
	 * @return \System\Collections\Generic\IEnumerable_1[System\IO\FileInfo]
	 */
	protected static function FileInfos($directory, $expression, $options, $isNormalized){}
	/**
	 * @param \System\String|string $directory
	 * @param \System\String|string $expression
	 * @param \System\IO\EnumerationOptions $options
	 * @param \System\Boolean|bool $isNormalized
	 * @return \System\Collections\Generic\IEnumerable_1[System\IO\DirectoryInfo]
	 */
	protected static function DirectoryInfos($directory, $expression, $options, $isNormalized){}
	/**
	 * @param \System\String|string $directory
	 * @param \System\String|string $expression
	 * @param \System\IO\EnumerationOptions $options
	 * @param \System\Boolean|bool $isNormalized
	 * @return \System\Collections\Generic\IEnumerable_1[System\IO\FileSystemInfo]
	 */
	protected static function FileSystemInfos($directory, $expression, $options, $isNormalized){}
}