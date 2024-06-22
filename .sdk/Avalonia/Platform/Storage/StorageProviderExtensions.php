<?php
namespace Avalonia\Platform\Storage;
class StorageProviderExtensions extends \System\Object
{


	/**
	 * @param \Avalonia\Platform\Storage\IStorageProvider $provider
	 * @param \System\String|string $filePath
	 * @return \System\Threading\Tasks\Task_1[Avalonia\Platform\Storage\IStorageFile]
	 */
	public static function TryGetFileFromPathAsync($provider, $filePath){}
	/**
	 * @param \Avalonia\Platform\Storage\IStorageProvider $provider
	 * @param \System\String|string $folderPath
	 * @return \System\Threading\Tasks\Task_1[Avalonia\Platform\Storage\IStorageFolder]
	 */
	public static function TryGetFolderFromPathAsync($provider, $folderPath){}
	/**
	 * @param \Avalonia\Platform\Storage\IStorageItem $item
	 * @return \System\String|string
	 */
	public static function TryGetLocalPath($item){}
}