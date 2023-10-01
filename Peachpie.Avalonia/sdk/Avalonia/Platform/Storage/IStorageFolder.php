<?php
namespace Avalonia\Platform\Storage;
/**
 */
interface IStorageFolder
{
	/**
	 */
	public function GetItemsAsync();
	/**
	 * @param \System\String|string $name
	 */
	public function CreateFileAsync($name);
	/**
	 * @param \System\String|string $name
	 */
	public function CreateFolderAsync($name);
}
