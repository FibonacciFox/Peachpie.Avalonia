<?php
namespace System\IO\Enumeration;
/**
 */
class FileSystemEnumerableFactory extends \System\Object
{
	/**
	 * @param \System\String& $directory
	 * @param \System\String& $expression
	 * @param \System\IO\MatchType $matchType
	 * @return \System\Boolean
	 */
	protected static function NormalizeInputs($directory, $expression, $matchType){}
	/**
	 * @param \System\String|string $expression
	 * @param \System\ReadOnlySpan_1 $name
	 * @param \System\IO\EnumerationOptions $options
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MatchesPattern($expression, $name, $options){}
	/**
	 * @param \System\String|string $directory
	 * @param \System\String|string $expression
	 * @param \System\IO\EnumerationOptions $options
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	protected static function UserFiles($directory, $expression, $options){}
	/**
	 * @param \System\String|string $directory
	 * @param \System\String|string $expression
	 * @param \System\IO\EnumerationOptions $options
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	protected static function UserDirectories($directory, $expression, $options){}
	/**
	 * @param \System\String|string $directory
	 * @param \System\String|string $expression
	 * @param \System\IO\EnumerationOptions $options
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	protected static function UserEntries($directory, $expression, $options){}
	/**
	 * @param \System\String|string $directory
	 * @param \System\String|string $expression
	 * @param \System\IO\EnumerationOptions $options
	 * @param \System\Boolean $isNormalized
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	protected static function FileInfos($directory, $expression, $options, $isNormalized){}
	/**
	 * @param \System\String|string $directory
	 * @param \System\String|string $expression
	 * @param \System\IO\EnumerationOptions $options
	 * @param \System\Boolean $isNormalized
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	protected static function DirectoryInfos($directory, $expression, $options, $isNormalized){}
	/**
	 * @param \System\String|string $directory
	 * @param \System\String|string $expression
	 * @param \System\IO\EnumerationOptions $options
	 * @param \System\Boolean $isNormalized
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	protected static function FileSystemInfos($directory, $expression, $options, $isNormalized){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
