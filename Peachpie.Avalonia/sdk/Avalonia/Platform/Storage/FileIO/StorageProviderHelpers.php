<?php
namespace Avalonia\Platform\Storage\FileIO;
/**
 */
class StorageProviderHelpers extends \System\Object
{
	/**
	 * @param \System\String|string $path
	 * @return \Avalonia\Platform\Storage\IStorageItem
	 */
	public static function TryCreateBclStorageItem($path){}
	/**
	 * @param \System\String|string $path
	 * @return \System\Uri
	 */
	public static function FilePathToUri($path){}
	/**
	 * @param \System\String|string $path
	 * @param \System\Uri& $uri
	 * @return \System\Boolean
	 */
	public static function TryFilePathToUri($path, $uri){}
	/**
	 * @param \System\String|string $path
	 * @param \System\String|string $defaultExtension
	 * @param \Avalonia\Platform\Storage\FilePickerFileType $filter
	 * @return \System\String|string
	 */
	public static function NameWithExtension($path, $defaultExtension, $filter){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
